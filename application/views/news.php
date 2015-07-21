<tr>
  <td height="40" align="center" valign="top" bgcolor="#DDD3CB"><table width="977" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="901" align="left"><span class="w_p"><a href="/ourteam">Design News</a>　│　<a href="/experience">Portfolio</a>　│　<a href="/experience">Product</a>　│　<a href="/experience">Class</a></span></td>
      <td width="76" align="left"><img src="/assets/images/front/w_news.png" width="76" height="40" /></td>
    </tr>
  </table></td>
</tr>
<tr>
  <td align="center" valign="top" bgcolor="#FFFFFF"><table width="990" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="529" valign="top"><br />
        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="515" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr></tr>
            <tr>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="21%" align="left" valign="top"><img src="/assets/images/front/ba_550x340.jpg" width="550" height="340" /></td>
                  <td colspan="2" valign="top"><table width="92%" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="20" align="left" valign="top" class="w_b_m1"><?=$one->title;?></td>
                        </tr>
                        <tr>
                          <td height="30" align="left" valign="top" class="w_s"><p><?=substr($one->createTime,0,10);?></p></td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" class="w_s"><?=nl2br($one->content);?></td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" class="w_s"><div class="fb-share-button" data-href="" data-layout="button"></div></td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" class="w_s"><img src="/assets/images/front/line_2.png" width="385" height="25" /></td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" class="w_s">
                          <? if(isset($others)){ foreach($others as $k => $v){?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="30"class="w_s"><a href="/news/<?=$v->id;?>" ><?=$v->title;?></a>(<?=substr($v->createTime,0,10);?>)</td>
                            </tr>
                          </table>
                          <? }}?>
                          </td>
                        </tr>
                        <tr>
                          <td height="60" align="center" valign="bottom" class="w_s"><?=$pagination;?></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table></td>
</tr>
