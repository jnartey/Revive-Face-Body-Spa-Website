<?php
class PageContentsController extends AppController {

	public $name = 'PageContents';
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->layout = 'admin';
	}
	
	public function admin_index() {
		$header = "Pages";
		$current_page = "All Pages";
		
		$this->paginate = array('conditions'=>array('OR'=>array('PageContent.category'=>null)), 'order'=>array('PageContent.id DESC'), 'limit' => 15);
		$this->PageContent->recursive = 0;
		$pages = $this->paginate('PageContent');
		
		$this->set(compact('header', 'current_page', 'pages'));
	}
	
	public function admin_view($id = null, $set = null) {
		$header = "Pages";
		$current_page = "Content | ";
		
		$this->PageContent->id = $id;
		
		if (!$this->PageContent->exists()) {
			throw new NotFoundException('Invalid Page');
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid Page<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			$this->redirect(array('action' => 'index'));
		}
		
		$this->set('page', $this->PageContent->read());
		
		$this->paginate = array('conditions' => array('PageContent.category' => $id), 'order'=>array('PageContent.id DESC'), 'limit' => 20);
		$this->PageContent->recursive = 0;
	    $pages = $this->paginate('PageContent');
		
		$page_parent = $this->PageContent->getContent($id);
		
		$this->set(compact('header', 'current_page', 'pages', 'page_parent', 'set'));
	}

	public function admin_add($id = null, $set = null) {
		
		$this->loadModel('Gallery');
		
		$header = "Pages";
		$current_page = "Add Page";
		$rev = null;
		$parent = null;
		$page_parent = false;
		
		if ($this->request->is('post')) {
			if ($this->PageContent->save($this->request->data)) {
				
				$this->Session->setFlash($this->request->data['PageContent']['title'].' Page has been saved<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
					if($this->request->data['PageContent']['cid']){
						$this->redirect(array('controller'=>'pageContents', 'action'=>'view', $this->request->data['PageContent']['cid'], 'admin'=>true));
					}else{
						$this->redirect(array('action' => 'index'));
					}
				
			} else {
				$this->Session->setFlash($this->request->data['PageContent']['title'].' Page could not be saved. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		}
		
		if($id){
			$page_parent = $this->PageContent->getContent($id);
        	//$page = $this->PageContent->listSelectContent($id);
			$rev = $id;
			
			$page_parent = $this->PageContent->getContent($id);
			
			$parent = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>$id)));
		
		}
		
		$this->set(compact('header', 'current_page', 'page', 'page_parent', 'rev', 'gallery', 'parent', 'project_category', 'set'));
	}
	
	public function admin_add_album($id = null) {		
		$header = "Pages";
		$current_page = "Add Album";
		$rev = null;
		$parent = null;
		$page_parent = false;
		
		$this->loadModel('PageContent');
		$this->loadModel('Gallery');

		if ($this->request->is('post')) {
			if ($this->PageContent->save($this->request->data)) {
					$data = array('link_id' => $this->PageContent->getInsertID(), 
								'name' => $this->request->data['PageContent']['title']
							);
					$this->Gallery->save($data);
				
					$this->Session->setFlash($this->request->data['PageContent']['title'].' Album has been saved<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
					
					if($this->request->data['PageContent']['cid']){
						$this->redirect(array('controller'=>'pageContents', 'action'=>'view', $this->request->data['PageContent']['cid'], 'admin'=>true));
					}else{
						$this->redirect(array('action' => 'index'));
					}
					
			} else {
				$this->Session->setFlash($this->request->data['PageContent']['title'].' Album could not be saved. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		}
		
		if($id){
			$page_parent = $this->PageContent->getContent($id);
        	//$page = $this->PageContent->listSelectContent($id);
			$rev = $id;
			
			$page_parent = $this->PageContent->getContent($id);
			
			$parent = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>$id)));
		
		}
		
		$this->set(compact('header', 'current_page', 'page', 'page_parent', 'rev', 'gallery', 'parent', 'project_category', 'set'));
	}
	

	public function admin_edit($id = null, $set = null) {
		$header = "Pages";
		$current_page = "Edit Page";
		$parent = null;			
		$this->PageContent->id = $id;
		$page_parent = $this->PageContent->getContent($id);
		$parent_node = null;
		
		$this->loadModel('Gallery');
		
		if (!$this->PageContent->exists()) {
			throw new NotFoundException('Invalid Page');
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
			/*if(isset($this->request->data['PageContent']['remove_image']) && !empty($this->request->data['PageContent']['remove_image'])){
				$this->request->data['PageContent']['page_image']['remove'] = true;
			}*/
			
			if ($this->PageContent->save($this->request->data)) {
				
				$this->Session->setFlash($this->request->data['PageContent']['title'].' Page has been updated<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
				if($page_parent[0]['PageContent']['category']){
					$this->redirect(array('controller'=>'pageContents', 'action'=>'view', $page_parent[0]['PageContent']['category'], 'admin'=>true));
				}else{
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash($this->request->data['PageContent']['title'].' Page could not be updated. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		} else {
			$this->request->data = $this->PageContent->read();
			$page = $this->PageContent->read();
			if($page['PageContent']['category']){
				$parent = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>$page['PageContent']['category'])));
			}
		}
		
		if($page['PageContent']['category']){
			$parent_node = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>$page['PageContent']['category'])));
		}else{
			$parent_node = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>$page['PageContent']['id'])));
		}
		
		$this->set(compact('header', 'current_page', 'page', 'page_parent', 'gallery', 'parent', 'project_category', 'parent_node', 'set'));
	}
	
	public function admin_edit_album($id = null, $gallery_id = null) {
		$header = "Pages";
		$current_page = "Edit Album";
		$parent = null;	
		$this->PageContent->id = $id;
		$page_parent = $this->PageContent->getContent($id);
		
		$this->loadModel('PageContent');
		$this->loadModel('Gallery');
		
		if (!$this->PageContent->exists()) {
			throw new NotFoundException('Invalid Album');
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if ($this->PageContent->save($this->request->data)) {
				
				$gallery = $this->Gallery->find('first', array('conditions'=>array('Gallery.link_id'=>$this->PageContent->id)));
				if($gallery){
					$this->Gallery->id = $gallery['Gallery']['id'];
					$this->Gallery->set('name', $this->request->data['PageContent']['title']);
				}else{
					$this->Gallery->set('link_id', $this->PageContent->id);
					$this->Gallery->set('name', $this->request->data['PageContent']['title']);
				}

				$this->Gallery->save();

				$this->Session->setFlash($this->request->data['PageContent']['title'].' Album has been updated<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
				
				if($page_parent[0]['PageContent']['category']){
					$this->redirect(array('controller'=>'pageContents', 'action'=>'view', $page_parent[0]['PageContent']['category'], 'admin'=>true));
				}else{
					$this->redirect(array('action' => 'index'));
				}
				
			} else {
				$this->Session->setFlash($this->request->data['PageContent']['title'].' Album could not be updated. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		} else {
			$this->request->data = $this->PageContent->read();
			$page = $this->PageContent->read();
			if($page['PageContent']['category']){
				$parent = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>$page['PageContent']['category'])));
			}
		}
				
		$this->set(compact('header', 'current_page', 'page', 'page_parent', 'gallery', 'parent', 'project_category', 'parent_node', 'set'));
	}
	

	public function admin_delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid id for Page<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PageContent->delete($id)) {
			$this->Session->setFlash('Page deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Page was not deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
		$this->redirect(array('action' => 'index'));
	}
	
	function admin_set_default($c_id, $id) {
		if($this->PageContent->updateAll(array("PageContent.default" => 0), array('PageContent.category'=>$c_id))){
			$this->PageContent->id = $id;
			$this->PageContent->saveField("default", 1); 
		}
		$this->redirect(array('controller'=>'pageContents', 'action' => 'view', $c_id));         
	}
	
	function admin_featured($c_id, $id) {
		//if($this->PageContent->updateAll(array("PageContent.featured" => 0))){
		$this->PageContent->id = $id;
		$this->PageContent->saveField("feature", 1); 
			//}
		 
		$this->redirect(array('controller'=>'pageContents', 'action' => 'view', $c_id));    
        
	}
	
	function admin_featured_clear($c_id, $id) {
		//if($this->PageContent->updateAll(array("PageContent.featured" => 0))){
		$this->PageContent->id = $id;
		$this->PageContent->saveField("feature", 0); 
			//}
		 
		$this->redirect(array('controller'=>'pageContents', 'action' => 'view', $c_id));    
        
	}
}
?>