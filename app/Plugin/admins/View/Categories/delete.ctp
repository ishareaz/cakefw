<h2 class="text-center">Bạn có chắc chắn muốn xóa Danh Mục :<i class='text-primary'><?php echo $category['Category']['name']?></i></h2>
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
		<?php
		echo $this->Form->create('Category',array(
			'class' => 'form-horizontal'
			)
		);
		?>
		<?php 
		echo $this->Form->input('Submit',array(
			'div' => false,
			'type' => 'button',
			'class' => 'btn btn-danger',
			'between' => '<div class="col-md-4 col-md-offset-3 pull-left">',
			'after' => '</div>',
			'label' => false
			));

		echo $this->Form->end();
		?>
		<a href="<?php echo fullBaseUrl.'/admins/categories' ?>" class="btn btn-primary">Cancel</a>
	</div>
</div>