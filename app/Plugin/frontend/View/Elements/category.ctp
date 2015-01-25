<div class="the-loai-sach">
    <div class="feature-head-home clearfix">
        <h2 class="feature-title"><a href="<?php echo fullBaseUrl.'/categories'?>">Thể Loại</a></h2>
        <span><a class="see-all" href="<?php echo fullBaseUrl.'/categories'?>">Xem tất cả</a></span>
    </div>
    <ul class="the-loai-content clearfix">
        <li class="row clearfix">
            <ul class="the-loai-grid">
                <?php foreach ($categories as $category) : ?>
                    <li style="height: 70px">
                        <div class="the-loai-link">
                            <a title="<?php echo $category['Category']['name'] ?>" href="<?php echo $this->Convert->creatLinkCategory('category',$category)?>">
                                <?php echo $category['Category']['name']  ?>
                            </a>
                        </div>
                    </li> 
                <?php endforeach ?>               
            </ul>
        </li>
    </ul>
</div>