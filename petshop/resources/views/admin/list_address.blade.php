@extends('admin.master_admin')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <a href="{{route('add-address')}}"><button type="button" id="add" class="btn btn-primary">Thêm địa chỉ</button></a>
        <a href="{{route('change-address')}}"><button type="button" id="change" class="btn btn-warning">Sửa địa chỉ</button></a>
        <button type="button" id="delete" class="btn btn-danger">Xóa địa chỉ</button>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Danh sách địa chỉ</h2>
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
                  <th>Địa chỉ</th>
                  <th>Mô tả</th>
                  <th>Link nhúng bản đồ</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($address as $a)
                <tr>
                  <td>{{$a->Addresss_id}}</td>
                  <td>{{$a->Addresss_name}}</td>
                  <td>{{$a->Addresss_description}}</td>
                  <td>{{$a->Addresss_linkmap}}</td>
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