@extends('admin.dashboard')
@section('head.title')Welcome @stop
@section('AppFrameMain')
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">

                <style type="text/css">
                    /*btn more, deletable*/
                    .btn.btn-more {
                        border: 1px solid #d3dbe2;
                        padding: 6px 15px;
                    }

                    .btn.btn-more:hover {
                        border: 1px solid #d3dbe2;
                        background-color: #f5f6f7;
                        color: #479ccf;
                        text-decoration: none;
                    }

                    .btn-more:before {
                        content: "•••";
                        text-indent: 0;
                        display: block;
                        font-size: 13px;
                    }
                    /*end*/

                    .rssFeedDisplay {
                        overflow: hidden;
                    }

                    .item {
                        background-image: url("//bizweb.dktcdn.net/assets/admin/images/admin.png");
                        background-position: 2px 10px;
                        background-repeat: no-repeat;
                        line-height: 25px;
                        padding-left: 12px;
                    }

                    .rssFeedDisplay .item:not(:last-child) {
                        border-bottom: 1px solid #e8e8e8 !important;
                    }

                    .metric-content {
                        display: block;
                    }

                    .img-responsive {
                        display: inline-block;
                    }

                    .table-fluid {
                        display: table;
                        width: 100%;
                    }

                    .col-fluid {
                        display: table-cell;
                    }

                    .marketing-banner > a:hover, .marketing-banner > a:focus {
                        text-decoration: none;
                    }

                    .marketing-banner > a {
                        background: #2051e3 url('/themes/portal/admin/images/banner/banner-promotion.png') no-repeat center center;
                        height: 40px;
                        text-align: center;
                        color: #000;
                        display: block;
                    }

                    .marketing-banner span {
                        display: inline-block;
                        color: #fff;
                        position: absolute;
                        right: 0;
                        top: 0;
                        font-size: 25px;
                        width: 40px;
                        height: 40px;
                        line-height: 40px;
                        text-align: center;
                        cursor: pointer;
                        z-index: 1;
                    }

                    @media (max-width: 1400px) {
                        .marketing-banner > a > div {
                            background-size: 100%;
                        }
                    }

                    @media (max-width:855px) {
                        .marketing-banner > a > div {
                            height: 60px;
                        }
                    }

                    .notifications {
                        margin-top: 21px !important;
                    }
                </style>

                <div id="dashboard" class="container-fluid-md">

                    <div class="new-trial-dashboard">
                        <header class="ui-title-bar-container ui-title-bar-container--full-width" style="margin-top:15px;">
                            <div class="ui-title-bar" style="min-height:0">
                                <div class="ui-title-bar__main-group">
                                    <div class="ui-title-bar__heading-group">
                                        <h1 class="ui-title-bar__title">Xin chào {{Auth::user()->name}}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible-header">
                                <div class="collapsible-header__heading"></div>
                            </div>
                        </header>
                        <div class="reports-dashboard-new">
                            <div class="ui-layout ui-layout--full-width ui-layout__dashboard">
                                <div class="ui-layout__sections">
                                    <div class="ui-layout__section">
                                        <div class="ui-layout__item">
                                            <section class="ui-card">
                                                <div class="steps-intro clearfix">
                                                    <div class="next-grid report-caption">
                                                        <h2 class="report-caption-h2" style="color:#333333; text-transform:initial; font-weight:500;">Tất cả đã sẵn sàng! Bắt đầu bán hàng dễ dàng hơn với các bước dưới đây</h2>
                                                    </div>
                                                    <div class="" style="margin-bottom:0">
                                                        <div class="col-md-3 col-sm-6 col-xs-12 step-intro">
 <div class="row">
     <div class="image-intro">
         <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/image-intro-setting.png">
     </div>
     <p class="intro-title">1. Cấu hình cửa hàng</p>
     <div class="intro-detail">
         <p>Cài đặt các thông tin cho việc</p>
         <p>bán hàng của bạn</p>
     </div>
     <a class="ui-button intro-btn ui-button--dashboard" href="/admin/settings">Cấu hình cửa hàng</a>
 </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 col-xs-12 step-intro">
 <div class="row">
     <div class="image-intro">
         <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/intro_add_product_img.png">
     </div>
     <p class="intro-title">2. Thêm sản phẩm</p>
     <div class="intro-detail">
         <p>Tạo mới và quản lý tồn kho theo</p>
         <p>từng phiên bản sản phẩm</p>
     </div>
     <a class="ui-button intro-btn ui-button--dashboard" id="adminProducts" href="{{route('admin.products')}}">
         Xem sản phẩm
     </a>
 </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 col-xs-12 step-intro">
 <div class="row">
     <div class="image-intro">
         <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/pantone.svg">
     </div>
     <p class="intro-title">3. Cài đặt giao diện</p>
     <div class="intro-detail">
         <p>Cập nhật giao diện mới và tùy chỉnh</p>
         <p>để phù hợp với cửa hàng của bạn</p>
     </div>
     <a class="ui-button intro-btn ui-button--dashboard" href="/admin/themes">Cài đặt giao diện</a>
 </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 col-xs-12 step-intro">
 <div class="row">
     <div class="image-intro">
         <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/intro_order_image.png">
     </div>
     <p class="intro-title">4. Sẵn sàng bán hàng</p>
     <div class="intro-detail">
         <p>Tất cả đã sẵn sàng. Tạo đơn</p>
         <p>và quản lý đơn từ website của bạn</p>
     </div>
     <a class="ui-button intro-btn ui-button--dashboard" href="/admin/orders">
         Tạo đơn hàng mới
     </a>
 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ui-layout ui-layout--full-width ui-layout__dashboard">
                                <div class="ui-layout__sections">
                                    <div class="ui-layout__section">
                                        <div class="ui-layout__item">
                                            <div class="partners-dashboard">
                                                <div class="panel">
                                                    <div class="next-grid report-caption">
                                                        <h2 class="report-caption-h2">Đối tác thanh toán và vận chuyển tích hợp</h2>
                                                    </div>
                                                    <div class="panel-body panel-body-partner">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="partner-image">
     <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/logo_vnpay_dashboard.png">
 </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="partner-image">
     <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/logo_moca_dashboard.png">
 </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="partner-image">
     <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/logo_paypal_dashboard.png">
 </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="partner-image">
     <img class="onepay-img" src="//bizweb.dktcdn.net/assets/admin/images/dasboard/logo_one_pay_dashboard.png">
 </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="partner-image">
     <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/logo_zalopay_dashboard.png">
 </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="partner-image">
     <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/logo_baokim_dashboard.png">
 </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="partner-image">
     <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/logo_boxme_dashboard.png">
 </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="partner-image">
     <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/logo_ghn_dashboard.png">
 </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="partner-image">
     <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/logo_ghtk_dashboard.png">
 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blogs-dashboard">
                                                <div class="panel">
                                                    <div class="next-grid report-caption">
                                                        <h2 class="report-caption-h2">Có thể bạn quan tâm</h2>
                                                    </div>
                                                    <div class="panel-body panel-body-rss">
                                                        <div id="rssfeedsBlog" class="row news">
 <div class="col-md-12 col-xs-12 col-sm-12 mod-responsive-rss"><a class="new-navigation" href="https://www.sapo.vn/blog/top-phan-mem-quan-ly-nha-hang-tot-hien-nay/?utm_campaign=cpn:blog_ref-plm:&amp;utm_source=blog&amp;utm_medium=ref_feed&amp;utm_content=fm:text_link-km:-sz:&amp;utm_term=&amp;campaign=blog_ref_feed&amp;utm_source=admin_sky&amp;utm_medium=dashboard_feed&amp;utm_campaign=bizweb_admin" rel="nofollow noreferrer noopener" target="_blank"><div class="new-img"><img class="img-responsive news-image-center" src="https://admin.bizweb.vn/Upload/News/2019/10/23/871c84f569af122cdbc92b00b9602b20.jpg"></div><p class="new-title"><span class="new-title-date">Top 5 phần mềm quản lý nhà hàng tốt nhất được nhiều người tin dùng</span><span class="new-title-category">Quản lý nhà hàng</span></p></a></div><div class="col-md-12 col-xs-12 col-sm-12 mod-responsive-rss"><a class="new-navigation" href="https://www.sapo.vn/blog/10-cau-hoi-ban-nen-liet-ke-trong-bang-khao-sat-thi-truong-thoi-trang/?utm_campaign=cpn:blog_ref-plm:&amp;utm_source=blog&amp;utm_medium=ref_feed&amp;utm_content=fm:text_link-km:-sz:&amp;utm_term=&amp;campaign=blog_ref_feed&amp;utm_source=admin_sky&amp;utm_medium=dashboard_feed&amp;utm_campaign=bizweb_admin" rel="nofollow noreferrer noopener" target="_blank"><div class="new-img"><img class="img-responsive news-image-center" src="https://admin.bizweb.vn/Upload/News/2019/10/23/b43c8cdd28f0bbb5b7ff5a646bce5cbb.jpg"></div><p class="new-title"><span class="new-title-date">10 câu hỏi nên liệt kê trong bảng khảo sát thói quen mua quần áo</span><span class="new-title-category">Kế hoạch kinh doanh</span></p></a></div><div class="col-md-12 col-xs-12 col-sm-12 mod-responsive-rss"><a class="new-navigation" href="https://www.sapo.vn/blog/co-1-ty-nen-lam-gi-top-10-y-tuong-kinh-doanh-voi-1-ty-thiet-thuc-nhat-hien-nay/?utm_campaign=cpn:blog_ref-plm:&amp;utm_source=blog&amp;utm_medium=ref_feed&amp;utm_content=fm:text_link-km:-sz:&amp;utm_term=&amp;campaign=blog_ref_feed&amp;utm_source=admin_sky&amp;utm_medium=dashboard_feed&amp;utm_campaign=bizweb_admin" rel="nofollow noreferrer noopener" target="_blank"><div class="new-img"><img class="img-responsive news-image-center" src="https://admin.bizweb.vn/Upload/News/2019/10/23/62385770dc7a27c01c57677790b58d80.jpg"></div><p class="new-title"><span class="new-title-date">Có 1 tỷ nên làm gì? Top 10 ý tưởng kinh doanh với 1 tỷ thiết thực nhất hiện nay</span><span class="new-title-category">Ý tưởng kinh doanh</span></p></a></div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{--                            <script type="text/javascript">--}}
                    {{--                                $(".fancybox").on("click", function (event) {--}}
                    {{--                                    event.preventDefault();--}}
                    {{--                                    $.fancybox({--}}
                    {{--                                        href: this.href,--}}
                    {{--                                        type: $(this).data("type"),--}}
                    {{--                                        helpers: {--}}
                    {{--                                            overlay: {--}}
                    {{--                                                locked: false--}}
                    {{--                                            }--}}
                    {{--                                        }--}}
                    {{--                                    }); // fancybox--}}
                    {{--                                    return false--}}
                    {{--                                });--}}

                    {{--                                $.ajax({--}}
                    {{--                                    url: "/admin/services/getRss?limit=3",--}}
                    {{--                                    type: "GET",--}}
                    {{--                                    global: false,--}}
                    {{--                                    success: function (data) {--}}
                    {{--                                        var template = '<div class="col-md-12 col-xs-12 col-sm-12 mod-responsive-rss"><a class="new-navigation" href="{url}" rel="nofollow noreferrer noopener" target="_blank"><div class="new-img"><img class="img-responsive news-image-center" src="{image}" /></div><p class="new-title"><span class="new-title-date">{title}</span><span class="new-title-category">{category}</span></p></a></div>'--}}

                    {{--                                        if (data && data.feeds && data.feeds.length) {--}}
                    {{--                                            for (var i = 0; i < data.feeds.length; i++) {--}}
                    {{--                                                var post = data.feeds[i];--}}
                    {{--                                                var createdOn = new Date(post.created_on);--}}

                    {{--                                                var postUrl = post.url;--}}
                    {{--                                                if (postUrl.indexOf("?") > -1)--}}
                    {{--                                                    postUrl += "&utm_source=admin_sky&utm_medium=dashboard_feed&utm_campaign=bizweb_admin";--}}
                    {{--                                                else--}}
                    {{--                                                    postUrl += "?utm_source=admin_sky&utm_medium=dashboard_feed&utm_campaign=bizweb_admin";--}}

                    {{--                                                var postHtml = template.replace("{url}", postUrl)--}}
                    {{--                                                    .replace("{image}", post.image)--}}
                    {{--                                                    .replace("{title}", post.title)--}}
                    {{--                                                    .replace("{category}", (post.article_category == null ? "" : post.article_category));--}}
                    {{--                                                $("#rssfeedsBlog").append(postHtml);--}}
                    {{--                                            }--}}
                    {{--                                        }--}}
                    {{--                                    }--}}
                    {{--                                });--}}

                    {{--                                function disableTrialDashboard() {--}}
                    {{--                                    $.ajax({--}}
                    {{--                                        url: "/admin/dashboard/changesetting",--}}
                    {{--                                        type: "POST",--}}
                    {{--                                        data: {--}}
                    {{--                                            key: "TrialDashboard",--}}
                    {{--                                            value: "disable"--}}
                    {{--                                        },--}}
                    {{--                                        success: function (data) {--}}
                    {{--                                            window.location = "/admin";--}}
                    {{--                                        },--}}
                    {{--                                        error: function (error) {--}}
                    {{--                                            Bizweb.Flash.error("Đã có lỗi xảy ra, xin hãy thử lại sau.")--}}
                    {{--                                        }--}}
                    {{--                                    });--}}
                    {{--                                }--}}

                    {{--                                $(document).one("ready page:load", function () {--}}
                    {{--                                    $('.top-themes').owlCarousel({--}}
                    {{--                                        items: 5,--}}
                    {{--                                        loop: false,--}}
                    {{--                                        margin: 15,--}}
                    {{--                                        responsiveClass: true,--}}
                    {{--                                        responsive: {--}}
                    {{--                                            0: {--}}
                    {{--                                                items: 2,--}}
                    {{--                                                nav: false--}}
                    {{--                                            },--}}
                    {{--                                            500: {--}}
                    {{--                                                items: 2,--}}
                    {{--                                                nav: false--}}
                    {{--                                            },--}}
                    {{--                                            600: {--}}
                    {{--                                                items: 2,--}}
                    {{--                                                nav: false--}}
                    {{--                                            },--}}
                    {{--                                            992: {--}}
                    {{--                                                items: 3,--}}
                    {{--                                                nav: false,--}}
                    {{--                                                loop: false--}}
                    {{--                                            },--}}
                    {{--                                            1215: {--}}
                    {{--                                                items: 3,--}}
                    {{--                                                nav: false,--}}
                    {{--                                                loop: false--}}
                    {{--                                            }--}}
                    {{--                                        },--}}
                    {{--                                        navText: ["<svg class='next-icon next-icon--size-20 next-icon--no-nudge'><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#chevron-left-thinner'></use></svg>", "<svg class='next-icon next-icon--size-20 next-icon--rotate-180 next-icon--no-nudge'><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#chevron-left-thinner'></use></svg>"]--}}
                    {{--                                    });--}}
                    {{--                                });--}}
                    {{--                            </script>--}}

                    <style>
                        .featuredthemes-captions .caption-button {
                            right: 36px;
                        }
                    </style></div>




            </div>
        </div>
    </div>
    @stop
