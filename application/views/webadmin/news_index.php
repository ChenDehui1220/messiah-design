<div id="wrapper">
  <div id="main-nav-bg"></div>
  <?= $menu;?>
  <section id="content">
    <div class="container">
      <div class="row" id="content-wrapper">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-sm-12">
              <div class="page-header">
                <h1 class="pull-left">
                <i class="icon-star"></i>
                <span>最新消息</span>
                </h1>
                <div class="pull-right">
                  <ul class="breadcrumb">
                    <li>
                      <a href="/admin/main">
                        <i class="icon-bar-chart"></i>
                      </a>
                    </li>
                    <li class="separator">
                      <i class="icon-angle-right"></i>
                    </li>
                    <li class="active">News</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class='row'>
          <div class='col-sm-12'>
            <a class="btn btn-danger" href="news/add"><i class="icon-edit"></i> 新增 </a>
          </div>
            <div class='col-sm-12'>
              <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-content box-no-padding'>
                  <div class='responsive-table'>
                    <div class='scrollable-area'>
                      <table class='data-table table table-bordered table-hover table-striped' style='margin-bottom:0;'>
                        <thead>
                          <tr>
                            <th class='text-center'>
                              標 題
                            </th>
                            <th class='text-center'>
                              日 期
                            </th>
                            <th class='text-center'>
                              狀 態
                            </th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?
                          if ($result) {
                          foreach($result as $k => $v) {
                          ?>
                          <tr>
                            <td><?=$v->title;?></td>
                            <td><?=$v->createTime;?></td>
                            <td class='text-center'>
                              <? if($v->status == 1){?>
                              <span class='label label-important'>on</span>
                              <? }else {?>
                              <span class='label label-success'>off</span>
                              <? }?>
                            </td>
                            <td>
                              <div class='text-center'>
                                <a class='btn btn-primary btn-xs' href='news/edit/<?=$v->id;?>'>
                                  <i class='icon-edit'></i> 編輯
                                </a>
                                <a class='btn btn-primary btn-xs deleteAction' href='news/delete/<?=$v->id;?>'>
                                  <i class='icon-remove'></i> 刪除
                                </a>
                              </div>
                            </td>
                          </tr>
                          <? }}?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?= $footer;?>
    </div>
  </section>
</div>
<!-- / START - page related files and scripts [optional] -->
<script src="/assets/javascripts/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="/assets/javascripts/plugins/datatables/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
<script src="/assets/javascripts/plugins/datatables/dataTables.overrides.js" type="text/javascript"></script>
<!-- / END - page related files and scripts [optional] -->
