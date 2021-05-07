<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('head.title')</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin/dashboard.css">
    <link rel="stylesheet" href="/css/admin/products.css">
    @yield('head.css')


</head>
<body class="page-wrapper fresh-ui next-ui">
<div class="ui-app-frame" data-tg-refresh="ui-app-frame" id="ui-app-frame">
    <div class="overlay"></div>

        @include('partials.header.'.$typeHead)

    <style>
        .dropdown-menu2 {
            position: absolute;
            top: 100%;
            right: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 2px 0 0;
            list-style: none;
            font-size: 13px;
            text-align: left;
            background-color: #fff;
            border: 1px solid #eaeaea;
            border: 1px solid rgba(0,0,0,.1);
            border-radius: 4px;
            -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
            box-shadow: 0 6px 12px rgba(0,0,0,.175);
            background-clip: padding-box;
        }

        .dropdown-menu2.arrow-style:before, .dropdown-menu2.arrow-style:after {
            border-top: none;
            border-right: 8px solid transparent;
            border-left: 8px solid transparent;
            position: absolute;
            right: 10px;
            content: "";
            width: 0;
            height: 0;
        }

        .dropdown-menu2.arrow-style:before {
            top: -7px;
            border-bottom: 7px solid #c2c2c2;
        }

        .dropdown-menu2.arrow-style:after {
            top: -6px;
            border-bottom: 7px solid #fff;
        }

        .dropdown-menu2.arrow-style:not(.pull-right):before, .dropdown-menu2.arrow-style:not(.pull-right):after {
            left: 10px;
        }

        .dropdown-menu2.dropdown-notifications.arrow-style:not(.pull-right):before, .dropdown-menu2.dropdown-notifications.arrow-style:not(.pull-right):after {
            left: auto;
            right: 42px;
        }
    </style>


    <aside id="AppFrameAside" class="ui-app-frame__aside">

        <div class="aside-profile">
            <div class="aside-profile__button" aria-controls="AsideProfileMenu" aria-expanded="false" role="button">
                <div class="top-bar-profile">
                    <div class="top-bar-profile__avatar collapse-actor" style="padding:1.2rem;margin-right:0">
                        <span class="user-avatar user-avatar--style-2">
                            <span class="user-avatar__initials">
                                <img class="profile-pic img-circle" data-name="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHBvaW50ZXItZXZlbnRzPSJub25lIiB3aWR0aD0iNDYiIGhlaWdodD0iNDYiIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiByZ2IoNTIsIDczLCA5NCk7IHdpZHRoOiA0NnB4OyBoZWlnaHQ6IDQ2cHg7IGJvcmRlci1yYWRpdXM6IDBweDsiPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHk9IjUwJSIgeD0iNTAlIiBkeT0iMC4zNWVtIiBwb2ludGVyLWV2ZW50cz0iYXV0byIgZmlsbD0iI2ZmZmZmZiIgZm9udC1mYW1pbHk9IkhlbHZldGljYU5ldWUtTGlnaHQsSGVsdmV0aWNhIE5ldWUgTGlnaHQsSGVsdmV0aWNhIE5ldWUsSGVsdmV0aWNhLCBBcmlhbCxMdWNpZGEgR3JhbmRlLCBzYW5zLXNlcmlmIiBzdHlsZT0iZm9udC13ZWlnaHQ6IDQwMDsgZm9udC1zaXplOiAyMHB4OyI+QzwvdGV4dD48L3N2Zz4=">
                            </span>
                            <img alt="" class="gravatar gravatar--size-thumb" src="https://secure.gravatar.com/avatar/df93e2fa52dee1aa89eee856d66aa600.jpg?s=45&amp;d=blank">
                        </span>

                    </div>
                    <div class="top-bar-profile__summary" style="flex:1;padding:1.6rem 0;min-width:0">
                        <p class="top-bar-profile__title collapse-actor" style="color: #686868;font-size: 15px;max-width: 136px">
                            Thân Danh cuờng
                        </p>
                        <p class="top-bar-profile__description" style="font-size:12px;">
                            <a style="display:block" href="http://anthoyn.bizwebvietnam.net" target="_blank" rel="noreferrer noopener" title="Xem website của bạn">
                                Xem website
                            </a>
                        </p>
                    </div>
                    <div class="aside-profile__icon collapse-actor" style="padding:1.2rem;position:relative;top:0;right:0;transform:none;-webkit-transform:none">
                        <svg class="next-icon next-icon--rotate-90 next-icon--size-20 next-icon--no-nudge"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-chevron"></use> </svg>
                    </div>
                </div>
            </div>

            <div class="aside-profile__menu" id="AsideProfileMenu" aria-hidden="true" style="display: none;">
                <ul class="ui-action-list">
                    <li class="ui-action-list__item">
                        <a href="/admin/settings/account/425201" class="ui-action-list-action" data-allow-default="1">
                        <span class="ui-action-list-action__text">
                            <div class="ui-stack ui-stack--wrap ui-stack--alignment-center ui-stack--spacing-tight">
                                <div class="ui-stack-item">
                                    <svg role="img" class="next-icon next-icon--size-16" aria-labelledby="account-35e06c1de70805bbcd3156638011b2c7-title"><title id="account-35e06c1de70805bbcd3156638011b2c7-title">Profile icon</title> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#account"></use> </svg>
                                </div>      <div class="ui-stack-item ui-stack-item--fill">
                                    <span>Tài khoản của bạn</span>
                                </div>
                            </div>
                        </span>
                        </a>
                    </li>
                    <li class="ui-action-list__item">
                        <a href="/admin/authorization/logout" class="ui-action-list-action" data-no-turbolink="true" data-method="post">
                        <span class="ui-action-list-action__text">
                            <div class="ui-stack ui-stack--wrap ui-stack--alignment-center ui-stack--spacing-tight">
                                <div class="ui-stack-item">
                                    <svg role="img" class="next-icon next-icon--size-16" aria-labelledby="minor-log-out-title"><title id="minor-log-out-title">Log out icon</title> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#minor-log-out"></use> </svg>
                                </div>      <div class="ui-stack-item ui-stack-item--fill">
                                    <span>Đăng xuất</span>
                                </div>
                            </div>
                        </span>
                        </a>
                    </li>
                </ul>
                <ul class="ui-action-list">
                    <li class="ui-action-list__item"><a href="https://web-docs.sapo.vn/quy-dinh-su-dung-87.html" class="ui-action-list-action" target="_blank" rel="noopener noreferrer"><span class="ui-action-list-action__text">Điều khoản dịch vụ</span></a></li>
                    <li class="ui-action-list__item"><a href="https://web-docs.sapo.vn/chinh-sach-bao-mat-88.html" class="ui-action-list-action" target="_blank" rel="noopener noreferrer"><span class="ui-action-list-action__text">Chính sách bảo mật</span></a></li>
                    <li class="ui-action-list__item"><a href="https://support.bizweb.vn/" target="_blank" rel="noopener noreferrer" class="ui-action-list-action"><span class="ui-action-list-action__text">Hỗ trợ</span></a></li>
                </ul>
            </div>
        </div>
        <div class="ui-scrollable__container">
            <aside class="sidebar sidebar-default" define="{navDrawer: new Bizweb.Drawer(this)}">
                <div id="sidebar--nav" class="">
                    <div class="next-nav">
                        <div class="next-nav__panel next-nav__panel--primary next-nav__panel--has-scrollbars">
                            <nav>

                                <ul class="nav nav-pills nav-stacked next-nav__list next-nav__list--primary" style="overflow: hidden; width: auto; height: auto;">
                                    <li class=" menu-is-selected menu-appFrame active">
                                        <a href="{{route('admin.dashboard')}}" title="Tổng quan" id="nav__link_home" class="nav_link">
                                            {{--                                                <a href="/admin/dashboard" title="Tổng quan" id="nav__link_home">--}}
                                            <i class="fas fa-home"></i>
                                            <span class="menu-name">Tổng quan</span>
                                            <span class="tooltip-menu"><i></i>Tổng quan</span>
                                        </a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="javascript:void(0);" class="menu-parent " bind-event-click="navDrawer.showSubMenu(this)" data-name="orders">
                                            <i class="fas fa-file-invoice-dollar"></i>
                                            <span class="menu-name">Đơn hàng</span>
                                            <span class="tooltip-menu"><i></i>Đơn hàng</span>
                                            <span class="show-opening-order clearfix">
                                                 <span class="label label-opening-order pull-right opening-order hide" bind="navDrawer.numOfOpenningOrder" bind-show="navDrawer.numOfOpenningOrder > 0">0</span>
                                                 <span class="tooltip_opening_order hide" bind-show="navDrawer.numOfOpenningOrder > 0">
                                                     <i></i>Đơn hàng đang xử lý</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="javascript:void(0);" class="menu-parent " bind-event-click="navDrawer.showSubMenu(this)" data-name="products">
                                            <i class="fas fa-box"></i>
                                            <span class="menu-name">Sản phẩm</span>
                                            <span class="tooltip-menu"><i></i>Sản phẩm</span>
                                        </a>
                                    </li>
                                    <li class="menu-appFrame">
                                        <a href="#" title="Danh sách khách hàng" id="nav__link_customers" class="nav_link">
                                            {{--                                                <a href="/admin/customers" title="Danh sách khách hàng" id="nav__link_customers">--}}
                                            <i class="far fa-user"></i>
                                            <span class="menu-name">Khách hàng</span>
                                            <span class="tooltip-menu"><i></i>Khách hàng</span>
                                        </a>
                                    </li>
                                    <li class="menu-appFrame">
                                        <a href="#" title="Khuyến mãi" id="nav__link_price_rules" class="nav_link">
                                            {{--                                                <a href="/admin/discounts" title="Khuyến mãi" id="nav__link_price_rules">--}}
                                            <i class="fas fa-percent"></i>
                                            <span class="menu-name">Khuyến mãi</span>
                                            <span class="tooltip-menu"><i></i>Khuyến mãi</span>
                                        </a>
                                    </li>

                                </ul>

                            </nav>
                        </div>
                        <div class="next-nav__panel next-nav__panel--secondary  ">
                            <ol class="next-nav__list next-nav__list--secondary " data-nav-section="orders" id="NextNavOrders">
                                <li class="next-nav__item next-nav__item--header" aria-hidden="true">
                                    <h3 class="next-heading--callout clearfix">Đơn hàng
                                        <a style="float:right" href="#">
                                                    <span>
                                                        <i class="fa fa-bars close-submenu" aria-hidden="true"></i>
                                                    </span>
                                        </a>
                                    </h3>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/orders" id="nav__link_orders" title="Danh sách đơn hàng">Danh sách đơn hàng</a>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/draft_orders" id="nav__link_checkouts" title="Đơn hàng nháp">Đơn hàng nháp</a>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/checkouts" id="nav__link_checkouts" title="Đơn hàng chưa hoàn tất">Đơn chưa hoàn tất</a>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/shipments" id="nav__link_shipments">Phiếu giao hàng</a>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/shipments/cod" id="nav__link_cod" title="Quản lý COD">Quản lý COD</a>
                                </li>
                            </ol>
                            <ol class="next-nav__list next-nav__list--secondary " data-nav-section="products" id="NextNavProducts">
                                <li class="next-nav__item next-nav__item--header" aria-hidden="true">
                                    <h3 class="next-heading--callout clearfix">Sản phẩm <a style="float:right" href="#">
                                                    <span>
                                                        <i class="fa fa-bars close-submenu" aria-hidden="true"></i>
                                                    </span>
                                        </a>
                                    </h3>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/products" id="nav__link_products" title="Danh sách sản phẩm">Danh sách sản phẩm</a>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/collections" id="nav__link_collections" title="Danh mục sản phẩm">Danh mục sản phẩm</a>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/products/inventory" id="nav__link_variants" title="Quản lý kho">Quản lý kho</a>
                                </li>
                            </ol>
                            <ol class="next-nav__list next-nav__list--secondary " data-nav-section="website" id="NextNavWebsite">
                                <li class="next-nav__item next-nav__item--header" aria-hidden="true">
                                    <h3 class="next-heading--callout">Website <a style="float:right" href="#">
                                                    <span>
                                                        <i class="fa fa-bars close-submenu" aria-hidden="true"></i>
                                                    </span>
                                        </a>
                                    </h3>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/articles" id="nav__link_articles" title="Bài viết">Blog</a>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/pages" id="nav__link_pages" title="Trang nội dung">Trang nội dung</a>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/links" id="nav__link_links" title="Điều hướng">Menu</a>
                                </li>
                                <li class="next-nav__item">
                                    <a class="next-nav__link " href="/admin/themes" id="nav__link_themes" title="Giao diện">Giao diện</a>
                                </li>
                            </ol>

                        </div>
                    </div>
                </div>


            </aside>
        </div>
        <div class="ui-app-frame__aside-closer">
            <button class="ui-button ui-button--transparent ui-button--icon-only" id="btn-close-sidebar" aria-controls="AppFrameAside" aria-label="Close navigation" type="button" name="button">
                <i class="fas fa-outdent"></i>
            </button>
        </div>

    </aside>
    <main id="AppFrameMain" class="ui-app-frame__main">
        @yield('AppFrameMain')
    </main>

</div>
<script src="/js/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script src="/js/admin/app.js"></script>
@yield('body.js')
</body>
</html>
