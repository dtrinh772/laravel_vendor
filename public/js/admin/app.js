var totalIdSelected = [];
var IdImages;



var btns = $('.menu-appFrame');
for(var i = 0; i < btns.length; i++){
    btns[i].addEventListener('click', function(){
        var active = document.getElementsByClassName('active');

        if(active.length > 0){
            active[0].className = active[0].className.replace(' active', '');
        }

        $(this).addClass('active');
    });
}

$('.nav-pills').slimScroll(function(){
    height: '334px'
});


$('input.next-input').on('click', function(){
    $('label.next-label').addClass('next-label--is-forcused');
    $('div.next-input--stylized').addClass('next-input--is-forcused');
});


var bulkActionSelectAlls = function(elm){

    var countChecked = $('input:checkbox').not($(elm)).prop('checked', elm.checked);

    var getId = elm.getAttribute('id');
    var check = $('#'+getId).siblings();
    check = check.attr('class');

    if ($('.fa-check').css('display') === "none"){

        $('.'+check+'>.fa-check').show(300);

        countChecked.each(function(){

            if (totalIdSelected.indexOf(this.value) === -1){

                $('tbody>tr').addClass('selected');

                $('.bulk-actions').addClass('bulk-actions--is-visible');
                $('.btn--select-all>.next-label--switch').removeClass('btn btn-slim bulk-actions__select-all-btn');
                $('.btn--select-all>.next-label--switch').addClass('helper--visually-hidden');
                totalIdSelected.push(this.value);
                $('.display-bulk-action-items-count').html(totalIdSelected.length);
                console.log('add' +totalIdSelected);

            }
        });

    }else{
        countChecked.each(function(){
            totalIdSelected.splice(totalIdSelected.indexOf(this.value), 1);
            $('.display-bulk-action-items-count').html(totalIdSelected.length);
            console.log('clear' + totalIdSelected);
            if (totalIdSelected.length === 0){
                $('tbody>tr').removeClass('selected');
                $('.bulk-actions').removeClass('bulk-actions--is-visible');
                $('.btn--select-all>.next-label--switch').addClass('btn btn-slim bulk-actions__select-all-btn');
                $('.btn--select-all>.next-label--switch').removeClass('helper--visually-hidden');
                $('.'+check+'>.fa-check').hide(300);

            }
        });
    }

}




var clickCheckSingleProduct = function (elm, id){

    var getIdElm = elm.getAttribute('id');

    $('#'+getIdElm).siblings().find('i').toggle();

    $('#'+getIdElm).parent().parent().parent().toggleClass('selected'); // class Select for tr

    var getElmSelected = $('#'+getIdElm).parent().parent().parent();

    if (getElmSelected.attr('class') === "selected"){

        $('input:checked').attr('checked', 'checked');
        $('.bulk-actions').addClass('bulk-actions--is-visible');
        $('.btn--select-all>.next-label--switch').removeClass('btn btn-slim bulk-actions__select-all-btn');
        $('.btn--select-all>.next-label--switch').addClass('helper--visually-hidden');
        if (totalIdSelected.indexOf(id) === -1){
            totalIdSelected.push(id);
            $('.display-bulk-action-items-count').html(totalIdSelected.length);
        }

    }else{
        if ($('.btn--select-all>span>.fa-check').css('display') === 'block'){
            $('.btn--select-all>span>.fa-check').css('display', 'none');
            $('.fa-minus').css('display', 'inline');
        }

        $('input:checked').attr('checked');
        totalIdSelected.splice(totalIdSelected.indexOf(id), 1);
        $('.display-bulk-action-items-count').html(totalIdSelected.length);

        if (totalIdSelected.length === 0){
            $('.fa-check').css('display', 'none');
            $('.fa-minus').css('display', 'none');
            $('.display-bulk-action-items-count').html(" ");
            $('.bulk-actions').removeClass('bulk-actions--is-visible');
            $('.btn--select-all>.next-label--switch').addClass('btn btn-slim bulk-actions__select-all-btn');
            $('.btn--select-all>.next-label--switch').removeClass('helper--visually-hidden');
            $('#'+getIdElm).parent().parent().parent().removeClass('selected');
        }

    }



}

var selectAction = function(elm){

    var getClass = elm.getAttribute('id');
    $('#'+getClass).siblings().addClass('show');

}

var buttonFilter = function(elm){
    getId = elm.getAttribute('id');
    $('#'+getId).parent().toggleClass("ui-popover__container--contains-active-popover");
    $('#'+getId).siblings().toggleClass('ui-popover--is-positioned-beneath ui-popover--is-active show');

}

var showFilter = function(obj){
    var getClass = obj.getAttribute('class');
    $('.'+getClass+'>div.ui-select__wrapper').toggleClass('next-input--is-forcused');

}


var showOpenFormUpload = function(input){

    $('#image-upload').trigger('click');
}

var countImage = 1;
var readUrl = function(input){

    var fileType = ['image/gif', 'image/jpeg', 'image/png'];
    var countFiles = input.files.length;

    for (var i = 0; i < countFiles; i++){
        if (jQuery.inArray(input.files[i].type, fileType) != -1) {

            var reader = new FileReader();
            reader.onload = function (e) {

                //var temp = $('#template-append-image').html();
                $('#product-images').append(template_images(countImage++, e.target.result));
                //$('.aspect-ratio__content').attr('src', e.target.result);

                // open tooltip
                var tooltip = document.getElementsByClassName('tooltip');
                $(tooltip).hover( function(){
                    $(this).toggleClass('is-active');
                });
                //TheEnd

                $('.next-upload-dropzone__wrapper>div').addClass('hide');
                $('.next-upload-dropzone__wrapper>ol').removeClass('hide');
            }


            reader.readAsDataURL(input.files[i]);


        }else{
            alert('thằng admin nó chỉ cho chọn hình ảnh ở đây thôi, chọn lại đi');
        }
    }
}

var selectedImage = [];
var activeCheckRemoveImage = function(elm){

    if ($(elm).find('.fa-check').css('display') === 'none'){

        var getiIdImage = $(elm).attr('data-bind-image');
        selectedImage.push(getiIdImage);

        $(elm).find('.fa-check').show(300);

        $('li#'+getiIdImage).addClass('product-photo-grid__item--inselectionmode');
        $('li#'+getiIdImage+'>div').find('.product-photo-hover-overlay').addClass('product-photo-hover-overlay--inselection');

        $('#next-grid-show-hide>div')[0].classList.add('hide');
        $('#next-grid-show-hide>div')[1].classList.remove('hide');
    }else{
        $(elm).find('.fa-check').hide(300);
        var getiIdImage = $(elm).attr('data-bind-image');

        $('li#'+getiIdImage).removeClass('product-photo-grid__item--inselectionmode');
        $('li#'+getiIdImage+'>div').find('.product-photo-hover-overlay').removeClass('product-photo-hover-overlay--inselection');

        selectedImage.splice(selectedImage.indexOf(getiIdImage), 1);
        if (selectedImage.length === 0){
            $('#next-grid-show-hide>div')[0].classList.remove('hide');
            $('#next-grid-show-hide>div')[1].classList.add('hide');
        }
    }
}

var deleteSelectedImages = function(elm){

        var countImage = selectedImage.length;
        for (var i = 0; i < countImage; i++){
            $('li#'+selectedImage[i]).remove();
        }

        if ($('#product-images>li').length === 0){
            $('.next-upload-dropzone__wrapper>div').removeClass('hide');
            $('.next-upload-dropzone__wrapper>ol').addClass('hide');
            $('#next-grid-show-hide>div').toggleClass('hide');
        }

}


var unSelected = function(elm){
    $('.fa-check').hide(300);
    $('li').removeClass('product-photo-grid__item--inselectionmode');
    $('li>div').find('.product-photo-hover-overlay').removeClass('product-photo-hover-overlay--inselection');

    var countId = $('ol#product-images>li').length;
    for (var i = 0; i < countId; i++){
        var getIdImage = $('ol#product-images>li')[i].getAttribute('id');

        selectedImage.splice(selectedImage.indexOf(getIdImage), 1);
    }
    if (selectedImage.length === 0){
        $('#next-grid-show-hide>div')[0].classList.remove('hide');
        $('#next-grid-show-hide>div')[1].classList.add('hide');
    }

}


var viewImage = function(elm){

    $('.modal-dialog').css('display', 'block');
    var getSrc = $(elm).parent().parent().parent().siblings('.aspect-ratio__content');
    getSrc = $(getSrc).attr('src')

    $('.ui-modal__section>img').attr('src', getSrc);

}

var closeModal = function(elm){

    $('.modal-dialog').css('display', 'none');

}

var clickShowCate = function(elm){
    $('#showCate').toggleClass('ui-popover--is-active');

    $('.overlay').show();
}

var clickShowBrands = function(elm){
    $('#showBrands').toggleClass('ui-popover--is-active');
    $('.overlay').show();
}

var focusShowTags = function(elm){
    $('#showTags').toggleClass('ui-popover--is-active');
    $('.overlay').show();
}

var clickSelectedTags = function(elm){

    $('.js-tag-list').append('<li class="next-token">\n' +
        '        <span class="next-token__label">'+$(elm).text().trim()+'</span>\n' +
        '        <a onclick="removeTag(this)" class="next-token__remove">\n' +
        '        <input type="hidden" name="tag_id" value="'+$(elm).text().trim()+'">\n' +
        '        <span class="next-token__remove__icon">\n' +
        '       <i class="fas fa-backspace"></i> \n' +
        '        </span>\n' +
        '        </a> \n' +
        '        </li>');
    $('#showTags').removeClass('ui-popover--is-active');
    $('.overlay').css('display', 'none');


}

var removeTag = function(){
    $('.js-tag-list>li').remove();
}

var selectedCate = function(elm){
    $('#showCate').removeClass('ui-popover--is-active');
    $('#product_cate').attr('value', $(elm).text().trim());

}

var selectedBrand = function(elm){
    $('#showBrands').removeClass('ui-popover--is-active');
    $('#product_brand').attr('value', $(elm).text().trim());
}


var showModelDeleteProducts = function(){
    $('.modal-dialog').addClass('is-active');
    $('.overlay').attr('style', 'z-index : 999; opacity : 0.5; display:block;');
}

var closeModalDelete = function(){
    $('.modal-dialog').removeClass('is-active');
    $('.overlay').attr('style', 'display:none;');
    $('.dropdown-bulkaction-product').removeClass('show');
}

function template_images(countImage, srcImage){
    return '<li id="product-image-'+countImage+'" class="product-photo-grid__item ui-sortable-handle">\n' +
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


var showModalCreateCategory = function(){
    $('.modal').removeClass('hide');
    $('.modal').addClass('show');
    $('.modal-dialog ').addClass('show');
    $('.modal-backdrop').addClass('visible');
}


$(document).ready(function(){
   var laravel = {
       showHasMenu : function(elm){
           $(elm).on('click', function () {
               $(this).addClass('active-temp');
               $('#sidebar--nav').addClass('next-nav--is-expanded');
               if ($(this).attr('data-name') == 'orders'){
                   $('.next-nav__panel--secondary').addClass('next-nav__panel--secondary-open');
                   $('#NextNavOrders').addClass('next-nav__list--is-open');
               }else if ($(this).attr('data-name') == 'products'){
                   $('.next-nav__panel--secondary').addClass('next-nav__panel--secondary-open');
                   $('#NextNavProducts').addClass('next-nav__list--is-open');
               }else if($(this).attr('data-name') == 'website'){
                   $('.next-nav__panel--secondary').addClass('next-nav__panel--secondary-open');
                   $('#NextNavWebsite').addClass('next-nav__list--is-open');
               }
           });
       },

       closeMenu : function(elm){
           $(elm).on('click', function(){
               $('#sidebar--nav').removeClass('next-nav--is-expanded');
               $('.menu-parent').removeClass('active-temp');
               $('.next-nav__panel').removeClass('next-nav__panel--secondary-open');
               $('#NextNavOrders').removeClass('next-nav__list--is-open');
               $('#NextNavProducts').removeClass('next-nav__list--is-open');
               $('#NextNavWebsite').removeClass('next-nav__list--is-open');


           });
       },

       clickTopBarProfile : function (elm){
            $(elm).on('click', function(){
                $(elm).parent().toggleClass('ui-popover__container--contains-active-popover');
                $(elm).siblings().toggleClass('ui-popover--is-active');
                $('.overlay').css("display", "block");
            });
        },

       clickOverlay : function (elm){
            $(elm).on('click', function(){
                $('.ui-popover__container').removeClass('ui-popover__container--contains-active-popover');
                $('.ui-popover--is-positioned-beneath').removeClass('ui-popover--is-active');
                $('#showBrands').removeClass('ui-popover--is-active');
                $('#showCate').removeClass('ui-popover--is-active')
                $('#showTags').removeClass('ui-popover--is-active');
                $(this).css('display', 'none');
            });
        },

       init : function(){
           laravel.showHasMenu('.menu-parent');
           laravel.closeMenu('.close-submenu');
           laravel.clickTopBarProfile('#AccountMenuActivator');
           laravel.clickOverlay('.overlay');
       },

   }

   /* Run FrameWork*/
    laravel.init();

});
