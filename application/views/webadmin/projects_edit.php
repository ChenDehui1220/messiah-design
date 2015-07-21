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
                <span>作品集</span>
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
                    <li class="active">Projects</li>
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
                    <? if (isset($result->id)) {?>
                      <input type="hidden" name="id" value="<?=$result->id;?>">
                      <input type="hidden" id="dbType" value="<?=$result->type;?>">
                    <? }?>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="inputSelect">類別</label>
                        <div class="col-md-4">
                          <select class="form-control" id="inputSelect" name="type">
                            <option value="1">室內設計</option>
                            <option value="2">商業空間</option>
                            <option value="3">平面視覺</option>
                            <option value="4">xxxx</option>
                          </select>
                        </div>
                      </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="validation_name">專案名稱</label>
                      <div class="col-sm-4 controls">
                        <input value="<?=$result->title;?>" class="form-control" data-rule-minlength="2" data-rule-required="true" id="validation_name" name="title" placeholder="標題" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="validation_content">內文</label>
                      <div class="col-sm-4 controls">
                        <textarea class="autosize form-control" data-rule-required="true" id="validation_content" name="content" placeholder="" rows="10"><?=$result->content;?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="validation_address">地點</label>
                      <div class="col-sm-4 controls">
                        <textarea class="autosize form-control" data-rule-required="true" id="validation_content" name="address" placeholder="" rows="1"><?=$result->address;?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="validation_date">上架日期</label>
                      <div class="col-sm-4 controls">
                        <div class="datetimepicker input-group" id="datetimepicker">
                          <input value="<?=$result->createTime;?>" class="form-control" data-format="yyyy-MM-dd HH:mm:ss" data-rule-required="true" id="validation_date" name="createTime" type="text">
                          <span class="input-group-addon">
                            <span data-date-icon="icon-calendar" data-time-icon="icon-time" class="icon-calendar"></span>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">精選</label>
                      <div class="col-sm-4">
                        <label class="radio radio-inline">
                          <input type="radio" name="top" value="1" <?=($result->top==1)?'checked="true"':'';?> >
                          Yes
                        </label>
                        <label class="radio radio-inline">
                          <input type="radio" name="top" value="0" <?=($result->top==0)?'checked="true"':'';?>>
                          No
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">上下架</label>
                      <div class="col-sm-4">
                        <label class="radio radio-inline">
                          <input type="radio" name="status" value="1" <?=($result->status==1)?'checked="true"':'';?> >
                          On
                        </label>
                        <label class="radio radio-inline">
                          <input type="radio" name="status" value="0" <?=($result->status==0)?'checked="true"':'';?>>
                          Off
                        </label>
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
