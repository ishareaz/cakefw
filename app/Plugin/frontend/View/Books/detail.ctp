<?php $this->Html->addCrumb('Category', '/categories');?>
<?php if ($cat['ParentCat']['name']) {$this->Html->addCrumb($cat['ParentCat']['name'], '/category'.$this->Convert->creatLinkCrumb($cat['ParentCat']));} ?>
<?php $this->Html->addCrumb($cat['Category']['name'],'/category'.$this->Convert->creatLinkCrumb($cat['Category']));?>
<?php $this->Html->addCrumb($book['Book']['name']);?>
<div class="middle-container">
	<ul class="breadcrumbs">
		<?php  echo $this->Html->getCrumbs(' / ', 'Trang chủ'); ?>
	</ul>
	<div class="middle col-1-layout">
		<div class="b-layout b-layout_full">
			<div role="main" class="col-main b-content" id="main">
				<div class="product-box">						
					<div class="item-info-box row">
						<div class="item-image col-md-5 cleafix epub">
							<div class="MagicToolboxContainer selectorsLeft clearfix">  			  	
								<div class="item-main-image MagicToolboxMainContainer clearfix epub-img">              	    			
									<a href="" id="viewbookbtn"></a>                 	    	   
									<img title="<?php echo $book['Book']['name'] ?>" alt="" src="<?php echo fullBaseUrl.'/img/upload/books/'.$book['Book']['image']?>" itemprop="image">		
									<div class="fb-like facebook-like fb_iframe_widget">
										<span style="vertical-align: bottom; width:300px;height:28px;">
											<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fominext&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;" allowTransparency="true"></iframe>
										</span>
									</div>         

									<div class="google-plus">          
										<div style="text-indent: 0px; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px;" id="___plusone_0">
											<iframe width="100%" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" id="I0_1421640128727" name="I0_1421640128727" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;annotation=bubble&amp;size=medium&amp;hl=vi&amp;origin=http%3A%2F%2Ftiki.vn&amp;url=http%3A%2F%2Ftiki.vn%2Fsunrise-binh-minh-tap-3-series-tan-tro-p126298.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.b-DndMOApC8.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAGLTcCMd7hiEtABNyPqP0CkXw52BBEgQ-A#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1421640128727&amp;parent=http%3A%2F%2Ftiki.vn&amp;pfname=&amp;rpctoken=39487843" data-gapiattached="true" title="+1"></iframe>
										</div>      
									</div>                 
									<div class="sendBox">             
										<a href="" title="Chia sẻ qua email" class="sendfriendBtn not_login" id="">
											<img src="http://tikicdn.com/skin/frontend/default/tiki/images/icons/icon_send_mail.png" alt="Chia sẻ qua email">
										</a>                  
									</div>  
								</div>    
							</div>  <!-- End magiczoomplus --> 
						</div>
						<!-- Info Book -->
						<div class="item-info-detail col-md-7">
							<h1 itemprop="name" class="item-name">
								<?php echo $book['Book']['name'] ?>
							</h1>
							<div class="item-box clearfix">
								<div class="item-box-left left">
									<div class="clearfix brand-box">
										<ul class="brand-list">
											<li>
												Tác giả : 
												<a href="<?php echo $this->Convert->creatLinkAuthor('author',$book)?>">
													<b><?php echo $book['Author']['name'] ?></b>
												</a>
											</li>
											<li><em><?php echo $book['Book']['covertype'] ?></em></li>	
										</ul>
									</div>
									<div class="price-box" itemtype="">
										<p class="special-price2">
											<span class="price-label">Giá:</span>
											<span class="price" itemprop="price">
												<?php echo number_format($book['Book']['price']) ?>&nbsp;₫
											</span>
											<span class="vat-price">(Đã có VAT)</span>

										</p>
									</div>
								</div>
								<div class="item-box-right left">
									<div class="item-review-social clearfix ratings">
										<div class="item-review-info">
											<div class="rating-box">
												<div style="width:100%" class="rating"></div>
												<a title=" đánh giá" href="#reviewShowArea">(<span content="" itemprop="ratingCount"><?php echo rand(0,50) ?></span> đánh giá)
												</a>
											</div>
										</div>
										<div class="item-review-now">
											<a class="writereview_small" href="">
												Viết nhận xét để nhận xu				
											</a>
										</div>
									</div>
									<div class="item-benefit">
										<p>Đổi trả trong vòng 15 ngày</p>
									</div>			
								</div>
							</div>

							<div class="clearfix promotion-new-box">
								<div class="promotion-title">
									<h2>Thông tin &amp; Khuyến mãi</h2>
								</div>
								<div class="item-new-promotion no-freegift">
									<ul>
										<li>
											Với mỗi <span style="color: #ff0000;"><strong>100.000đ</strong></span> trong đơn hàng, quý khách được tặng <span style="color: #ff0000;"><strong>300</strong></span> Tiki Xu.<a class="show-freegift" title="Xem chi tiết khuyến mãi" href="">Chi tiết</a>

										</li>

										<li>Đăng ký <a href="">dịch vụ BookCare</a> để được bọc plastic đến 99% sách tại BookStore.vn</li>

										<li>
											<p class="province-list-text1">Nhận hàng tại </p>
											<select name="select-prov" id="select-prov">
												<option value="4 - 5 ngày">Hà Nội</option>
												<option value="2 - 3 ngày">Hồ Chí Minh</option>
											</select>
											<p class="province-list-text2">
												từ <strong class="number-day">2 - 3 ngày</strong>, không kể Thứ 7 &amp; CN.
											</p> 
										</li>
									</ul>			
								</div>
							</div>
							<div class="add-to-holder">
								<div class="item-select-box">
									<div style="padding-left:0;" class="step-box clearfix">
										<div class="step-lable">Số lượng:</div>
										<div style="margin:0" class="select-qty">
											<span class="bgArrowQty">
												<input type="text" value="1" class="tbQty qty-input">
												<span class="arrowBlock">
													<a class="upQty" href=""></a>
													<a class="downQty" href=""></a>
												</span>
											</span>
										</div>
										<div class="step-box-button clearfix">
											<button onclick="" class="left add-to-cart-new" type="button">
											</button>
											<button class="add-to-wl-new not_login" type="button">
												Thêm vào danh sách ưa thích
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Info Book -->
					</div>
				</div>
				<div class="product-content">
					<!-- Đề Mục -->
					<ul class="nav nav-tabs product-tabs sticky" style="visibility: visible;">
						<li class="active">
							<a href="#gioi-thieu">Giới Thiệu Sách<span class="active-arrow"></span></a>
						</li>
						<li class="">
							<a href="#chi-tiet">Thông Tin Chi Tiết <span class="active-arrow"></span></a>
						</li>
						<li class="">
							<a href="">Hỏi đáp<span class="active-arrow"></span></a>
						</li>
						<li class="">
							<a href="">Khách Hàng Nhận Xét (3) <span class="active-arrow"></span></a>
						</li>
					</ul>
					<!-- end Đề Mục -->
					<div class="tab-content product-tabs-detail">
						<!-- Giới Thiệu Sản Phẩm -->
						<section id="gioi-thieu" class="description-content clearfix">
							<div class="product-content-area">
								<div itemprop="description" class="product-description">
									<p style="text-align: justify;"><span style="color: #ff6600; font-size: medium;"><strong><?php echo $book['Book']['name'] ?></strong></span></p>
									<p style="text-align: justify;">Đã gần một năm trôi qua kể từ khi siêu núi lửa Yellowstone phun trào, làm xóa sổ gần như toàn bộ nhân loại và bề mặt Trái Đất. Giờ các cộng đồng người sống sót quay sang gây chiến và tấn công lẫn nhau …</p>
									<p style="text-align: justify;">Khi thấy trang trại nhà mình không còn an toàn và những người tự cho mình là người lớn không chịu chấp nhận đối mặt với hiện thực phũ phàng, Alex và Darla quyết định tự lập ra một cộng đồng riêng …</p>
									<p style="text-align: justify;">Tập cuối Bình Minh mang trái tim của Tàn Tro, sự kịch tính của Mùa Đông Xám, và nét sâu lắng riêng của mình: Nó đặt ra câu hỏi về trách nhiệm, lòng dũng cảm, sự khai hóa và xã hội.</p>
									<p style="text-align: justify;"><strong>Nhận định</strong></p>
									<p style="text-align: justify;"><span>“Một cuốn sách đầy mê hoặc. Fan của các cuốn sách viết về đề tài hậu tận thế như Đấu trường sinh tử (The Hunger Games) chắc chắn sẽ thích Tàn tro (Ashfall)<a class="hsogamehint">”</a> </span></p>
									<p style="text-align: justify;"><span><strong>(Cinda Williams Chima, tác giả của The Exiled Queen và The Warrior Heir)</strong></span></p>		
								</div>
							</div>
						</section>
						<!-- end //Giới Thiệu Sản Phẩm --> 			
						<!-- Thông Tin Chi Tiết -->
						<section class="additional-content">
							<h3 class="section-title">Thông Tin Chi Tiết</h3>
							<div id="chi-tiet" class="collateral-box attribute-specs">
								<table cellspacing="0" id="product-attribute-specs-table" class="table table-bordered table-detail table-striped">					<col width="25%">
									<tbody>
										<tr class="first odd">
											<td>Công ty phát hành</td>
											<td class="last"><a href="" title="Báo Sinh Viên VN - Hoa Học Trò" target="_blank">Báo Sinh Viên VN - Hoa Học Trò</a></td>
										</tr>
										<tr class="even">
											<td>Nhà xuất bản</td>
											<td class="last"><span>NXB Trẻ</span></td>
										</tr>
										<tr class="odd">
											<td>Trọng lượng vận chuyển</td>
											<td class="last"><span>420 g</span></td>
										</tr>
										<tr class="even">
											<td>Kích thước</td>
											<td class="last">15 x 24 cm</td>
										</tr>
										<tr class="odd">
											<td>Số trang</td>
											<td class="last"><span>368</span></td>
										</tr>
										<tr class="even">
											<td>Ngày xuất bản</td>
											<td class="last"><time>01/2015</time></td>
										</tr>
										<tr class="odd">
											<td>SKU</td>
											<td class="last"><span>8938506999462</span></td>
										</tr>
										<tr class="last even">
											<td>Danh mục</td>
											<td class="last">
												<a target="_blank" href="<?php echo fullBaseUrl.'/categories/'.$book['Category']['id'] ?>"><?php echo $book['Category']['name'] ?></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
						<!-- end //Thông Tin Chi Tiết -->
						<!-- Button : Mua hàng, thêm vào danh sách yêu thích, thông báo khi có hàng  -->
						<div class="action-repeat">
							<button type="button" class="add-to-cart-rp">Thêm vào giỏ hàng</button>
						</div>
						<!-- end //Button : Mua hàng, thêm vào danh sách yêu thích, thông báo khi có hàng  -->
						<div id="product_view_block_upsell"><div class="product-add-more b-product-silder upsell">
							<div class="clearfix b-product-slider__box feature-box">
								<div class="feature-head-home b-main__category__content-tab b-product-slider__title-box clearfix">
									<h2 class="feature-title slider_data b-product-silder__title-name">
										Có thể bạn quan tâm	    		
									</h2>
								</div>

								<div class="b-product-silder__content b-main__category__content-tab-item">
									<ul class="b-product-silder__list clearfix b-main__category__content-item-list">
										<?php foreach ($sameBooks as $sameBook) :?>
											<li class="b-main__category__content-item-detail b-product-silder__item item-3">
											<a class="b-product-silder__item-link b-main__category__content-item-link" href="<?php echo $this->Convert->creatLink('detail',$sameBook)?>"> 
													<span class="b-main__category__content-item-img-wrap">
														<img class="b-main__category__content-item-img b-product-silder__item-img img-responsive" title="<?php echo $sameBook['Book']['name']?>" alt="" src="<?php echo fullBaseUrl.'/img/upload/books/'.$sameBook['Book']['image']?>">
													</span>
													<div class="b-product-silder__item-name b-main__category__content-item-name">
														<span title="<?php echo $sameBook['Book']['name']?>">
															<?php 
															echo $this->Text->truncate($sameBook['Book']['name'],25,array(
																'ellipsis' => '...',
																'exact' => false
																)
																);?>
															</span>
														</div>
													</a>

													<div class="b-product-silder__author b-main__category__content-author author">
														<span class="author__name"><?php echo $sameBook['Author']['name']?></span>
													</div>

													<div class="b-main__category__content-price b-price">
														<span class="b-main__category__content-price-main b-price__main"><?php echo number_format($sameBook['Book']['price'])?>&nbsp;₫</span>
													</div>		
												</li>
											<?php endforeach ?>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div id="product_view_block_same_author">
							<div class="product-add-more b-product-silder sameauthor">
								<div class="clearfix b-product-slider__box feature-box">
									<div class="feature-head-home b-main__category__content-tab b-product-slider__title-box clearfix">
										<h2 class="feature-title slider_data b-product-silder__title-name">
											Sách cùng tác giả	    		
										</h2>
									</div>

									<div class="b-product-silder__content b-main__category__content-tab-item">
										<ul id="sameauthor_1421635883901" class="b-product-silder__list clearfix b-main__category__content-item-list">
											<?php foreach ($authorBooks as $authorBook) :?>
												<li class="b-main__category__content-item-detail b-product-silder__item item-1">
													<a class="b-product-silder__item-link b-main__category__content-item-link" href="<?php echo $this->Convert->creatLink('detail',$authorBook)?>"> 
														<span class="b-main__category__content-item-img-wrap">
															<img class="b-main__category__content-item-img b-product-silder__item-img img-responsive" title="<?php echo $authorBook['Book']['name']?>" alt="" src="<?php echo fullBaseUrl.'/img/upload/books/'.$authorBook['Book']['image']?>">
														</span>
														<div class="b-product-silder__item-name b-main__category__content-item-name">
															<span title="<?php echo $authorBook['Book']['name']?>">
																<?php 
																echo $this->Text->truncate($authorBook['Book']['name'],25,array(
																	'ellipsis' => '...',
																	'exact' => false
																	)
																);
																?>
															</span>
														</div>
													</a>
													<div class="b-product-silder__author b-main__category__content-author author">
														<span class="author__name">
															<?php echo $authorBook['Author']['name']?>
														</span>
													</div>
													<div class="b-main__category__content-price b-price">
														<span class="b-main__category__content-price-main b-price__main"><?php echo number_format($authorBook['Book']['price'])?>&nbsp;₫
														</span>
													</div>		
												</li>
											<?php endforeach ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end //product-content -->	 
			</div>
		</div><!--/ .b-content-->
	</div><!--/ .b-layout -->
</div>
