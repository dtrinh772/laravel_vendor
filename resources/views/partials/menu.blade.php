<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="hidden-xs hidden-sm col-md-4 col-md-offset-2 col-lg-6 col-lg-offset-0">
                    <div class="top_left fw">
                        <ul>
                            <li class="cp-item">
                                <a href="" title="Đăng nhập">
                                    <i class="fa fa-sign-in-alt"></i>
                                    <span>Đăng nhập</span>
                                </a>
                            </li>
                            <li class="cp-item">
                                <a href="" title="Đăng xuất">
                                    <i class="fa fa-edit"></i>
                                    <span>Đăng xuất</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-2 col-sm-11 col-sm-offset-1 col-md-6 col-md-offset-0 col-lg-6">
                    <div class="top_right fw">
                        <div class="hotline hidden-xs">
                            Hotline : <a href="#"><strong>0123456789</strong></a>
                        </div>
                        <div class="search_bar">

                            {{ Form::open([
                                    'url' => '',
                                    'method' => 'GET'
                                ])
                            }}

                            <div class="input-group">
                                {!! Form::text('search', null, ['class'=> 'form-control', 'id' => 'search', 'title' => 'nhập từ khóa cần tìm kiếm', 'placeholder' => 'Tìm kiếm']); !!}
                                <button type="submit" class="btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>

                            {{  Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mainbar">
        <div class="container">
            <div class="row">
                <div class="menu-bar hidden-lg">
                    <a href="#nav-mobile">
                        <i class="fa fa-align-justify"></i>
                    </a>
                </div>
                <div class="hidden-xs col-sm-4 col-sm-offset-0 col-md-4 col-lg-4 item-mainbar">
                    <div class="header-social">
                        <ul class="inline-list social-icons">
                            <li>
                                <a href="https://facebook.com/" class="icon-fallback-text txt-facebook hv-bg-facebook hv-bd-facebook">
                                        <span class="icon icon-facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a class="icon-fallback-text txt-twitter hv-bg-twitter hv-bd-twitter" href="https://twitter.com/">
                                        <span class="icon icon-twitter" aria-hidden="true">
                                           <i class="fab fa-twitter"></i>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a class="icon-fallback-text txt-google-plus hv-bg-google-plus hv-bd-google-plus" href="https://plus.google.com/">
                                        <span class="icon icon-google-plus" aria-hidden="true">
                                            <i class="fab fa-google-plus-g"></i>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a class="icon-fallback-text txt-youtube hv-bg-youtube hv-bd-youtube" href="https://www.youtube.com">
                                        <span class="icon icon-youtube" aria-hidden="true">
                                            <i class="fab fa-youtube"></i>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a class="icon-fallback-text txt-instagram hv-bg-instagram hv-bd-instagram" href="https://www.instagram.com/">
                                        <span class="icon icon-instagram" aria-hidden="true">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-lg-4 item-mainbar">
                    <div class="logo">
                        <a title="VSII" href="/">
                            <img class="img-responsive" src="https://vsi-international.com/wp-content/uploads/2016/12/VSII-company-logo-1.png" alt="Logo Libra Technical">
                        </a>
                    </div>
                </div>
                <div class="col-xs-2 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-lg-4 item-mainbar">
                    <div class="top-cart-contain panel_cart">
                        <div class="mini-cart text-xs-center">
                            <div class="heading-cart">
                                <div class="img">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 50 50" height="50px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="50px" xml:space="preserve"><path d="M8,14L4,49h42l-4-35H8z" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"></path><rect fill="none" height="50" width="50"></rect><path d="M34,19c0-1.241,0-6.759,0-8  c0-4.971-4.029-9-9-9s-9,4.029-9,9c0,1.241,0,6.759,0,8" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"></path><circle cx="34" cy="19" r="2"></circle><circle cx="16" cy="19" r="2"></circle></svg>
                                </div>
                                <div class="info">
									<span class="cart_info">
										<span class="cartCount count_item_pr" id="cart-total">0</span>
									</span>
                                </div>
                            </div>
                            <div class="top-cart-content hidden-sm hidden-xs">
                                <ul id="cart-sidebar" class="mini-products-list count_li"><div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng.</p></div></ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="header-menu hidden-md hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <nav>
                        <ul id="nav" class="nav container">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Trang chủ</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="/gioi-thieu">Giới thiệu</a>
                            </li>

                            <li class="nav-item ">
                                <a href="/collections/all" class="nav-link">Sản phẩm <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/san-pham-noi-bat">Sản phẩm bán chạy</a>
                                    </li>

                                    <li class="dropdown-submenu nav-item-lv2">
                                        <a class="nav-link" href="/may-tinh-xach-tay">Máy tính xách tay
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                        <ul class="dropdown-menu">

                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/apple">Apple</a>
                                            </li>

                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/dell">Dell</a>
                                            </li>

                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/asus">Asus</a>
                                            </li>

                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/acer">Acer</a>
                                            </li>

                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/lenovo">Lenovo</a>
                                            </li>

                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/hp">HP</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/may-tinh-de-ban">Máy tính để bàn</a>
                                    </li>

                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="#">Sản phẩm khuyến mãi</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item ">
                                <a href="/may-tinh-xach-tay" class="nav-link">Laptop <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/apple">Apple</a>
                                    </li>

                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/dell">Dell</a>
                                    </li>

                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/acer">Acer</a>
                                    </li>

                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/hp">HP</a>
                                    </li>

                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/lenovo">Lenovo</a>
                                    </li>

                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/asus">Asus</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item ">
                                <a href="/phu-kien" class="nav-link">Phụ kiện <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/linh-kien-may-tinh">Linh kiện máy tính</a>
                                    </li>

                                </ul>
                            </li>

                            {{--                                <li class="nav-item ">--}}
                            {{--                                    <a class="nav-link" href="/blogs/all">Tin công nghệ</a>--}}
                            {{--                                </li>--}}

                            {{--                                <li class="nav-item ">--}}
                            {{--                                    <a href="/lien-he" class="nav-link">Liên hệ <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>--}}
                            {{--                                    <ul class="dropdown-menu">--}}

                            {{--                                        <li class="nav-item-lv2">--}}
                            {{--                                            <a class="nav-link" href="/huong-dan-su-dung">Hướng dẫn sử dụng</a>--}}
                            {{--                                        </li>--}}

                            {{--                                    </ul>--}}
                            {{--                                </li>--}}

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
