<?php
class News extends AppModel {
    var $name = 'News';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Event title is required',
				'allowEmpty' => false,
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
	    ),
		'image_1' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'image_2' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'image_3' => array(
	        'Empty' => array(
	            'check' => false
	        ),
	        'InvalidExt' => array(
	            'message' => "This file extension isn't allowed."
	        )
	    ),
		'image_4' => array(
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
		'file' => array(
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
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	public function beforeSave($options = array()) {
	        if (!empty($this->data[$this->alias]['title']) && empty($this->data[$this->alias]['slug'])) {
	            if (!empty($this->data[$this->alias][$this->primaryKey])) {
	                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['bane'], $this->data['News'][$this->primaryKey]);
	            } else {
	                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['title']);
	            }
	        }

	        return true;
	    }
	
	var $actsAs = array(
	    'MeioUpload.MeioUpload' => array(
	        'image' => array(
	            'dir' => 'img{DS}news',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'large'  => array('width'=>1440, 'height'=>700),
					'small'  => array('width'=>200, 'height'=>200, 'thumbnailQuality' => 100)
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        ),
	        'image' => array(
	            'dir' => 'img{DS}news',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'large'  => array('width'=>1440, 'height'=>700),
					'small'  => array('width'=>200, 'height'=>200, 'thumbnailQuality' => 100)
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        ),
	        'image_1' => array(
	            'dir' => 'img{DS}news',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'large'  => array('width'=>1440, 'height'=>700),
					'small'  => array('width'=>200, 'height'=>200, 'thumbnailQuality' => 100)
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        ),
	        'image_2' => array(
	            'dir' => 'img{DS}news',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'large'  => array('width'=>1440, 'height'=>700),
					'small'  => array('width'=>200, 'height'=>200, 'thumbnailQuality' => 100)
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        ),
	        'image_3' => array(
	            'dir' => 'img{DS}news',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'large'  => array('width'=>1440, 'height'=>700),
					'small'  => array('width'=>200, 'height'=>200, 'thumbnailQuality' => 100)
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        ),
	        'image_4' => array(
	            'dir' => 'img{DS}news',
	            'create_directory' => false,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'zoomCrop' => false,  
	           	'thumbnails' => true ,
				'thumbsizes' => array(
					'large'  => array('width'=>1440, 'height'=>700),
					'small'  => array('width'=>200, 'height'=>200, 'thumbnailQuality' => 100)
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
					'large'  => array('width'=>1680, 'height'=>248, 'thumbnailQuality' => 100, 'zoomCrop' => true)
				),
				'thumbnailQuality' => 100, 
				'thumbnailDir' => 'thumb',
				'removeOriginal' => true,
	            'default' => 'default.jpg'
	        ),
			'file' => array(
	            'dir' => 'files{DS}news',
	            'create_directory' => false,
	            'allowedMime' => array('application/pdf', 'application/msword', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/excel', 'application/rtf', 'application/zip', 'application/msword', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.wordprocessingml.template', 'application/vnd.ms-excel', 'application/vnd.ms-excel', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.ms-powerpoint', 'application/vnd.ms-powerpoint', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.openxmlformats-officedocument.presentationml.template', 'application/vnd.openxmlformats-officedocument.presentationml.slideshow', 'application/vnd.ms-powerpoint.addin.macroEnabled.12', 'application/vnd.ms-powerpoint.presentation.macroEnabled.12', 'application/vnd.ms-powerpoint.template.macroEnabled.12', 'application/vnd.ms-powerpoint.slideshow.macroEnabled.12'),
                  'allowedExt' => array('.pdf', '.doc', '.dot', '.docx', '.dotx', 'xls', 'xlt', 'xla', 'ppt', 'pot', 'pps', 'ppa', 'pptx', 'potx', 'ppsx', 'ppam', 'pptm', 'potm', 'ppsm'),
	            'zoomCrop' => false,  
	           	'thumbnails' => false
	        ),
			'mp3' => array(
	            'dir' => 'files{DS}media',
	            'create_directory' => false,
	            'allowedMime' => array('audio/mpeg3', 'audio/x-mpeg-3', 'video/mpeg', 'video/x-mpeg', 'audio/mpeg', 'video/mpeg'),
				'allowedExt' => array('.mp3', '.mpa'),
	            'zoomCrop' => false,  
	           	'thumbnails' => false,
	            'default' => 'default.jpg'
	        )
	    )	/*,
			'Sitemap.Sitemap' => array(
		        'primaryKey' => 'id', //Default primary key field
		        'loc' => 'buildUrl', //Default function called that builds a url, passes parameters (Model $Model, $primaryKey)
		        'lastmod' => 'modified', //Default last modified field, can be set to FALSE if no field for this
		        'changefreq' => 'daily', //Default change frequency applied to all model items of this type, can be set to FALSE to pass no value
		        'priority' => '0.9', //Default priority applied to all model items of this type, can be set to FALSE to pass no value
		        'conditions' => array(), //Conditions to limit or control the returned results for the sitemap
		    )*/
	);
	
	function listNews($limit=0) {
		return $this->find('all', array('conditions'=>array('News.publish' => 1, 'News.archive'=>0), 'order'=>array('News.id DESC'), 'order'=>array('News.id DESC'), 'limit'=>$limit));
	}
	
	function getNews($id){
		return $this->find('first', array('conditions'=>array('News.id' => $id)));
	}
	
	function getNewsCategory($id=false, $limit=0) {
		return $this->find('all', array('conditions'=>array('News.category' => $id), 'limit'=>$limit));
	}
	
	function getLatestNews(){
		return $this->find('first', array('conditions'=>array('News.publish' => 1, 'archive'=>0), 'order'=>array('News.id DESC')));
	}
	
	function listSelectNews($id){
		return $this->find('list', array('conditions'=>array('News.id' => $id), 'fields'=>array('News.id', 'News.title')));
	}
	
}
?>