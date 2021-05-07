@extends('layouts.appAdmin')
@section('head.title') Edit Products @stop
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

                    {{ Form::model($product,[
                            'route' => ['edit.products.submitForm', $product->id],
                            'method' => 'PUT',
                            'class' => 'new_product',
                            'files' => true,
                            'autocomplete' => 'off'

                    ]) }}


                    @include('admin.page._form', ['brandName' => $product->brands->brandName, 'tagName' => $product->tags->tagName, 'categoryName' => $product->categories->categoryName]) <!-- include form blade -->


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

        function template_images(countImage, srcImage, id){
            return '<li id="product-image-'+countImage+'" data-id-img="'+id+'" class="product-photo-grid__item ui-sortable-handle">\n' +
                '<div class="aspect-ratio aspect-ratio--square">\n' +
                '    <img class="aspect-ratio__content" src="'+srcImage+'" />\n' +
                '    <div class="product-photo-hover-overlay drag">\n' +
                '        <ul class="photo-overlay-actions photo-overlay-actions__selection">\n' +
                '            <li>\n' +
                '                <a class="photo-overlay-actions__link image-action tooltip tooltip-top" data-bind-image="product-image-'+countImage+'"  onclick="activeCheckRemoveImage(this)">\n' +
                '                    <i style="width: 21px; height: 21px; display: flex; justify-content: center; align-items: center; border-radius: 50%; border: 2px solid white"><i class="fas fa-check"></i></i>\n' +
                '                    <span class="tooltip-container">\n' +
                '                                 <span class="tooltip-label">Chọn</span>\n' +
                '                             </span>\n' +
                '                </a>\n' +
                '            </li>\n' +
                '        </ul>\n' +
                '        <ul class="photo-overlay-actions">\n' +
                '            <li>\n' +
                '                <a class="photo-overlay-actions__link image-action tooltip tooltip-top" onclick="viewImage(this)">\n' +
                '                    <i class="fas fa-eye"></i>\n' +
                '                    <span class="tooltip-container">\n' +
                '                                 <span class="tooltip-label">Xem</span>\n' +
                '                             </span>\n' +
                '                </a>\n' +
                '            </li>\n' +
                '            <li>\n' +
                '                <a id="removeImage" class="photo-overlay-actions__link image-action tooltip tooltip-top" onclick="removeImage(this)">\n' +
                '                    <i class="far fa-trash-alt"></i>\n' +
                '                    <span class="tooltip-container">\n' +
                '                 <span class="tooltip-label">Xóa</span>\n' +
                '             </span>\n' +
                '                </a>\n' +
                '            </li>\n' +
                '        </ul>\n' +
                '    </div>\n' +
                '</div>\n' +
                '</li>';
        }

        var count = 1;
        @foreach($product->imagesproducts as $image)
            @if($image)
                $('#product-images').append(template_images(count++, '{{url('storage/'.$image->imagePath)}}', '{{$image->id}}'));
                $('.next-upload-dropzone__wrapper>div').addClass('hide');
                $('.next-upload-dropzone__wrapper>ol').removeClass('hide');

            @endif
        @endforeach


            var removeImage = function(elm){
                $(elm).parent().parent().parent().parent().parent().remove();
                var getObjImg = $(elm).parent().parent().parent().parent().parent().attr('data-id-img');
                IdImages = getObjImg;

                if (typeof IdImages !== "undefined" && IdImages.length > 0){

                    $.ajax({
                        url : '{{route('admin.ajaxDeleteById')}}',
                        data : {id : IdImages, type : 'deleteImgById'},
                        method : 'GET',
                        success : function(result){
                            alert(result);
                        }
                    })

                }


                if ($('#product-images>li').length === 0){
                    $('.next-upload-dropzone__wrapper>div').removeClass('hide');
                    $('.next-upload-dropzone__wrapper>ol').addClass('hide');
                }
            }
    </script>
@stop
