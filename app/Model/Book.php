<?php
App::uses('AppModel', 'Model');
class Book extends AppModel{
	public $belongsTo = array(
        'Author' => array(
            'className' => 'Author',
            'foreignKey' => 'author_id'
        ),
        'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'category_id'
        )
    );
    /*public $belongsTo = array(
        'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'category_id'
        )
    );*/
	
}