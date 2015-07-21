(function($) {
    var type = $("#dbType").val();
    $('#inputSelect').val(type);

    //fileupload
    if ($("#fileupload").length != 0) {
        $(function() {
            'use strict';

            // Initialize the jQuery File Upload widget:
            $('#fileupload').fileupload({
                dataType: 'json',
                done: function(e, data) {
                    console.log('hello')
                    $('<img/>').text(data.result.full_path).appendTo($('.fileupload-gallery'));
                }
            });
        });
    };
})(jQuery);
