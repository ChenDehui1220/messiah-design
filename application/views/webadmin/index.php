<div class="row">
    <div class="col-sm-12">
        <div class="page-header">
            <h1 class="pull-left">
            <i class="icon-star"></i>
            <span><?= ADMIN_BASE_TITLE;?></span>
            </h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-content">
                <form class="form form-horizontal validate-form" style="margin-bottom: 0;">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="validation_name">帳號</label>
                        <div class="col-sm-5 controls">
                            <input class="form-control" id="account" name="account" data-rule-required="true" placeholder="Please enter your account" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="validation_password">密碼</label>
                        <div class="col-sm-5 controls">
                            <input class="form-control" id="password" name="password" data-rule-required="true" placeholder="Please enter your assword" type="password">
                        </div>
                    </div>
                    <div class="form-actions" style="margin-bottom:0">
                        <div class="row">
                            <div class="col-sm-12 col-sm-offset-5">
                                <button class="btn btn-primary" type="submit">
                                <i class="icon-save"></i>
                                登入
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
