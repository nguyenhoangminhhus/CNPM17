@extends('admin.master_admin')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Thêm địa chỉ</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Địa chỉ <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mô tả <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Link nhúng bản đồ</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="birthday" class="form-control col-md-7 col-xs-12" type="text" style="resize: none; height: 200px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2410721907654!2d105.80324831535897!3d21.02303799334854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5d5161f909%3A0x4dafaf500ce22be3!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBOZ2_huqFpIHRoxrDGoW5n!5e0!3m2!1svi!2s!4v1513604427340"></iframe></textarea> 
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Hủy</button>
                  <button class="btn btn-danger" type="reset">Xóa hết</button>
                  <button type="submit" class="btn btn-success">Thêm</button>
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