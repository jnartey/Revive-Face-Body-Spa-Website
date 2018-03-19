<?php
class PageContent extends AppModel {
    var $name = 'PageContent';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'page_image' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'profile_image' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'banner' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'icon' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'file' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'file_1' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'file_2' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'file_3' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'file_4' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'mp3' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    )
	);
	
	public function beforeSave($options = array()) {
	        if (!empty($this->data[$this->alias]['title']) && empty($this->data[$this->alias]['slug'])) {
	            if (!empty($this->data[$this->alias][$this->primaryKey])) {
	                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['bane'], $this->data['PageContent'][$this->primaryKey]);
	            } else {
	                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['title']);
	            }
	        }

	        return true;
	    }
	
	var $actsAs = array(
	    'MeioUpload.MeioUpload' => array(
	        'page_image' => array(
	            'dir' => 'img{DS}pages',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'large'  => array('width'=>1600, 'height'=>800, 'thumbnailQuality' => 100),
					'small'  => array('width'=>500, 'height'=>200, 'thumbnailQuality' => 100)
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        ),
	        'profile_image' => array(
	            'dir' => 'img{DS}pages',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'large'  => array('width'=>1600, 'height'=>600, 'thumbnailQuality' => 100),
					'small'  => array('width'=>130, 'height'=>130, 'thumbnailQuality' => 100)
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        ),
	        'banner' => array(
	            'dir' => 'img{DS}pages',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'large'  => array('width'=>1600, 'height'=>800, 'thumbnailQuality' => 100)
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        ),
	        'icon' => array(
	            'dir' => 'img{DS}pages',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'large'  => array('width'=>251, 'height'=>114, 'thumbnailQuality' => 100),
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        ),
			'file' => array(
	            'dir' => 'files{DS}downloads',
	            'create_directory' => false,
	            'allowedMime' => array('application/pdf', 'application/msword', 'application/mspowerpoint', 'application/excel', 'application/rtf', 'application/zip'),
				'allowedExt' => array('.pdf', '.doc', '.ppt', '.xls', '.rtf', '.zip'),
	            'zoomCrop' => false,  
	           	'thumbnails' => false,
	            'default' => 'default.jpg'
	        ),
	    )/*,
		'Sitemap.Sitemap' => array(
	        'primaryKey' => 'slug', //Default primary key field
	        'loc' => 'buildUrl', //Default function called that builds a url, passes parameters (Model $Model, $primaryKey)
	        'lastmod' => 'modified', //Default last modified field, can be set to FALSE if no field for this
	        'changefreq' => 'daily', //Default change frequency applied to all model items of this type, can be set to FALSE to pass no value
	        'priority' => '0.9', //Default priority applied to all model items of this type, can be set to FALSE to pass no value
	        'conditions' => array(), //Conditions to limit or control the returned results for the sitemap
	    )*/
	);
	
	function getContent($id=false) {
		return $this->find('all', array('conditions'=>array('PageContent.id' => $id)));
	}
	
	function getContentByTitle($title) {
		return $this->find('all', array('conditions'=>array('PageContent.title' => $title)));
	}
	
	function getContentCategory($id=false, $limit=0) {
		return $this->find('all', array('conditions'=>array('PageContent.category' => $id), 'limit'=>$limit));
	}
	
	function listSelectContents(){
		return $this->find('list', array('conditions'=>array('PageContent.category' => null), 'fields'=>array('PageContent.id', 'PageContent.title')));
	}
	
	function listSelectContent($id){
		return $this->find('list', array('conditions'=>array('PageContent.id' => $id), 'fields'=>array('PageContent.id', 'PageContent.title')));
	}
	
}
?>