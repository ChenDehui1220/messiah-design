<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="w_b_m1">
        <td width="100%" height="40" align="center" class="w_b_m1">
            <table width="75%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center">最新消息</td>
                    <td align="center">品牌故事</td>
                    <td align="center">設計作品</td>
                    <td align="center">聯絡我們</td>
                    <td align="center">好站連結</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td><img src="/assets/img/line.png" width="1000" height="10" /></td>
    </tr>
    <tr>
        <td align="center" class="w_grey">
            <table width="75%" border="0" cellspacing="0" cellpadding="0">
                <tr class="w_b_m2">
                    <td width="20%" align="center" valign="top">
                        <table width="95%" border="0" cellspacing="0" cellpadding="0">
                            <? if(isset($newsTop3)) { foreach($newsTop3 as $n => $nv) { if ($n < 2) {?>
                            <tr>
                                <td height="25" align="left" valign="middle"><a href="/news/<?=$nv->id;?>" class="w_b_m2">‧<?=mb_substr($nv->title,0,10);?>...</a></td>
                            </tr>
                            <? }}}?>
                            <? if (sizeof($newsTop3) > 2) {?>
                            <tr>
                                <td height="22" align="center" valign="middle" class="w_b_m2"><a href="/news">&gt;&gt; more</a></td>
                            </tr>
                            <? }?>
                        </table>
                    </td>
                    <td width="20%" align="center" valign="top">
                        <table width="59%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="25" align="center" valign="middle"><a href="/brand/story" class="w_b_m2">品牌故事</a></td>
                            </tr>
                            <tr>
                                <td height="25" align="center" valign="middle"><a href="/brand/design">設計服務</a></td>
                            </tr>
                            <tr>
                                <td height="22" align="center" valign="middle" class="w_b_m2"><a href="/brand/case">設計案例</a></td>
                            </tr>
                        </table>
                    </td>
                    <td width="20%" align="center" valign="top">
                        <table width="90%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="25" align="center" valign="middle"><a href="/interior" class="w_b_m2">室內設計</a></td>
                            </tr>
                            <tr>
                                <td height="25" align="center" valign="middle"><a href="/exhibition">商業空間</a></td>
                            </tr>
                            <tr>
                                <td height="22" align="center" valign="middle" class="w_b_m2"><a href="/graphic">平面設計</a></td>
                            </tr>
                        </table>
                    </td>
                    <td width="20%" align="center" valign="top">
                        <table width="90%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="25" align="center" valign="middle"><a href="/contact" class="w_b_m2">聯絡我們</a></td>
                            </tr>
                            <tr>
                                <td height="25" align="center" valign="middle">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="22" align="center" valign="middle" class="w_b_m2">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                    <td width="20%" align="center" valign="top">
                        <table width="90%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="2" align="center" valign="middle"><a href="http://www.dqpa.org/" target="_blank" class="w_b_m2">DQPA裝修消保會</a></td>
                            </tr>
                            <tr>
                                <td height="2" align="center" valign="middle"><a href="http://www.fgcasa.com.tw/" target="_blank" class="w_b_m2">徠禮傢俱</a></td>
                            </tr>
                            <tr>
                                <td height="2" align="center" valign="middle"><a href="http://www.chiyu-casa.com/" target="_blank" class="w_b_m2">騏聿家居</a></td>
                            </tr>
                            <!--
                            <tr>
                                <td height="22" align="center" valign="middle" class="w_b_m2"><a href="#">&gt;&gt; more</a></td>
                            </tr>
                            -->
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>