@extends('admin.master_admin')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Thông tin tài khoản</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="col-md-2 col-sm-2 col-xs-12 profile_left">
              <div class="profile_img">
                <div id="crop-avatar">
                  <!-- Current avatar -->
                  <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                </div>
              </div>
              <h3>Samuel Doe</h3>

              <a href="{{route('edit-profile')}}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Sửa thông tin</a>
              <br />

            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tài khoản</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" disabled="disabled">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="last-name" name="last-name" class="form-control col-md-7 col-xs-12" disabled="disabled">
                  </div>
                </div>
                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" disabled="disabled">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Số điện thoại</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="text" disabled="disabled">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày đăng ký</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="text" disabled="disabled">
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
