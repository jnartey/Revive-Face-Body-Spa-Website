<?php
class GalleriesController extends AppController {

	public $name = 'Galleries';
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->layout = 'admin';
	}
	
	public function admin_index() {
		$header = "Photo Gallery";
		$current_page = "All Galleries";
		$this->Gallery->recursive = 0;
		$this->set('galleries', $this->paginate());
		$this->set(compact('header', 'current_page'));
	}
	
	public function admin_view($id = null) {
		$header = "Photo Gallery";
		$current_page = "Gallery | ";
		
		$this->Gallery->id = $id;
		$this->loadModel('Image');
		
		if (!$this->Gallery->exists()) {
			throw new NotFoundException('Invalid Gallery');
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid Gallery<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			$this->redirect(array('action' => 'index'));
		}
		
		$this->set('gallery', $this->Gallery->read());
		
		//Collecting Images in current gallery
		$this->paginate = array('conditions'=>array('Image.gallery_id'=>$id),'order'=>array('Image.id DESC'), 'limit' => 24);
		$this->Image->recursive = 0;
		$images = $this->paginate('Image');
		
		$this->set(compact('header', 'current_page', 'images'));
	}

	public function admin_add() {
		$header = "Photo Gallery";
		$current_page = "Add Gallery";
		
		if ($this->request->is('post')) {
			if ($this->Gallery->save($this->request->data)) {
				$this->Session->setFlash($this->request->data['Gallery']['name'].' Gallery has been saved<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->request->data['Gallery']['name'].' Gallery could not be saved. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		}
		
		$this->set(compact('header', 'current_page'));
	}

	public function admin_edit($id = null) {
		$header = "Photo Gallery";
		$current_page = "Edit Gallery";
		$this->loadModel('PageContent');
		
		$this->Gallery->id = $id;
		
		if (!$this->Gallery->exists()) {
			throw new NotFoundException('Invalid Gallery');
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Gallery->save($this->request->data)) {
				$gallery = $this->Gallery->find('first', array('conditions'=>array('Gallery.id'=>$this->request->data['Gallery']['gallery_id'])));
				$album = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>$gallery['Gallery']['link_id'])));
				if($album){
					$this->PageContent->id = $album['PageContent']['id'];
					$this->PageContent->set('title', $this->request->data['Gallery']['name']);
				}

				$this->PageContent->save();
				
				$this->Session->setFlash($this->request->data['Gallery']['name'].' Gallery has been updated<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->request->data['Gallery']['name'].' Gallery could not be updated. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		} else {
			$this->request->data = $this->Gallery->read();
			$gallery = $this->Gallery->read();
		}
		
		$this->set(compact('header', 'current_page', 'gallery'));
	}

	public function admin_delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid id for Gallery<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Gallery->delete($id)) {
			$this->Session->setFlash('Gallery deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Gallery was not deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
		$this->redirect(array('action' => 'index'));
	}
}
?>