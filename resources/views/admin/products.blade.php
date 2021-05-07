    @extends('layouts.appAdmin')

    @section('head.title') Products @stop

    @section('head.css')

    @stop

    @section('AppFrameMain')

        <div class="wrapper" id="wrapper">
            <div id="body" class="page-content clearfix" data-tg-refresh="body">
                <div id="content">
                    <style type="text/css">
                        .note {
                            color: #798c9c;
                            font-weight: normal;
                            text-transform: none;
                        }

                        @media (max-width:768px) {
                            .bulk-actions-mobile {
                                left: 22px !important;
                            }
                        }

                        @media (min-width:419px) {
                            .enter-text-select {
                                display: none;
                            }
                        }

                        @media (max-width:418px) and (min-width:365px) {
                            .enter-text-select {
                                display: initial;
                            }

                            .selection-count-mobile {
                                font-size: 12px;
                                padding: 1px 12px 1px 30px !important;
                                line-height: 14px;
                            }

                            .btn-edit-product-mobile {
                                font-size: 12px !important;
                                padding: 7px 20px 7px 20px;
                                padding-left: 20px !important;
                            }

                            .btn-dropdown-mobile {
                                font-size: 12px !important;
                                padding: 7px 10px 7px 10px;
                                padding-left: 10px !important;
                            }

                            .checkbox-bulkactions-mobile {
                                top: 3px;
                            }

                            .dropdown-menu-product-mobile {
                                left: -90px;
                            }

                            .dropdown-menu-product-mobile.arrow-style:not(.pull-right):before, .dropdown-menu-product-mobile.arrow-style:not(.pull-right):after {
                                left: 150px;
                            }
                        }

                        @media (max-width:364px) {
                            .enter-text-select {
                                display: initial;
                            }

                            .selection-count-mobile {
                                font-size: 12px;
                                padding: 1px 8px 1px 25px !important;
                                line-height: 14px;
                            }

                            .btn-edit-product-mobile {
                                font-size: 12px !important;
                                padding: 7px 15px 7px 15px;
                                padding-left: 15px !important;
                            }

                            .btn-dropdown-mobile {
                                font-size: 12px !important;
                                padding: 7px 5px 7px 5px;
                                padding-left: 5px !important;
                            }

                            .checkbox-bulkactions-mobile {
                                top: 3px;
                            }

                            .dropdown-menu-product-mobile {
                                left: -90px;
                            }

                            .dropdown-menu-product-mobile.arrow-style:not(.pull-right):before, .dropdown-menu-product-mobile.arrow-style:not(.pull-right):after {
                                left: 150px;
                            }
                        }

                        ul, li {
                            list-style-type: none;
                        }

                        .single-query {
                            border: none;
                            padding: 4px 4px 4px 11px;
                            height: 28px;
                            border-bottom: 1px solid #e6e6e6;
                            border-color: #c0c0c0 #c0c0c0 #e6e6e6;
                            border-radius: 3px 3px 0 0;
                            width: 100%;
                        }

                        .single-suggest-result {
                            width: 320px;
                        }

                        .single-suggest-result li.single-suggest-select {
                            padding: 3px;
                        }
                    </style>
                    <form id="frmAction" method="post">
                        @csrf
                        <input type="hidden" name="returnUrl" value="/admin/products">
                        <input type="hidden" name="id" value="">
                    </form>

                    <div class="alert alert-success" role="alert">
                        <!-- alert success -->
                        delete Success
                    </div>

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="ui-modal__header">
                                <div class="ui-modal__header-title">
                                    <h2 class="ui-title" id="ModalTitle">Bạn chắc chắn muốn xóa các sản phẩm này?</h2>
                                </div>
                                <div class="ui-modal__header-actions">
                                    <div class="ui-modal__close-button">
                                        <button class="ui-button ui-button--transparent close-modal" data-dismiss="modal" aria-label="Close modal" type="button" name="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="ui-modal__body">
                                <div class="ui-modal__section">
                                    <div>
                                        <p>Thao tác này sẽ xóa các sản phẩm bạn đã chọn. Thao tác này không thể khôi phục.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ui-modal__footer">
                                <div class="ui-modal__footer-actions">
                                    <div class="ui-modal__secondary-actions">
                                        <div class="button-group">
                                            <button class="ui-button close-modal" onclick="closeModalDelete(this)" data-dismiss="modal" type="button" name="button">Hủy</button>
                                        </div>
                                    </div>
                                    <div class="ui-modal__primary-actions">
                                        <div class="button-group button-group--right-aligned">
                                            <button class="ui-button btn-destroy-no-hover js-btn-loadable has-loading btn-delete-bulk-action" type="button" name="commit" onclick="deleteProducts()">
                                                Xóa
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="bizweb-modal" data-width="" tabindex="-1" role="dialog">
                    </div>
                    <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;" aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                    <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
                    <form id="frmRemoveSavedSearch" method="post">
                        @csrf
                        <input type="hidden" name="returnUrl" value="/admin/products">
                        <input type="hidden" name="savedSearchId" value="">
                    </form>
                    <form id="frmFilter" method="get">
                        <input type="hidden" name="Query" value="">

                    </form>

                    <form id="frmBulkActions" method="get"></form>
                    <div id="pages-index" class="page default has-contextual-help discounts-page" define="{productsImportAndExport:new Bizweb.ProductsImportAndExport(this, {'products_match_current_search':20, show_change_notice: false})}" context="productsImportAndExport">
                        <header class="ui-title-bar-container   ui-title-bar-container--full-width">
                            <div class="ui-title-bar ">
                                <div class="ui-title-bar__main-group">
                                    <div class="ui-title-bar__heading-group">
                                        <h1 class="ui-title-bar__title">Sản phẩm</h1>
                                    </div>
                                    <div define="{titleBarActions: new Bizweb.TitleBarActions(this)}" class="action-bar">
                                        <div class="action-bar__item action-bar__item--link-container">
                                            <div class="action-bar__top-links">
                                                <button class="ui-button ui-button--transparent action-bar__link" bind-event-click="showExportProducts()" data-popover-index="1" type="button" name="button">
                                                    <i class="fas fa-download"></i>
                                                    Xuất file
                                                </button>
                                                <button class="ui-button ui-button--transparent action-bar__link" bind-event-click="openFileImportProducts()" data-popover-index="2" type="button" name="button">
                                                    <i class="fas fa-upload"></i>
                                                    Nhập danh sách
                                                </button>
                                                <a class="btn sapo-btn-transparent action-bar__link" href="{{route('admin.categories')}}">
                                                    <i class="fas fa-box"></i>
                                                    Loại sản phẩm
                                                </a>

                                                <a class="btn sapo-btn-transparent action-bar__link" href="{{route('admin.brands')}}">
                                                    <i class="fas fa-box"></i>
                                                    Thương hiệu
                                                </a>

                                            </div>
                                            <div class="action-bar__more hide">
                                                <div class="ui-popover__container">
                                                    <button class="ui-button ui-button--transparent" type="button" name="button">
                                                        <span data-singular-label="Thao tác" data-multiple-label="Chọn thao tác" class="action-bar__more-label">Chọn thao tác</span>
                                                    </button>
                                                    <div class="ui-popover ui-popover--align-edge">
                                                        <div class="ui-popover__tooltip"></div>
                                                        <div class="ui-popover__content-wrapper">
                                                             <div class="ui-popover__content">
                                                                 <div class="ui-popover__pane">
                                                                     <ul class="action-bar__popover-wrapper">
                                                            <li>
                                                                <ul class="ui-action-list">
                                                                    <li class="ui-action-list__item">
                                                                        <button class="ui-action-list-action action-bar__popover-hidden-item" type="button" name="button">
                                                                <span class="ui-action-list-action__text">
                                                                    <span class="action-bar__popover-icon-wrapper">

                                                                    </span>
                                                                    Xuất file
                                                                </span>
                                                                        </button>
                                                                    </li>
                                                                    <li class="ui-action-list__item">
                                                                        <button class="ui-action-list-action action-bar__popover-hidden-item"  type="button" name="button">
                                                            <span class="ui-action-list-action__text">
                                                                <span class="action-bar__popover-icon-wrapper">

                                                                </span>
                                                                Nhập danh sách
                                                            </span>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ui-title-bar__mobile-primary-actions">
                                            <div class="ui-title-bar__actions">
                                                <a href="{{route('admin.products.create')}}" class="ui-button ui-button--primary ui-title-bar__action">Thêm sản phẩm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ui-title-bar__actions-group">
                                    <div class="ui-title-bar__actions">
                                        <a href="/admin/products/create" class="ui-button ui-button--primary ui-title-bar__action">Thêm sản phẩm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible-header">
                                <div class="collapsible-header__heading"></div>
                            </div>
                        </header>
                        <div class="ui-layout ui-layout--full-width">
                            <div class="ui-layout__sections">
                                <div class="ui-layout__section">
                                    <div class="ui-layout__item">
                                        <section class="ui-card">
                                            <div id="filterAndSavedSearch" >
                                                <div class="next-tab__container ">
                                                    <ul class="next-tab__list filter-tab-list" id="filter-tab-list" role="tablist" data-has-next-tab-controller="true">
                                                        <li class="filter-tab-item" data-tab-index="1">
                                                             <a href="/admin/products" class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active">Tất cả sản phẩm</a>
                                                        </li>

                                                        <li class="next-tab__list__disclosure-item dropdown-container" id="hidden-search" style="display:none">
                                                            <span class="next-tab next-tab--disclosure filter-tab" id="more-savedsearch" tabindex="-1" aria-selected="true" aria-label="dropdown item" aria-expanded="false" role="button">

                                                            </span>
                                                             <ul class="dropdown-menu arrow-style dropdown-hidden-search dropdown-menu-right pull-right" role="tablist" id="dropdown-hidden-search">

                                                             </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="next-card__section next-card__section--no-bottom-spacing">
                                                    <div class="obj-filter hide-when-printing table-filter-container">
                                                        <div class="next-input-wrapper">
                                                             <div class="next-field__connected-wrapper">
                                                                 <div class="next-field--connected--no-flex">
                                                                     <div class="ui-popover__container">
                                                            <button class="ui-button ui-btn-filter"
                                                                    type="button"
                                                                    name="button"
                                                                    id="ui-btn-filter"
                                                                    onclick="buttonFilter(this)">
                                                                Lọc <span class="btn__text--deprioritize" id="btn__text--deprioritize-filter">sản phẩm</span>
                                                                <i class="fas fa-chevron-down"></i>
                                                            </button>
                                                            <div class="ui-popover ui-popover--align-edge dropdown-menu margin-10 dropdown-filter"
                                                                 style="max-width: none; margin-right: 0px; margin-left: 0px; transform-origin: 72px -5px; left: 0px;">
                                                                <div class="ui-popover__tooltip" style="left: 75px;"></div>
                                                                <div class="ui-popover__content-wrapper">
                                                                    <div class="ui-popover__content" style="max-height: 201px; width: 207px;">
                                                                        <div class="ui-popover__section">
                                                                            <div class="add-filters">
                                                                                <form bind-event-submit="submit(event)" class="clearfix">
                                                                                    <p class="filter-heading">Hiển thị sản phẩm theo:</p>
                                                                                    <div class="filter-builder">
                                                                                        <div class="next-input-wrapper--half-spacing">
                                                                                            <div class="next-input-wrapper" onclick="showFilter(this)">
                                                                                                <label class="next-label helper--visually-hidden" for="filter-select-1">Chọn điều kiện lọc</label>
                                                                                                <div class="ui-select__wrapper" >
                                                                                                    <select name="filter-select-1"
                                                                                                            bind="filterKey"
                                                                                                            onchange="selectFilter(this)"
                                                                                                            id="filter-conditions"
                                                                                                            class="ui-select">
                                                                                                        <option value="">Chọn điều kiện lọc...</option>
                                                                                                        <option value="visibility">Hiển thị</option>
                                                                                                        <option value="productType">Loại sản phẩm</option>
                                                                                                        <option value="vendor">Nhà cung cấp</option>
                                                                                                        <option value="tag">Đã được tag với</option>
                                                                                                        <option value="collectionId">Danh mục sản phẩm</option>
                                                                                                    </select>
                                                                                                    <i class="fas fa-chevron-down"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div bind-show="filterKey == 'visibility'" class="hide">
                                                                                            <div class="next-input-wrapper--half-spacing">
                                                                                                <div class="next-input-wrapper">
                                                                                                    <label class="next-label helper--visually-hidden" for="filter-select-2">Chọn điều kiện lọc</label><div class="ui-select__wrapper">
                                                                                                        <select bind="option" class="ui-select filter-select" name="filter-select-2">
                                                                                                            <option value="">Chọn điều kiện lọc...</option>
                                                                                                            <option value="visibility">Hiển thị</option>
                                                                                                            <option value="hidden">Ẩn</option>
                                                                                                        </select>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="next-input-wrapper--vertical-block">
                                                                                                <button class="ui-button btn-slim add-filter filtering-complete" type="button" bind-event-click="submitFilter(this)" name="button">Lọc</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div bind-show="filterKey == 'productType'" class="hide">
                                                                                            <div class="next-input-wrapper--half-spacing">
                                                                                                <div class="next-input-wrapper">
                                                                                                    <label class="next-label helper--visually-hidden" for="filter-select-4">Chọn điều kiện lọc</label><div class="ui-select__wrapper">
                                                                                                        <select bind="option" class="ui-select filter-select" name="filter-select-4">
                                                                                                            <option value="">Chọn điều kiện lọc...</option>
                                                                                                            <option value="Balo">Balo</option>
                                                                                                            <option value="Chocolate">Chocolate</option>
                                                                                                            <option value="Gấu bông">Gấu bông</option>
                                                                                                            <option value="Hoa">Hoa</option>
                                                                                                            <option value="Hộp quà tặng">Hộp quà tặng</option>
                                                                                                            <option value="Nhẫn">Nhẫn</option>
                                                                                                            <option value="Nước hoa">Nước hoa</option>
                                                                                                            <option value="Quần áo">Quần áo</option>
                                                                                                            <option value="Túi xách">Túi xách</option>
                                                                                                            <option value="Vali">Vali</option>
                                                                                                        </select><svg class="next-icon next-icon--size-16"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use> </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="next-input-wrapper--vertical-block">
                                                                                                <button class="ui-button btn-slim add-filter filtering-complete" type="button" bind-event-click="submitFilter(this)" name="button">Lọc</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div bind-show="filterKey == 'vendor'" class="hide">
                                                                                            <div class="next-input-wrapper--half-spacing">
                                                                                                <div class="next-input-wrapper">
                                                                                                    <label class="next-label helper--visually-hidden" for="filter-select-5">Chọn điều kiện lọc</label><div class="ui-select__wrapper">
                                                                                                        <select bind="option" class="ui-select filter-select" name="filter-select-5">
                                                                                                            <option value="">Chọn điều kiện lọc...</option>
                                                                                                            <option value="DG">DG</option>
                                                                                                            <option value="PRADA">PRADA</option>
                                                                                                            <option value="Her">Her</option>
                                                                                                            <option value="Teddy">Teddy</option>
                                                                                                            <option value="Flower">Flower</option>
                                                                                                            <option value="Vimax">Vimax</option>
                                                                                                            <option value="ISCO">ISCO</option>
                                                                                                            <option value="Barvo">Barvo</option>
                                                                                                            <option value="DTH">DTH</option>
                                                                                                        </select><svg class="next-icon next-icon--size-16"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use> </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="next-input-wrapper--vertical-block">
                                                                                                <button class="ui-button btn-slim add-filter filtering-complete" type="button" bind-event-click="submitFilter(this)" name="button">Lọc</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div bind-show="filterKey == 'tag'" class="hide">
                                                                                            <div class="next-input-wrapper--half-spacing">
                                                                                                <div class="next-input-wrapper">
                                                                                                    <label class="next-label helper--visually-hidden" for="filter-input-4">Filter-input-4</label>
                                                                                                    <input type="text" name="filter-input-4" id="filter-input-4" data-bind="value" bind-class="{error: isValid}" class="next-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="next-input-wrapper--vertical-block">
                                                                                                <button class="ui-button btn-slim add-filter filtering-complete" type="button" bind-event-click="submitFilter(this)" name="button">Lọc</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div bind-show="filterKey == 'collectionId'" class="hide">
                                                                                            <div class="next-input-wrapper--half-spacing">
                                                                                                <div class="next-input-wrapper result-dropdown">
                                                                                                    <label class="next-label helper--visually-hidden" for="filter-select-4">Chọn điều kiện lọc</label><div class="ui-select__wrapper">
                                                                                                        <input type="hidden" name="" class="form-control form-control smaller choosed-single-id" placeholder="Nhập Id">
                                                                                                        <a class="ui-select dropdown-toggle btn-choose-product" href="#" bind-event-click="dropdown()">
                                                                                                <span class="choosed-single">
                                                                                                    Chọn danh mục
                                                                                                </span>
                                                                                                        </a><svg class="next-icon next-icon--size-16"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use> </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="next-input-wrapper--vertical-block">
                                                                                                <button class="ui-button btn-slim add-filter filtering-complete" type="button" bind-event-click="submitFilter(this)" name="button">Lọc</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                     </div>
                                                                 </div>
                                                                 <div id="has--actions" data-tg-refresh-always="true" class=""></div>
                                                                 <form action="/admin/products" bind-event-submit="submitQuery()" class="next-form next-form--full-width next-field--connected--no-border-radius" method="get">                                                    <label class="next-label helper--visually-hidden" for="query">Query</label>
                                                                     <div class="next-input--stylized next-field--connected">
                                                             <span class="next-input__add-on next-input__add-on--before">
                                                                <i class="fas fa-search"></i>
                                                             </span>
                                                            <input type="text" name="query" id="query" placeholder="Tìm kiếm sản phẩm" bind="query" bind-event-input="submitQuery()" value="" class="next-input next-input--invisible">
                                                                     </div>
                                                                 </form>                                                <div id="saved-search-actions-next" class="saved-search-actions-next" data-tg-refresh="saved-search-actions-next">
                                                                 </div>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ui-card__section has-bulk-actions products" refresh="products" id="products-refresh">
                                                <div class="ui-type-container clearfix">
                                                    <div class="table-wrapper">
                                                        <table id="price-rule-table" class="table-hover bulk-action-context expanded">
                                                             <thead>
                                                             <tr>
                                                                 <th class="select">
                                                                 <span>
                                                                     <div class="tooltip tooltip-left-align tooltip-bottom bulk-actions__select-all-tooltip is-active">
                                                            <div class="next-input-wrapper bulk-actions__select-all btn--select-all"  style="left: auto;">

                                                                <input type="checkbox"
                                                                       name="bulk-actions__select-all"
                                                                       id="bulk-actions__select-all"
                                                                       onclick="bulkActionSelectAlls(this)"
                                                                       class="next-checkbox js-no-dirty bulk-actions__select-all-checkbox all-bulk-action">
                                                                <span class="next-checkbox--styled">
                                                                    <i class="fas fa-check"></i>
                                                                    <i class="fas fa-minus"></i>
                                                                </span>
                                                            </div>
                                                            <div class="tooltip-container" >
                                                                <span class="tooltip-label">Chọn tất cả sản phẩm</span>
                                                            </div>
                                                                     </div>
                                                                     <div class="bulk-actions"  style="width: 1012px;">
                                                            <ul class="bulk-actions__main-bar segmented">
                                                                <li>
                                                                    <a class="btn btn-slim btn-disabled btn--selection">
                                                                        <span class="selection-count bulk-action-items-count" selected-bulk-action-items="0">
                                                                            <span>
                                                                                <span class="hidden-xs">Đã chọn</span>
                                                                                <span class="display-bulk-action-items-count">

                                                                                </span> sản phẩm
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn btn-slim" href="javascript:void(0);" >
                                                                        Sửa sản phẩm
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="ui-popover__container">
                                                                        <button class="ui-button ui-button--size-small btn-dropdown-bulkaction"
                                                                                id="btn-dropdown-bulkaction"
                                                                                type="button"
                                                                                name="button"
                                                                                onclick="selectAction(this)">
                                                                            <span class="hidden-xs">Chọn thao tác</span><span class="hidden-lg hidden-md hidden-sm">Thao tác</span><i class="fas fa-chevron-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu margin-10 dropdown-bulkaction dropdown-bulkaction-product">
                                                                            <div class="ui-popover__tooltip" style="left:20%"></div>
                                                                            <div class="ui-popover__pane">
                                                                                <div class="ui-popover__section ui-popover__section--no-padding">
                                                                                    <ul class="next-list next-list--compact">
                                                                                        <li><a class="next-list__item" href="javascript:void(0);" >Hiển thị</a></li>
                                                                                        <li><a class="next-list__item" href="javascript:void(0);" >Ẩn</a></li>
                                                                                        <li><a  class="next-list__item" href="javascript:void(0);" onclick="showModelDeleteProducts(this)">Xóa sản phẩm</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="ui-popover__section ui-popover__section--no-padding">
                                                                                    <ul class="next-list next-list--compact">
                                                                                        <li><a class="next-list__item" href="#" define="{urlBulkActionAddTag:'/admin/products/bulkaddtags'}" bind-event-click="addTags()">Thêm tags</a></li>
                                                                                        <li><a class="next-list__item" href="" define="{urlBulkActionRemoveTag:'/admin/products/bulkremovetags'}" bind-event-click="removeTags()">Xóa tags</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="ui-popover__section ui-popover__section--no-padding">
                                                                                    <ul class="next-list next-list--compact">
                                                                                        <li><a class="next-list__item" href="#" define="{urlBulkActionAddCollections:'/admin/products/bulkaddcollections'}" bind-event-click="addCollections()">Thêm sản phẩm vào danh mục</a></li>
                                                                                        <li><a class="next-list__item" href="" define="{urlBulkActionRemoveCollections:'/admin/products/bulkremovecollections'}" bind-event-click="removeCollections()">Xóa sản phẩm khỏi danh mục</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <span class="bulk-select-all">
                                                                <p class="bulk-action-all-selector">
                                                                </p>
                                                            </span>
                                                                     </div>
                                                                 </span>
                                                                 </th>
                                                                 <th class="image"></th>
                                                                 <th><span>Sản phẩm</span></th>
                                                                 <th><span>Số lượng</span></th>
                                                                 <th><span>Loại</span></th>
                                                                 <th><span>Thương hiệu</span></th>
                                                             </tr>
                                                             </thead>
                                                             <tbody>
                                                             @foreach($products as $product)

                                                                     <tr>
                                                                         <td class="select">
                                                                             <div class="next-input-wrapper">
                                                                                <label class="next-label helper--visually-hidden next-label--switch" for="product_ids_{{$product->id}}">Chọn {{$product->productName}}</label>
                                                                                <input type="checkbox"
                                                                                       name="product_ids_{{$product->id}}"
                                                                                       id="product_ids_{{$product->id}}"
                                                                                       value="{{$product->id}}"
                                                                                       class="bulk-action-item next-checkbox"
                                                                                       onclick="clickCheckSingleProduct(this, this.value)"
                                                                                       checked>
                                                                                <span class="next-checkbox--styled" >
                                                                                    <i class="fas fa-check"></i>
                                                                                </span>
                                                                             </div>
                                                                         </td>
                                                                         <td>
                                                                             <a class="aspect-ratio aspect-ratio--square aspect-ratio--square--50 aspect-ratio--interactive" href="{{ route('admin.edit.product', $product->id) }}">
                                                                                 @foreach($product->imagesproducts as $image)
                                                                                     <img title="{{$product->productName}}" class="aspect-ratio__content" src=" {{url('storage/'.$image->imagePath)}}" alt="{{$product->productName}}">
                                                                                 @endforeach

                                                                             </a>
                                                                         </td>
                                                                         <td class="name">
                                                                             <div class="ui-stack ui-stack--wrap">
                                                                                <div class="ui-stack-item">
                                                                                    <a href="{{route('admin.edit.product', $product->id)}}" >{{$product->productName}} </a>
                                                                                </div>
                                                                             </div>
                                                                         </td>
                                                                         <td class="total">
                                                                             <p>
                                                                                 {{$product->quantity}}
                                                                             </p>
                                                                         </td>
                                                                         <td class="type">
                                                                             <p>{{$product->categories->categoryName}}</p>
                                                                         </td>
                                                                         <td class="vendor">
                                                                             <p>{{$product->brands->brandName}}</p>
                                                                         </td>
                                                                     </tr>
                                                                @endforeach
                                                             </tbody>
                                                        </table>

                                                    </div>
                                                    <div class="t-grid-pager-boder">
                                                        <div class="t-pager t-reset clearfix fix-margin-pager">
                                                            <div class="col-md-6 col-lg-6 hidden-xs hidden-sm no-   padding">
                                                                <div class="t-status-text dataTables_info">{{$products->render()}}</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="ui-footer-help">
                                        <div class="ui-footer-help__content">

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
        <script src="/js/dataTables.min.js"></script>
        <script language="JavaScript">

            var deleteProducts = function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                   url : "{{route('admin.ajaxDeleteById')}}",
                    method : 'GET',
                    data : {id : totalIdSelected, type: 'deleteProductById'},
                    success : function(result){
                        $('.btn-delete-bulk-action').append('<div class="spinner-border" role="status">\n' +
                                                            '<span class="sr-only">Loading...</span>\n' +
                                                            '</div>');

                        setTimeout(function(){

                            $('.modal-dialog').removeClass('is-active');
                            $('.overlay').attr('style', 'display:none;');
                            $('.dropdown-bulkaction-product').removeClass('show');

                        }, 3000)


                        setTimeout(function(){
                            $('.alert-success').html(result);
                            $('.alert-success').fadeIn(250);
                            $('.alert-success').fadeOut(1500);
                            window.location.reload();
                        }, 3000)

                    }

                });
            }
        </script>

    @stop
