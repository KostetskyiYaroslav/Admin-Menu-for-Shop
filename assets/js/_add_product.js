var addedProduct = null;
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('#add_more').click(function (e) {
        e.preventDefault();
        var fileCount = Number.parseInt($('#units').val());
        if ( fileCount < 6 ) {
            $('#productPicture' + fileCount).after('<input class="file" type="file" name="productPicture' + ++fileCount + '" id="productPicture' + fileCount + '">');
            $('#units').attr('value', fileCount);
            $('#labelForPicture').attr('for', 'productPicture' + fileCount);
            var $removeOne = $('#remove_one');
            if ( $removeOne.attr('disabled') == 'disabled' ) {
                $removeOne.removeAttr('disabled');
            }
        } else {
            $(this).attr('disabled', 'disabled');
            alert('Ви додали максимальну к-сть зображень!');
        }
    });
    $('#remove_one').click(function (e) {
        e.preventDefault();
        var $fileArray = $('.file');
        var fileArrayLength = $fileArray.size();
        if ( fileArrayLength > 1 ) {
            $fileArray[ fileArrayLength - 1 ].remove();
            var fileCount = Number.parseInt($('#units').val());
            $('#units').attr('value', --fileCount);
            var $addMore = $('#add_more');
            if ( $addMore.attr('disabled') == 'disabled' ) {
                $addMore.removeAttr('disabled');
            }
        } else {
            $(this).attr('disabled', 'disabled');
            alert('Ви не можете видалити останній елемент!');
        }
    });
    $('#btnAddProduct').click(function (e) {
        e.preventDefault();
        //Waterfall if(validation). Otherwise waterfall break than
        if ( validateProductName() ) {
            changeProductFiledState('#productName', 'has-error', 'has-success');
            if ( validateProductPrice() ) {
                changeProductFiledState('#productPrice', 'has-error', 'has-success');
                if ( validateProductMadeIn() ) {
                    changeProductFiledState('#productMadeIn', 'has-error', 'has-success');
                    if ( validateProductColors() ) {
                        changeProductFiledState('#productColors', 'has-error', 'has-success');
                        if ( validateProductSizes() ) {
                            changeProductFiledState('#productSizes', 'has-error', 'has-success');
                            if ( validateProductDescription() ) {
                                changeProductFiledState('#productDescription', 'has-error', 'has-success');
                                if ( validatePictures() ) {
                                    changeProductFiledState('#productPicture1', 'has-error', 'has-success');
                                    /**
                                     * After all completed validation product will be transferred to backend
                                     */
                                    uploadProduct(
                                            {
                                                name: $('#productName').val(),
                                                price: $('#productPrice').val(),
                                                madeIn: $('#productMadeIn').val(),
                                                colors: $('#productColors').val(),
                                                sizes: $('#productSizes').val(),
                                                category: $('#productCategory').val(),
                                                description: $('#productDescription').val()
                                            },
                                            $('.file')
                                        );

                                } else {
                                    changeProductFiledState('#productPicture1', 'has-success', 'has-error');
                                    alert('Невалідні дані! Поля `Зображення товару`');
                                }
                            } else {
                                changeProductFiledState('#productDescription', 'has-success', 'has-error');
                                alert('Невалідні дані! Поля `Опис`');
                            }
                        } else {
                            changeProductFiledState('#productSizes', 'has-success', 'has-error');
                            alert('Невалідні дані! Поля `Розміри`');
                        }
                    } else {
                        changeProductFiledState('#productColors', 'has-success', 'has-error');
                        alert('Невалідні дані! Поля `Кольори`');
                    }
                } else {
                    changeProductFiledState('#productMadeIn', 'has-success', 'has-error');
                    alert('Невалідні дані! Поля `Виробник`');
                }
            } else {
                changeProductFiledState('#productPrice', 'has-success', 'has-error');
                alert('Невалідні дані! Поля `Ціна`');
            }
        } else {
            changeProductFiledState('#productName', 'has-success', 'has-error');
            alert('Невалідні дані! Поля ');
        }
    });
   //region VALIDATION HANDLER
    $('#productName').on('blur', function () {
        if ( validateProductName() )
            changeProductFiledState(this, 'has-error', 'has-success');
        else
            changeProductFiledState(this, 'has-success', 'has-error');
    });
    $('#productPrice').on('blur', function () {
        if ( validateProductPrice() )
            changeProductFiledState(this, 'has-error', 'has-success');
        else
            changeProductFiledState(this, 'has-success', 'has-error');
    });
    $('#productMadeIn').on('blur', function () {
        if ( validateProductMadeIn() )
            changeProductFiledState(this, 'has-error', 'has-success');
        else
            changeProductFiledState(this, 'has-success', 'has-error');
    });
    $('#productColors').on('blur', function () {
        if ( validateProductColors() )
            changeProductFiledState(this, 'has-error', 'has-success');
        else
            changeProductFiledState(this, 'has-success', 'has-error');
    });
    $('#productSizes').on('blur', function () {
        if ( validateProductSizes() )
            changeProductFiledState(this, 'has-error', 'has-success');
        else
            changeProductFiledState(this, 'has-success', 'has-error');
    });
    $('#productDescription').on('blur', function () {
        if ( validateProductDescription() )
            changeProductFiledState(this, 'has-error', 'has-success');
        else
            changeProductFiledState(this, 'has-success', 'has-error');
    });
   //endregion
});
//region FORM VALIDATION
function validateProductName() {
    var fieldLength = ($('#productName').val()).length;
    return !!(255 > fieldLength && fieldLength > 4);
}
function validateProductPrice() {
    var fieldValue = Number.parseFloat($('#productPrice').val());
    var fieldLength = fieldValue.length;
    return !!(21 > fieldLength || fieldLength > 1 || fieldValue > 0);
}
function validateProductMadeIn() {
    var fieldLength = ($('#productMadeIn').val()).length;
    return !!(21 > fieldLength && fieldLength > 2);
}
function validateProductColors() {
    var fieldLength = ($('#productColors').val()).length;
    return !!(255 > fieldLength && fieldLength > 2);
}
function validateProductSizes() {
    var fieldLength = ($('#productSizes').val()).length;
    return !!(255 > fieldLength && fieldLength > 0);
}
function validateProductDescription() {
    var fieldLength = ($('#productDescription').val()).length;
    return !!(fieldLength && fieldLength > 0);
}
function validatePictures() {
    return ($('.file')[ 0 ].files[ 0 ] != undefined);
}
//endregion
/**
 * That function change input state. If this input have valid take, it will be green border, else red
 * @param field
 * @param stateFrom
 * @param stateTo
 */
function changeProductFiledState(field, stateFrom, stateTo) {
    $(field).parent().removeClass(stateFrom);
    $(field).parent().addClass(stateTo);
}
/**
 * That function send AJAX request with product information and pictures to controller
 * @param product
 * @param $productPicturesArray
 */
function uploadProduct(product, $productPicturesArray) {
    var formData = new FormData();
    formData.append('productName', product.name);
    formData.append('productPrice', product.price);
    formData.append('productMadeIn', product.madeIn);
    formData.append('productColors', product.colors);
    formData.append('productSizes', product.sizes);
    formData.append('productCategory', product.category);
    formData.append('productDescription', product.description);
    $productPicturesArray.each(function (i) {
        formData.append(this.id, this.files[ 0 ]);
    });
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "../../backend/controllers/product.php");
    ajax.onload = function () {
        addedProduct = $.parseJSON(ajax.responseText);
        alert('Товар з ID = '+addedProduct.id+' додано!');
        if ($('#resetProductFields').is(":checked"))
        {
            window.location.replace('/');
        }
    };
    ajax.send(formData);
}