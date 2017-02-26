<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="40" class="w_p_n">
      <? $count = sizeof($nav); foreach($nav as $a => $b) {?>
        <a href="/<?=$this->router->fetch_method();?>/<?=$b->id;?>" class="w_p_n"><?=$b->title;?></a><? if(($count-1) > $a){ echo '　/　';}?>
      <? }?>
      </td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1677" valign="top"></td>
  </tr>
  <tr>
    <td align="center" valign="top">
      <div class="flexslider">
        <ul class="slides">
          <? $imgs = $one->images;
          if ($imgs !== '') {
          $imgs = json_decode($imgs);
          foreach($imgs as $k => $v) {
          ?>
          <li>
            <img src="/uploads/<?=$v;?>" />
          </li>
          <? }}?>
        </ul>
      </div>
      <!-- FlexSlider -->
      <script defer src="/assets/javascripts/plugins/flexslider/jquery.flexslider.js"></script>
      <script type="text/javascript">
      $(window).load(function(){
      $('.flexslider').flexslider({
      animation: "slide",
      slideshowSpeed: 3000
      });
      });
      </script>
      <style>
        .flexslider {width:1000px;height:505px;}
        </style>
    </td>
  </tr>
  <tr>
    <td valign="middle"><br />
      <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="w_b_m1">
          <td width="40%" height="24" align="left" valign="top" class="w_bold"><?=$one->title;?></td>
          <td width="60%" rowspan="2" align="left" valign="top"><span class="w_s"><?=nl2br($one->content);?></span></td>
        </tr>
        <tr class="w_b_m1">
          <td height="25" align="left" valign="top"><span class="w_ss"><?=$one->address;?></span></td>
        </tr>
      </table></td>
    </tr>
    <tr><td><p>&nbsp;</p><p>&nbsp;</p></td></tr>
    <tr>
    <td valign="middle" style="margin-bottom: 100px">
      <? include_once('menu.php');?>
    </td>
  </tr>
  </table>