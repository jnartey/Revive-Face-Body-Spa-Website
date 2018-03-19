<?php
App::uses('AppController', 'Controller');
class CategoriesController extends AppController {
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->layout = 'admin';
	}

////////////////////////////////////////////////////////////

    public function index() {
        $this->helpers[] = 'Tree';
        $categories = $this->Category->find('all', array(
            'recursive' => -1,
            'order' => array(
                'Category.lft' => 'ASC'
            ),
            'conditions' => array(
            ),
        ));
        $this->set(compact('categories'));
    }

////////////////////////////////////////////////////////////

    public function view($slug = null) {
        $category = $this->Category->find('first', array(
            'recursive' => -1,
            'conditions' => array(
                'Category.slug' => $slug
            )
        ));
        if(empty($category)) {
            return $this->redirect(array('action' => 'index'));
        }
        $this->set(compact('category'));

        // $parent = $this->Category->getParentNode($category['Category']['id']);
        // debug($parent);

        $parents = $this->Category->getPath($category['Category']['id']);
        // debug($parents);
        $this->set(compact('parents'));

         // $totalChildren = $this->Category->childCount($category['Category']['id']);
         // debug($totalChildren);

        $directChildren = $this->Category->children($category['Category']['id']);
        // debug($directChildren);

        $directChildrenIds = Hash::extract($directChildren, '{n}.Category.id');
        array_push($directChildrenIds, $category['Category']['id']);

        //debug($parents);

        $products = $this->Category->Product->find('all', array(
            'recursive' => -1,
            'conditions' => array(
                'Product.category_id' => $directChildrenIds
            ),
            'order' => array(
                'Product.name' => 'ASC'
            ),
            'limit' => 50
        ));
        $this->set(compact('products'));
    }

////////////////////////////////////////////////////////////

    public function admin_index() {
		$current_page = "All Categories";
        $this->Paginator = $this->Components->load('Paginator');
        $this->Paginator->settings = array(
            'Category' => array(
                'recursive' => 0,
            )
        );
        $this->set('categories', $this->Paginator->paginate());

        $this->helpers[] = 'Tree';
        $categoriestree = $this->Category->find('all', array(
            'recursive' => -1,
            'order' => array(
                'Category.lft' => 'ASC'
            ),
            'conditions' => array(
            ),
        ));
        $this->set(compact('categoriestree', 'current_page'));
    }

////////////////////////////////////////////////////////////

    public function admin_view($id = null) {
		$current_page = "View Category";
        if (!$this->Category->exists($id)) {
            throw new NotFoundException('Invalid category');
        }
        $category = $this->Category->find('first', array(
            'contain' => array(
                'ParentCategory'
            ),
            'conditions' => array(
                'Category.id' => $id
            )
        ));
        $categoriestree = $this->Category->find('all', array(
            'recursive' => -1,
            'order' => array(
                'Category.lft' => 'ASC'
            ),
            'conditions' => array(
            ),
        ));
        $this->set(compact('category', 'categoriestree', 'current_page'));
    }

////////////////////////////////////////////////////////////

    public function admin_add() {
		$current_page = "Add Category";
        if ($this->request->is('post')) {
            $this->Category->create();
            if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash('The category has been saved <a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
                return $this->redirect(array('action' => 'index'));
            } else {
				$this->Session->setFlash('The category could not be saved. Please, try again. <a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
            }
        }

        $parents = $this->Category->generateTreeList(null, null, null, ' -- ');
        $this->helpers[] = 'Tree';
        $categoriestree = $this->Category->find('all', array(
            'recursive' => -1,
            'order' => array(
                'Category.lft' => 'ASC'
            ),
            'conditions' => array(
            ),
        ));
        $this->set(compact('parents', 'current_page', 'categoriestree'));
    }

////////////////////////////////////////////////////////////

    public function admin_edit($id = null) {
		$current_page = "Edit Category";
        if (!$this->Category->exists($id)) {
            throw new NotFoundException('Invalid category');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash('The category has been saved <a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
                return $this->redirect(array('action' => 'index'));
            } else {
				$this->Session->setFlash('The category could not be saved. Please, try again. <a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
            }
        } else {
            $this->request->data = $this->Category->find('first', array('conditions' => array('Category.id' => $id)));
        }

        $parents = $this->Category->generateTreeList(null, null, null, ' -- ');
        $this->helpers[] = 'Tree';
        $categoriestree = $this->Category->find('all', array(
            'recursive' => -1,
            'order' => array(
                'Category.lft' => 'ASC'
            ),
            'conditions' => array(
            ),
        ));
		
		$category = $this->Category->find('first', array('conditions'=>array('Category.id'=>$id)));
		
        $this->set(compact('parents', 'current_page', 'categoriestree', 'category'));
    }

////////////////////////////////////////////////////////////

    public function admin_delete($id = null) {
        $this->Category->id = $id;
        if (!$this->Category->exists()) {
            throw new NotFoundException('Invalid category');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Category->delete()) {
			$this->Session->setFlash('Category deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box success'));
            return $this->redirect(array('action' => 'index'));
        }
		$this->Session->setFlash('Category was not deleted<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
        return $this->redirect(array('action' => 'index'));
    }

////////////////////////////////////////////////////////////

}
