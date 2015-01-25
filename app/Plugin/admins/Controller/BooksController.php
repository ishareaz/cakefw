<?php
/**
* 
*/
class BooksController extends AppController
{	
	public function index()
	{
		$this->paginate= array(
			'limit' => 10,
			'order' => array('Book.id' => 'desc'),
			);
		$books = $this->paginate('Book');
		$this->set('books',$books);
	}
	public function edit($id)
	{
		if (!$id && empty($this->data)) {
			$this->redirect(array('action'=>'index'));
		}  
		if (empty($this->data)) {
			$this->data = $this->Book->read(null, $id);
		}else {
			$pathUpload = WWW_ROOT. 'img\upload\books'.DS.$this->data['Book']['uploadimage']['name']; 
			$flagUpload = move_uploaded_file($this->data['Book']['uploadimage']['tmp_name'],$pathUpload);
			$this->Book->id = $id;
			if ($flagUpload) {
				$this->Book->set(array(
					'image' => $this->data['Book']['uploadimage']['name'],
					));
			}
			if($this->Book->save($this->request->data)) {
				$this->redirect(fullBaseUrl.'/admins/books');
			}
		}

		$list_authors = $this->Author->find("list");
		$this->set('list_authors',$list_authors);
		$list_cats = $this->Category->generateTreeList();
		$this->set('list_cats',$list_cats);
	}

	public function add()
	{
		if (!empty($this->data)) {
			$pathUpload = WWW_ROOT.'img\upload\books'.DS.$this->data['Book']['uploadimage']['name']; 
			$flagUpload = move_uploaded_file($this->data['Book']['uploadimage']['tmp_name'],$pathUpload);
			if ($flagUpload) {
				$this->Book->set(array(
					'image' => $this->data['Book']['uploadimage']['name'],
					));
			} else{
				$this->Book->set(array(
					'image' => 'no-photo.png',
					));
			}
			if ($this->Book->save($this->data)) {
				$this->redirect(fullBaseUrl.'/admins/books');
			}
		}
		$list_authors = $this->Author->find('list');
		$this->set('list_authors',$list_authors);
		$list_cats = $this->Category->generateTreeList();
		$this->set('list_cats',$list_cats);
	}

	public function delete($id=null)
	{
		if ($this->request->is('post')) {
			$this->Book->id = $id;
			$this->Book->delete($id);
			$this->redirect(fullBaseUrl.'/admins/books');
		}
		$book = $this->Book->find('first',array(
			'conditions' => array('Book.id' => $id)
			));
		$this->set('book',$book);
	}

	public function searchAjax()
	{
		$this->autoRender = false;	
		$nameTxt = $this->request->data['name'];
		$books = $this->Book->find('all',array(
			'fields' => array('Book.id','Book.name','Book.covertype','Book.price','Book.description','Book.image','Category.name','Author.name'),
			'limit' => 5,
			'order' => array('Book.name' => 'desc'),
			'conditions' => array(
				'Book.name LIKE' => '%'.$nameTxt.'%',
				),
			));

		$html='';
		foreach ($books as $book) {
			$html.= '<tr>';
			$html.=	'<td style="max-width:200px">'.$book['Book']['name'].'</td>';
			$html.=	'<td>'.$book['Author']['name'].'</td>';
			$html.=	'<td>'.$book['Category']['name'].'</td>';
			$html.=	'<td>'.$book['Book']['covertype'].'</td>';
			$html.=	'<td>'.number_format($book['Book']['price']).'</td>';
			$html.=	'<td>'.$book['Book']['description'].'</td>';
			$html.=	'<td><img src="'.$this->webroot.'img/upload/books/'.$book['Book']['image'].'" alt="" width=100px height=50px;></td>';
			$html.=	'<td>';
			$html.=	'<a class="btn btn-xs btn-primary" href="'.fullBaseUrl.'/admins/books/edit/'.$book['Book']['id'].'">Edit</a>';
			$html.=	'<a class="btn btn-xs btn-danger" href="'.fullBaseUrl.'/admins/books/delete/'.$book['Book']['id'].'">Delete</a>';
			$html.=	'</td>';
			$html.= '</tr>';
		}
		if ($html=='') {
			$html='<tr><td colspan="8" rowspan=""><h3 class="text-center">không có kết quả nào</h3></td></tr>';
		}
		echo json_encode($html);
	}
}
