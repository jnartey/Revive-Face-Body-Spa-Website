<?php
class Product extends AppModel {
    var $name = 'Product';
	var $validate = array(
		'product_logo' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'product_image' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
	);
	
    public $belongsTo = array(
        'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'category_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        )
    );
	
	var $actsAs = array(
	    'MeioUpload.MeioUpload' => array(
			'product_image' => array(
	            'dir' => 'img{DS}products',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'small'  => array('width'=>284, 'height'=>365, 'thumbnailQuality' => 100, 'zoomCrop' => true),
					'large'  => array('width'=>800, 'height'=>600)
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        )
	    ),
		'Sitemap.Sitemap' => array(
	        'primaryKey' => 'slug', //Default primary key field
	        'loc' => 'buildUrlP', //Default function called that builds a url, passes parameters (Model $Model, $primaryKey)
	        'lastmod' => 'modified', //Default last modified field, can be set to FALSE if no field for this
	        'changefreq' => 'daily', //Default change frequency applied to all model items of this type, can be set to FALSE to pass no value
	        'priority' => '0.9', //Default priority applied to all model items of this type, can be set to FALSE to pass no value
	        'conditions' => array(), //Conditions to limit or control the returned results for the sitemap
	    )
	);
	
	public function beforeSave($options = array()) {
	        if (!empty($this->data[$this->alias]['name']) && empty($this->data[$this->alias]['slug'])) {
	            if (!empty($this->data[$this->alias][$this->primaryKey])) {
	                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['bane'], $this->data['Product'][$this->primaryKey]);
	            } else {
	                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['name']);
	            }
	        }

	        return true;
	    }
	
	function getProduct($id=false) {
		return $this->find('first', array('conditions'=>array('Product.id' => $id)));
	}
	
	function getProductByName($title) {
		return $this->find('all', array('conditions'=>array('Product.title' => $title)));
	}
	
	function getProductCategory($id=false, $limit=0) {
		return $this->find('all', array('conditions'=>array('Product.category' => $id), 'limit'=>$limit));
	}
	
	function listSelectProducts($id){
		return $this->find('list', array('conditions'=>array('Product.category' => $id), 'fields'=>array('Product.id', 'Product.name')));
	}
	
	function listSelectProduct($id){
		return $this->find('list', array('conditions'=>array('Product.id' => $id), 'fields'=>array('Product.id', 'Product.name')));
	}
	
    public function updateViews($products) {

        if(!isset($products[0])) {
            $a = $products;
            unset($products);
            $products[0] = $a;
        }

        $this->unbindModel(
            array('belongsTo' => array('Category'))
        );

        $productIds = Set::extract('/Product/id', $products);

        $this->updateAll(
            array(
                'Product.views' => 'Product.views + 1',
            ),
            array('Product.id' => $productIds)
        );


    }
	
}
?>