<?php
class Image extends AppModel {
    var $name = 'Image';
	var $validate = array(
		'gallery_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Gallery' => array(
			'className' => 'Gallery',
			'foreignKey' => 'gallery_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public function beforeSave($options = array()) {
	        if (!empty($this->data[$this->alias]['name']) && empty($this->data[$this->alias]['slug'])) {
	            if (!empty($this->data[$this->alias][$this->primaryKey])) {
	                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['bane'], $this->data['Image'][$this->primaryKey]);
	            } else {
	                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['name']);
	            }
	        }

	        return true;
	    }
	
	var $actsAs = array(
	    'MeioUpload.MeioUpload' => array(
	        'img_file' => array(
	            'dir' => 'img{DS}photogallery',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'small'  => array('width'=>360, 'height'=>270, 'thumbnailQuality' => 100, 'zoomCrop' => true),
					'large'  => array('width'=>800, 'height'=>600)
				),
				'thumbnailQuality' => 80, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        )
	    )
	);
	
}

?>