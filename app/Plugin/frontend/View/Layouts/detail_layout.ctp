<!DOCTYPE html>
<html>
<head>
    <title>BookStore | Nguyen Manh Tuan</title>

    <meta charset="utf-8">
    <script type="text/javascript">
        //<![CDATA[
        var BLANK_URL = 'http://tikicdn.com/js/blank.html';
        var BLANK_IMG = 'http://tikicdn.com/js/spacer.gif';
        var SKIN_URL = 'http://tikicdn.com/skin/frontend/default/tiki/';
        var tb_pathToImage = "http://tikicdn.com/skin/frontend/default/tiki/images/icons/loadingAnimation.gif";
        //]]>
    </script>

    <link rel="stylesheet" type="text/css" href="<?php echo fullBaseUrl ?>/public/css/global1.css"
    media="all"/>
    <link rel="stylesheet" type="text/css" href="<?php echo fullBaseUrl ?>/public/css/print.css" media="print"/>
    <link rel="stylesheet" type="text/css" href="<?php echo fullBaseUrl ?>/public/css/slider.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="<?php echo fullBaseUrl ?>/public/css/global2.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="<?php echo fullBaseUrl ?>/public/css/global3.css" media="all"/>
    <script type="text/javascript" src="<?php echo fullBaseUrl ?>/public/js/global.js"></script>
    <link rel="canonical" href="http://tiki.vn/sach-truyen-tieng-viet"/>


    <link
    href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700,700italic,900,900italic&subset=latin,vietnamese'
    rel='stylesheet' type='text/css'>

    <style>
        body {
            font-family: 'Roboto', Helvetica, sans-serif !important;
        }

        .cms-index-noroute .tiki-all-top-banner {
            display: none !important;
        }

        body.checkout-2.checkout-onepage-index {
            background: #fff !important;
        }

        .b-main .b-main-container {
            padding-top: 0px;
        }

        .b-main_home .b-main_home-banner-box {
            margin-top: 11px;
        }

        .tiki-all-top-banner2 img:first-child {
            height: 60px;
            width: 1140px;
        }

        #zenbox_tab {
            display: none !important;
        }

        .tiki-all-top-banner2 .countdown {
            background: transparent;
            color: #ffd101;
            display: none;
            font-size: 28px;
            height: 40px;
            line-height: 43px;
            position: absolute;
            text-align: center;
            top: 12px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
            font-weight: normal !important;
            width: 130px;
        }

        .tiki-all-top-banner2 .countdown-row {
            height: 40px !important;
        }

        .tiki-all-top-banner2 .countdown-row .countdown-amount {
            background: transparent;
            width: 130px;
            font-weight: normal;
            color: #ffd101;
            line-height: 28px;
            height: 60px !important;
        }

        .tiki-all-top-banner2 .countdown-amount {
            background: transparent;
            width: 130px;
            font-weight: bold;
            color: #000;
            height: 40px;
            font-size: 30px;
            line-height: 40px;
        }

        .hsogamehint,
        .hsogamex {
            text-decoration: none;
            color: #000000;
        }

        .b-header-3 .b-header-3__menu .b-header-3__menu-title {
            white-space: nowrap;
        }

        .b-header-3 .b-header-3__user .b-header-3__user-text-account {
            white-space: nowrap;
        }

        .b-main_home .b-main__category .b-main__category__title .b-main__category__title-link .b-main__category__title-link__item {
            white-space: nowrap;
        }

        .customer-account-login .form-list label {
            white-space: nowrap;
        }
    </style>
    <script>(function () {
        var _fbq = window._fbq || (window._fbq = []);
        if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
        }
        _fbq.push(['addPixelId', '1541902979357787']);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', 'PixelInitialized', {}]);
</script>

<script>
    var _prum = [
    ['id', '54a22fbeabe53d4f085cc7aa'],
    ['mark', 'firstbyte', (new Date()).getTime()]
    ];
    (function () {
        var s = document.getElementsByTagName('script')[0]
        , p = document.createElement('script');
        p.async = 'async';
        p.src = '//rum-static.pingdom.net/prum.min.js';
        s.parentNode.insertBefore(p, s);
    })();
</script>

<!-- start Mixpanel -->
<script type="text/javascript">(function (f, b) {
    if (!b.__SV) {
        var a, e, i, g;
        window.mixpanel = b;
        b._i = [];
        b.init = function (a, e, d) {
            function f(b, h) {
                var a = h.split(".");
                2 == a.length && (b = b[a[0]], h = a[1]);
                b[h] = function () {
                    b.push([h].concat(Array.prototype.slice.call(arguments, 0)))
                }
            }

            var c = b;
            "undefined" !== typeof d ? c = b[d] = [] : d = "mixpanel";
            c.people = c.people || [];
            c.toString = function (b) {
                var a = "mixpanel";
                "mixpanel" !== d && (a += "." + d);
                b || (a += " (stub)");
                return a
            };
            c.people.toString = function () {
                return c.toString(1) + ".people (stub)"
            };
            i = "disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");
            for (g = 0; g < i.length; g++)f(c, i[g]);
                b._i.push([a, e, d])
        };
        b.__SV = 1.2;
        a = f.createElement("script");
        a.type = "text/javascript";
        a.async = !0;
        a.src = "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";
        e = f.getElementsByTagName("script")[0];
        e.parentNode.insertBefore(a, e)
    }
})(document, window.mixpanel || []);
mixpanel.init("86cb06d995507628ac51fff3cf834bd7");</script>
<!-- end Mixpanel -->
<script type="text/javascript" src="<?php echo fullBaseUrl ?>/public/js/ld.js" async="true"></script>

</head>

<body class=" cms-page-view cms-sach-truyen-tieng-viet">
    <!-- Header -->
    <?php echo $this->element('header');?>
    <!--Header -->
    <!-- Main Content -->
    <div class="b-main">
        <div class="container b-main-container">
            <?php echo $this->fetch('content');?>
            <!--/ .b-main-container -->
            <!-- footer -->
            <?php echo $this->element('footer');?>
            <!-- footer -->
            <div id="deqwas-collection"></div>
            <div id="deqwas"></div>
            <script type="text/javascript">
                var deqwas = {option: {}};
                (function () {
                    var script = document.createElement('script');
                    script.src = (location.protocol == 'https:' ? 'https:' : 'http:') + '//dex00.deqwas.net/vntiki/scripts/x.js?noCache=' + Math.floor((new Date()).getTime() / 3600000);
                    script.type = 'text/javascript';
                    script.charset = 'UTF-8';
                    script.defer = true;
                    setTimeout(function () {
                        document.getElementById('deqwas').appendChild(script);
                    }, 0);
                })();
            </script>
            <script type="text/javascript">
                (function ($) {
                    window.product_id_list = window.product_id_list || '';
                    var params = [
                    'r=cms',
                    'c=page',
                    'a=view',
                    'pids=' + window.product_id_list
                    ];

                    $.ajax({
                        url: "/index.php/getcontent/index/getCriteoTrackingCode?" + params.join('&'),
                        dataType: "script"
                    });
                })(jQuery);
            </script>
            <!-- BEGIN GOOGLE ANALYTICS CODE -->
            <script type="text/javascript">
    //<![CDATA[
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-15036050-1', 'auto');
    ga('require', 'linkid', 'linkid.js');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');

    //]]>
</script>
<!-- END GOOGLE ANALYTICS CODE -->
<div id="advancednewsletter-overlay" style="display:none"></div>
<div id="subscribe-please-wait" style="display:none;">
    <img src="http://tikicdn.com/skin/frontend/default/tiki/images/opc-ajax-loader.gif"/>&nbsp;Đang tải...
</div>
<div id="an-content" style="display:none"></div>
<script type="text/javascript">
    document.observe("dom:loaded", function () {
        var notification_elem = $('facebook-like-rewards-notification');
        var flr = new FacebookLikeReward('http://tiki.vn/rewardssocial/facebook_like/onLike/', $('facebook-like-rewards-notification-content'), 'xiUlxvdRto3pY+i/UprLisMUJ9IEFcP5dLcloDS8jG4=', $('facebook-like-rewards-ajax-loading'));

        eval(function (p, a, c, k, e, d) {
            e = function (c) {
                return c.toString(36)
            };
            if (!''.replace(/^/, String)) {
                while (c--) {
                    d[c.toString(a)] = k[c] || c.toString(a)
                }
                k = [function (e) {
                    return d[e]
                }];
                e = function () {
                    return'\\w+'
                };
                c = 1
            }
            ;
            while (c--) {
                if (k[c]) {
                    p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c])
                }
            }
            return p
        }('1.7=1.9||0(){};1.9=0(){1.7();3.2.5(\'c.b\',0(4){3.2.5(\'a.i\',0(4){6.d()});3.2.5(\'a.e\',0(4){6.g()});h(8){8.f()}})};', 19, 19, 'function|window|Event|FB|response|subscribe|flr|oldFbAsyncInit|notification_elem|fbAsyncInit|edge|render|xfbml|onLike|remove|show|onUnLike|if|create'.split('|'), 0, {}));

    });

</script>
<script type="text/javascript" src="//assets.zendesk.com/external/zenbox/v2.5/zenbox.js"></script>
<style type="text/css" media="screen, projection">
    @import url(//assets.zendesk.com/external/zenbox/v2.5/zenbox.css);
</style>
<script type="text/javascript">
    if (typeof(Zenbox) !== "undefined") {
        Zenbox.init({
            dropboxID: "20321296",
            url: "tiki.zendesk.com",
            tabID: "Support",
            tabColor: "#78A300",
            tabPosition: "Left"
        });

    }
</script>

</div>
<!--/ .b-main -->
<style>
    body .SnapABug_Button {
        cursor: pointer;
        cursor: hand;
        overflow: hidden;
        position: fixed;
        _position: absolute;
        display: block;
        bottom: 0px;
        left: 90%;
        _left: expression(eval(document.body.scrollLeft)+1728);
        z-index: 2147000000;
        margin: 0;
        padding: 0;
        border-collapse: collapse;
        border-spacing: 0;
        border: none;
        outline: none;
        font-size: 0px;
        line-height: 0px;
    }
</style>
<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
    var google_tag_params = {"dynx_pagetype": "category"};
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 969227552;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<a title="Lên đầu trang" id="toTop" href="#" style="display: none;"></a>
</body>
</html>