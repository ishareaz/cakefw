<?php $this->Html->addCrumb('<strong>Các kết quả tìm kiếm cho : "'.$this->request->query['name'].'"</strong>');?>
<div class="search-header clearfix">
	<h3>Kết quả tìm kiếm cho '<?php echo $this->request->query['name'] ?>'</h3>
	<ul class="header-tabs clearfix">
		<li class="active">
			<a href="">Tất cả (<?php echo $countBooks ?>)</a>  
			<div class="arrow-active"></div>
		</li>
	</ul>                    
</div>
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