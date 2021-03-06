<?php
class ImagesController extends AppController {

	public $name = 'Images';
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->layout = 'admin';
	}
	
	public function admin_view($id = null) {
		
	}
	
	public function admin_add($id = null) {
		$header = "Photo Gallery";
		$current_page = " | Add Image(s)";
		$this->loadModel('Gallery');
		$gallery_id = $id;
		$this->Gallery->id = $id;
		$this->set('gallery', $this->Gallery->read());
		$this->set(compact('header', 'current_page', 'gallery_id'));
		
		// Upload Photos
		if (!empty($this->request->data)){
			if($this->request->is('post')) {		
				for ($i=0; $i < count($this->request->data['Image']['img_files']); $i++){

					$temp['Image']['img_file'] = $this->request->data['Image']['img_files'][$i];
					$temp['Image']['gallery_id'] = $this->request->data['Image']['gallery_id'];
										
					$this->Image->create();
					if(!$this->Image->save($temp['Image'])) {
						$this->Session->setFlash('Image(s) cannot be saved<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
						$this->redirect(array('controller'=>'galleries', 'action' => 'index', 'admin'=>true));
					} else {
						$this->Session->setFlash('Image(s) has been saved<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
					}
		        
				}
			}
		}
	}
	
	public function admin_edit($id = null, $g_id = null) {
		$header = "Photo Gallery";
		$current_page = " | Edit Image";
		$this->loadModel('Gallery');
		$gallery_id = $g_id;
		$this->Gallery->id = $g_id;
		$this->set('gallery', $this->Gallery->read());
		
		$this->Image->id = $id;
		
		if (!$this->Image->exists()) {
			throw new NotFoundException('Invalid Image');
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Image->save($this->request->data)) {
				$this->Session->setFlash($this->request->data['Image']['name'].' Image has been updated<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
				$this->redirect(array('controller'=>'galleries', 'action' => 'view', $g_id));
			} else {
				$this->Session->setFlash($this->request->data['Image']['name'].' Image could not be updated. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		} else {
			$this->request->data = $this->Image->read();
		}
		
		$image = $this->Image->read();
				
		$this->set(compact('header', 'current_page', 'image', 'gallery_id'));
	}
	
	public function admin_ajax_edit($id = null) {
		$this->layout = 'none';
		$this->Image->id = $id;
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Image->save($this->request->data);
		}
		
	}

	public function admin_delete($id = null, $g_id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid id for Image<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			$this->redirect(array('controller'=>'galleries', 'action'=>'index'));
		}
		if ($this->Image->delete($id)) {
			$this->Session->setFlash('Image deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
			$this->redirect($this->referer());
		}
		$this->Session->setFlash('Image was not deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
		$this->redirect(array('controller'=>'galleries', 'action' => 'index'));
	}
	
	public function admin_delete_selected() {
		$header = "Photo Gallery";
		$current_page = " | Delete Image(s)";
		if(!empty($this->request->data)) {
	        //If at lesst 1 check box is selected
	        if (isset($this->request->data) && !empty($this->request->data['image_id'])) {
	            $selectedReferences = $this->request->data['image_id'];

	            $flagReferenceAdded = false;
	            foreach ($selectedReferences as $singleReference) {
	                //NEW DELETE
					$record = $this->Image->find('first', array('conditions'=>array('Image.id'=>$singleReference)));
					$this->request->data['Image']['img_file'] = $record['Image']['img_file'];
	                $this->Image->id = $singleReference;
					$this->request->data['Image']['img_file']['remove'] = true;
	                $this->Image->delete();
	                //NEW DELETE
	            }
	            //After delete
	            $this->Session->setFlash('All selected images deleted <a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
	            $this->redirect($this->referer());
	        }      
	        else{
	            $this->Session->setFlash('Select atleast an image <a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
				$this->redirect($this->referer());
	        }  
		}
		
		$this->set(compact('header', 'current_page'));
	}
	
	function admin_set_default($g_id, $id) {
		
		if($this->Image->updateAll(array("Image.default_img" => 0), array('Image.gallery_id'=>$g_id))){
			$this->Image->id = $id;
			$this->Image->saveField("default_img", 1); 
		}
		$this->redirect($this->referer());         
	}
	
	function admin_feature($g_id, $id) {
		$this->Image->id = $id;
		$this->Image->saveField("feature", 1); 
		$this->redirect($this->referer());        
	}
	
	function admin_remove_feature($g_id, $id) {
		$this->Image->id = $id;
		$this->Image->saveField("feature", 0); 
		$this->redirect($this->referer());       
	}
	
	
}
?>