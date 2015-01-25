<?php $this->Html->addCrumb('Category', '/categories');?>
<?php if ($cat['ParentCat']['name']) {$this->Html->addCrumb($cat['ParentCat']['name'], '/category'.$this->Convert->creatLinkCrumb($cat['ParentCat']));} ?>
<?php $this->Html->addCrumb($cat['Category']['name']);?>
<?php if (count($books)>0){echo $this->element('sorter');} ?>
<div class="listing-type-grid catalog-listing b-category__grid">
	<ul class="grid-row b-category__grid-row odd">
		<?php 
		if (count($books)>0) 
		{
			foreach ($books as $book) {
				echo $this->element('book',array('book'=>$book));
			}
		}
		else
		{
			echo $this->element('notfound');
		} 
		?>	
	</ul>
</div>
<?php echo $this->element('paging');?>
