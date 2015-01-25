<div id="js-category-slider" class="b-category-slider">
    <div class="b-category-slider__box scroller">
        <ul class="b-category-slider__list content clearfix">
            <li style="width:100%;" id="section0" class="b-category-slider__item sectionslide" data-title="Bùa Yêu"
            data-event="ga('send','event','banner','sach_center_banner','Bùa Yêu');">
            <a onclick="ga('send','event','banner','sach_center_banner','Bùa Yêu');"
            href="">
            <img class="b-category-slider__img" title="Bùa Yêu"
            src="http://tikicdn.com/media/custom/banners/resize/sach_center_banner/File-1420822961.jpg"
            alt="Bùa Yêu"/>
        </a>
    </li>
    <li style="width:100%;" id="section1" class="b-category-slider__item sectionslide"
    data-title="Nhật Ký Chú Bé Nhút Nhát"
    data-event="ga('send','event','banner','sach_center_banner','Nhật Ký Chú Bé Nhút Nhát');">
    <a onclick="ga('send','event','banner','sach_center_banner','Nhật Ký Chú Bé Nhút Nhát');"
    href="">
    <img class="b-category-slider__img" title="Nhật Ký Chú Bé Nhút Nhát"
    src="http://tikicdn.com/media/custom/banners/resize/sach_center_banner/File-1417160066.jpg"
    alt="Nhật Ký Chú Bé Nhút Nhát"/>
</a>
</li>
<li style="width:100%;" id="section2" class="b-category-slider__item sectionslide"
data-title="Tuyển Tập Các Sách Tiếng Anh Đặc Sắc"
data-event="ga('send','event','banner','sach_center_banner','Tuyển Tập Các Sách Tiếng Anh Đặc Sắc');">
<a onclick="ga('send','event','banner','sach_center_banner','Tuyển Tập Các Sách Tiếng Anh Đặc Sắc');"
href="">
<img class="b-category-slider__img" title="Tuyển Tập Các Sách Tiếng Anh Đặc Sắc"
src="http://tikicdn.com/media/custom/banners/resize/sach_center_banner/File-1415898836.jpg"
alt="Tuyển Tập Các Sách Tiếng Anh Đặc Sắc"/>
</a>
</li>
<li data-event="ga('send','event','banner','sach_center_banner','Bộ Sưu Tập Sổ Tay Hoyroscopes -20%');" data-title="Bộ Sưu Tập Sổ Tay Hoyroscopes -20%" class="b-category-slider__item sectionslide cycle-slide" id="section0" style="width: 100%; position: absolute; top: 0px; left: 0px; z-index: 97; opacity: 1; display: none;">
    <a target="_blank" href="http://tiki.vn/catalogsearch/result/?q=hoyroscope&amp;cat=&amp;src=sach_center_banner" onclick="ga('send','event','banner','sach_center_banner','Bộ Sưu Tập Sổ Tay Hoyroscopes -20%');">
        <img alt="Bộ Sưu Tập Sổ Tay Hoyroscopes -20%" src="http://tikicdn.com/media/custom/banners/resize/sach_center_banner/File-1421641628.jpg" title="Bộ Sưu Tập Sổ Tay Hoyroscopes -20%" class="b-category-slider__img">
    </a>
</li>
</ul>

</div>

<div class="b-category-silder__control">
    <div class="b-category-silder__link slidercontrol clearfix">
    </div>
</div>

</div>

<script type="text/javascript">
    $j('.b-category-slider__list').cycle({
        fx: 'scrollHorz',
        speed: 700,
        timeout: 5000,
        pager: '.b-category-silder__link',
        slides: "> li",
        pagerActiveClass: 'active',
        pagerTemplate: '<a style="z-index:101;" onclick="{{event}}" title="{{title}}" href="javascript:void(0);">{{title}}</a>',
        log: false
    });
</script>