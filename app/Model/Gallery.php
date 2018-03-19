<?php
class Gallery extends AppModel {
    var $name = 'Gallery';
	var $validate = array(
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
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'gallery_id',
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
	
	public function beforeSave($options = array()) {
	        if (!empty($this->data[$this->alias]['name']) && empty($this->data[$this->alias]['slug'])) {
	            if (!empty($this->data[$this->alias][$this->primaryKey])) {
	                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['bane'], $this->data['Gallery'][$this->primaryKey]);
	            } else {
	                $this->data[$this->alias]['slug'] = $this->generateSlug($this->data[$this->alias]['name']);
	            }
	        }

	        return true;
	    }
}
?>