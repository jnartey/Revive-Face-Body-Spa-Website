<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';
	
	public function beforeFilter() {
	    parent::beforeFilter();
		
	    $this->Auth->allow();
		$this->loadModel('Banner');
		$this->loadModel('PageContent');
		$this->loadModel('Product');
		$this->loadModel('Category');
		$mobile_detect = false;
		
		if($this->RequestHandler->isMobile()) {
			$mobile_detect = true;
		}
		
		$download = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>50)));
		$phone = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>51)));
		$email = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>52)));
		$address = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>53)));
				
		$this->set(compact('mobile_detect', 'categories', 'download', 'phone', 'email', 'address'));
	}

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	
	public function index(){
		$title_for_layout = "Home";
		$this->set(compact('title_for_layout'));
	}
	
	public function about_us(){
		$title_for_layout = "About Us";
		$content = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>1)));
		$this->set(compact('title_for_layout', 'content'));
	}
	
	public function dermalogica_skin_treatment(){
		$title_for_layout = "Dermalogica skin treatment (Facials)";
		$content = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>2)));
		$this->set(compact('title_for_layout', 'content'));
	}
	
	public function microzone(){
		$title_for_layout = "Dermalogica MicroZone&reg; Treatments (Mini Facials)";
		$content = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>3)));
		$this->set(compact('title_for_layout', 'content'));
	}
	
	public function dtbt_treatments(){
		$title_for_layout = "Dermalogica Thermal body therapy treatments";
		$content = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>4)));
		$this->set(compact('title_for_layout', 'content'));
	}
	
	public function diamond_microdermabrasion(){
		$title_for_layout = "Diamond Microdermabrasion";
		$content = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>5)));
		$this->set(compact('title_for_layout', 'content'));
	}
	
	public function body_treatment(){
		$title_for_layout = "Body Treatment";
		$content = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>6)));
		$this->set(compact('title_for_layout', 'content'));
	}
	
	public function nails(){
		$title_for_layout = "Nails";
		$content = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>7)));
		$this->set(compact('title_for_layout', 'content'));
	}
	
	public function hair_removal(){
		$title_for_layout = "Hair Removal";
		$content = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>8)));
		$this->set(compact('title_for_layout', 'content'));
	}
	
	public function eye_treatment(){
		$title_for_layout = "Eye Treatment";
		$content = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>9)));
		$this->set(compact('title_for_layout', 'content'));
	}
	
	public function packages(){
		$title_for_layout = "Packages";
		$content = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>10)));
		$this->set(compact('title_for_layout', 'content'));
	}
	
	
	public function process(){

		$this->layout = 'blank';

		if(!empty($this->request->data)):
			
		$email = new CakeEmail('default');
		if(!empty($this->request->data['Contact']['name'])){
			$email->from(array($this->request->data['Contact']['email'] => $this->request->data['Contact']['name']));
		}else{
			$email->from(array($this->request->data['Contact']['email'] => $this->request->data['Contact']['phone']));
		}
		
		$email->to('info@rosesandliliesworld.com');
		$email->subject('Roses & Lilies');
		$email->replyTo($this->request->data['Contact']['email']);
		$email->sender('no-reply@rosesandliliesworld.com', 'Roses & Lilies');
		$email->emailFormat('html');
		$email->template('contact');
		$email->viewVars(array(
	                'name' => $this->request->data['Contact']['name'],
					'phone' => $this->request->data['Contact']['tel'],
	                'email' => $this->request->data['Contact']['email'],
					'message' => $this->request->data['Contact']['message']
				)
			);

			if($email->send()):
				echo '<div class="callout success">Thank you for contacting Roses & Lilies<a href="" class="close">&times;</a></div>';
			else:
            	echo '<div class="callout alert">email error<a href="" class="close">&times;</a></div>';
			endif;
    else:
         $this->flash('Form field cannot be empty<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
	endif;

	}
	
	public function newsletter(){

		$this->layout = 'blank';

		if(!empty($this->request->data)):
			
		$email = new CakeEmail('default');
		//$email->from(array($this->request->data['Contact']['email'] => $this->request->data['Contact']['name']));
		
		$email->to('info@megsignature.com');
		$email->subject('Meg\'s Signature Newsletter Subscriber');
		$email->replyTo($this->request->data['Newsletter']['email']);
		$email->sender('no-reply@megsignature.com', 'MiDA');
		$email->emailFormat('html');
		$email->template('newsletter');
		$email->viewVars(array(
	                'email' => $this->request->data['Newsletter']['email']
				)
			);

			if($email->send()):
				echo '<div class="callout success">Thank you for signing up for Meg\'s Signature newsletter</div>';
			else:
            	echo '<div class="callout alert">email error</div>';
			endif;
    else:
         $this->flash('Form field cannot be empty', 'default', array('class' => 'callout alert'));
	endif;

	}
	
	public function download($file_name = null) {
        $this->layout = 'blank';
		
		// if($this->Session->check('has_read_item.' . $id) == false) {
// 		    $this->PageContent->updateAll(array('PageContent.views'=>'PageContent.views+1'), array('PageContent.id'=>$id));
// 		    $this->Session->write('has_read_item.' . $id, true);
// 		}
		
		
		$file_dir = 'downloads';
		

        if(!$file_name) {
            $this->Session->setFlash('You have not specified a file to download');
            //$this->redirect(array('action' => 'index'));
        }

        $file = $file_name;

        if($file) {
		    $this->response->file(WWW_ROOT .'files' . DS . $file_dir . DS . $file);
		    $this->response->header('Content-Disposition', 'inline');
		    return $this->response;
        } else {
            $this->Session->setFlash('The file you are trying to view does not exist, please try again');
            //$this->redirect(array('action' => 'index'));
        }
    }
}
