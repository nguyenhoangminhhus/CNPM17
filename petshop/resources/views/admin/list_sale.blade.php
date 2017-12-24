@extends('admin.master_admin')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <a href="{{route('add-sale')}}"><button type="button" id="add" class="btn btn-primary">Thêm khuyến mãi</button></a>
        <a href="{{route('change-slide')}}"><button type="button" id="change" class="btn btn-warning">Sửa khuyến mãi</button></a>
        <button type="button" id="delete" class="btn btn-danger">Xóa khuyến mãi</button>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Danh sách khuyến mãi</h2>
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
                  <th>Tên khuyến mãi</th>
                  <th>Code</th>
                  <th>Thời gian</th>
                  <th>% giảm giá</th>
                  <th>Ảnh</th>
                  <th>Mô tả</th>
                </tr>
              </thead>
              <tbody> 
                <tr>
                  <td>1</td>
                  <td>Donna Snider</td>
                  <td>Customer</td>
                  <td>tuananh6195@gmail.com</td>
                  <td>27</td>
                  <td>tuananh6195@gmail.com</td>
                  <td>27</td>
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