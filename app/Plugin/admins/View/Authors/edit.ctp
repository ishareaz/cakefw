<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
		<?php
		echo $this->Form->create('Author',array(
			'type' => 'file',
			'class' => 'form-horizontal'
			)
		);
		?>
		<fieldset>
			<legend class="text-center">Sửa Thông Tin Tác giả</legend>
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
			echo $this->Form->input('description',array(
				'div' => 'form-group',
				'label' => array(
					'class' => 'control-label col-md-2'
					),
				'class' => 'form-control',
				'between' => '<div class="col-md-10">',
				'after' => '</div>'
				));
			echo $this->Form->input('uploadimage',array(
				'type' => 'file',
				'div' => 'form-group',
				'label' => array(
					'class' => 'control-label col-md-2'
					),
				'class' => 'form-control',

				'between' => '<img class="col-md-3" src="'.$this->webroot.'img/upload/authors/'.$this->data['Author']['image'].'" alt="" ><div class="col-md-6">',
				'after' => '</div>'
				)
			);
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
			)
		);

		echo $this->Form->end();
		?>
		<a href="<?php echo fullBaseUrl.'/admins/authors' ?>" class="btn btn-primary">Cancel</a>
	</div>