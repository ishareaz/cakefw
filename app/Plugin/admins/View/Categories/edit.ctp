<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  col-md-offset-3">
		<?php
		echo $this->Form->create('Category',array(
			'class' => 'form-horizontal'
			));
			?>
			<fieldset>
				<legend class="text-center">Chỉnh sửa Danh Mục</legend>
				<?php
				echo $this->Form->input('name',array(
					'div' => 'form-group',
					'label' => array(
						'class' => 'control-label col-md-2'
						),
					'class' => 'form-control',
					'between' => '<div class="col-md-10">',
					'after' => '</div>'
					));
				echo $this->Form->input('parent_id',array(
					'type'=>'select',
					'options'=>$list_cats,
					'empty'=>'--Choose parent--',
					'div' => 'form-group',
					'label' => array(
						'class' => 'control-label col-md-2'
						),
					'class' => 'form-control',
					'between' => '<div class="col-md-10">',
					'after' => '</div>'
					));        
				echo $this->Form->input('description',array(
					'div' => 'form-group',
					'label' => array(
						'class' => 'control-label col-md-2'
						),
					'class' => 'form-control',
					'between' => '<div class="col-md-10">',
					'after' => '</div>'
					));
					?>
				</fieldset>
				<?php 
				echo $this->Form->input('Submit',array(
					'div' => false,
					'type' => 'button',
					'class' => 'btn btn-primary',
					'between' => '<div class="col-md-4 col-md-offset-3 pull-left">',
					'after' => '</div>',
					'label' => false
					));

				echo $this->Form->end();
				?>
				<a href="<?php echo fullBaseUrl.'/admins/categories' ?>" class="btn btn-primary">Cancel</a>
			</div>