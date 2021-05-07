@extends('layouts.master')

@section('head.title') Home @stop


@section('body.content')
    <section class="lib-section-1">
        <div class="section_slider fw">
            <div class="home-slider owl-carousel owl-theme dots-enable owl-loaded owl-drag" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-margin="0" data-dot="true" data-loop="true">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-2702px, 0px, 0px); transition: all 0.25s ease 0s; width: 8106px;">
                        <div class="owl-item " style="width: 1351px;">
                            <div class="item image-item">
                                <a href="#" title="Slider 1" class="clearfix">
                                    <img class="img-responsive" src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/slider_1_image.png?1564643916816" alt="slider-1">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1351px;">
                            <div class="item image-item">
                                <a href="#" title="Slider 2" class="clearfix">
                                    <img class="img-responsive" src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/slider_2_image.png?1564643916816" alt="slider-2">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="lib-section-2">
        <div class="fw section_hotdeal">
            <div class="container">
                <div class="row">
                    <div class="hidden-xs hidden-sm hidden-md col-lg-3 hotdeal_banner">
                        <div class="banner-item">
                            <a href="#" title="Khuyến mãi" class="image-hover-line">
                                <img src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/hotdeal_image.jpg?1564643916816" data-lazyload="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/hotdeal_image.jpg?1564643916816" alt="khuyen-mai" class="img-responsive image-line">
                                <span class="effect-line"></span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 hotdeal_items">
                        <div class="module-header">
                            <h2 class="title-head module-title module-index-title">
                                <a href="#" title="Hot deal">
                                    <span>Hot deal</span>
                                </a>
                            </h2>
                        </div>
                        <div class="module-content">
                            <div class="owl-hotdeal owl-theme owl-carousel dots-enable dots-top-right owl-loaded owl-drag" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xxs-items="1" data-margin="30" data-dot="true" data-autoplay="true">
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1755px;"><div class="owl-item active" style="width: 555px; margin-right: 30px;"><div class="item hotdeal-item">
                                                <div class="product-thumbnail">
                                                    <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
                                                        <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" alt="Dell XPS 15 9550 70073979 15.6 inches">
                                                    </a>
                                                </div>

                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
 Dell XPS 15 9550 70073979 15.6 inches
                                                        </a>
                                                    </h3>
                                                    <div class="fw product-vendor">
                                                        <label>Hãng :</label><span>Dell</span>
                                                    </div>
                                                    <div class="fw product-type">
                                                        <label>Loại :</label><span>Laptop</span>
                                                    </div>

                                                    <div class="product-review">
                                                        <div class="bizweb-product-reviews-badge" data-id="11848671">
 <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
     <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
     <input name="score" type="hidden" readonly="">
 </div>
 <div>
     <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
 </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box price-loop-style res-item">

                                                        <span class="special-price">
 <span class="price">35.990.000₫</span>
                                                        </span>

                                                        <span class="old-price">
 <span class="price">
         37.000.000₫
 </span>
                                                        </span>

                                                    </div>

                                                    <div class="fw product-inventory">
                                                        Còn hàng
                                                    </div>

                                                    <div class="fw product-action">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848671" enctype="multipart/form-data">
 <input type="hidden" name="variantId" value="18900285">
 <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
     <span><i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua ngay</span>
 </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                            <div class="item hotdeal-item">

                                                <div class="product-thumbnail">
                                                    <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
                                                        <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" alt="Dell XPS 13 9365 70130588 13.3 inches">
                                                    </a>
                                                </div>

                                                <div class="product-info">

                                                    <h3 class="product-name">
                                                        <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
 Dell XPS 13 9365 70130588 13.3 inches
                                                        </a>
                                                    </h3>

                                                    <div class="fw product-vendor">
                                                        <label>Hãng :</label><span>Dell</span>
                                                    </div>

                                                    <div class="fw product-type">
                                                        <label>Loại :</label><span>Laptop</span>
                                                    </div>

                                                    <div class="product-review">
                                                        <div class="bizweb-product-reviews-badge" data-id="11848661">

 <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
     <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
     <input name="score" type="hidden" readonly="">
 </div>

 <div>
     <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
 </div>

                                                        </div>
                                                    </div>

                                                    <div class="price-box price-loop-style res-item">

                                                        <span class="special-price">
 <span class="price">35.190.000₫</span>
                                                        </span>

                                                        <span class="old-price">
 <span class="price">
         37.000.000₫
 </span>
                                                        </span>

                                                    </div>

                                                    <div class="fw product-inventory">
                                                        Còn hàng
                                                    </div>

                                                    <div class="fw product-action">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848661" enctype="multipart/form-data">

 <input type="hidden" name="variantId" value="18900274">
 <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
     <span><i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua ngay</span>
 </button>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                            <div class="item hotdeal-item">

                                                <div class="product-thumbnail">
                                                    <a href="/man-hinh-may-tinh-dell-ultrasharp-up2716d" title="Màn hình máy tính Dell Ultrasharp UP2716D">
                                                        <img class="product-image" src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/swing.svg?1564643916816" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1.jpg?v=1528102220427" alt="Màn hình máy tính Dell Ultrasharp UP2716D">
                                                    </a>
                                                </div>

                                                <div class="product-info">

                                                    <h3 class="product-name">
                                                        <a href="/man-hinh-may-tinh-dell-ultrasharp-up2716d" title="Màn hình máy tính Dell Ultrasharp UP2716D">
 Màn hình máy tính Dell Ultrasharp UP2716D
                                                        </a>
                                                    </h3>

                                                    <div class="fw product-vendor">
                                                        <label>Hãng :</label><span>Dell</span>
                                                    </div>

                                                    <div class="fw product-type">
                                                        <label>Loại :</label><span>Màn hình máy tính</span>
                                                    </div>

                                                    <div class="product-review">
                                                        <div class="bizweb-product-reviews-badge" data-id="11846265">
 <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
     <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
     <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
     <input name="score" type="hidden" readonly="">
 </div>
 <div>
     <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
 </div>
                                                        </div>
                                                    </div>

                                                    <div class="price-box price-loop-style res-item">

                                                        <span class="special-price">
 <span class="price">12.750.000₫</span>
                                                        </span>

                                                        <span class="old-price">
 <span class="price">
         13.300.000₫
 </span>
                                                        </span>

                                                    </div>

                                                    <div class="fw product-inventory">
                                                        Chỉ còn <strong>2</strong> sản phẩm
                                                    </div>

                                                    <div class="fw product-action">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11846265" enctype="multipart/form-data">

 <input type="hidden" name="variantId" value="18896558">
 <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
     <span><i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua ngay</span>
 </button>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 hotdeal_list">
                        <div class="module-header">
                            <h2 class="title-head module-title module-index-title">
                                <a href="san-pham-noi-bat" title="Mua nhiều">
                                    <span>Mua nhiều</span>
                                </a>
                            </h2>
                        </div>
                        <div class="module-content">

                            <div class="owl-deallist owl-theme owl-carousel dots-enable dots-top-right owl-loaded owl-drag" data-lg-items="1" data-md-items="1" data-sm-items="2" data-xs-items="2" data-xxs-items="1" data-margin="30" data-dot="true" data-autoplay="true">

                                <!-- ADD DIV -->

                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 586px;">

                                        <div class="owl-item" style="width: 263px; margin-right: 30px;">
                                            <div class="item hotdeal-list-items">

                                                <div class="product-index-item-list">
                                                    <div class="product-thumbnail">
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
 <img src="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches" class="img-responsive">
                                                        </a>
                                                    </div>

                                                    <div class="product-info">

                                                        <div class="product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>

                                                        <h3 class="fw product-name">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>

                                                        <div class="price-box price-loop-style res-item">

 <span class="special-price">
     <span class="price">28.490.000₫</span>
 </span>

 <span class="old-price">
     <span class="price">
29.860.000₫
     </span>
 </span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-index-item-list">
                                                    <div class="product-thumbnail">
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
 <img src="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches" class="img-responsive">
                                                        </a>
                                                    </div>

                                                    <div class="product-info">

                                                        <div class="product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>

                                                        <h3 class="fw product-name">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>

                                                        <div class="price-box price-loop-style res-item">

 <span class="special-price">
     <span class="price">28.490.000₫</span>
 </span>

 <span class="old-price">
     <span class="price">
29.860.000₫
     </span>
 </span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-index-item-list">
                                                    <div class="product-thumbnail">
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
 <img src="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches" class="img-responsive">
                                                        </a>
                                                    </div>

                                                    <div class="product-info">

                                                        <div class="product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>

                                                        <h3 class="fw product-name">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>

                                                        <div class="price-box price-loop-style res-item">

 <span class="special-price">
     <span class="price">28.490.000₫</span>
 </span>

 <span class="old-price">
     <span class="price">
29.860.000₫
     </span>
 </span>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 263px; margin-right: 30px;">
                                            <div class="item hotdeal-list-items">

                                                <div class="product-index-item-list">
                                                    <div class="product-thumbnail">
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
 <img src="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches" class="img-responsive">
                                                        </a>
                                                    </div>

                                                    <div class="product-info">

                                                        <div class="product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>

                                                        <h3 class="fw product-name">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>

                                                        <div class="price-box price-loop-style res-item">

 <span class="special-price">
     <span class="price">28.490.000₫</span>
 </span>

 <span class="old-price">
     <span class="price">
29.860.000₫
     </span>
 </span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-index-item-list">
                                                    <div class="product-thumbnail">
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
 <img src="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches" class="img-responsive">
                                                        </a>
                                                    </div>

                                                    <div class="product-info">

                                                        <div class="product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>

                                                        <h3 class="fw product-name">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>

                                                        <div class="price-box price-loop-style res-item">

 <span class="special-price">
     <span class="price">28.490.000₫</span>
 </span>

 <span class="old-price">
     <span class="price">
29.860.000₫
     </span>
 </span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-index-item-list">
                                                    <div class="product-thumbnail">
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
 <img src="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches" class="img-responsive">
                                                        </a>
                                                    </div>

                                                    <div class="product-info">

                                                        <div class="product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>

                                                        <h3 class="fw product-name">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>

                                                        <div class="price-box price-loop-style res-item">

 <span class="special-price">
     <span class="price">28.490.000₫</span>
 </span>

 <span class="old-price">
     <span class="price">
29.860.000₫
     </span>
 </span>

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
    </section>
    <section class="lib-section-3">
        <div class="fw section_privacy">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="owl-theme owl-theme-section3 owl-carousel dots-enable owl-loaded owl-drag" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xxs-items="1" data-margin="30">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1170px;">
                                    <div class="owl-item" style="width: 360px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="privacy_image">
                                                <span>
                                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1910 1910" preserveAspectRatio="xMidYMid meet">
                                                        <g id="layer1" fill="#fff" stroke="none"><path d="M1225 1876 c-9 -13 -114 -185 -234 -381 l-219 -357 -378 -232 c-356 -218 -379 -233 -382 -262 -2 -17 3 -35 10 -41 27 -22 1811 -594 1842 -591 27 3 31 7 34 34 3 31 -569 1815 -590 1842 -18 21 -66 14 -83 -12z m260 -841 c120 -369 226 -697 236 -730 l19 -59 -430 429 c-237 237 -430 433 -430 437 0 4 84 145 187 314 118 193 189 300 194 292 3 -7 104 -314 224 -683z m-250 -435 l429 -429 -89 28 c-208 65 -1371 444 -1383 451 -8 4 99 76 290 193 167 102 308 186 313 186 6 1 203 -192 440 -429z"></path></g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="privacy_info">
                                                <div class="privacy_title">
                                                    <span>Miễn phí vận chuyển</span>
                                                </div>
                                                <div class="privacy_desc">
                                                    <span>Bán kính 10km. Trên 10km, phí ship theo đối tác</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 360px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="privacy_image">
                                                <span>
                                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2370 2360" preserveAspectRatio="xMidYMid meet">
                                                        <g id="layer2" fill="#fff" stroke="none">
 <path d="M996 2334 c-21 -21 -20 -42 5 -117 11 -34 24 -93 28 -132 8 -69 -2 -215 -17 -241 -5 -9 -24 0 -71 37 -135 105 -274 152 -448 153 -104 1 -115 -1 -135 -22 -21 -21 -23 -31 -23 -140 1 -180 48 -318 155 -450 34 -42 45 -62 35 -66 -7 -2 -49 -10 -94 -16 -94 -14 -209 -2 -298 32 -65 24 -100 18 -114 -19 -9 -23 -4 -40 32 -112 78 -159 252 -306 431 -365 84 -29 223 -46 308 -39 l55 4 39 -81 c54 -113 145 -239 251 -345 188 -189 390 -306 644 -372 176 -45 502 -42 544 5 23 25 40 181 34 302 -18 333 -152 626 -401 876 -114 113 -235 203 -359 264 l-64 32 -5 136 c-4 115 -9 150 -32 217 -68 199 -202 357 -378 446 -65 33 -99 36 -122 13z m223 -236 c146 -146 212 -336 189 -545 -5 -50 -5 -90 0 -99 5 -9 40 -30 77 -46 377 -160 671 -533 741 -939 20 -119 17 -315 -6 -329 -28 -18 -255 -11 -363 11 -319 64 -615 268 -799 549 -48 72 -118 209 -118 229 0 6 -10 17 -23 26 -20 13 -35 13 -104 4 -197 -28 -419 53 -558 202 -31 34 -55 62 -53 64 2 1 35 -1 73 -5 146 -16 313 17 457 92 101 52 128 78 128 122 0 56 8 65 63 72 62 9 81 27 135 132 71 137 87 206 87 374 0 82 3 148 6 148 3 0 34 -28 68 -62z m-547 -208 c77 -26 177 -85 241 -142 l47 -43 -25 -42 c-22 -36 -31 -43 -58 -43 -18 0 -49 -5 -69 -10 -39 -11 -49 -29 -63 -121 -4 -28 -13 -40 -45 -58 l-39 -22 -38 42 c-103 113 -161 245 -171 388 l-5 84 81 -6 c44 -3 109 -16 144 -27z"></path><path d="M1625 907 c-116 -45 -176 -132 -178 -259 -1 -55 4 -76 29 -124 33 -65 92 -117 152 -134 197 -54 374 82 360 277 -8 109 -62 189 -158 232 -51 23 -155 27 -205 8z m173 -127 c44 -27 72 -76 72 -128 0 -78 -55 -144 -130 -157 -91 -15 -188 78 -176 169 13 108 142 172 234 116z"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="privacy_info">
                                                <div class="privacy_title">
                                                    <span>Giao hàng nhanh</span>
                                                </div>
                                                <div class="privacy_desc">
                                                    <span>Nội thành: 1h. Ngoại thành: 3h. Ngoại tỉnh: 3 ngày</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 360px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="privacy_image">
                                                <span><svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1870 1950" preserveAspectRatio="xMidYMid meet"><g id="layer3" fill="#fff" stroke="none"><path d="M300 1918 c-21 -48 -290 -993 -290 -1019 0 -17 7 -32 17 -37 31 -17 491 -152 516 -152 28 0 47 17 47 42 0 10 4 18 9 18 25 0 263 -276 299 -346 18 -34 32 -180 26 -257 -6 -65 -4 -75 17 -101 30 -38 76 -56 145 -56 54 0 59 2 95 40 72 75 94 216 70 448 -4 47 -3 76 4 81 22 18 126 33 280 40 174 8 211 19 267 78 63 66 78 192 33 277 -16 31 -23 56 -19 71 8 34 -21 125 -51 157 -14 15 -25 38 -25 51 0 37 -49 125 -81 144 -16 9 -34 32 -40 50 -15 46 -59 79 -124 94 -46 10 -84 9 -228 -5 -94 -10 -237 -20 -316 -23 -121 -5 -143 -4 -139 8 3 8 20 65 38 128 31 110 31 114 13 131 -20 20 -482 160 -526 160 -19 0 -31 -7 -37 -22z m288 -143 c95 -29 175 -55 178 -58 3 -3 -9 -52 -26 -108 -17 -57 -74 -252 -127 -434 -52 -181 -98 -337 -102 -346 -5 -15 -29 -10 -199 41 -107 32 -196 60 -198 63 -3 3 192 692 252 890 4 13 11 16 27 11 12 -4 100 -31 195 -59z m917 -337 c26 -14 35 -28 35 -55 0 -15 13 -31 40 -48 46 -29 70 -70 70 -119 0 -26 9 -43 36 -70 36 -36 37 -38 31 -98 -5 -55 -3 -64 24 -101 36 -50 39 -113 8 -164 -35 -57 -65 -66 -244 -74 -171 -7 -234 -18 -294 -49 -58 -29 -65 -57 -51 -190 16 -143 9 -255 -20 -316 -26 -53 -39 -60 -87 -48 l-35 9 -3 120 c-1 66 -8 143 -14 170 -20 83 -131 235 -303 411 l-69 70 77 266 77 266 116 0 c105 0 462 27 486 37 15 6 98 -6 120 -17z"></path></g></svg></span>
                                            </div>
                                            <div class="privacy_info">
                                                <div class="privacy_title">
                                                    <span>Sản phẩm chính hãng</span>
                                                </div>
                                                <div class="privacy_desc">
                                                    <span>Từ nhà sản xuất và các đơn vị cung cấp chính thức</span>
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
    </section>
    <section class="lib-section-4">
        <div class="fw section_banner section_large_banner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a class="image-hover-line" href="#" title="Large Banner">
                            <img class="img-responsive image-line" src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/large_banner_1_image.jpg?1564643916816" data-lazyload="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/large_banner_1_image.jpg?1564643916816" alt="large-banner">
                            <span class="effect-line"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lib-section-5">
        <div class="fw section_collection_products">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="module-header">
                            <h2 class="title-head module-title module-index-title">
                                <a href="san-pham-noi-bat" title="baajtbật">
                                    <span>Sản phẩm nổi bật</span>
                                </a>
                            </h2>
                        </div>
                        <div class="module-content">
                            <div class="section-5 owl-carousel owl-theme dots-enable dots-top-right owl-loaded owl-drag" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-margin="30" data-dot="true">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-702px, 0px, 0px); transition: all 0.75s ease 0s; width: 1872px;">
                                        <div class="owl-item">
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-24%</div>
                                                        <a href="/smart-tivi-samsung-55-inch-ua55mu6400" title="Smart Tivi Samsung 55 inch UA55MU6400">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-60bdf43f-c054-48c2-9245-72c3a0eeca89.jpg?v=1528127807917" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-60bdf43f-c054-48c2-9245-72c3a0eeca89.jpg?v=1528127807917" alt="Smart Tivi Samsung 55 inch UA55MU6400">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11849067" enctype="multipart/form-data">

     <input type="hidden" name="variantId" value="18901267">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">

                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11849067">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/smart-tivi-samsung-55-inch-ua55mu6400" title="Smart Tivi Samsung 55 inch UA55MU6400">
     Smart Tivi Samsung 55 inch UA55MU6400
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">22.090.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
28.990.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item">
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848764" enctype="multipart/form-data">
     <input class="hidden" type="hidden" name="variantId" value="18900383">
     <button class="btn-cart btn button-hover-3 left-to" title="Xem thêm" type="button" onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
         <span><i class="fa fa-eye" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">28.490.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
29.860.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-14%</div>
                                                        <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" alt="Dell Inspiron 7577 N7577C 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848681" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900295">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848681">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
     Dell Inspiron 7577 N7577C 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">37.950.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
43.989.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-3%</div>
                                                        <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" alt="Dell XPS 15 9550 70073979 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848671" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900285">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>
 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848671">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
     Dell XPS 15 9550 70073979 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">35.990.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
37.000.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" alt="Dell XPS 13 9365 70130588 13.3 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848661" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900274">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
                                                         <div class="bizweb-product-reviews-badge" data-id="11848661">
                                                             <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
                                                                 <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
                                                                 <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
                                                                 <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
                                                                 <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
                                                                 <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
                                                                 <input name="score" type="hidden" readonly="">
                                                             </div>
                                                             <div>
                                                                 <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
                                                             </div>
                                                         </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
                                                             <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
                                                                 Dell XPS 13 9365 70130588 13.3 inches
                                                             </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
                                                             <span class="special-price">
                                                                 <span class="price">35.190.000₫</span>
                                                             </span>
                                                             <span class="old-price">
                                                                 <span class="price">
                                                            37.000.000₫
                                                                 </span>
                                                             </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
                                                             <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                                                                                    </a>
                                                                                                                    <div class="fw product-action hidden-xs">
                                                             <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848764" enctype="multipart/form-data">
                                                                 <input class="hidden" type="hidden" name="variantId" value="18900383">
                                                                 <button class="btn-cart btn button-hover-3 left-to" title="Xem thêm" type="button" onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
                                                                     <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                                 </button>

                                                             </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
                                                        <span class="special-price">
 <span class="price">28.490.000₫</span>
                                                        </span>
 <span class="old-price">
 <span class="price">
         29.860.000₫
 </span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-14%</div>
                                                        <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" alt="Dell Inspiron 7577 N7577C 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848681" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900295">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848681">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
     Dell Inspiron 7577 N7577C 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">37.950.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
43.989.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-3%</div>
                                                        <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" alt="Dell XPS 15 9550 70073979 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848671" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900285">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>
 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848671">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
     Dell XPS 15 9550 70073979 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
                                                        <span class="special-price">
 <span class="price">35.990.000₫</span>
                                                        </span>
 <span class="old-price">
 <span class="price">
         37.000.000₫
 </span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" alt="Dell XPS 13 9365 70130588 13.3 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848661" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900274">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848661">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
     Dell XPS 13 9365 70130588 13.3 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">35.190.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
37.000.000₫
     </span>
 </span>
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
    </section>
    <section class="lib-section-6">
        <section class="fw section_banner section_medium_banners">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 banner_first">
                        <div class="item">
                            <a href="#" title="Banner 1" class="image-hover-line">
                                <img src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/medium_banner_1_image.jpg?1564643916816" data-lazyload="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/medium_banner_1_image.jpg?1564643916816" alt="Banner 1" class="img-responsive image-line">
                                <span class="effect-line"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                        <div class="item">
                            <a href="#" title="Banner 2" class="image-hover-line">
                                <img src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/medium_banner_2_image.jpg?1564643916816" data-lazyload="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/medium_banner_2_image.jpg?1564643916816" alt="Banner 2" class="img-responsive image-line">
                                <span class="effect-line"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="lib-section-7">
        <div class="fw section_collection_products">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="module-header">
                            <h2 class="title-head module-title module-index-title">
                                <a href="san-pham-noi-moi" title="Sản phẩm mới">
                                    <span>Sản phẩm mới</span>
                                </a>
                            </h2>
                        </div>
                        <div class="module-content">
                            <div class="coloned section-5 owl-carousel owl-theme dots-enable dots-top-right owl-loaded owl-drag" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-margin="30" data-dot="true">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-702px, 0px, 0px); transition: all 0.75s ease 0s; width: 1872px;">
                                        <div class="owl-item">
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-24%</div>
                                                        <a href="/smart-tivi-samsung-55-inch-ua55mu6400" title="Smart Tivi Samsung 55 inch UA55MU6400">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-60bdf43f-c054-48c2-9245-72c3a0eeca89.jpg?v=1528127807917" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-60bdf43f-c054-48c2-9245-72c3a0eeca89.jpg?v=1528127807917" alt="Smart Tivi Samsung 55 inch UA55MU6400">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11849067" enctype="multipart/form-data">

     <input type="hidden" name="variantId" value="18901267">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">

                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11849067">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/smart-tivi-samsung-55-inch-ua55mu6400" title="Smart Tivi Samsung 55 inch UA55MU6400">
     Smart Tivi Samsung 55 inch UA55MU6400
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">22.090.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
28.990.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item">
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848764" enctype="multipart/form-data">
     <input class="hidden" type="hidden" name="variantId" value="18900383">
     <button class="btn-cart btn button-hover-3 left-to" title="Xem thêm" type="button" onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
         <span><i class="fa fa-eye" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">28.490.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
29.860.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-14%</div>
                                                        <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" alt="Dell Inspiron 7577 N7577C 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848681" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900295">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848681">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
     Dell Inspiron 7577 N7577C 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">37.950.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
43.989.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-3%</div>
                                                        <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" alt="Dell XPS 15 9550 70073979 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848671" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900285">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>
 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848671">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
     Dell XPS 15 9550 70073979 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">35.990.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
37.000.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" alt="Dell XPS 13 9365 70130588 13.3 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848661" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900274">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848661">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
     Dell XPS 13 9365 70130588 13.3 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">35.190.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
37.000.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-24%</div>
                                                        <a href="/smart-tivi-samsung-55-inch-ua55mu6400" title="Smart Tivi Samsung 55 inch UA55MU6400">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-60bdf43f-c054-48c2-9245-72c3a0eeca89.jpg?v=1528127807917" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-60bdf43f-c054-48c2-9245-72c3a0eeca89.jpg?v=1528127807917" alt="Smart Tivi Samsung 55 inch UA55MU6400">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11849067" enctype="multipart/form-data">

     <input type="hidden" name="variantId" value="18901267">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">

                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11849067"><div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div><div><img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17"></div></div>
                                                        </div>


                                                        <h3 class="product-name a-center">
 <a href="/smart-tivi-samsung-55-inch-ua55mu6400" title="Smart Tivi Samsung 55 inch UA55MU6400">
     Smart Tivi Samsung 55 inch UA55MU6400
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">22.090.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
28.990.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848764" enctype="multipart/form-data">
     <input class="hidden" type="hidden" name="variantId" value="18900383">
     <button class="btn-cart btn button-hover-3 left-to" title="Xem thêm" type="button" onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
         <span><i class="fa fa-eye" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">28.490.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
29.860.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-14%</div>
                                                        <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" alt="Dell Inspiron 7577 N7577C 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848681" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900295">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848681">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
     Dell Inspiron 7577 N7577C 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">37.950.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
43.989.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-3%</div>
                                                        <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" alt="Dell XPS 15 9550 70073979 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848671" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900285">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>
 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848671">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
     Dell XPS 15 9550 70073979 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">35.990.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
37.000.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" alt="Dell XPS 13 9365 70130588 13.3 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848661" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900274">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848661">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
     Dell XPS 13 9365 70130588 13.3 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">35.190.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
37.000.000₫
     </span>
 </span>
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
    </section>
    <section class="lib-section-8">
        <div class="fw section_banner section_large_banner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a class="image-hover-line" href="#" title="Large Banner">
                            <img class="img-responsive image-line" src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/large_banner_2_image.jpg?1564643916816" data-lazyload="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/large_banner_2_image.jpg?1564643916816" alt="large-banner">
                            <span class="effect-line"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lib-section-9">
        <div class="fw section_collection_products">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="module-header">
                            <h2 class="title-head module-title module-index-title">
                                <a href="san-pham-khuyen-mai" title="Sản phẩm khuyến mãi">
                                    <span>khuyến mãi</span>
                                </a>
                            </h2>
                        </div>
                        <div class="module-content">
                            <div class="coloned section-5 owl-carousel owl-theme dots-enable dots-top-right owl-loaded owl-drag" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-margin="30" data-dot="true">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-702px, 0px, 0px); transition: all 0.75s ease 0s; width: 1872px;">
                                        <div class="owl-item">
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-24%</div>
                                                        <a href="/smart-tivi-samsung-55-inch-ua55mu6400" title="Smart Tivi Samsung 55 inch UA55MU6400">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-60bdf43f-c054-48c2-9245-72c3a0eeca89.jpg?v=1528127807917" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-60bdf43f-c054-48c2-9245-72c3a0eeca89.jpg?v=1528127807917" alt="Smart Tivi Samsung 55 inch UA55MU6400">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11849067" enctype="multipart/form-data">

     <input type="hidden" name="variantId" value="18901267">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">

                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11849067">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/smart-tivi-samsung-55-inch-ua55mu6400" title="Smart Tivi Samsung 55 inch UA55MU6400">
     Smart Tivi Samsung 55 inch UA55MU6400
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">22.090.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
28.990.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item">
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848764" enctype="multipart/form-data">
     <input class="hidden" type="hidden" name="variantId" value="18900383">
     <button class="btn-cart btn button-hover-3 left-to" title="Xem thêm" type="button" onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
         <span><i class="fa fa-eye" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">28.490.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
29.860.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-14%</div>
                                                        <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" alt="Dell Inspiron 7577 N7577C 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848681" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900295">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848681">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
     Dell Inspiron 7577 N7577C 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">37.950.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
43.989.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-3%</div>
                                                        <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" alt="Dell XPS 15 9550 70073979 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848671" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900285">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>
 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848671">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
     Dell XPS 15 9550 70073979 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">35.990.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
37.000.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" alt="Dell XPS 13 9365 70130588 13.3 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848661" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900274">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848661">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
     Dell XPS 13 9365 70130588 13.3 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">35.190.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
37.000.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-24%</div>
                                                        <a href="/smart-tivi-samsung-55-inch-ua55mu6400" title="Smart Tivi Samsung 55 inch UA55MU6400">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-60bdf43f-c054-48c2-9245-72c3a0eeca89.jpg?v=1528127807917" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-60bdf43f-c054-48c2-9245-72c3a0eeca89.jpg?v=1528127807917" alt="Smart Tivi Samsung 55 inch UA55MU6400">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11849067" enctype="multipart/form-data">

     <input type="hidden" name="variantId" value="18901267">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">

                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11849067"><div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div><div><img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17"></div></div>
                                                        </div>


                                                        <h3 class="product-name a-center">
 <a href="/smart-tivi-samsung-55-inch-ua55mu6400" title="Smart Tivi Samsung 55 inch UA55MU6400">
     Smart Tivi Samsung 55 inch UA55MU6400
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">22.090.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
28.990.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857" alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848764" enctype="multipart/form-data">
     <input class="hidden" type="hidden" name="variantId" value="18900383">
     <button class="btn-cart btn button-hover-3 left-to" title="Xem thêm" type="button" onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
         <span><i class="fa fa-eye" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848764">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/macbook-2017-mnym2-256gb-12-inches" title="Macbook 2017 MNYM2 256GB 12 inches">
     Macbook 2017 MNYM2 256GB 12 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">28.490.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
29.860.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-14%</div>
                                                        <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/4-1-36883d1c-6c45-4d83-972f-0929d53a1881.jpg?v=1528125132237" alt="Dell Inspiron 7577 N7577C 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848681" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900295">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848681">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-inspiron-7577-n7577c-15-6-inches" title="Dell Inspiron 7577 N7577C 15.6 inches">
     Dell Inspiron 7577 N7577C 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">37.950.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
43.989.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-3%</div>
                                                        <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/3-1-7932856d-3080-46e1-b314-e5e4456b14f0.jpg?v=1528124954810" alt="Dell XPS 15 9550 70073979 15.6 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848671" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900285">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>
 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848671">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-xps-15-9550-70073979-15-6-inches" title="Dell XPS 15 9550 70073979 15.6 inches">
     Dell XPS 15 9550 70073979 15.6 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">35.990.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
37.000.000₫
     </span>
 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <div class="tag-item tag-sale sale-flash">-5%</div>
                                                        <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
 <img class="product-image" src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/2-1-6d6e32cd-0aec-4c2c-91fa-86c6f8b6c169.jpg?v=1528124657823" alt="Dell XPS 13 9365 70130588 13.3 inches">
                                                        </a>
                                                        <div class="fw product-action hidden-xs">
 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-11848661" enctype="multipart/form-data">
     <input type="hidden" name="variantId" value="18900274">
     <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
         <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
     </button>

 </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="fw product-review">
 <div class="bizweb-product-reviews-badge" data-id="11848661">
     <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
         <input name="score" type="hidden" readonly="">
     </div>
     <div>
         <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
     </div>
 </div>
                                                        </div>
                                                        <h3 class="product-name a-center">
 <a href="/dell-xps-13-9365-70130588-13-3-inches" title="Dell XPS 13 9365 70130588 13.3 inches">
     Dell XPS 13 9365 70130588 13.3 inches
 </a>
                                                        </h3>
                                                        <div class="price-box price-loop-style res-item">
 <span class="special-price">
     <span class="price">35.190.000₫</span>
 </span>
 <span class="old-price">
     <span class="price">
37.000.000₫
     </span>
 </span>
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
    </section>
    <section class="lib-section-10">
        <section class="fw section_brands">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="module-header">
                            <h2 class="title-head module-title module-index-title">
                                <a href="#">
                                    <span>Thương hiệu</span>
                                </a>
                            </h2>
                        </div>
                        <div class="module-content">
                            <div class="section-10 owl-theme owl-carousel nav-enable nav-left-right owl-loaded ">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        <div class="owl-item" >
                                            <div class="item">
                                                <a href="#">
                                                    <img src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/brand_1_image.png?1564643916816" alt="Asus" class="img-responsive">
                                                </a>
                                            </div>
                                        </div >
                                        <div class="owl-item"  >
                                            <div class="item">
                                                <a href="#">
                                                    <img src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/brand_2_image.png?1564643916816" alt="HTC" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item"  >
                                            <div class="item">
                                                <a href="#">
                                                    <img src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/brand_3_image.png?1564643916816" alt="Lenovo" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item"  >
                                            <div class="item">
                                                <a href="#">
                                                    <img src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/brand_4_image.png?1564643916816" alt="Dell" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item"  >
                                            <div class="item">
                                                <a href="#">
                                                    <img src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/brand_5_image.png?1564643916816" alt="Intel" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item"  >
                                            <div class="item">
                                                <a href="#">
                                                    <img src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/brand_6_image.png?1564643916816" alt="HP" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item"  >
                                            <div class="item">
                                                <a href="#">
                                                    <img src="//bizweb.dktcdn.net/100/316/516/themes/671723/assets/brand_7_image.png?1564643916816" alt="Acer" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

@stop
