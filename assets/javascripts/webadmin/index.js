(function() {

    function login() {
        var acc = $('#account').val();
        var pwd = $('#password').val();

        if ($.trim(acc) === '' || $.trim(pwd) === '') {
            return;
        }

        $.ajax({
            url: '/api/auth/login',
            type: 'POST',
            dataType: 'JSON',
            data: {
                account: acc,
                password: pwd
            },
            success: function() {
                window.location.href = '/admin/main';
            },
            error: function() {
                alert('很抱歉! 帳號或密碼輸入錯誤。')
            }
        })
    }

    $(document).ready(function() {
        $('form').submit(function(e) {
            e.preventDefault();
            login();
        });
    });

})();
