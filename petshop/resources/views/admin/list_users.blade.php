@extends('admin.master_admin')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <button type="button" id="change" class="btn btn-primary">Thay đổi loại tài khoản</button>
        <button type="button" id="delete" class="btn btn-danger">Xóa tài khoản</button>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Danh sách tài khoản</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Họ tên</th>
                  <th>Tài khoản</th>
                  <th>Email</th>
                  <th>Địa chỉ</th>
                  <th>Số điện thoại</th>
                  <th>Ngày đăng ký</th>
                  <th>Loại tài khoản</th>
                </tr>
              </thead>
              <tbody> 
                <tr>
                  <td>1</td>
                  <td>Donna Snider</td>
                  <td>Customer</td>
                  <td>tuananh6195@gmail.com</td>
                  <td>27</td>
                  <td>2011/01/25</td>
                  <td>$112,000</td>
                  <td>Tài khoản thường</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection