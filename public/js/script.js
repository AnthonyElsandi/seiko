$(function() {

    $('.showUpdateModal').on('click', function() {

        const id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: 'http://localhost/seiko/public/product/getUpdate',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#product_id').val(data.product_id); 

                $('#product_name').val(data.product_name);

                $('#product_price').val(data.product_price);

                $('#brand_id').val(data.brand_id);

                $('#product_category_id').val(data.product_category_id);

                $('#product_photo_url').val(data.product_photo_url);

                $('#product_desc').val(data.product_desc);

                $('#product_availability').val(data.product_availability);

            },
            error: function(jqXHR, exception) {
                console.log(jqXHR, exception);
            }
        });
    });

});