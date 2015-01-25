<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
		<?php
		echo $this->Form->create('Book',array(
			'class' => 'form-horizontal',
			'type' => 'file'
			));
			?>
			<fieldset>
				<legend class="text-center">Thêm mới sáchh</legend>
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
				echo $this->Form->input('author_id',array(
					'type'=>'select',
					'options'=>$list_authors,
					'empty'=>'--Choose Author--',
					'div' => 'form-group',
					'label' => array(
						'class' => 'control-label col-md-2'
						),
					'class' => 'form-control',
					'between' => '<div class="col-md-10">',
					'after' => '</div>'
					)); 
				echo $this->Form->input('category_id',array(
					'type'=>'select',
					'options'=>$list_cats,
					'empty'=>'--Choose Category--',
					'div' => 'form-group',
					'label' => array(
						'class' => 'control-label col-md-2'
						),
					'class' => 'form-control',
					'between' => '<div class="col-md-10">',
					'after' => '</div>'
					));    
				echo $this->Form->input('covertype',array(
					'type'=>'select',
					'options'=>array('Bìa Mềm'=>'Bìa Mềm','Bìa Cứng'=>'Bìa Cứng'),
					'empty'=>'--Choose Kiểu Bìa--',
					'div' => 'form-group',
					'label' => array(
						'class' => 'control-label col-md-2'
						),
					'class' => 'form-control',
					'between' => '<div class="col-md-10">',
					'after' => '</div>'
					));
				echo $this->Form->input('price',array(
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
					
					'between' => '<div class="col-md-6">',
					'after' => '</div>'
					));

					?>

				</fieldset>
				<?php 
				echo $this->Form->input('Submit',array(
					'div' => 'form-group ',
					'type' => 'button',
					'class' => 'btn btn-primary',
					'between' => '<div class="col-md-offset-4">',
					'after' => '</div>',
					'label' => false
					));

				echo $this->Form->end();
				?>
			</div>