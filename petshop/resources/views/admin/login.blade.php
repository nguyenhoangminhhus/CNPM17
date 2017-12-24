<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shop Pet Corner / Phụ kiện chó - mèo</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap -->
    <link href="Admin_asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Admin_asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Admin_asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="Admin_asset/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Admin_asset/css/custom.css" rel="stylesheet">

    <!-- web-fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
  <!-- web-fonts -->
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{route('dang-nhap-admin')}}" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <h1>Đăng nhập</h1>

              @if(count($errors)>0)
                <div class="alert alert-danger">
                  @foreach($errors->all() as $err)
                    {{$err}}
                  @endforeach
                </div>
              @endif
              @if(Session::has('flag'))
                <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
              @endif
              <div>
                <input type="text" class="form-control" name="account" placeholder="Tài khoản" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="" />
              </div>
              <div>
                <input type="submit" value="Đăng nhập">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div class="header-logo">
                    <h2><a href="#"><span>S</span>hopet<i> Corner</i></a></h2>
                    <h6>Cửa hàng của bạn. Địa điểm của bạn</h6> 
                </div>
              </div>
            </form>
          </section>
        </div> 
      </div>
    </div>
  </body>
</html>
