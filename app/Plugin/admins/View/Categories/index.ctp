
<h2 class="text-center">Quản lý Danh Mục</h2>

<div class="row">

	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-md-offset-1">

		<h3>
			<a class="btn btn-primary" href="<?php echo fullBaseUrl ?>/admins/categories/add/">Thêm mới</a>
		</h3>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('name','Danh Mục'); ?></th>
					<th>Mô tả</th>
					<th>Danh Mục Cha</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php foreach ($categories as $category) :?>
					<tr>
						<td><?php echo $category['Category']['name']?></td>
						<td><?php echo $category['Category']['description']?></td>
						<td><?php echo $category['ParentCat']['name']?></td>
						<td>
							<a class="btn btn-xs btn-primary" href="<?php echo fullBaseUrl ?>/admins/categories/edit/<?php echo $category['Category']['id']?>">Edit</a>
							<a class="btn btn-xs btn-danger" href="<?php echo fullBaseUrl ?>/admins/categories/delete/<?php echo $category['Category']['id']?>">Delete</a>
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
