(function($) {

    $.validator.messages.required = '*此欄位為必填';

    //登出按鈕
    $('#signout_btn').on('click', function(e) {
        e && e.preventDefault();
        $.post('/api/auth/logout', {}, function(e) {
            if (e.status) {
                window.location.href = '/admin';
            }
        }, 'json');
    });

    //刪除行為
    $('.deleteAction').on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        if (confirm('請再次確次是否刪除!?')) {
            window.location.href = href;
        }
    });

})(jQuery);
