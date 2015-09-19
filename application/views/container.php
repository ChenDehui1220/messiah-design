<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <? if(isset($ogTitle)){?>
    <meta property="og:title" content="<?=$ogTitle;?>"/>
    <meta property="og:site_name" content="meSSIAH 賽亞室內裝修工程"/>
    <meta property="og:type" content="website"/>
    <? }?>
    <title>meSSIAH 賽亞室內裝修工程</title>
    <link href="/assets/stylesheets/disc_reset.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/disc_template.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/index.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/flexslider.css" rel="stylesheet" type="text/css" />
    <script src="/assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/javascripts/index.js" type="text/javascript"></script>
    <style type="text/css">
    body {
    background-color: #FFFFFF;
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    background-image: url();
    }
    </style>
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.4&appId=1507490652801417";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top" bgcolor="#dadddb">
          <table width="95%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="70"><table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="20%"><a href="/"><img src="/assets/img/logo.png" width="148" height="30" /></a></td>
                  <td width="71%">
                    <? if (isset($projectMenu) && $projectMenu == true) {?>
                    <table width="42%" border="0" align="right" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="13%" class="w_p"><a href="/interior">室內設計</a></td>
                        <td width="13%"><span class="w_p"><a href="/exhibition">商業空間</a></span></td>
                        <td width="15%"><span class="w_p"><a href="/graphic" class="w_p">平面設計</a></span></td>
                      </tr>
                    </table>
                    <? }?>
                  </td>
                  <td width="9%" align="right"><img src="/assets/img/logo_2.png" width="95" height="30" /></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td align="center" valign="top" bgcolor="#FFFFFF"><br />
        <?= $content;?>
      </td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF"><br />
        <? include_once('footer.php');?>
      </td>
    </tr>
  </table>
</body>
</html>