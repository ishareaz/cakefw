<div class="product-add-more b-product-silder b-category-slider new">
	<div class="clearfix b-product-slider__box feature-box">
		<div class="feature-head-home b-main__category__content-tab b-product-slider__title-box clearfix">
			<h2 itemslidereponsive="4" itemslide="5" limit="50" for="new_1421477111952" data="block=categorytools%2Fnew&amp;pageSize=5&amp;maxLength=35&amp;id=316&amp;imgWidth=130&amp;imgHeight=182&amp;productPage=0&amp;src=&amp;product_ids=" reference="" class="feature-title slider_data b-product-silder__title-name">
				<a href=""><?php echo $distribute ?></a>
			</h2>
			<span><a class="see-all" href="">Xem tất cả</a></span>
		</div>

		<div class="b-product-silder__content b-main__category__content-tab-item">
			<span class="b-product-silder__next i-next b-main__category__content__next">
				<i class="fa fa-chevron-right tk-i__next "></i>
			</span>
			<span style="display: none;" class="b-product-silder__prev i-prev b-main__category__content__prev">
				<i class="fa fa-chevron-left tk-i__prev "></i>
			</span>

			<ul id="new_1421477111952" class="b-product-silder__list clearfix b-main__category__content-item-list rectange">
				<?php foreach ($books as $book) :?>
					<li class="b-main__category__content-item-detail b-product-silder__item item-1">
						<a class="b-product-silder__item-link b-main__category__content-item-link" href="<?php echo $this->Convert->creatLink('detail',$book)?>"> 
							<span class="b-main__category__content-item-img-wrap">
								<img class="130-182 b-main__category__content-item-img b-product-silder__item-img img-responsive" title="<?php echo $book['Book']['name'] ?>" alt="<?php echo $book['Book']['name'] ?>" src="<?php echo fullBaseUrl.'/img/upload/books/'.$book['Book']['image'] ?>">
								<span title="" class="gift" data-original-title="&lt;br /&gt;- Khi mua ĐH Sách từ 300k được tặng 01 sản phẩm quà tặng trong list"></span>			
							</span>
							<div class="b-product-silder__item-name b-main__category__content-item-name">
								<span title="<?php echo $book['Book']['name'] ?>">
									<?php 
									echo $this->Text->truncate($book['Book']['name'],25,array(
										'ellipsis' => '...',
										'exact' => false
										)
									);
									?>
								</span>
							</div>
						</a>
						<div class="b-product-silder__author b-main__category__content-author author">
							<span class="author__name"><a href="<?php echo $this->Convert->creatLinkAuthor('author',$book)?>" title=""><?php echo $book['Author']['name']?></a></span>
						</div>
						<div class="b-main__category__content-price b-price">
							<span class="b-main__category__content-price-main b-price__main">
								<?php echo number_format($book['Book']['price'])?>&nbsp;₫
							</span>
						</div>		
					</li>
				<?php endforeach?>
			</ul>
		</div>
	</div>
</div>