@extends('admin.master_admin')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <a href="{{route('add-product')}}"><button type="button" id="add" class="btn btn-primary">Thêm sản phẩm</button></a>
        <a href="{{route('change-product')}}"><button type="button" id="change" class="btn btn-warning">Sửa sản phẩm</button></a>
        <button type="button" id="delete" class="btn btn-danger">Xóa sản phẩm</button>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Danh sách sản phẩm</h2>
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
                  <th>Tên sản phẩm</th>
                  <th>Loại sản phẩm</th>
                  <th>Giá cũ</th>
                  <th>Giá mới</th>
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