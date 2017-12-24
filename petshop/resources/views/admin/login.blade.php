<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shop Pet Corner / Phụ kiện chó - mèo</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">

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
            <form>
              <h1>Đăng nhập</h1>
              <div>
                <input type="text" class="form-control" placeholder="Tài khoản" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Mật khẩu" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="{{route('Admin')}}">Đăng nhập</a>
                <a class="reset_pass" href="{{route('forgot-pass')}}">Quên mật khẩu?</a>
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
