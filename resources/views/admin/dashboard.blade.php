@extends('layouts.appAdmin')

@section('head.title') Dashboard @stop

@section('head.css')

@stop

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
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@stop

@section('body.js')
    <script language="JavaScript">


        var newHash='',
            $mainContent=$('main#AppFrameMain');

        $('#adminProducts').on('click',function(){
            window.location.hash=$(this).attr('href');
            $('.next-nav__panel--secondary').addClass('next-nav__panel--secondary-open');
            $('#NextNavProducts').addClass('next-nav__list--is-open');

           // if ($('.menu-parent ').attr('data-name') == 'products'){
                $('.menu-parent').addClass('active-temp');
                $('.next-nav__panel--secondary').addClass('next-nav__panel--secondary-open');
                $('#NextNavProducts').addClass('next-nav__list--is-open');
           // }

            return false;
        });

        $(window).bind('hashchange',function(){
            newHash=window.location.hash.substr(1);
            $mainContent.load( newHash+" #wrapper > *");
            window.history.pushState({path: '{{route('admin.products')}}'}, '', '{{route('admin.products')}}');
        });



    </script>
@stop
