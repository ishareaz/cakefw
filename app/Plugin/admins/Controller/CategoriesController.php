<?php
/**
* 
*/
//App::uses('AppController', 'Controller');
class CategoriesController extends AppController
{

	public function index()
	{
		$this->paginate= array(
			'limit' => 20,
			'order' => array('Category.id' => 'desc'),
			);
		$categories = $this->paginate('Category');
		$this->set("categories",$categories);
	}

	public function add()
	{
		if (!empty($this->data)) {
			$this->Category->create();
			if ($this->Category->save($this->data)) {
				$this->redirect(fullBaseUrl.'/admins/categories');
			}
		}
		$list_cats = $this->Category->generateTreeList();
		$this->set('list_cats',$list_cats);
	}

	function edit($id=null){
		if (!$id && empty($this->data)) {
			$this->redirect(fullBaseUrl.'/admins/categories');
		}             
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
		}
		else {
			$this->Category->id = $id;
			if($this->Category->save($this->data)) {
				$this->redirect(fullBaseUrl.'/admins/categories');
			}
		}
		$list_cats = $this->Category->generateTreeList();
		$this->set('list_cats',$list_cats);
	}

	public function delete($id=null)
	{
		if ($this->request->is('post')) {
			$this->Category->id = $id;
			$this->Category->delete($id);
			$this->redirect(fullBaseUrl.'/admins/categories');
		}
		$category = $this->Category->find('first',array(
			'conditions' => array('Category.id' => $id)
			));
		$this->set('category',$category);
	}
	
}