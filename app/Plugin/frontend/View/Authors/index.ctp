<?php echo fullBaseUrl ?>
<?php $this->Html->addCrumb($books[0]['Author']['name']);?>
<div class="middle-container"> 
    <div class="breadcrumbswr b-breadcrum">
        <ul class="breadcrumbs">
            <?php  echo $this->Html->getCrumbs(' / ', 'Trang chủ'); ?>
        </ul>
    </div>

    <div class="middle col-2-right-layout">
        <div class="row b-layout b-layout_right">
            <!-- Global Messages -->
            <div role="main" class="col-main col-md-9 b-content" id="main">
                <h1><?php echo $books[0]['Author']['name'] ?></h1>
                <!-- LIST MODE -->
                <?php if (count($books)>0){echo $this->element('sorter');} ?>
                <div class="listing-type-list catalog-listing b-category__list">
                    <?php foreach ($books as $book) :?>
                        <div class="b-category__list-item listing-item">
                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                    <tr>
                                        <td align="left" class="product-image" rowspan="6">
                                            <div class="product-image-1">
                                                <a href="<?php echo $this->Convert->creatLink('detail',$book)?>">
                                                    <span class="product-image-1-wrap">
                                                        <img width="135" height="189" title="<?php echo $book['Book']['name'] ?>" alt="" src="<?php echo fullBaseUrl.'/img/upload/books/'.$book['Book']['image'] ?>" class="lazy" style="display: inline;">
                                                    </span>

                                                </a>
                                            </div>
                                        </td>
                                        <td align="left" colspan="2">
                                            <h2 class="product-name">
                                                <a title="<?php echo $book['Book']['name'] ?>" href="<?php echo $this->Convert->creatLink('detail',$book)?>">
                                                    <?php echo $book['Book']['name'] ?>
                                                </a>
                                            </h2>
                                            <p class="book-author"><?php echo $book['Author']['name'] ?></p>
                                            <p class="cover-books"><?php echo $book['Book']['covertype'] ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" align="left">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:100%" class="rating"></div>
                                                </div>
                                                <div style="padding-top:2px">
                                                    (4 nhận xét)
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <div class="price-box">
                                                <div class="price-block">           
                                                    <span class="special-price">
                                                        <span id="product-price-126298" class="price">
                                                            <?php echo number_format($book['Book']['price'])?>&nbsp;₫
                                                        </span>
                                                    </span>
                                                </div> 
                                            </div>
                                        </td>
                                        <td valign="top" align="right" style="padding-right:10px;padding-top:10px" rowspan="6">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">                                 
                                            <div class="product-shop">
                                                <div class="description">
                                                    Đã gần một năm trôi qua kể từ khi siêu núi lửa Yellowstone phun trào, làm xóa sổ gần như toàn bộ nhân loại và bề mặt Trái Đất. Giờ các cộng đồng người sống sót quay sang gây chiến và tấn công lẫn nhau để tranh giành lương thực và đồ ăn
                                                    <a title="<?php echo $book['Book']['name'] ?>" href="">Xem chi tiết <i class="fa fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div><!-- /.b-category__list-item -->
                    <?php endforeach ?>
                </div>
                <?php echo $this->element('paging');?>
            </div><!--/ .b-content-->
            <div role="complementary" class="col-right side-col col-md-3 b-sidebar">
                <div class="b-author-profile">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Thông tin tác giả</h3>
                        </div>

                        <div class="panel-body">
                            <p>Đang cập nhật</p>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tác giả cùng thể loại</h3>
                        </div>
                        <!-- List group -->
                        <ul class="list-group">
                            <?php foreach ($authors as $author) : ?>
                                <li class="list-group-item">
                                    <a href="<?php echo $this->Convert->creatLinkAuthor('author',$author)?>">
                                        <?php echo $author['Author']['name'] ?>
                                    </a>
                                </li>        
                            <?php endforeach?> 
                        </ul>
                    </div>
                </div>
            </div><!--/ .b-sidebar -->
        </div><!--/ .b-layout -->
    </div>
</div>