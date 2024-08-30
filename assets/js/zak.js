$(document).ready(function ($) {
    $('.cart__catalog-button, .single__catalog-button').on('click', function () {
            var productID = $(this).attr('data-product-id');
            var data = {
                    id: productID,
                    action: 'zak_action',
                    nonce: zak.nonce,
            };
            $.ajax({
                    url: zak.url,
                    data: data,
                    type: 'POST',
                    dataType: 'json',
                    beforeSend: function (xhr) {
                        $('.popup-zak__left').text('Загрузка');
                },
                success: function (data) {
                        $('.popup-zak__left').html(data.product); 
                }
            })
    })
});