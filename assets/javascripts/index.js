/*
 *   common js
 *   @Author Gray
 *   @Created By 2015-07-13
 */

var meSSIAH = function() {

    var isEmail = function(email) {
        if (email == "") return true;
        reEmail = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/
        return reEmail.test(email);
    }

    var sendContact = function() {
        var params = {
            name: $('#name'),
            email: $('#email'),
            subject: $('#subject'),
            message: $('#message'),
        }

        if (params.name.val() == '') {
            alert("請輸入名稱!");
            return false;
        }
        if (params.email.val() == '') {
            alert("請輸入電子郵件!");
            return false;
        }
        if (!isEmail(params.email.val())) {
            alert("請輸入正確電子郵件!");
            return false;
        }
        if (params.subject.val() == '') {
            alert("請輸入主旨!");
            return false;
        }
        if (params.message.val() == '') {
            alert("請輸入訊息!");
            return false;
        }

        var ajaxData = {};
        $.each(params, function(k, v) {
            ajaxData[k] = v.val();
        });

        $.ajax({
            url: '/api/common/contact',
            type: 'POST',
            data: ajaxData,
            dataType: 'json',
            success: function(e) {
                if (e.status == 'success') {
                    $.each(params, function(k, v) {
                        v.val('');
                    });
                    alert('我們已收到你的訊息，將有專人盡快與您聯繫!');

                }
            },
            error: function() {
                alert('很抱歉! 目前連線不正常 請稍候再試。');
            }
        })
    }

    return {
        //聯絡我們
        contact: function() {
            $("#sendContact").on('click', function(e) {
                e.preventDefault();
                sendContact();
            });
        }
    }
}

$(document).ready(function() {
    var mdl = new meSSIAH();
    mdl.contact();
});

function MM_swapImgRestore() { //v3.0
    var i, x, a = document.MM_sr;
    for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
}

function MM_preloadImages() { //v3.0
    var d = document;
    if (d.images) {
        if (!d.MM_p) d.MM_p = new Array();
        var i, j = d.MM_p.length,
            a = MM_preloadImages.arguments;
        for (i = 0; i < a.length; i++)
            if (a[i].indexOf("#") != 0) {
                d.MM_p[j] = new Image;
                d.MM_p[j++].src = a[i];
            }
    }
}

function MM_findObj(n, d) { //v4.01
    var p, i, x;
    if (!d) d = document;
    if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
        d = parent.frames[n.substring(p + 1)].document;
        n = n.substring(0, p);
    }
    if (!(x = d[n]) && d.all) x = d.all[n];
    for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
    for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
    if (!x && d.getElementById) x = d.getElementById(n);
    return x;
}

function MM_swapImage() { //v3.0
    var i, j = 0,
        x, a = MM_swapImage.arguments;
    document.MM_sr = new Array;
    for (i = 0; i < (a.length - 2); i += 3)
        if ((x = MM_findObj(a[i])) != null) {
            document.MM_sr[j++] = x;
            if (!x.oSrc) x.oSrc = x.src;
            x.src = a[i + 2];
        }
}
