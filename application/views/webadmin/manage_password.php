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
                <span>密碼變更</span>
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
                    <li class="active">Password</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class="col-sm-12">
              <div class="box">
                <div class="box-content">
                  <form class="form form-horizontal validate-form" method="post" style="margin-bottom: 0;">
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="validation_old_password">原密碼</label>
                      <div class="col-sm-4 controls">
                        <input value="" class="form-control" data-rule-required="true" id="old_password" name="old_password" placeholder="" type="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="validation_new_password">新密碼</label>
                      <div class="col-sm-4 controls">
                        <input value="" class="form-control" data-rule-required="true" id="new_password" name="new_password" placeholder="" type="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="validation_re_password">再一次新密碼</label>
                      <div class="col-sm-4 controls">
                        <input value="" class="form-control" data-rule-required="true" id="re_password" name="re_password" placeholder="" type="password">
                      </div>
                    </div>
                    <div class="form-actions" style="margin-bottom:0">
                      <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                          <button class="btn btn-primary" type="submit">
                          <i class="icon-save"></i>
                          確認送出
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
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
