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
                @foreach($user as $u)
                <tr>
                  <td>{{$u->user_id}}</td>
                  <td>{{$u->fullname}}</td>
                  <td>{{$u->account}}</td>
                  <td>{{$u->email}}</td>
                  <td>{{$u->address}}</td>
                  <td>{{$u->phone}}</td>
                  <td>{{$u->sign_date}}</td>
                  <td>
                    @if($u->role == '1')
                      Admin
                    @elseif($u->role == '0')
                      Tài khoản thường
                    @endif
                  </td>
                </tr>
                @endforeach
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