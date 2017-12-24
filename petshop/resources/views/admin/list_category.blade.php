@extends('admin.master_admin')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <a href="{{route('add-category')}}"><button type="button" id="add" class="btn btn-primary">Thêm loại sản phẩm</button></a>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Danh sách loại sản phẩm</h2>
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
                  <th>Tên loại</th>
                  <th>Biểu tượng</th>
                  <th>Màu sắc</th>
                  <th>Số cột</th>
                  <th></th>
                </tr>
              </thead>
              <tbody> 
                <?php
                    $cat = DB::table('category')->get();
                   ?>
                 @foreach($cat as $item)
                <tr>
                  
                  
                  <td><?php echo $item->category_id; ?></td>
                  <td><?php echo $item->name; ?></td>
                  <td><?php echo $item->category_icon; ?></td>
                  <td><?php echo $item->color; ?></td>
                  <td><?php echo $item->cot; ?></td>
                  <td>
                  
                    <a href=""><button type="button" id="change" class="btn btn-primary">Sửa loại sản phẩm</button></a>
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