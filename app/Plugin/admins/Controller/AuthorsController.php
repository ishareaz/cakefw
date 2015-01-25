<?php
/**
* 
*/
class AuthorsController extends AppController
{
	public function index()
	{
		$this->paginate= array(
			'limit' => 10,
			'order' => array('Author.id' => 'desc'),
			);
		$authors = $this->paginate('Author');
		$this->set('authors',$authors);
	}

	public function add()
	{
		if (!empty($this->data)) {
			$this->Author->create();
			$pathUpload = WWW_ROOT. 'img\upload\authors'.DS.$this->data['Author']['uploadimage']['name']; 
			$flagUpload = move_uploaded_file($this->data['Author']['uploadimage']['tmp_name'],$pathUpload);
			if ($flagUpload) {
				$this->Author->set(array(
				'image' => $this->data['Author']['uploadimage']['name'],
				));
			}else{
				$this->Author->set(array(
					'image' => 'no-photo.png',
					));
			}
			
			if ($this->Author->save($this->data)) {
				$this->redirect(fullBaseUrl.'/admins/authors');
			}
		}
	}

	public function edit($id=null)
	{
		if (!$id && empty($this->data)) {
			$this->redirect(array('action'=>'index'));
		} 
		if (empty($this->data)) {
			$this->data = $this->Author->read(null, $id);
		}else {
			$pathUpload = WWW_ROOT. 'img\upload\authors'.DS.$this->data['Author']['uploadimage']['name']; 
			$flagUpload = move_uploaded_file($this->data['Author']['uploadimage']['tmp_name'],$pathUpload);
			$this->Author->id = $id;
			if ($flagUpload) {
				$this->Author->set(array(
				'image' => $this->data['Author']['uploadimage']['name'],
				));
			}
			if($this->Author->save($this->data)) {
				$this->redirect(fullBaseUrl.'/admins/authors');
			}
		}
	}

	public function delete($id=null)
	{
		if ($this->request->is('post')) {
			$this->Author->id = $id;
			$this->Author->delete($id);
			$this->redirect(fullBaseUrl.'/admins/authors');
		}
		$author = $this->Author->find('first',array(
			'conditions' => array('Author.id' => $id)
			));
		$this->set('author',$author);
	}
	
}