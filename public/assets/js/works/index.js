
$(function() {

    $('#works_index_more').click(function(e){
        e.preventDefault();

        let offset = $('#works_list .col-md-4').length;
        let limit = (typeof $(this).data('limit') !== typeof undefined && $(this).data('limit') !== false)? $(this).data('limit') : 6;

        $.get($(this).data('url'), {
            offset,
            limit
        }, function(response) {
            $('#works_list').append(response)
                           .find('.col-md-4:nth-last-of-type(-n+'+offset+')')
                           .hide()
                           .fadeIn();
        })

    });

});