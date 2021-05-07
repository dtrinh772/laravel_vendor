@extends('layouts.appAdmin')
@section('head.title') Create Products @stop
@section('head.css')
    <link rel="stylesheet" href="/css/admin/form.css">
@stop


@section('AppFrameMain')
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">

                <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;" tabindex="-1"></div>
                <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
                <div id="products-new" class="product-detail page">
                    <div class="aviary-modal-bg"><div class="aviary-modal"></div></div>
                    {{ Form::open([
                            'route' => ['create.products.submitForm'],
                            'method' => 'POST',
                            'class' => 'new_product',
                            'files' => true,
                            'autocomplete' => 'off'

                    ]) }}

                        @include('admin.page._form', ['brandName' => null, 'tagName' => null, 'categoryName' => null]) <!-- include form blade -->

                    {{ Form::close() }}
                </div>

                <div class="ui-footer-help">
                    <div class="ui-footer-help__content">
                    </div>
                </div>


            </div>
        </div>
    </div>
@stop


@section('body.js')
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'editor');

    </script>
@stop
