@extends('layouts.appAdmin')

@section('head.title') Categories @stop

@section('head.css')
    <link rel="stylesheet" href="/css/admin/form_tag_cate_brand.css">
@stop

@section('AppFrameMain')

    <div class="col-right_content" id="content">
        <div class="ui-title-bar-container ui-title-bar-container--index">
            <div class="ui-title-bar">
                <div class="ui-title-bar__navigation">
                    <div class="ui-breadcrumbs">
                        <a href="/admin/products">
                            <i class="fas fa-chevron-left"></i>
                            <span class="ui-breadcrumb__item">Sản phẩm </span>
                        </a>
                    </div>
                </div>
                <div class="ui-title-bar__main-group">

                    <div class="ui-title-bar__heading-group">
                        <h1 class="ui-title-bar__title">Loại sản phẩm</h1>
                    </div>
                </div>
                <div class="ui-title-bar__actions ui-title-bar__btn-actions">
                    <a href="javascript:void(0);" onclick="showModalCreateCategory()" class="btn sapo-btn-default">Tạo loại sản phẩm</a>

                </div>
            </div>
        </div>
        <div class="modal fade hide" id="sapo-modal-container" data-width="" tabindex="-1" role="dialog" data-backdrop="false" style="display: block;"><div>

                <div class="modal-dialog modal-dialog-new">
                    <div class="modal-content">
                        <div  context="addCategory">
                            <form method="post" id="form-submit-value" action="/admin/categories/createcategory">
                                @csrf
                                <div class="modal-header">
                                <span class="ui-dialog-title" id="ui-dialog-title-1">
                                    Thêm mới loại sản phẩm
                                </span>
                                    <span class="modal-close-wrapper" role="button" aria-label="Close dialog">
                                    <i class="fas fa-times"></i>
                                </span>
                                </div>
                                <div class="modal-body">
                                    <div class="row margin-bottom-15">
{{--                                        <div class="alert alert-danger">--}}
{{--                                            <ul>--}}
{{--                                                <li></li>--}}
{{--                                            </ul>--}}
{{--                                        </div> <!-- errorr -->--}}
                                        <div class="col-6 margin-bottom-15">
                                            <label class="product-info__item__label font-weight-500">Tên loại <span class="red bold">*</span></label>
                                            <input class="sapo-textbox" data-bind="name" name="categoryName"  id="name" data-toggle="tooltip" required>
                                        </div>
                                        <div class="col-6 margin-bottom-15">
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
                                                                            <label for="active-true" class="next-label next-label--switch">Hiện thị</label>
                                                                            <input type="radio" id="active-true" class="next-radio" name="status" value="1" checked="checked">
                                                                            <span class="next-radio--styled"></span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="next-input-wrapper">
                                                                            <label for="active-false" class="next-label next-label--switch">Ẩn</label>
                                                                            <input type="radio" id="active-false"  name="status" class="next-radio" value="0">
                                                                            <span class="next-radio--styled"></span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="action-btn clearfix">
                                        <button class="btn pull-right margin-left-5 sapo-btn-default" type="button" onclick="addCategory()">Thêm mới</button>
                                        <button class="close-modal btn sapo-btn-blank float-right" id="close-popup" type="button">Thoát</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div></div>
        <div class="modal-backdrop fade in" id="sapo-modal-backdrop" tabindex="0"></div>
        <form id="frmFilter" method="get">
            <input type="hidden" name="limit" value="20">
            <input type="hidden" name="query" value="">
        </form>
        <div class="gird-layout gird-layout--full-width">
            <section class="grid-card">
                <div id="filterAndSavedSearch" context="filterAndSavedSearch">
                    <div class="table-filter-container">
                        <div class="filter-header">
                            <div class="group-input-query" style="width: 100%;margin-bottom: 2px;">
                            <span class="">
                                <i class="fas fa-search"></i>
                            </span>
                                <input type="text" bind="query" class="input-query sapo-textbox" placeholder="Tìm kiếm loại sản phẩm" id="query-enter" bind-event-blur="submitQuery(0,'.col-right_content')">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="resultFilter">
                    <div context="indexCategory" >
                        <div class="ui-type-container clearfix">
                            <div class="table-wrapper" style="opacity: 1;">
                                <div id="sapo-table_wrapper" class="dataTables_wrapper no-footer ps">
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
                                                                <span class="tooltip-label">Chọn tất cả loại sản phẩm</span>
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

                                                                                </span> loại sản phẩm
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn btn-slim" href="javascript:void(0);">
                                                                        Sửa loại sản phẩm
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="ui-popover__container">
                                                                        <button class="ui-button ui-button--size-small btn-dropdown-bulkaction"
                                                                                id="btn-dropdown-bulkaction"
                                                                                type="button"
                                                                                name="button"
                                                                                onclick="selectAction(this)">
                                                                            <span class="hidden-xs">Chọn thao tác</span>
                                                                            <span class="hidden-lg hidden-md hidden-sm">Thao tác</span>
                                                                            <i class="fas fa-chevron-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu margin-10 dropdown-bulkaction dropdown-bulkaction-product">
                                                                            <div class="ui-popover__tooltip" style="left:20%"></div>
                                                                            <div class="ui-popover__pane">
                                                                                <div class="ui-popover__section ui-popover__section--no-padding">
                                                                                    <ul class="next-list next-list--compact">
                                                                                        <li><a class="next-list__item" href="javascript:void(0);" >Hiển thị</a></li>
                                                                                        <li><a class="next-list__item" href="javascript:void(0);" >Ẩn</a></li>
                                                                                        <li><a  class="next-list__item" href="javascript:void(0);" onclick="showModelDeleteProducts(this)">Xóa loại sản phẩm</a></li>
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
                                            <th><span>Loại sản phẩm</span></th>
                                            <th><span>Mô tả </span></th>
                                            <th><span>Ngày tạo</span></th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td class="select">
                                                        <div class="next-input-wrapper">
                                                            <label class="next-label helper--visually-hidden next-label--switch" for="category_ids_{{$category->id}}">Chọn {{$category->categoryName}}</label>
                                                            <input type="checkbox"
                                                                   name="category_ids_{{$category->id}}"
                                                                   id="category_ids_{{$category->id}}"
                                                                   value="{{$category->id}}"
                                                                   class="bulk-action-item next-checkbox"
                                                                   onclick="clickCheckSingleProduct(this, this.value)"
                                                                   checked>
                                                            <span class="next-checkbox--styled" >
                                                                  <i class="fas fa-check"></i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="category name">
                                                        <div class="ui-stack ui-stack--wrap">
                                                            <div class="ui-stack-item">
                                                                <a href="">
                                                                    <span data-toggle="tooltip" data-placement="right" data-original-title="{{$category->categoryName}}">{{$category->categoryName}}</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="description">
                                                        <p>

                                                        </p>
                                                    </td>
                                                    <td class="dateCreate">
                                                        <p>

                                                        </p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">

                                        </div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="t-grid-pager-boder" value="/admin/categories" query="">
                                <div class="t-pager t-reset">
                                    <div class="col-4">
                                        <div class="t-status-text dataTables_info"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script class="modal_source" define="{popupCreateCategory: new Components.Modal(this)}" type="text/html">
                    </script>
                        <script class="modal_source" define="{popupEditCategory: new Components.Modal(this)}" type="text/html">
                    </script>
                    </div>
                </div>

            </section>
        </div>
        <div class="grid-footer-help">
            <div class="grid-footer-help__content">

            </div>
        </div>

    </div>

@stop

@section('body.js')
    <script>
        var addCategory = function(){
            var categoryName = $("input[name='categoryName']").val();
            var description = $("input[name='description']").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
               url : '{{route('admin.addCategories')}}',
                method: 'POST',
                data : {
                   categoryName : categoryName,
                    description : description
                },
                success : function (result) {
                    if (result.categoryName.length >= 1){
                        $('.alert-danger>ul>li').html(result.categoryName);
                    }else{
                        alert(result);
                    }


                }
            });
        }
    </script>
@stop
