<?php
App::uses('AppModel', 'Model');
class Category extends AppModel {

////////////////////////////////////////////////////////////

    public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'image' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    )
    );

////////////////////////////////////////////////////////////

    public $actsAs = array(
        'Tree',
	    'MeioUpload.MeioUpload' => array(
			'image' => array(
	            'dir' => 'img{DS}categories',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'small'  => array('width'=>80, 'height'=>80),
					'large'	 => array('width'=>1440, 'height'=>500)
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        )
	    ),
		'Sitemap.Sitemap' => array(
	        'primaryKey' => 'slug', //Default primary key field
	        'loc' => 'buildUrlC', //Default function called that builds a url, passes parameters (Model $Model, $primaryKey)
	        'lastmod' => 'modified', //Default last modified field, can be set to FALSE if no field for this
	        'changefreq' => 'daily', //Default change frequency applied to all model items of this type, can be set to FALSE to pass no value
	        'priority' => '0.9', //Default priority applied to all model items of this type, can be set to FALSE to pass no value
	        'conditions' => array(), //Conditions to limit or control the returned results for the sitemap
	    )
    );

////////////////////////////////////////////////////////////

    public $belongsTo = array(
        'ParentCategory' => array(
            'className' => 'Category',
            'foreignKey' => 'parent_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

////////////////////////////////////////////////////////////

    public $hasMany = array(
        'ChildCategory' => array(
            'className' => 'Category',
            'foreignKey' => 'parent_id',
            'dependent' => false
        ),
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'category_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

////////////////////////////////////////////////////////////

public function beforeSave($options = array()) {
        if (!empty($this->data[$this->alias]['name']) && empty($this->data[$this->alias]['slug'])) {
            if (!empty($this->data[$this->alias][$this->primaryKey])) {
                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['bane'], $this->data['Category'][$this->primaryKey]);
            } else {
                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['name']);
            }
        }

        return true;
    }

}
