<?php
/**
* 
*/
class HomesController extends AppController
{
	
	public function index()
	{
		//
		$newBooks = $this->Book->find("all",array(
			'limit'=>5,
			'order'=>'rand()'
			));
		$this->set('newBooks',$newBooks);
		//
		$voteBooks = $this->Book->find("all",array(
			'limit'=>5,
			'order'=>'rand()'
			));
		$this->set('voteBooks',$voteBooks);
		//
		$comingBooks = $this->Book->find("all",array(
			'limit'=>5,
			'order'=>'rand()'
			));
		$this->set('comingBooks',$comingBooks);
		//
		$readBooks = $this->Book->find("all",array(
			'limit'=>5,
			'order'=>'rand()'
			));
		$this->set('readBooks',$readBooks);
	}
	

}
