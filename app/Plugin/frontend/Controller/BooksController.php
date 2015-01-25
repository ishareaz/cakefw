<?php
/**
* 
*/
class BooksController extends AppController
{
	public function index($id=0)
	{
		$cat = $this->Category->find("first",array(
			//'fields' => array('Category.name'),
			'conditions' => array('Category.id' => $id),
			'recursive' => 0,
			));
		$this->set('cat',$cat);
		$cats = $this->Category->find("list",array(
			'fields' => array('Category.id'),
			'conditions' => array('Category.parent_id' => $id)
			));
		$cats[]=$id;
		$this->paginate= array(
			'limit' => 20,
			'order' =>'rand()',
			'conditions' => array('Book.category_id' => $cats,)
			);
		$books = $this->paginate('Book');		
		$this->set('books',$books);

	}

	public function detail($id=0)
	{
		$this->layout = 'detail_layout';
		$book=$this->Book->find('first',array(
			'conditions'=>array('Book.id'=>$id)
			)
		);
		$this->set('book',$book);
		$cat = $this->Category->find("first",array(
			//'fields' => array('Category.name'),
			'conditions' => array('Category.id' => $book['Book']['category_id']),
			'recursive' => 0,
			));
		$this->set('cat',$cat);
		$sameBooks=$this->Book->find('all',array(
			'limit'=>5,
			'conditions'=>array('Book.category_id'=>$book['Book']['category_id'],'Book.id !='=>$id)
			)
		);
		$this->set('sameBooks',$sameBooks);
		$authorBooks=$this->Book->find('all',array(
			'limit'=>5,
			'conditions'=>array('Book.author_id'=>$book['Book']['author_id'],'Book.id !='=>$id)
			)
		);
		$this->set('authorBooks',$authorBooks);
	}
	

}
