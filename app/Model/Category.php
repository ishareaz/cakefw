<?php
App::uses('AppModel', 'Model');
class Category extends AppModel{
	public $actsAs = array('Tree');
	public $belongsTo = array(
        'ParentCat' => array(
            'className' => 'Category',
            'foreignKey' => 'parent_id',
            'dependent' => false,
        )
    );
    public $hasMany = array(
		'Book' => array(
			'className' => 'Book',
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
	
}