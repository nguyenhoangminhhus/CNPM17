@extends('admin.master_admin')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tin nhắn</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Người gửi</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" disabled="disabled" class="form-control col-md-7 col-xs-12" value="ádsasf">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" disabled="disabled" type="text" value="fsdfasd">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thời gian</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" disabled="disabled" type="text" value="fsdfasd">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng thái <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="text" disabled="disabled">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="birthday" class="form-control col-md-7 col-xs-12" type="text" disabled="disabled" style="resize: none; height: 500px;"></textarea> 
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Đã xem</button>
                  <a href="{{route('reply-inbox')}}"><button type="button" class="btn btn-success">Gửi lại tin nhắn</button></a>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection