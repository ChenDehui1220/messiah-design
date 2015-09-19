// just for the demos, avoids form submit
jQuery.validator.setDefaults({
    debug: false,
    success: "valid"
});
//變更密碼
var changePassword = function() {
    var op = $('#old_password');
    var np = $('#new_password');
    var rp = $('#re_password');
    var params = {};

    if (op.length == 1 && op.val() == '') {
        alert('請輸入原來的密碼!'); return false;
    }
    if (np.length == 1 && np.val() == '') {
        alert('請輸入新密碼!'); return false;
    }

    params.old_password = op.val();
    params.new_password = np.val();

    $.ajax({
        url: '/api/auth/password',
        type: 'POST',
        dataType: 'JSON',
        data: params,
        success: function(e) {
            if (e.status) {
                $.post('/api/auth/logout',{},function(){
                    window.location.href='/admin';
                });
            }
        },error:function(e) {
            var err = $.parseJSON(e.responseText);
            alert(err.message);
            op.val('');
            np.val('');
            rp.val('');
        }
    })
}
$(".form").validate({
    rules: {
        new_password: "required",
        re_password: {
            equalTo: "#new_password"
        }
    }
});
$(".form").on('submit', function(e) {
    e.preventDefault();
    e.stopPropagation();
    changePassword();
});
