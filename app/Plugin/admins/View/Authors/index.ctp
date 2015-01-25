<div class="row">
	<h2 class="text-center">Quản lý Tác giả</h2>
	<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-md-offset-3">

		<h3>
			<a class="btn btn-primary" href="<?php echo fullBaseUrl ?>/admins/authors/add/">Thêm mới</a>
		</h3>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('name','Tác giả'); ?></th>
					<th>Mô tả</th>
					<th>Ảnh</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php foreach ($authors as $author) :?>
					<tr>
						<td><?php echo $author['Author']['name']?></td>
						<td><?php echo $author['Author']['description']?></td>
						<td><img src="<?php echo $this->webroot.'img/upload/authors/'.$author['Author']['image']?>" alt="" width=100px height=50px;></td>
						<td>
							<a class="btn btn-xs btn-primary" href="<?php echo fullBaseUrl ?>/admins/authors/edit/<?php echo $author['Author']['id']?>">Edit</a>
							<a class="btn btn-xs btn-danger" href="<?php echo fullBaseUrl ?>/admins/authors/delete/<?php echo $author['Author']['id']?>">Delete</a>
						</td>
					</tr>
				<?php endforeach;?>

			</tbody>
		</table>
		<?php		
			echo $this->Paginator->prev('« prev', null, null, array('class' => 'disabled'));
			echo " | ".$this->Paginator->numbers()." | "; 
			echo $this->Paginator->next('next »', null, null, array('class' => 'disabled')); 
			echo " Page ".$this->Paginator->counter(); 
		?>
	</div>
</div>



