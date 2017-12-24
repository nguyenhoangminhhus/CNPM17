@extends('admin.master_admin')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <a href="#"><button type="button" id="change" class="btn btn-warning">Sửa hóa đơn</button></a>
        <button type="button" id="delete" class="btn btn-danger">Xóa hóa đơn</button>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Danh sách hóa đơn</h2>
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
                  <th>Tên khách hàng</th>
                  <th>Tổng giá</th>
                  <th>Ngày đặt hàng</th>
                  <th>Trạng thái</th>
                  <th>Xem chi tiết</th>
                  <th>Sửa hóa đơn</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($bill as $b)
                <tr>
                  <td>{{$b->transaction_id}}</td>
                  <td>
                    @if($b->users_id != '')
                      <?php echo DB::table('users')->where('user_id', $b->users_id)->value('fullname'); ?>
                    @else
                      <?php echo DB::table('customer')->where('customer_id', $b->customer_id)->value('customer_name'); ?>
                    @endif
                  </td>
                  <td>{{$b->total}}</td>
                  <td>{{$b->date_oder}}</td>
                  <td>
                    @if($b->status == 0)
                      Đã đặt
                    @elseif($b->status == 1)
                      Đang giao
                    @elseif($b->status == 2)
                      Hoàn thành
                    @endif
                  </td>
                  <td><a href=""><button type="button" id="change" class="btn btn-primary">Xem chi tiết</button></a></td>
                  <td><a href=""><button type="button" id="change" class="btn btn-primary">Sửa</button></a></td>
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