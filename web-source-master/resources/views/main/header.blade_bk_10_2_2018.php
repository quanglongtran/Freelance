<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8164844789721213",
    enable_page_level_ads: true
  });
</script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bac si Viet">
    <meta name="keywords" content="Medical, medihere, Doctor, HTML5, Bootstrap, Popular, custom, clinic, health-care, template, theme" />
    <meta name="author" content="Mostafiz">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <meta property="og:image" itemprop="thumbnailUrl" content="{{$thumbnail or null}}" />
					
    <link rel="apple-touch-icon" sizes="57x57" href="/public/images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/public/images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/public/images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/public/images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/public/images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/public/images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/public/images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/public/images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/public/images/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/public/images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/public/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/public/images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/public/images/favicon-16x16.png">
	<link rel="manifest" href="/public/images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/public/images/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <title>{{$title or "Chọn bệnh viện, bác sĩ, phòng khám và tra cứu thuốc, bệnh để chăm sóc sức khỏe tốt nhât | tdoctor.vn"}} </title>
    <!-- Stylesheets -->
    <!-- preloader css -->
    <!--<link rel="stylesheet" href="/public/css/introLoader.min.css" media="none" onload="if(media!='all')media='all'">-->
    <!-- animate css -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
 
    <link rel="stylesheet" href="/public/css/animate.css" type="text/css" />
    <!-- owl carousel styles -->
    <link rel="stylesheet" href="/public/css/owl.carousel.css" type="text/css" />
    <!-- date picker css -->
     <!-- main style -->
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,500' rel='stylesheet' type='text/css'>
    <!-- modernizr -->
    <script async src="/public/js/modernizr.js "></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><script>  (adsbygoogle = window.adsbygoogle || []).push({    google_ad_client: "ca-pub-8164844789721213",    enable_page_level_ads: true  });</script>
</head>

<body>

    <!-- Document Wrapper
    ============================================= -->
    <main id="homepage">
	
        <!-- // Preloader markup -->
        <div id="element" class="introLoading"></div>

        <!-- Header
        ============================================= -->
        <header id="header" class="navbar-fixed-top">
            <div id="header-wrap">
                <div class="position">
                    <nav class="navbar navbar-default">
                        <div class="">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Logo ============================================= -->
                                <div id="logo">
                                    <a href="/" class="medihere-logo"><img src="/public/images/logo.png" alt="medihere Logo" title="medihere"></a>
                                </div>
                                <!-- #logo end -->
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <!-- unordered list starts here -->
                                <ul class="nav navbar-nav navbar-left">
                                    <li>
                                        <a class="@yield('hoi-bac-si')" href="/hoi-bac-si" title="Hỏi bác sĩ">
                                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                                            Hỏi bác sĩ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/bai-viet" class="@yield('bai-viet')" title="Bài viết">
                                            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                            Bài viết
                                        </a>
                                    </li>                                    
                                    <li>
                                        <a href="/benh" class="@yield('benh')" title="Bệnh">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Bệnh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/thuoc" class="@yield('thuoc')" title="Thuốc">
                                            <i class="fa fa-toggle-on"></i>
                                            Thuốc
                                        </a>
                                    </li>
                                     
                                    <li>
                                        <a href="/danh-sach/bac-si" class="@yield('bac-si')" title="Bác sĩ">
                                            <i class="fa fa-fw fa-user-md"></i>
                                            Bác sĩ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/danh-sach" class="@yield('co-so-y-te')" title="Cơ sở y tế">
                                            <i class="fa fa-fw fa-hospital-o"></i>
                                            Cơ sở y tế
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/khuyen-mai" class="@yield('khuyen-mai')" title="Khuyến mãi">
                                            <i class="fa fa-gift" aria-hidden="true"></i> 
                                            Khuyến mãi
                                        </a>
                                    </li>

                                     <li>
                                        <a href="/messages" class="@yield('khuyen-mai')" title="Chat với bác sĩ
                                            <i class="fa fa-gift" aria-hidden="true"></i> 
                                            Chat Bác Sĩ
                                        </a>
                                    </li>
                                </ul>
                          @if(Session::get('user')!=null)      
                                <div class="user">						
							
								<span class="name"><a href="/tai-khoan"><i class="fa fa-fw fa-user" aria-hidden="true"></i> @if(Session::get('user')!=null) {{Session::get('user')->fullname}} @else None @endif</a></span>
							

							<div class="user-dropdown">
							@if(Session::get('user')->user_type_id==2)
								<a class="" href="/tai-khoan/cau-hoi-moi-nhat/"><i class="fa fa-fw fa-comments-o" aria-hidden="true"></i> Câu hỏi mới nhất</a>

							@endif

								<a class="" href="/tai-khoan/hoi-dap/"><i class="fa fa-fw fa-comments-o" aria-hidden="true"></i> Hỏi đáp của tôi</a>

								<a class="" href="/tai-khoan/nhan-xet/"><i class="fa fa-fw fa-commenting" aria-hidden="true"></i> Nhận xét đã gửi</a>

								<a href="/messages" class=""><i class="fa fa-fw fa-bookmark-o" aria-hidden="true"></i> Chat với bác sĩ (<span class="favourite-count">0</span>)</a>

								

								

								

								<a class="" href="/tai-khoan/"><i class="fa fa-fw fa-info-circle" aria-hidden="true"></i> Thông tin tài khoản</a>

								<a class="" href="/tai-khoan/doi-mat-khau/"><i class="fa fa-fw fa-key" aria-hidden="true"></i> Đổi mật khẩu</a>

								<a href="/dang-xuat" ><i class="fa fa-fw fa-sign-out" aria-hidden="true"></i> Đăng xuất</a>
							</div>
							</div>
						@else
						<div class="user main-nav">
							<a class=" signup-overlay-trigger" href="/dang-ky/user"><i class="fa fa-fw fa-user-plus" aria-hidden="true" rel="nofollow"></i> Đăng ký</a>
							<a class=" login-overlay-trigger" href="/dang-nhap/"><i class="fa fa-fw fa-sign-in" aria-hidden="true" rel="nofollow"></i><span class="unimportant">Đăng nhập</span></a>
						</div>
						@endif
							
						
						@if(!Request::is('/'))
						<form class="search" method="get" action="/tim-kiem" name="global-search">
						<span class="location">
							<select id="location-switch">
								<option value="">Cả nước</option>
									<option value="Hà Nội">Hà Nội</option>
									<option value="Hồ Chí Minh">Hồ Chí Minh</option>
									<option value="An Giang">An Giang</option><option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option><option value="Bắc Cạn">Bắc Cạn</option><option value="Bắc Giang">Bắc Giang</option><option value="Bạc Liêu">Bạc Liêu</option><option value="Bắc Ninh">Bắc Ninh</option><option value="Bến Tre">Bến Tre</option><option value="Bình Dương">Bình Dương</option><option value="Bình Định">Bình Định</option><option value="Bình Phước">Bình Phước</option><option value="Bình Thuận">Bình Thuận</option><option value="Cao Bằng">Cao Bằng</option><option value="Cà Mau">Cà Mau</option><option value="Cần Thơ">Cần Thơ</option><option value="Đà Nẵng">Đà Nẵng</option><option value="Đắk Nông">Đắk Nông</option><option value="Đắk Lắk">Đắk Lắk</option><option value="Đồng Nai">Đồng Nai</option><option value="Điện Biên">Điện Biên</option><option value="Đồng Tháp">Đồng Tháp</option><option value="Gia Lai">Gia Lai</option><option value="Hà Giang">Hà Giang</option><option value="Hà Nam">Hà Nam</option><option value="Hà Tĩnh">Hà Tĩnh</option><option value="Hải Dương">Hải Dương</option><option value="Hải Phòng">Hải Phòng</option><option value="Hậu Giang">Hậu Giang</option><option value="Hòa Bình">Hòa Bình</option><option value="Hưng Yên">Hưng Yên</option><option value="Khánh Hòa">Khánh Hòa</option><option value="Kiên Giang">Kiên Giang</option><option value="Kon Tum">Kon Tum</option><option value="Lai Châu">Lai Châu</option><option value="Lạng Sơn">Lạng Sơn</option><option value="Lào Cai">Lào Cai</option><option value="Lâm Đồng">Lâm Đồng</option><option value="Long An">Long An</option><option value="Nam Định">Nam Định</option><option value="Nghệ An">Nghệ An</option><option value="Ninh Bình">Ninh Bình</option><option value="Ninh Thuận">Ninh Thuận</option><option value="Phú Thọ">Phú Thọ</option><option value="Phú Yên">Phú Yên</option><option value="Quảng Bình">Quảng Bình</option><option value="Quảng Nam">Quảng Nam</option><option value="Quảng Ngãi">Quảng Ngãi</option><option value="Quảng Ninh">Quảng Ninh</option><option value="Quảng Trị">Quảng Trị</option><option value="Sơn La">Sơn La</option><option value="Sóc Trăng">Sóc Trăng</option><option value="Tây Ninh">Tây Ninh</option><option value="Thái Bình">Thái Bình</option><option value="Thái Nguyên">Thái Nguyên</option><option value="Thanh Hóa">Thanh Hóa</option><option value="Thừa Thiên - Huế">Thừa Thiên - Huế</option><option value="Tiền Giang">Tiền Giang</option><option value="Trà Vinh">Trà Vinh</option><option value="Tuyên Quang">Tuyên Quang</option><option value="Vĩnh Phúc">Vĩnh Phúc</option><option value="Vĩnh Long">Vĩnh Long</option><option value="Yên Bái">Yên Bái</option>
							</select>
						</span>

						<div class="inner">
							<div class="has-suggestion"><input name="q" id="search-input" value="" placeholder="Triệu chứng, bác sĩ, cơ sở y tế..." autocomplete="off" type="text"><div class="suggestion"></div></div>
							<button type="submit">
                                <i class="fa fa-search icon-search-not-loading"></i>
                                <i class="icon-search-loading"></i>
                            </button>
						</div>
					</form>
					@endif
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </header>
        <!-- #header end -->
