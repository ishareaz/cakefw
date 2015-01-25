<?php
/**
* 
*/
class SearchController extends AppController
{
	
	public function index()
	{
		$dataSearch=$this->request->query;
		$conditions = array();
		if ($dataSearch['cat']) {			
			$conditions['Category.parent_id'] = $dataSearch['cat'];
		}
		$cats = $this->Category->find("list",array(
			'fields' => array('Category.id'),
			'conditions' => $conditions,
			));
		$cats[]=$dataSearch['cat'];
		$this->paginate= array(
			'limit' => 20,
			'order' =>'rand()',
			'conditions' => array(
				'Book.Category_id' => $cats,
				'Book.name LIKE' => '%'.$dataSearch['name'].'%',
				),
			);
		$books = $this->paginate('Book');
		$countBooks = $this->Book->find("count",array(
			'conditions' => array(
				'Book.Category_id' => $cats,
				'Book.name LIKE' => '%'.$dataSearch['name'].'%',
				),
			));	
		$this->set('books',$books);
		$this->set('countBooks',$countBooks);
	}
	

}
