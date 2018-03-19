<?php
class ProductsController extends AppController {

	public $name = 'Products';
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->layout = 'admin';
	}
	
	public function admin_index() {
		$header = "Products";
		$current_page = "All Products";
		$this->loadModel('Gallery');
		$this->loadModel('Image');
		
		$this->paginate = array('conditions'=>array('Product.category'=>null), 'order'=>array('Product.id DESC'), 'limit' => 25);
		$this->Product->recursive = 0;
		$products = $this->paginate('Product');
		
		$this->set(compact('header', 'current_page', 'products'));
	}
	
	public function admin_view($id = null) {
		$header = "Products";
		$current_page = "Product | ";
		
		$this->Product->id = $id;
		
		if (!$this->Product->exists()) {
			throw new NotFoundException('Invalid Product');
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid Product<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			$this->redirect(array('action' => 'index'));
		}
		
		$this->set('product', $this->Product->read());
		
		$this->paginate = array('conditions' => array('Product.category' => $id), 'order'=>array('Product.id DESC'), 'limit' => 20);
		$this->Product->recursive = 0;
	    $products = $this->paginate('Product');
		
		$product_parent = $this->Product->getProduct($id);
		
		$this->set(compact('header', 'current_page', 'products', 'product_parent'));
	}

	public function admin_add($id = null) {		
		$header = "Product";
		$current_page = "Add Product";
		$rev = null;
		$parent = null;
		$product_parent = false;
		
		$this->loadModel('Banner');
		$this->loadModel('PageContent');
		$this->loadModel('Blog');
		$this->loadModel('News');
		$this->loadModel('Gallery');

		if ($this->request->is('post')) {
			if ($this->Product->save($this->request->data)) {
				
					$data = array('link_id' => $this->Product->getInsertID(), 
								'name' => $this->request->data['Product']['name']
							);
					$this->Gallery->save($data);
				
					$this->Session->setFlash($this->request->data['Product']['name'].' Product has been saved<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
					$this->redirect(array('action' => 'index'));
					
			} else {
				
				//if($this->request->data['Product']['name']){
					$this->Session->setFlash($this->request->data['Product']['name'].' Product could not be saved. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
					//}
				
				// if($this->request->data['Product']['product_vendor']){
// 					$this->Session->setFlash($this->request->data['Product']['product_vendor'].' Product could not be saved. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
// 				}
			}
		}
		
		if($id){
			$product_parent = $this->Product->getProduct($id);
			
			$query = $this->Product->find('first', array('conditions'=>array('Product.id' => $id)));
					
			if($query['Product']['category']){
				$product_cat = $this->Product->find('list', array('conditions'=>array('Product.category' => $query['Product']['category']), 'fields'=>array('Product.id', 'Product.name')));
			}else{
				$product_cat = $this->Product->listSelectProducts(null);
			}
			        	
			$rev = $id;
			$product_parent = $this->Product->getProduct($id);
			$parent = $this->Product->find('first', array('conditions'=>array('Product.id'=>$id)));
		}
		
		$categories = $this->Product->Category->generateTreeList(null, null, null, '--');
			
		$product_parent = false;
		$this->set(compact('header', 'current_page', 'product_cat', 'product_parent', 'rev', 'parent', 'categories'));
	}
	
	public function admin_add_image($id = null) {		
		$header = "Product";
		$current_page = "Add Product Image";
		$rev = null;
		$parent = null;
		$product_parent = false;
		
		$this->loadModel('Banner');
		$this->loadModel('PageContent');
		$this->loadModel('Blog');
		$this->loadModel('News');
		$this->loadModel('Gallery');
		
		if ($this->request->is('post')) {
			if ($this->Product->save($this->request->data)) {
				
					$this->Session->setFlash($this->request->data['Product']['name'].' Product has been saved<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));

					$this->redirect(array('action' => 'index'));
					
			} else {
					$this->Session->setFlash($this->request->data['Product']['name'].' Product could not be saved. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		}
		
		if($id){
			$product_parent = $this->Product->getProduct($id);
			
			$query = $this->Product->find('first', array('conditions'=>array('Product.id' => $id)));
					
			if($query['Product']['category']){
				$product_cat = $this->Product->find('list', array('conditions'=>array('Product.category' => $query['Product']['category']), 'fields'=>array('Product.id', 'Product.name')));
			}else{
				$product_cat = $this->Product->listSelectProducts(null);
			}
			        	
			$rev = $id;
			$product_parent = $this->Product->getProduct($id);
			$parent = $this->Product->find('first', array('conditions'=>array('Product.id'=>$id)));
		}
			
		//$product_parent = false;
		$this->set(compact('header', 'current_page', 'product_cat', 'product_parent', 'rev', 'parent'));
	}
	
	public function admin_edit($id = null) {
		$header = "Products";
		$current_page = "Edit Product";
		$parent = null;	
		$product = null;		
		$this->Product->id = $id;
		$product_parent = $this->Product->getProduct($id);
		
		$this->loadModel('Banner');
		$this->loadModel('PageContent');
		$this->loadModel('Blog');
		$this->loadModel('News');
		$this->loadModel('Gallery');
		
		if (!$this->Product->exists()) {
			throw new NotFoundException('Invalid Product');
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if(isset($this->request->data['Product']['remove_image']) && !empty($this->request->data['Product']['remove_image'])){
				$this->request->data['Product']['product_image']['remove'] = true;
			}
			
			if ($this->Product->save($this->request->data)) {
				
				$gallery = $this->Gallery->find('all', array('conditions'=>array('Gallery.link_id'=>$this->Product->id)));
				if($gallery){
					$this->Gallery->id = $gallery[0]['Gallery']['id'];
					$this->Gallery->set('name', $this->request->data['Product']['name']);
				}else{
					$this->Gallery->set('link_id', $this->Product->id);
					$this->Gallery->set('name', $this->request->data['Product']['name']);
				}

				$this->Gallery->save();

				$this->Session->setFlash($this->request->data['Product']['name'].' Product has been updated<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
				
				if($product_parent['Product']['category']){
					$this->redirect(array('controller'=>'products', 'action'=>'view', $product_parent[0]['Product']['category'], 'admin'=>true));
				}else{
					$this->redirect(array('action' => 'index'));
				}
				
			} else {
				$this->Session->setFlash($this->request->data['Product']['name'].' Product could not be updated. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		} else {
			$this->request->data = $this->Product->read();
			//$product = $this->Product->read();
			$products = $this->Product->listSelectProduct($id);
			if($product['Product']['category']){
				$parent = $this->Product->find('first', array('conditions'=>array('Product.id'=>$product['Product']['category'])));
			}
			
			$product = $this->Product->find('first', array('conditions'=>array('Product.id'=>$id)));
		}
		
		$categories = $this->Product->Category->generateTreeList(null, null, null, '--');
		
		$this->set(compact('header', 'current_page', 'product', 'product_parent', 'parent', 'categories'));
	}
	
	public function admin_edit_image($id = null) {
		$header = "Products";
		$current_page = "Edit Product";
		$parent = null;	
		$product = null;		
		$this->Product->id = $id;
		$product_parent = $this->Product->getProduct($id);
		
		$this->loadModel('Banner');
		$this->loadModel('PageContent');
		$this->loadModel('Blog');
		$this->loadModel('News');
		$this->loadModel('Gallery');
		
		if (!$this->Product->exists()) {
			throw new NotFoundException('Invalid Product');
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if(isset($this->request->data['Product']['remove_image']) && !empty($this->request->data['Product']['remove_image'])){
				$this->request->data['Product']['product_image']['remove'] = true;
			}
			
			if ($this->Product->save($this->request->data)) {

					$this->Session->setFlash($this->request->data['Product']['name'].' Product has been updated<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));

				if($product_parent[0]['Product']['category']){
					$this->redirect(array('controller'=>'products', 'action'=>'view', $product_parent[0]['Product']['category'], 'admin'=>true));
				}else{
					$this->redirect(array('action' => 'index'));
				}
				
			} else {
					$this->Session->setFlash($this->request->data['Product']['name'].' Product could not be updated. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		} else {
			$this->request->data = $this->Product->read();
			//$product = $this->Product->read();
			$products = $this->Product->listSelectProduct($id);
			if($product['Product']['category']){
				$parent = $this->Product->find('first', array('conditions'=>array('Product.id'=>$product['Product']['category'])));
			}
			
			$product = $this->Product->find('first', array('conditions'=>array('Product.id'=>$id)));
		}
		
		$this->set(compact('header', 'current_page', 'product', 'product_parent', 'parent'));
	}

	public function admin_delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid id for Product<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->delete($id)) {
			$this->Session->setFlash('Product deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Product was not deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
		$this->redirect(array('action' => 'index'));
	}
	
	function admin_activate($id) {
		if($this->Product->updateAll(array("Product.product_status" => 0))){
			$this->Product->id = $id;
			$this->Product->saveField("product_status", 1); 
		}
		 
		$this->redirect(array('action'=>'index'));
        
	}
	
	function admin_deactivate($id) {
		$this->Product->id = $id;
		$this->Product->saveField("product_status", 0);    
		           
		$this->redirect(array('action'=>'index'));
	}
}
?>