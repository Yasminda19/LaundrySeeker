<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<!-- Fontfaces CSS-->
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="images/logo3.png">
  <title>Laundry Seeket - Memudahkan anda mencari laundry</title>
  <!-- This page CSS -->
  <!-- chartist CSS -->
  <link href="{{URL::asset('assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
  <!--c3 plugins CSS -->
  <link href="{{URL::asset('assets/node_modules/c3-master/c3.min.css')}}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{URL::asset('dist/css/style.css')}}" rel="stylesheet">
  <!-- Dashboard 1 Page CSS -->
  <link href="{{URL::asset('dist/css/pages/dashboard1.css')}}" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <style>
        .pemisah{
            height: 40px;
        }

        
        .pembagi-card{
            padding-top: 100px;

        }
    
.card-article{
    width: 95%;
    position: relative;
      max-width: 1200px;
      margin: auto;
      background: #fff;
      box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
      padding: 25px;
      border-radius: 25px;
      min-height: 200px;
    transition: all .3s;

}
    </style>

    
</head>
    
<body class="skin-default-dark fixed-layout">
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <a class="navbar-brand" href="browse.html" style="color: #464947"><b>LAUNDRYSEEKER</b>
            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                  
                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fa fa-times"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="/manage/profile"  aria-haspopup="true" aria-expanded="false"><img src="{{URL::asset('images/unnamed.jpg')}}" alt="User Image" class="img-circle" width="30"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @include('layouts.sidebar')
    
    <!-- Main -->
    <div class="content-wrapper">
      @yield('content')
    </div>
  </div>
</body>