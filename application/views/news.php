<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1295" valign="top"><br /></td>
  </tr>
  <tr>
    <td align="center" valign="top">
      <table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
            <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="515" valign="top">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr></tr>
                  <tr>
                    <td valign="top">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="21%" align="left" valign="top"><img src="/assets/img/ba_550x311.jpg" width="550" height="311" /></td>
                          <td colspan="2" valign="top">
                            <table width="97%" border="0" align="right" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="left" valign="top">
                                  <table width="99%" border="0" align="right" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td height="20" align="left" valign="top" class="w_title"><?=$one->title;?></td>
                                    </tr>
                                    <tr>
                                      <td height="30" align="left" valign="middle" class="w_p"><?=substr($one->createTime,0,10);?></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="w_s"><?=nl2br($one->content);?></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="w_s"><div class="fb-share-button" data-href="" data-layout="button"></div></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="w_s"><img src="/assets/img/line_2.png" width="430" height="12" /></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="w_s">
                                        <? if(isset($others)){ foreach($others as $k => $v){?>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td height="30"class="w_p_n"><a href="/news/<?=$v->id;?>"  >‧<?=$v->title;?>(<?=substr($v->createTime,0,10);?>)</a></td>
                                          </tr>
                                        </table>
                                        <? }}?>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td height="50" align="center" valign="bottom" class="w_s"><?=$pagination;?></td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
</table>