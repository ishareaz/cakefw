<?php $this->Html->addCrumb('Category');?>
<div class="category-head">
	<h1>Thể loại</h1>
</div>
<div class="danh-sach-the-loai-main">
	<?php $i=0; foreach ($categories as $key => $category) :
	if ($key%3==0) {
		$i = $key+2;
		echo '<ul class="danh-sach-the-loai clearfix">';
	} 
	?>
	<li class="ten-the-loai">
		<a href="<?php echo $this->Convert->creatLinkCategory('category',$category)?>">
			<?php echo $category['Category']['name'] ?>
		</a>
		<?php if ($category['children']) :?>	
			<ul>
				<?php foreach ($category['children'] as $cat_child) : ?>
					<li class="ten-the-loai-sub">
						<a href="<?php echo $this->Convert->creatLinkCategory('category',$cat_child)?>">
							<?php echo $cat_child['Category']['name'] ?>	
						</a>
					</li>
				<?php endforeach ?>
			</ul>
		<?php endif ?>
	</li>	
	<?php if ($key==$i) {echo '</ul>';} endforeach ?>
	
</div>                            
