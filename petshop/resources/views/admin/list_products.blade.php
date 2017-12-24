@extends('admin.master_admin')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <a href="{{route('add-product')}}"><button type="button" id="add" class="btn btn-primary">Thêm sản phẩm</button></a>
        
        
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
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody> 
                <?php $pro = DB::table('products')->get(); ?>
                @foreach($pro as $item)
                <tr>
                  <td><?php echo $item->products_id;
                            $a = $item->products_id;
                   ?></td>
                  <td><?php echo $item->name; ?></td>
                  <td><?php $namecat = DB::table('category')->where('category_id',$item->category_id)->get(); 
                     //echo $item->category_id;
                     foreach ($namecat as $key) {
                       echo $key->name;
                     }
                  ?></td>
                  <td><?php echo $item->unit_price ;?></td>
                  <td><?php echo $item->promotion_price ;?></td>
                  <td><?php echo $item->image ;?></td>
                  <td><?php echo $item->description ;?></td>
                  <td><a href="{{route('change-product',$a)}}"><button type="button" id="change" class="btn btn-warning">Sửa sản phẩm</button></a></td>
                  <td><button type="button" id="delete" class="btn btn-danger">Xóa sản phẩm</button></td>
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