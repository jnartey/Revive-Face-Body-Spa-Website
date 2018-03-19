<?php
class NewsController extends AppController {

	public $name = 'News';
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->layout = 'admin';
	}
	
	public function admin_index() {
		$header = "News";
		$current_page = "All Lists";
		
		$this->paginate = array('conditions'=>array('News.category'=>null), 'order'=>array('News.timestamp' => 'DESC'), 'limit' => 10);
		$this->News->recursive = 0;
		$news = $this->paginate('News');
		
		$this->set(compact('header', 'current_page', 'news'));
	}
	
	public function admin_view($id = null) {
		$header = "News";
		$current_page = "Content | ";
		
		$this->News->id = $id;
		
		if (!$this->News->exists()) {
			throw new NotFoundException('Invalid');
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid <a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			$this->redirect(array('action' => 'index'));
		}
		
		$this->set('news', $this->News->read());
		
		$this->paginate = array('conditions' => array('News.category' => $id), 'order'=>array('News.news_date'=>'DESC'));
		$this->News->recursive = 0;
	    $news_data = $this->paginate('News');
		
		$news_parent = $this->News->getNews($id);
		
		$this->set(compact('header', 'current_page', 'news', 'news_parent', 'news_data'));
	}

	public function admin_add($id = null) {
		$header = "News";
		$current_page = "Add Content";
		$rev = null;
		$news_parent = false;
		
		$this->loadModel('Gallery');
		
		if ($this->request->is('post')) {
			
			//$this->request->data['News']['timestamp'] = strtotime($this->request->data['News']['timestamp']);
			
			if ($this->News->save($this->request->data)) {
				
					$this->Session->setFlash($this->request->data['News']['title'].' has been saved<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
					if($this->request->data['News']['cid']){
						$this->redirect(array('controller'=>'news', 'action'=>'view', $this->request->data['News']['cid'], 'admin'=>true));
					}else{
						$this->redirect(array('action' => 'index'));
					}
				
			} else {
				$this->Session->setFlash($this->request->data['News']['title'].' could not be saved. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		}
		
		if($id){
			$news_parent = $this->News->getNews($id);
			$news = $this->News->listSelectNews($id);
			$news_list = $this->News->find('list', array('conditions'=>array('News.category'=>null), 'fields'=>array('News.id', 'News.title')));
			$rev = $id;
		}
							
		$this->set(compact('header', 'current_page', 'news', 'news_parent', 'rev', 'news_list'));
	}
	

	public function admin_edit($id = null) {
		$header = "News";
		$current_page = "Edit Content";
		
		$this->loadModel('Gallery');
		
		$this->News->id = $id;
		$news_parent = $this->News->getNews($id);
		
		if (!$this->News->exists()) {
			throw new NotFoundException('Invalid News');
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
						
			if ($this->News->save($this->request->data)) {
					$this->Session->setFlash($this->request->data['News']['title'].' has been updated<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
					
					if($news_parent['News']['category']){
						$this->redirect(array('controller'=>'news', 'action'=>'view', $news_parent['News']['category'], 'admin'=>true));
					}else{
						$this->redirect(array('action' => 'index'));
					}
				
			} else {
				$this->Session->setFlash($this->request->data['News']['title'].' could not be updated. Please, try again.<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			}
		} else {
			$this->request->data = $this->News->read();
			$news = $this->News->read();
			$news_date = date('Y/m/d', strtotime($news['News']['news_date']));
		}
		
		$news_list = $this->News->find('list', array('conditions'=>array('News.category'=>null), 'fields'=>array('News.id', 'News.title')));
				
		$this->set(compact('header', 'current_page', 'news', 'news_parent', 'news_date', 'news_list'));
	}

	public function admin_delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		$this->loadModel('News');
		$data = $this->News->find('first', array('conditions'=>array('News.id'=>$id)));
		
		if (!$id) {
			$this->Session->setFlash('Invalid id for News<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
			$this->redirect(array('action'=>'index'));
		}
		
		if ($this->News->delete($id)) {
			$this->Session->setFlash($data['News']['title'].' deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
			if($data['News']['category']){
				$this->redirect(array('action'=>'view', $data['News']['category']));
			}else{
				$this->redirect(array('action'=>'index'));
			}
			
		}
		
		$this->Session->setFlash($data['News']['title'].' was not deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
		$this->redirect(array('action' => 'index'));
	}
	
	function admin_archive_news($id) {
		$this->loadModel('News');
		$data = $this->News->find('first', array('conditions'=>array('News.id'=>$id)));
		$this->News->id = $id;
		$this->News->saveField("archive", 1);               
		if($data['News']['category']){
			$this->redirect(array('action'=>'view', $data['News']['category']));
		}else{
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function admin_unarchive_news($id) {
		$this->loadModel('News');
		$data = $this->News->find('first', array('conditions'=>array('News.id'=>$id)));
		$this->News->id = $id;
		$this->News->saveField("archive", 0);               
		if($data['News']['category']){
			$this->redirect(array('action'=>'view', $data['News']['category']));
		}else{
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function admin_publish_news($id) {
		$this->loadModel('News');
		$data = $this->News->find('first', array('conditions'=>array('News.id'=>$id)));
		$this->News->id = $id;
		$this->News->saveField("publish", 1);               
		if($data['News']['category']){
			$this->redirect(array('action'=>'view', $data['News']['category']));
		}else{
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function admin_unpublish_news($id) {
		$this->loadModel('News');
		$data = $this->News->find('first', array('conditions'=>array('News.id'=>$id)));
		$this->News->id = $id;
		$this->News->saveField("publish", 0);               
		if($data['News']['category']){
			$this->redirect(array('action'=>'view', $data['News']['category']));
		}else{
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function admin_enable_comments($id) {
		$this->loadModel('News');
		$data = $this->News->find('first', array('conditions'=>array('News.id'=>$id)));
		$this->News->id = $id;
		
		$this->News->saveField("show_comment", 1); 
		 
		if($data['News']['category']){
			$this->redirect(array('action'=>'view', $data['News']['category']));
		}else{
			$this->redirect(array('action'=>'index'));
		}
        
	}
	
	function admin_disable_comments($id) {
		$this->loadModel('News');
		$data = $this->News->find('first', array('conditions'=>array('News.id'=>$id)));
		$this->News->id = $id;
		$this->News->saveField("show_comment", 0);    
		           
		if($data['News']['category']){
			$this->redirect(array('action'=>'view', $data['News']['category']));
		}else{
			$this->redirect(array('action'=>'index'));
		}
	}
}
?>