$(function() {
    'use strict';

    var type = $("#dbType").val();
    $('#inputSelect').val(type);

    var $gallery = $('.fileupload-gallery');
    var $process = $('.fileupload-progress');
    var $bar = $('.progress-bar');

    var parseImg = function(e) {
        var output = '<tr class="template-upload" data-name="' + e.file_name + '"><td><span class="preview"><img src="' + e.site_img_url + '" width="75px" /></span></td>';
        output += '<td><p class="name">' + e.file_name + '<input type="hidden" name="images[]" value="' + e.file_name + '" /></p></td><td>';
        output += '<button class="btn btn-warning deleteBtn"><i class="glyphicon glyphicon-ban-circle"></i><span>Delete</span></button>';
        output += '</td></tr>';
        return output;
    }

    var delImg = function(fname) {
        $.ajax({
            url: '/api/common/upload',
            type: 'DELETE',
            data: {
                name: fname
            },
            success: function() {}
        })
    }

    //delete img
    $gallery.on('click', '.deleteBtn', function(e) {
        e.preventDefault();

        var $tr = $(this).parents('.template-upload');
        delImg($tr.attr('data-name'));
        $tr.remove();

        e.stopPropagation();
    });

    //fileupload
    if ($("#fileupload").length != 0) {
        $(function() {
            'use strict';

            $('#fileupload').fileupload({
                url: '/api/common/upload',
                dataType: 'json',
                // formData: function() {
                //     return [{
                //         name: 'width',
                //         value: 730
                //     }, {
                //         name: 'height',
                //         value: 520
                //     }]
                // },
                start: function() {
                    $process.addClass('in');
                },
                stop: function() {
                    $process.removeClass('in');
                    $bar.css('width', '0%')
                },
                done: function(e, data) {
                    $gallery.append(parseImg(data.result));
                },
                progressall: function(e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $bar.css('width', progress + '%')
                }
            });

        });
    };

    //db images
    var imagesJson = $('#imagesJson');
    if (imagesJson.length == 1) {
        if (imagesJson.val() !== '') {
            
            var imagesValue = imagesJson.val();
            imagesValue = $.parseJSON(imagesValue);

            $.each(imagesValue,function(k,v){
                var ddObj = {
                    file_name: v,
                    site_img_url: '/uploads/' + v
                }
                $gallery.append(parseImg(ddObj));
            });
        }
    }
});
