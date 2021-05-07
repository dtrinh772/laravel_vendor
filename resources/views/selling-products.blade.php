@extends('layouts.master')

@section('head.title') Sản phẩm bán chạy @stop
@section('head.css')
    <link rel="stylesheet" href="/css/partials-css/selling.css">
    <link rel="stylesheet" href="/css/partials-css/sidebar.css">
@stop

@section('breadcrumb.name') Sản phẩm bán chạy @stop

@section('body.content')

    <section class="collection-template">

        <div class="container">
            <div class="row">
                <section class="main_container collection col-lg-9 col-md-9 col-sm-12 col-xs-12  col-lg-push-3 col-md-push-3 col-sm-12 col-xs-12">

                    <h1 class="title-head collection-title">
                        Sản phẩm nổi bật
                    </h1>


                    <div class="collection_description fw">
                        <p>Các sản phẩm nổi bật, công nghệ đỉnh cao từ các hãng công nghệ lớn nhất trên thế giới</p>
                    </div>


                    <div class="category-products products">


                        <div class="module-header margin-bottom-15">
                            <div class="sortPagiBar">
                                <div id="sort-by">
                                    <div class="border_sort">
                                        <select onchange="sortby(this.value)">
                                            <option class="valued" value="default">Mặc định</option>
                                            <option value="price-asc">Giá tăng dần</option>
                                            <option value="price-desc">Giá giảm dần</option>
                                            <option value="alpha-asc">Từ A-Z</option>
                                            <option value="alpha-desc">Từ Z-A</option>
                                            <option value="created-asc">Cũ đến mới</option>
                                            <option value="created-desc">Mới đến cũ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="module-content">
                            <section class="products-view products-view-grid">
                                <div class="row">

                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-5%</div>

                                                <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                   title="Macbook 2017 MNYM2 256GB 12 inches">
                                                    <img class="product-image"
                                                         src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                </a>

                                                <div class="fw product-action hidden-xs">
                                                    <form action="/cart/add" method="post"
                                                          class="variants form-nut-grid"
                                                          data-id="product-actions-11848764"
                                                          enctype="multipart/form-data">

                                                        <input class="hidden" type="hidden" name="variantId"
    value="18900383">
                                                        <button class="btn-cart btn button-hover-3 left-to"
     title="Xem thêm" type="button"
     onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
 <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        </button>

                                                    </form>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="11848764">
                                                        <div class="bizweb-product-reviews-star" data-score="0"
  data-number="5" title="Not rated yet!"
  style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
 <input name="score" type="hidden" readonly="">
                                                        </div>
                                                        <div>
 <img src="https://productreviews.sapoapps.vn//assets/images/user.png"
     width="18" height="17">
                                                        </div>

                                                    </div>
                                                </div>


                                                <h3 class="product-name a-center">
                                                    <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                       title="Macbook 2017 MNYM2 256GB 12 inches">
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

                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-5%</div>

                                                <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                   title="Macbook 2017 MNYM2 256GB 12 inches">
                                                    <img class="product-image"
                                                         src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                </a>

                                                <div class="fw product-action hidden-xs">
                                                    <form action="/cart/add" method="post"
                                                          class="variants form-nut-grid"
                                                          data-id="product-actions-11848764"
                                                          enctype="multipart/form-data">

                                                        <input class="hidden" type="hidden" name="variantId"
    value="18900383">
                                                        <button class="btn-cart btn button-hover-3 left-to"
     title="Xem thêm" type="button"
     onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
 <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        </button>

                                                    </form>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="11848764">
                                                        <div class="bizweb-product-reviews-star" data-score="0"
  data-number="5" title="Not rated yet!"
  style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
 <input name="score" type="hidden" readonly="">
                                                        </div>
                                                        <div>
 <img src="https://productreviews.sapoapps.vn//assets/images/user.png"
     width="18" height="17">
                                                        </div>

                                                    </div>
                                                </div>


                                                <h3 class="product-name a-center">
                                                    <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                       title="Macbook 2017 MNYM2 256GB 12 inches">
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

                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-5%</div>

                                                <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                   title="Macbook 2017 MNYM2 256GB 12 inches">
                                                    <img class="product-image"
                                                         src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                </a>

                                                <div class="fw product-action hidden-xs">
                                                    <form action="/cart/add" method="post"
                                                          class="variants form-nut-grid"
                                                          data-id="product-actions-11848764"
                                                          enctype="multipart/form-data">

                                                        <input class="hidden" type="hidden" name="variantId"
    value="18900383">
                                                        <button class="btn-cart btn button-hover-3 left-to"
     title="Xem thêm" type="button"
     onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
 <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        </button>

                                                    </form>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="11848764">
                                                        <div class="bizweb-product-reviews-star" data-score="0"
  data-number="5" title="Not rated yet!"
  style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
 <input name="score" type="hidden" readonly="">
                                                        </div>
                                                        <div>
 <img src="https://productreviews.sapoapps.vn//assets/images/user.png"
      width="18" height="17">
                                                        </div>

                                                    </div>
                                                </div>


                                                <h3 class="product-name a-center">
                                                    <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                       title="Macbook 2017 MNYM2 256GB 12 inches">
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

                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-5%</div>

                                                <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                   title="Macbook 2017 MNYM2 256GB 12 inches">
                                                    <img class="product-image"
                                                         src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                </a>

                                                <div class="fw product-action hidden-xs">
                                                    <form action="/cart/add" method="post"
                                                          class="variants form-nut-grid"
                                                          data-id="product-actions-11848764"
                                                          enctype="multipart/form-data">

                                                        <input class="hidden" type="hidden" name="variantId"
    value="18900383">
                                                        <button class="btn-cart btn button-hover-3 left-to"
     title="Xem thêm" type="button"
     onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
 <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        </button>

                                                    </form>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="11848764">
                                                        <div class="bizweb-product-reviews-star" data-score="0"
  data-number="5" title="Not rated yet!"
  style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
 <input name="score" type="hidden" readonly="">
                                                        </div>
                                                        <div>
 <img src="https://productreviews.sapoapps.vn//assets/images/user.png"
      width="18" height="17">
                                                        </div>

                                                    </div>
                                                </div>


                                                <h3 class="product-name a-center">
                                                    <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                       title="Macbook 2017 MNYM2 256GB 12 inches">
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

                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-5%</div>

                                                <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                   title="Macbook 2017 MNYM2 256GB 12 inches">
                                                    <img class="product-image"
                                                         src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                </a>

                                                <div class="fw product-action hidden-xs">
                                                    <form action="/cart/add" method="post"
                                                          class="variants form-nut-grid"
                                                          data-id="product-actions-11848764"
                                                          enctype="multipart/form-data">

                                                        <input class="hidden" type="hidden" name="variantId"
    value="18900383">
                                                        <button class="btn-cart btn button-hover-3 left-to"
     title="Xem thêm" type="button"
     onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
 <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        </button>

                                                    </form>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="11848764">
                                                        <div class="bizweb-product-reviews-star" data-score="0"
  data-number="5" title="Not rated yet!"
  style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
 <input name="score" type="hidden" readonly="">
                                                        </div>
                                                        <div>
 <img src="https://productreviews.sapoapps.vn//assets/images/user.png"
      width="18" height="17">
                                                        </div>

                                                    </div>
                                                </div>


                                                <h3 class="product-name a-center">
                                                    <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                       title="Macbook 2017 MNYM2 256GB 12 inches">
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

                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-5%</div>

                                                <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                   title="Macbook 2017 MNYM2 256GB 12 inches">
                                                    <img class="product-image"
                                                         src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                </a>

                                                <div class="fw product-action hidden-xs">
                                                    <form action="/cart/add" method="post"
                                                          class="variants form-nut-grid"
                                                          data-id="product-actions-11848764"
                                                          enctype="multipart/form-data">

                                                        <input class="hidden" type="hidden" name="variantId"
    value="18900383">
                                                        <button class="btn-cart btn button-hover-3 left-to"
     title="Xem thêm" type="button"
     onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
 <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        </button>

                                                    </form>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="11848764">
                                                        <div class="bizweb-product-reviews-star" data-score="0"
  data-number="5" title="Not rated yet!"
  style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
 <input name="score" type="hidden" readonly="">
                                                        </div>
                                                        <div>
 <img src="https://productreviews.sapoapps.vn//assets/images/user.png"
      width="18" height="17">
                                                        </div>

                                                    </div>
                                                </div>


                                                <h3 class="product-name a-center">
                                                    <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                       title="Macbook 2017 MNYM2 256GB 12 inches">
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

                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-5%</div>

                                                <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                   title="Macbook 2017 MNYM2 256GB 12 inches">
                                                    <img class="product-image"
                                                         src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                </a>

                                                <div class="fw product-action hidden-xs">
                                                    <form action="/cart/add" method="post"
                                                          class="variants form-nut-grid"
                                                          data-id="product-actions-11848764"
                                                          enctype="multipart/form-data">

                                                        <input class="hidden" type="hidden" name="variantId"
    value="18900383">
                                                        <button class="btn-cart btn button-hover-3 left-to"
     title="Xem thêm" type="button"
     onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
 <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        </button>

                                                    </form>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="11848764">
                                                        <div class="bizweb-product-reviews-star" data-score="0"
  data-number="5" title="Not rated yet!"
  style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
 <input name="score" type="hidden" readonly="">
                                                        </div>
                                                        <div>
 <img src="https://productreviews.sapoapps.vn//assets/images/user.png"
      width="18" height="17">
                                                        </div>

                                                    </div>
                                                </div>


                                                <h3 class="product-name a-center">
                                                    <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                       title="Macbook 2017 MNYM2 256GB 12 inches">
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

                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-5%</div>

                                                <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                   title="Macbook 2017 MNYM2 256GB 12 inches">
                                                    <img class="product-image"
                                                         src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                </a>

                                                <div class="fw product-action hidden-xs">
                                                    <form action="/cart/add" method="post"
                                                          class="variants form-nut-grid"
                                                          data-id="product-actions-11848764"
                                                          enctype="multipart/form-data">

                                                        <input class="hidden" type="hidden" name="variantId"
    value="18900383">
                                                        <button class="btn-cart btn button-hover-3 left-to"
     title="Xem thêm" type="button"
     onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
 <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        </button>

                                                    </form>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="11848764">
                                                        <div class="bizweb-product-reviews-star" data-score="0"
  data-number="5" title="Not rated yet!"
  style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
 <input name="score" type="hidden" readonly="">
                                                        </div>
                                                        <div>
 <img src="https://productreviews.sapoapps.vn//assets/images/user.png"
      width="18" height="17">
                                                        </div>

                                                    </div>
                                                </div>


                                                <h3 class="product-name a-center">
                                                    <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                       title="Macbook 2017 MNYM2 256GB 12 inches">
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

                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-5%</div>

                                                <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                   title="Macbook 2017 MNYM2 256GB 12 inches">
                                                    <img class="product-image"
                                                         src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                </a>

                                                <div class="fw product-action hidden-xs">
                                                    <form action="/cart/add" method="post"
                                                          class="variants form-nut-grid"
                                                          data-id="product-actions-11848764"
                                                          enctype="multipart/form-data">

                                                        <input class="hidden" type="hidden" name="variantId"
    value="18900383">
                                                        <button class="btn-cart btn button-hover-3 left-to"
     title="Xem thêm" type="button"
     onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
 <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        </button>

                                                    </form>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="11848764">
                                                        <div class="bizweb-product-reviews-star" data-score="0"
  data-number="5" title="Not rated yet!"
  style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
 <input name="score" type="hidden" readonly="">
                                                        </div>
                                                        <div>
 <img src="https://productreviews.sapoapps.vn//assets/images/user.png"
      width="18" height="17">
                                                        </div>

                                                    </div>
                                                </div>


                                                <h3 class="product-name a-center">
                                                    <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                       title="Macbook 2017 MNYM2 256GB 12 inches">
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

                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-5%</div>

                                                <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                   title="Macbook 2017 MNYM2 256GB 12 inches">
                                                    <img class="product-image"
                                                         src="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         data-lazyload="//bizweb.dktcdn.net/thumb/grande/100/316/516/products/1-1-6841aab4-2602-45be-870d-0d94ada7af6c.jpg?v=1528125927857"
                                                         alt="Macbook 2017 MNYM2 256GB 12 inches">
                                                </a>

                                                <div class="fw product-action hidden-xs">
                                                    <form action="/cart/add" method="post"
                                                          class="variants form-nut-grid"
                                                          data-id="product-actions-11848764"
                                                          enctype="multipart/form-data">

                                                        <input class="hidden" type="hidden" name="variantId"
    value="18900383">
                                                        <button class="btn-cart btn button-hover-3 left-to"
     title="Xem thêm" type="button"
     onclick="window.location.href='/macbook-2017-mnym2-256gb-12-inches'">
 <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        </button>

                                                    </form>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="11848764">
                                                        <div class="bizweb-product-reviews-star" data-score="0"
  data-number="5" title="Not rated yet!"
  style="color: rgb(255, 190, 0);">
         <i data-alt="1" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="2" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="3" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="4" class="far fa-star" title="Not rated yet!"></i>&nbsp;
         <i data-alt="5" class="far fa-star" title="Not rated yet!"></i>
 <input name="score" type="hidden" readonly="">
                                                        </div>
                                                        <div>
 <img src="https://productreviews.sapoapps.vn//assets/images/user.png"
      width="18" height="17">
                                                        </div>

                                                    </div>
                                                </div>


                                                <h3 class="product-name a-center">
                                                    <a href="/macbook-2017-mnym2-256gb-12-inches"
                                                       title="Macbook 2017 MNYM2 256GB 12 inches">
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

                                <div class="text-xs-right">

                                    <nav class="fw pagination-parent">
                                        <ul class="pagination clearfix">

                                            <li class="page-item hidden-xs disabled">
                                                <a class="page-link" href="#">«</a>
                                            </li>

                                            <li class="active page-item disabled">
                                                <a class="page-link" href="javascript:;">1</a>
                                            </li>

                                            <li class="page-item">
                                                <a class="page-link" onclick="doSearch(2)" href="javascript:;">2</a>
                                            </li>

                                            <li class="page-item">
                                                <a class="page-link" onclick="doSearch(3)" href="javascript:;">3</a>
                                            </li>

                                            <li class="page-item hidden-xs">
                                                <a class="page-link" onclick="doSearch(2)" href="javascript:;">»</a>
                                            </li>

                                        </ul>
                                    </nav>

                                </div>
                            </section>
                        </div>


                    </div>
                </section>

                {{--        SIDEBAR INLCUDE         --}}
                @include('partials.sidebar')

                <div id="open-filters" class="open-filters hidden-lg hidden-md">
                    <i class="fa fa-filter"></i>
                    <span>Lọc</span>
                </div>
            </div>
        </div>
    </section>

@stop
