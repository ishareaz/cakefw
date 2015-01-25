<h2 class="text-center">Bạn có chắc chắn muốn xóa Sách :<i class='text-primary'><?php echo $book['Book']['name']?></i></h2>
<div class="row">
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php
echo $this->Form->create('Category',array(
	'class' => 'form-horizontal'
	));
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
	<a href="<?php echo fullBaseUrl.'/admins/books' ?>" class="btn btn-primary">Cancel</a>
</div>