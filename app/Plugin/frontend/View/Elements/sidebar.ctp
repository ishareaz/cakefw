<?php //echo $this->Convert->creatLinkCategory('category',$category['Category']['name']) ?>
<div class="box base-mini mini-navigation main-category clearfix">
    <h4 class="head-title gradient no-border  "><a href="<?php echo fullBaseUrl.'/categories/'?>">Danh mục sản phẩm</a></h4>
    <div class="content">
        <ul id="nav-sidebox" class="category-items">
            <?php foreach ($categories as $category) : ?>
                <li class="level0 subcatemenu nav-">
                    <a href="<?php echo $this->Convert->creatLinkCategory('category',$category)?>">
                        <span><?php echo $category['Category']['name']?></span>
                    </a>
                    <?php if ($category['children']) : ?>
                        <ul class="navigation-0a">
                            <?php foreach ($category['children'] as $cat_child) : ?>
                                <li class="level1 subcatemenu nav-sach-tieng-anh-new-york-times-best-sellers">
                                    <a href="<?php echo $this->Convert->creatLinkCategory('category',$cat_child)?>"><span><?php echo $cat_child['Category']['name']?></span></a>
                                </li>
                            <?php endforeach ;?>
                        </ul>
                    <?php endif ;?>
                </li>
            <?php endforeach ;?>
        </ul>
    </div>

</div>


<div class="aside-best-seller box base-mini clearfix">
    <div class="aside-best-seller-title">
        <h4 class="head-title gradient">TOP 100 Bestseller</h4>
    </div>
    <div class="content">
        <div class="see-all-top">
            <a href="<?php echo fullBaseUrl?>">Xem tất cả Top 100 trong tuần</a>
        </div>
        <ul class="aside-best-seller-items clearfix">
        <?php foreach ($bestSellers as $key => $bestSeller) :?>

            <li>
                <div class="product-image">
                    <span class="rank top3"> <span><?php echo $key+1 ?></span></span>
                    <a href="<?php echo $this->Convert->creatLink('detail',$bestSeller)?>">
                        <img class="lazy"
                        src="<?php echo fullBaseUrl.'/img/upload/books/loader.gif'?>"
                        data-src="<?php echo fullBaseUrl.'/img/upload/books/'.$bestSeller['Book']['image'] ?>"
                        alt="" title=""/>
                    </a>
                </div>

                <div class="product-name">
                    <p class="product-name-block clearfix">
                        <a class="product-name" href="<?php echo $this->Convert->creatLink('detail',$bestSeller)?>"><?php echo $bestSeller['Book']['name'] ?></a>
                    </p>
                    <p class="book-author"><a href="<?php echo $this->Convert->creatLinkAuthor('author',$bestSeller)?>" title=""><?php echo $bestSeller['Author']['name'] ?></a></p>
                    <!--Cover-->
                    <p class="cover-books"><?php echo $bestSeller['Book']['covertype'] ?></p> <!--End-->
                    <div class="price-box">
                        <div class="price-block">
                            <span class="special-price">
                                <span class="price" id="product-price-113482">
                                    <?php echo number_format($bestSeller['Book']['price']) ?> ₫
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach ;?>
        </ul>
        <div class="see-all-top">
            <a href="<?php echo fullBaseUrl?>">
                Xem tất cả Top 100 trong tuần
            </a>
        </div>
    </div>
</div>


<div class="fb-like-box">
    <!-- <iframe
    src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Ftiki.vn&amp;width=182&amp;height=350&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23ffffff&amp;show_border=false&amp;stream=false&amp;header=false&amp;appId=220558114759707"
    scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:182px; height:350px;"
    allowTransparency="true"></iframe> -->
    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fominext&amp;width=182&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:182px; height:290px;" allowTransparency="true"></iframe>
</div>