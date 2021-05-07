 <header class="ui-title-bar-container">
        <div class="ui-title-bar">
            <div class="ui-title-bar__navigation">
                <div class="ui-breadcrumbs">
                    <a href="/admin/products" class="ui-button ui-button--transparent ui-breadcrumb">
                        <i class="fas fa-chevron-left"></i>
                        <span class="ui-breadcrumb__item">Quay lại danh sách sản phẩm</span>
                    </a>
                </div>
            </div>
            <div class="ui-title-bar__main-group">
                <div class="ui-title-bar__heading-group">
                    <h1 class="ui-title-bar__title">
                        {{$title}}
                    </h1>
                </div>
            </div>
        </div><div class="collapsible-header">
         <div class="collapsible-header__heading">

         </div>
     </div>
    </header>
     @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
    <div class="ui-layout">
        <div class="ui-layout__sections">

            <div class="ui-layout__section ui-layout__section--primary">
                <div class="ui-layout__item">
                    <section class="ui-card" id="product-form-container">
                        <div class="ui-card__section">
                            <div class="ui-type-container">
                                <div class="next-input-wrapper">
                                    {!! Form::label('title', 'Tên sản phẩm', ['class' => 'next-label', 'for' => 'product-name']); !!}
                                    {!! Form::text('productName', null,[
                                                    'class' => 'next-input',
                                                    'placeholder' => 'Nhập tên sản phẩm',
                                                    'id' => 'product-name',
                                    ]);!!}
                                </div>
                                <div class="next-input-wrapper" id="description-product">
                                    {!! Form::label('title', 'Nội dung', ['class' => 'next-label', 'for' => 'content']); !!}
                                    {!! Form::textarea('description', null, [
                                                        'id' => 'editor',
                                                        'class' => 'next-input',
                                                        'style' => 'visibility:hidden; display: none;'
                                    ]);!!}

                                </div>
                            </div>
                        </div>
                    </section> <!-- Name and Desc Product -->
                    <section class="ui-card" id="product-images-container">
                        <div data-context="imageActions" id="product-images-content">
                            <header class="next-card__header">
                                <div class="next-grid next-grid--no-padding next-grid--vertically-centered">
                                    <div class="next-grid__cell">
                                        <h2 class="next-heading">Ảnh sản phẩm</h2>
                                    </div>

                                    <div class="next-grid__cell next-grid__cell--no-flex" >
                                        <div class="next-grid next-grid--no-outside-padding next-grid--vertically-centered" id="next-grid-show-hide">
                                            <div class="next-grid__cell next-grid__cell--no-flex" >
                                                <div class="styled-file-input">
                                                    <div class="btn btn--link" style="display:flex;">
                                                        <a  href="javascript:void(0)"
                                                            onclick="showOpenFormUpload(this)"
                                                            class="ui-button btn--link"
                                                            style="padding:0 15px;"
                                                            id="ht-cre-product-add-image">Thêm ảnh sản phẩm</a>
                                                        <input type="file" name="files[]" value id="image-upload" class="js-no-dirty hide" multiple accept="image/*" onchange="readUrl(this)">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="next-grid__cell next-grid__cell--no-flex hide" >
                                                <div class="btn btn--link">
                                                    <a class="ui-button btn--link" onclick="unSelected(this)" style="padding:0 15px;" >Bỏ chọn tất cả</a>
                                                </div>
                                                <div class="btn btn--link">
                                                    <a class="ui-button btn--link" style="padding:0 15px;" onclick="deleteSelectedImages(this)">Xoá ảnh đã chọn</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Form upload image products -->

                                </div>
                            </header>
                            <div class="next-card__section">
                                <div class="next-upload-dropzone__wrapper">
                                    <ol id="product-images" class="product-photo-grid product-photo-grid--is-showing-all clearfix hide ui-sortable dragable-product-images">

                                        <!-- insert image -->

                                    </ol>

                                    <div >
                                        <div class="next-upload-dropzone" >
                                            <div class="next-upload-dropzone__hit-area next-upload-dropzone__hit-area--padded">
                                                <img class="next-icon next-icon--size-24 next-upload-dropzone__icon" src="/images/upload-dropzone.png" />
                                                <h3 class="next-heading next-heading--no-margin next-upload-dropzone__heading">
                                                    <div data-bind-show="!dragging" class="styled-file-input hide">
                                                        Add images<input type="file" data-bind-event-change="fileInputChanged(event, this)" multiple="" accept="image/*" class="js-no-dirty">
                                                        or drag and drop to upload
                                                    </div>
                                                    <div >
                                                        Thả file ảnh vào đây để thêm mới
                                                    </div>
                                                </h3>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="ui-modal__body">
                                        <div class="ui-modal__section">
                                            <img data-bind-src="src" />
                                        </div>
                                    </div>
                                    <div class="ui-modal__footer">
                                        <div class="ui-modal__footer-actions">
                                            <div class="ui-modal__secondary-actions">
                                                <div class="button-group">
                                                    <button class="ui-button close-modal" onclick="closeModal(this)" data-dismiss="modal" type="button" name="button">Done</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- model view image -->
                        </div>
                    </section> <!-- section upload image -->
                </div>

                <div class="ui-layout__item" id="product-outer-variants">
                    <div  data-context="productVariantOptions">
                        <!-- <input type="hidden" name="product[variant][id]" id="product_variant_id"> -->
                        <section class="ui-card">
                            <header class="ui-card__header">
                                <h2 class="ui-heading">Giá sản phẩm</h2>
                            </header>
                            <div class="ui-card__section">
                                <div class="ui-type-container">
                                    <div class="ui-form__section">
                                        <div class="ui-form__group">
                                            <div class="next-input-wrapper">
                                                {!! Form::label('title', 'Giá thị trường', [
                                                                'class' => 'next-label'
                                                ]);!!}
                                                <div class="next-input--stylized next-input--has-content">
                                                    <span class="next-input__add-on next-input__add-on--before">₫</span>
                                                    {!! Form::text('price', null, [
                                                                    'id' => 'variant-price',
                                                                    'class' => 'next-input next-input--invisible js-money-field',
                                                                    'placeholder' => '0',
                                                                    'data-autonumeric' => 'autoNumeric'
                                                    ]);!!}
                                                </div>
                                            </div>
                                            <div class="next-input-wrapper">
                                                {!! Form::label('title', 'Giá giảm', [
                                                                'class' => 'next-label'
                                                ]);!!}
                                                <div class="next-input--stylized">
                                                    <span class="next-input__add-on next-input__add-on--before">₫</span>
                                                    {!! Form::text('reducedPrice', null, [
                                                                    'id' => 'variant-reduced_at_price',
                                                                    'class' => 'ext-input next-input--invisible js-money-field',
                                                                    'placeholder' => '0',
                                                                    'data-autonumeric' => 'autoNumeric'
                                                    ]);!!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> <!-- Price Products -->
                        <section class="ui-card" >
                            <header class="ui-card__header">
                                <h2 class="ui-heading">Kho hàng</h2>
                            </header>
                            <div class="ui-card__section">
                                <div class="ui-type-container">
                                    <div class="next-grid next-grid--no-outside-padding">
                                        <div class="next-grid__cell next-grid__cell--quarter">
                                            <div>
                                                <div>
                                                    <div class="next-input-wrapper">
                                                        {!! Form::label('title', 'Số lượng', [
                                                                        'class' => 'next-label'
                                                        ]); !!}

                                                        {!! Form::number('quantity', null, [
                                                                        'class' => "next-input next-input--number quantity-field next-input next-input--number no-spinbox"
                                                        ]); !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> <!-- Quantity products -->
                    </div>
                </div>

            </div>
            <div class="ui-layout__section ui-layout__section--secondary">
                <div class="ui-layout__item">
                    <div class="next-card">
                        <header class="next-card__header">
                            <h3 class="ui-heading">Trạng thái</h3>
                        </header>
                        <section class="next-card__section">
                            <div class="visibility" id="PublishingPanel" >
                                <div class="ui-form__section">
                                    <div class="ui-form__element">
                                        <fieldset class="ui-choice-list">
                                            <ul>
                                                <li>
                                                    <div class="next-input-wrapper">
                                                        {!! Form::label('title', 'Hiển thị', [
                                                                        'class' => 'next-label next-label--switch',
                                                                        'for' => 'active-true'
                                                        ]); !!}

                                                        {!! Form::radio('status', '1', true,[
                                                                        'id' => 'active-true',
                                                                        'class' => 'next-radio'
                                                        ]); !!}
                                                        <span class="next-radio--styled"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="next-input-wrapper">
                                                        {!! Form::label('title', 'Ẩn', [
                                                                        'class' => 'next-label next-label--switch',
                                                                        'for' => 'active-false'
                                                        ]); !!}

                                                        {!! Form::radio('status','0', false,[
                                                                        'id' => 'active-false',
                                                                        'class' => 'next-radio'
                                                        ]); !!}
                                                        <span class="next-radio--styled"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </section><!-- Trạng thái -->
                    </div>
                </div>
                <div class="ui-layout__item">
                    <section class="ui-card ui-card--type-aside">
                        <header class="ui-card__header">
                            <h2 class="ui-heading">Phân loại</h2>
                        </header>
                        <div class="ui-card__section">
                            <div class="ui-type-container">
                                <div class="next-input-wrapper"> <!-- loại sản phẩm  -->
                                    <label for="product_product_type">Loại</label>

                                    <div class="ui-popover__container ui-popover__container--full-width-container">
                                        <div>
                                            <div class="next-field__connected-wrapper">


                                                    {!! Form::text('category_id', $categoryName, [
                                                                'placeholder' => "Nhập loại sản phẩm",
                                                                'class' => "next-input next-field--connected",
                                                                'id' => "product_cate",
                                                                'onclick' => 'clickShowCate(this)'
                                                    ]); !!}

                                                <a class="btn btn--icon next-field--connected next-field--connected--no-flex" onclick="clickShowCate(this)">
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ui-popover ui-popover--full-width ui-popover--no-focus ui-popover--is-positioned-beneath" id="showCate" style="margin-right: 0px; margin-left: 0px;">
                                            <div class="ui-popover__tooltip">
                                            </div>
                                            <div class="ui-popover__content-wrapper">
                                                <div class="ui-popover__content" style="max-height: 160px;">
                                                    <div class="ui-popover__pane scroll-shadow--bottom">
                                                        <ul class="js-autocomplete-suggestions next-list next-list--compact next-list--toggles" id="popover-dropdown-1">

                                                            @foreach($categories as $category) <!-- show thể loại -->
                                                                <li role="option">
                                                                    <a class="next-list__item" selectable="" data-id="{{$category->id}}" onclick="selectedCate(this)">
                                                                        {{$category->categoryName}}
                                                                    </a>
                                                                </li>
                                                            @endforeach


                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="next-input-wrapper"> <!-- Thương hiệu  -->
                                    <label for="product_vendor">Thương hiệu</label>
                                    <div class="ui-popover__container ui-popover__container--full-width-container" >
                                        <div>
                                            <div class="next-field__connected-wrapper">
                                                {!! Form::text('brand_id', $brandName, [
                                                                'placeholder' => "Thương hiệu",
                                                                'class' => "next-input next-field--connected",
                                                                'id' => "product_brand",
                                                                'onclick' => "clickShowBrands(this)"
                                                ]); !!}
                                                <a class="btn btn--icon next-field--connected next-field--connected--no-flex" onclick="clickShowBrands(this)">
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ui-popover ui-popover--full-width ui-popover--no-focus ui-popover--is-positioned-above" id="showBrands" style="margin-right: 0px; margin-left: 0px;">
                                            <div class="ui-popover__tooltip"></div>
                                            <div class="ui-popover__content-wrapper">
                                                <div class="ui-popover__content" style="max-height: 112px;">
                                                    <div class="ui-popover__pane">
                                                        <ul class="js-autocomplete-suggestions next-list next-list--compact next-list--toggles" role="listbox" id="popover-dropdown-4">

                                                            @foreach($brands as $brand)
                                                                <li role="option">
                                                                    <a class="next-list__item " selectable="" id="selected-option-1" onclick="selectedBrand(this)">
                                                                        {{$brand->brandName}}
                                                                    </a>
                                                                </li>
                                                            @endforeach


                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Phân loại  -->

                        <div class="ui-card__section">
                            <div class="ui-type-container">
                                <div class="next-grid next-grid--no-outside-padding">
                                    <div class="next-grid__cell">
                                        <label for="tags" class="next-label">Tags</label>

                                    </div>
                                    <div class="next-grid__cell next-grid__cell--no-flex">
                                        <a>Xem toàn bộ tag</a>
                                    </div>
                                </div>
                                <div id="tags-event-bus">
                                    <a href="/admin/products/tags" class="modal_source" style="display: none"></a>
                                    <div class="ui-popover__container ui-popover__container--full-width-container" >
                                        <div>
                                            <div class="">
                                                {!! Form::text('tag_id', $tagName, [
                                                                'class' => 'next-input js-no-dirty',
                                                                'placeholder' => "Nhập tag cho sản phẩm",
                                                                'id' => "tags",
                                                                'onfocus' => 'focusShowTags(this)',

                                                ]); !!}
                                            </div>
                                        </div>
                                        <div class="ui-popover ui-popover--full-width ui-popover--no-focus ui-popover--is-positioned-above" id="showTags" style="margin-right: 0px; margin-left: 0px;">
                                            <div class="ui-popover__tooltip">
                                            </div>
                                            <div class="ui-popover__content-wrapper">
                                                <div class="ui-popover__content" style="max-height: 200px;">
                                                    <div class="ui-popover__pane">
                                                        <ul class="js-autocomplete-suggestions next-list next-list--compact next-list--toggles" role="listbox" id="popover-dropdown-8">

                                                            <li role="option">
                                                                <h3 class="next-heading next-heading--micro-uppercase-bordered">Tag gần đây</h3>
                                                            </li>

                                                        @foreach($tags as $tag) <!-- show tags -->
                                                            <li role="option">
                                                                <a class="next-list__item "
                                                                   data-id="{{$tag->id}}"
                                                                   selectable=""
                                                                   id="selected-option-4"
                                                                   onclick="clickSelectedTags(this)">
                                                                    {{$tag->tagName}}
                                                                </a>
                                                            </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="tag" value>
                                    <ul class="js-tag-list next-token-list st">

                                    </ul>
                                </div>
                            </div>
                        </div> <!-- Tags -->

                    </section>
                </div>

            </div>
        </div>
    </div>
    <div class="ui-page-actions">
        <div class="ui-page-actions__container">
            <div class="ui-page-actions__actions ui-page-actions__actions--primary">
                <div class="ui-page-actions__button-group">
                    <a class="btn"  href="/admin/products">Hủy</a>
                    <button name="button" type="submit" class="btn js-btn-primary js-btn-loadable btn-primary has-loading" >Lưu</button>
                </div>
            </div>
        </div>
    </div>

