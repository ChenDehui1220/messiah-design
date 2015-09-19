<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1000px" align="center" valign="top">
		<div class="flexslider">
	      <ul class="slides">
	        <li>
	          <img src="/assets/img/b1.jpg" width="1000" height="565" />
	        </li>
	        <li>
	          <img src="/assets/img/b2.jpg" width="1000" height="565" />
	        </li>
	        <li>
	          <img src="/assets/img/b3.jpg" width="1000" height="565" />
	        </li>
	        <li>
	          <img src="/assets/img/b4.jpg" width="1000" height="565" />
	        </li>
	        <li>
	          <img src="/assets/img/b5.jpg" width="1000" height="565" />
	        </li>
	      </ul>
	    </div>
	    <!-- FlexSlider -->
        <script defer src="/assets/javascripts/plugins/flexslider/jquery.flexslider.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
        $('.flexslider').flexslider({
        animation: "slide"
        });
        });
        </script>
        <style>
        .flexslider {width:1000px;height:505px;}
        </style>

		</td>
	</tr>
	<tr>
		<td valign="middle">
			<? include_once('menu.php');?>
		</td>
	</tr>
</table>