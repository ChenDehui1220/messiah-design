<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <title><?= BASE_TITLE;?></title>
    <!-- / bootstrap [required] -->
    <link href="/assets/stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme file [required] -->
    <link href="/assets/stylesheets/light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
    <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
    <script src="/assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <style>
    .error { color: #b94a48;}
    </style>
  </head>
  <body>
    <?= $header;?>
    <?= $content;?>
    <script src="/assets/javascripts/jquery/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/assets/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
    <script src="/assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript" defer></script>
    <script src="/assets/javascripts/plugins/retina/retina.js" type="text/javascript" defer></script>
    <script src="/assets/javascripts/theme.js" type="text/javascript"></script>
    <script src="/assets/javascripts/plugins/validate/jquery.validate.min.js" type="text/javascript" defer></script>
    <script src="/assets/javascripts/plugins/validate/additional-methods.js" type="text/javascript" defer></script>
    <script src="/assets/javascripts/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.js" type="text/javascript" defer></script>
    <script src="/assets/javascripts/plugins/autosize/jquery.autosize-min.js" type="text/javascript" defer></script>
    <!-- / main page js file [required] -->
    <script src="/assets/javascripts/webadmin/global.js" type="text/javascript" defer></script>
    <script src="/assets/javascripts/webadmin/<?= $this->load_class_js;?>.js" type="text/javascript" defer></script>
  </body>
</html>
