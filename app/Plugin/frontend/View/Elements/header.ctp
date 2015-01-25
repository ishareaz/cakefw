<header id="header" class="b-header-3 b-header-3_not-home" role="banner">
    <div class="container b-header-3__content">
        <div class="row b-header-3__row-1">
            <div class="b-header-3__logo col-md-3">
                <a href="<?php echo fullBaseUrl ?>" class="b-header-3__logo-image" title="BookStore">BookStore</a>
            </div>
            <form id="search_mini_form" action="<?php echo fullBaseUrl.'/search/'?>" method="GET" class="b-header-3__search col-md-5" role="search">
                <div class="b-header-3__search-input">
                    <div class="input-group">
                        <div class="input-group-btn b-header-3__search-select">
                            <select name="cat" id="" class="b-header-3__search-all" style="width: 60px;">
                                <option value="">Tất cả </option>
                                <?php foreach ($categories as $category) :?>
                                    <option value="<?php echo $category['Category']['id'] ?>">
                                        <?php echo $category['Category']['name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- /btn-group -->

                        <input type="text" id="search" autocomplete="off" class="form-control b-header-3__input-search"
                        name="name"
                        value=""/>


                        <span class="input-group-btn">
                            <button class="btn btn-default b-header-3__seach-btt" type="submit">
                                Tìm
                            </button>
                        </span>

                    </div>
                    <!-- /input-group -->

                    <div id="search_autocomplete" class="search-autocomplete b-header-3__search-autocomplete"></div>
                </div>

                <script type="text/javascript">

                    var searchForm = new Varien.searchForm('search_mini_form', 'search', '');
                    var tikiSS = new Tiki_SearchSuggestion('#search', '#search_autocomplete');

                </script>
            </form>
            <!--/.b-header-3__search -->
        </div>
        <!--/.b-header-3__row-1 -->

        <!-- Menu -->
        <div class="b-header-3__row-2 row">

            <div class="b-header-3__menu b-header-3__menu_not-home col-md-3">
                <nav class="b-header-3__nav" role="navigation">
                    <div class="b-header-3__nav-box">
                        <a href="javascript:void(0)" class="b-header-3__menu-all" title="Tất cả Danh Mục">
                            <i class="fa fa-bars tk-i-all"></i>
                            <h2 class="b-header-3__menu-title" title="Tất Cả Danh Mục">
                                Tất Cả Danh Mục
                            </h2>
                        </a>

                    </div>
                </nav>
                <!--/.b-header-3__nav -->
            </div>
            <div class="b-header-3__link col-md-5">

            </div>

            <div class="b-header-3__phone col-md-3">
                <i class="tk-i-phone fa fa-phone-square"></i>
                <span class="b-header-3__hotline">
                    Hotline: 
                    <span class="b-header-3__phone-number">1900-6035 </span> 
                    <span class="b-header-3__hotline-time">(8-21h kể cả T7,CN)</span>
                </span>
            </div>

        </div>
        <!--/.b-header-3__row-2 -->
    </div>
    <!--/.b-header-3__content -->
</header>