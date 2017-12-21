@extends('admin.master_admin')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Đổi mật khẩu</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Mật khẩu cũ <span class="required">*</span>
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Mật khẩu mới <span class="required">*</span>
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Nhập lại mật khẩu mới <span class="required">*</span></label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection