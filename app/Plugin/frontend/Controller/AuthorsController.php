<?php
/**
* 
*/
class AuthorsController extends AppController
{
	public function beforeFilter() {
		parent::beforeFilter();
		$this->layout = 'detail_layout';
	}
	public function index($id=0)
	{
		$this->paginate= array(
			'limit' => 5,
			'order' =>'rand()',
			'conditions' => array('Book.author_id' => $id)
			);
		$books = $this->paginate('Book');		
		$this->set('books',$books);
		$authors=$this->Author->find('all',array(
			'fields' => array('Author.id', 'Author.name'),
			'recursive' => 0,
			'limit' => 16,
			'order' =>'rand()',
			'conditions' => array('Author.id !=' => $id)
			)
		);
		$this->set('authors',$authors);
		//$this->render('books/index');

	}
	

}
