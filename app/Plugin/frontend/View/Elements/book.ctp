<li class="b-category__grid-item b-product-item item" style="margin-bottom: 20px; height:300px">
	<a class="b-product-item__link" href="<?php echo $this->Convert->creatLink('detail',$book)?>">                        
		<div class="product-image b-product-item__image">
			<span class="b-product-item__image-wrap">
				<img width="135" height="189" style="display: inline;" class="lazy" src="<?php echo fullBaseUrl.'/img/upload/books/'.$book['Book']['image'] ?>" alt="" title="<?php echo $book['Book']['name'] ?>">
			</span>
		</div>
		<h2 class="product-name b-product-item__name" title="Bộ Sách Bài Tập Lớp 5">
			<?php 
				echo $this->Text->truncate($book['Book']['name'],25,array(
					'ellipsis' => '...',
					'exact' => false
					)
				);
				?>		
		</h2>

	</a>
	<p class="book-author b-product-item__book-author"><a title="" href="<?php echo $this->Convert->creatLinkAuthor('author',$book)?>"><?php echo $book['Author']['name']?></a></p>
	<p class="cover-books b-product-item__book-cover"><?php echo $book['Book']['covertype']?></p> 
	<div class="price-box">
		<div class="price-block">           
			<span class="special-price">
				<span class="price" id="product-price-125802"><?php echo number_format($book['Book']['price'])?>&nbsp;₫</span>
			</span>	
		</div> 
	</div>
</li>