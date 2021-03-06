

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
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
    <title>{{$title or "Ch???n b???nh vi???n, b??c s??, ph??ng kh??m v?? tra c???u thu???c, b???nh ????? ch??m s??c s???c kh???e t???t nh??t | tdoctor.vn"}} </title>
    <!-- Stylesheets -->
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <!-- preloader css -->
    <link rel="stylesheet" href="/public/css/introLoader.min.css">
    <!-- animate css -->
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
    <script src="/public/js/modernizr.js"></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

	<body class="page-professional-list
		 not-logged-in 
		"
		data-customer-id=
		data-customer-type=>


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
                                    <li><a class="active" href="/hoi-bac-si"><i class="fa fa-fw fa-comments-o"></i>H???i b??c s??</a></li>
                                    <li><a href="/bai-viet"><i class="fa fa-fw fa-heartbeat"></i>B??i vi???t</a></li>
                                    <li><a href="/danh-sach/?specialities=xet-nghiem"><i class="fa fa-fw fa-flask"></i>X??t nghi???m</a></li>
                                    <li><a href="/benh"><i class="fa fa-bed" aria-hidden="true"></i>B???nh</a></li>
                                    <li><a href="/thuoc"><i class="fa fa-toggle-on"></i>Thu???c</a></li>
                                      <li><a href="/danh-sach/bac-si"><i class="fa fa-fw fa-user-md"></i>B??c s??</a></li>
                                        <li><a href="/danh-sach"><i class="fa fa-fw fa-hospital-o"></i>C?? s??? y t???</a></li>
                                          <li><a href="/khuyen-mai"><i class="fa fa-fw fa-gift"></i>Khuy???n m??i</a></li>
                                </ul>
                          @if(Session::get('user')!=null)      
                                <div class="user">
							<a href="/tai-khoan/ghi-nho/" class="favourite-count-container" title="Danh s??ch ???? ghi nh???">
								<i class="fa fa-bookmark" aria-hidden="true"></i> <span class="favourite-count">0</span>
							</a>
							
								<span class="name"><a href="/tai-khoan"><i class="fa fa-fw fa-user" aria-hidden="true"></i> @if(Session::get('user')!=null) {{Session::get('user')->fullname}} @else None @endif</a></span>
							

							<div class="user-dropdown">
							@if(Session::get('user')->user_type_id==2)
								<a class="" href="/tai-khoan/cau-hoi-moi-nhat/"><i class="fa fa-fw fa-comments-o" aria-hidden="true"></i> C??u h???i m???i nh???t</a>

							@endif

								<a class="" href="/tai-khoan/hoi-dap/"><i class="fa fa-fw fa-comments-o" aria-hidden="true"></i> H???i ????p c???a t??i</a>

								<a class="" href="/tai-khoan/nhan-xet/"><i class="fa fa-fw fa-commenting" aria-hidden="true"></i> Nh???n x??t ???? g???i</a>

								<a href="/tai-khoan/ghi-nho/" class=""><i class="fa fa-fw fa-bookmark-o" aria-hidden="true"></i> ???? ghi nh??? (<span class="favourite-count">0</span>)</a>

								

								

								

								<a class="" href="/tai-khoan/"><i class="fa fa-fw fa-info-circle" aria-hidden="true"></i> Th??ng tin t??i kho???n</a>

								<a class="" href="/tai-khoan/doi-mat-khau/"><i class="fa fa-fw fa-key" aria-hidden="true"></i> ?????i m???t kh???u</a>

								<a href="/dang-xuat" class="logout"><i class="fa fa-fw fa-sign-out" aria-hidden="true"></i> ????ng xu???t</a>
							</div>
							</div>
						@else
						<div class="user main-nav">
							<a class=" signup-overlay-trigger" href="/dang-ky/"><i class="fa fa-fw fa-user-plus" aria-hidden="true" rel="nofollow"></i> ????ng k??</a>
							<a class=" login-overlay-trigger" href="/dang-nhap/"><i class="fa fa-fw fa-sign-in" aria-hidden="true" rel="nofollow"></i><span class="unimportant">????ng nh???p</span></a>
						</div>
						@endif
							
						
						@if(!Request::is('/'))
						<form class="search" method="get" action="{{url('/tim-kiem')}}" name="global-search">
						<span class="location">
							<select id="location-switch">
								<option value="">C??? n?????c</option>
									<option value="H?? N???i">H?? N???i</option>
									<option value="H??? Ch?? Minh">H??? Ch?? Minh</option>
									<option value="An Giang">An Giang</option><option value="B?? R???a - V??ng T??u">B?? R???a - V??ng T??u</option><option value="B???c C???n">B???c C???n</option><option value="B???c Giang">B???c Giang</option><option value="B???c Li??u">B???c Li??u</option><option value="B???c Ninh">B???c Ninh</option><option value="B???n Tre">B???n Tre</option><option value="B??nh D????ng">B??nh D????ng</option><option value="B??nh ?????nh">B??nh ?????nh</option><option value="B??nh Ph?????c">B??nh Ph?????c</option><option value="B??nh Thu???n">B??nh Thu???n</option><option value="Cao B???ng">Cao B???ng</option><option value="C?? Mau">C?? Mau</option><option value="C???n Th??">C???n Th??</option><option value="???? N???ng">???? N???ng</option><option value="?????k N??ng">?????k N??ng</option><option value="?????k L???k">?????k L???k</option><option value="?????ng Nai">?????ng Nai</option><option value="??i???n Bi??n">??i???n Bi??n</option><option value="?????ng Th??p">?????ng Th??p</option><option value="Gia Lai">Gia Lai</option><option value="H?? Giang">H?? Giang</option><option value="H?? Nam">H?? Nam</option><option value="H?? T??nh">H?? T??nh</option><option value="H???i D????ng">H???i D????ng</option><option value="H???i Ph??ng">H???i Ph??ng</option><option value="H???u Giang">H???u Giang</option><option value="H??a B??nh">H??a B??nh</option><option value="H??ng Y??n">H??ng Y??n</option><option value="Kh??nh H??a">Kh??nh H??a</option><option value="Ki??n Giang">Ki??n Giang</option><option value="Kon Tum">Kon Tum</option><option value="Lai Ch??u">Lai Ch??u</option><option value="L???ng S??n">L???ng S??n</option><option value="L??o Cai">L??o Cai</option><option value="L??m ?????ng">L??m ?????ng</option><option value="Long An">Long An</option><option value="Nam ?????nh">Nam ?????nh</option><option value="Ngh??? An">Ngh??? An</option><option value="Ninh B??nh">Ninh B??nh</option><option value="Ninh Thu???n">Ninh Thu???n</option><option value="Ph?? Th???">Ph?? Th???</option><option value="Ph?? Y??n">Ph?? Y??n</option><option value="Qu???ng B??nh">Qu???ng B??nh</option><option value="Qu???ng Nam">Qu???ng Nam</option><option value="Qu???ng Ng??i">Qu???ng Ng??i</option><option value="Qu???ng Ninh">Qu???ng Ninh</option><option value="Qu???ng Tr???">Qu???ng Tr???</option><option value="S??n La">S??n La</option><option value="S??c Tr??ng">S??c Tr??ng</option><option value="T??y Ninh">T??y Ninh</option><option value="Th??i B??nh">Th??i B??nh</option><option value="Th??i Nguy??n">Th??i Nguy??n</option><option value="Thanh H??a">Thanh H??a</option><option value="Th???a Thi??n - Hu???">Th???a Thi??n - Hu???</option><option value="Ti???n Giang">Ti???n Giang</option><option value="Tr?? Vinh">Tr?? Vinh</option><option value="Tuy??n Quang">Tuy??n Quang</option><option value="V??nh Ph??c">V??nh Ph??c</option><option value="V??nh Long">V??nh Long</option><option value="Y??n B??i">Y??n B??i</option>
							</select>
						</span>

						<div class="inner">
							<div class="has-suggestion"><input name="q" id="search-input" value="" placeholder="tri???u ch???ng, b??c s??, c?? s??? y t???..." autocomplete="off" type="text"><div class="suggestion" style="display: none;"></div></div>
							<button type="submit"><i class="fa fa-search icon-search-not-loading"></i><i class="icon-search-loading"></i></button>
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
  <div id="main">
			
			
			
<div id="page-title">
	<div class="background"></div>
	<div class="mask">
		<div class="position">
			<ul class="breadcrumbs">
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					<a href="/" itemprop="url"><span itemprop="title">Trang ch???</span></a>
				</li>
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					<a href="/danh-sach/" itemprop="url"><span itemprop="title">C?? s??? y t???</span></a>
				</li>
				
				
			</ul>
			<h1>
	@if(request()->input('q')!==null)
	T??m ki???m ph??ng kh??m theo t??? kh??a "{{urldecode(request()->input('q'))}}"			
	@else
		Danh s??ch c?? s??? y t???
	    @if(Session::has('province'))
	        </br>t???i {{$_COOKIE['province']}}
	    @endif
    @endif

<span class="weak">
	

	
	

	

	


</span>

			</h1>
		</div>
	</div>
</div>

@if(request()->input('q')!==null)
    <div id="nav-search">
        <div class="position">
            <ul>
                <li>
                    <span>T??m ki???m theo:</span>
                </li>
                
                <li>
                    <a href="/danh-sach/?q={{request()->input('q')}}" class="active">
                        C?? s??? y t??? ({{$clinic or '0' }})
                    </a>
                </li>
                
                
                <li>
                    <a href="/danh-sach/bac-si/?q={{request()->input('q')}}">
                        B??c s?? ({{$doctor or '0'}})
                    </a>
                </li>
                
                
                 <!-- 
                <li>
                    <a href="/dich-vu/?q={{request()->input('q')}}">
                        D???ch v??? ({{$service or '0'}} )
                    </a>
                </li>
                
                 -->
                
                
                <li>
                    <a href="/hoi-bac-si/danh-sach/?q={{request()->input('q')}}">
                        H???i b??c s?? ({{$question}})
                    </a>
                </li>
                
               
                
                
                <li>
                    <a href="/benh/tim-kiem/?q={{request()->input('q')}}" >
                        B???nh ({{$count or '0'}})
                    </a>
                </li>
                
                
                <li>
                    <a href="/thuoc/danh-sach/?q={{request()->input('q')}}">
                        Thu???c ({{$thuoc or '0'}})
                    </a>
                </li>
                
               
                
            </ul>
        </div>
    </div>
  @endif


<div id="list" class="places has-aside">
	<div class="position">
		<div class="content">
			

<div id="filter-cta">
	<a class="button secondary weak activator" href="#filter-summary">
		<i class="fa fa-filter fa-fw" aria-hidden="true"></i><span class="active">???n b??? l???c</span><span class="inactive">L???c danh s??ch</span>
	</a>
	<!-- 
		<span class="geosearch-options">
			<a href="#" class="button secondary weak sort-by-location ">
				<i class="fa fa-spinner fa-pulse loader"></i>
				G???n nh???t tr?????c
			</a>
			<a class="button secondary weak update-location" href="#">
				<i class="fa fa-crosshairs" aria-hidden="true"></i><i class="fa fa-spinner fa-pulse loader"></i>
				<span class="label">?????nh v???</span>
			</a>
		</span>
	-->
</div>

<div id="filter-summarys">
		<form class="form-inline" action="/danh-sach/" method="get">
		 <div class="form-group">
   			<select name="province" id="province" onchange="province_change()">
   			<?php $province = App\Province::all();
   			$select = request()->input('province');?>
   			<option value="">C??? n?????c</option>
   			
   			@foreach($province as $pr)
			<option value="{{$pr->province_url}}" @if($pr->province_url===$select)selected="selected" @endif>{{$pr->province_name}}</option>
			@endforeach
			
			</select>
  		</div>
		 <div class="form-group">
   			<select name="district" id="district">
   			<?php $province = App\Province::all();
   			$select = request()->input('province');?>
   			<option value="">Qu???n/huy???n</option>
   			
   		
			
			</select>
  		</div>
		
	
  		 <div class="form-group">
   			<select name ="speciality">
			<option value="">Chuy??n khoa</option>
			<?php $specs = App\Speciality::all();$selectsp = request()->input('speciality');?>
			
			@foreach($specs as $sp)
				<option value="{{$sp->specialty_url}}" @if($sp->specialty_url===$selectsp)selected="selected" @endif>{{$sp->speciality_name}}</option>
			@endforeach
			</select>
  		</div>
		<button type="submit" class="btn btn-default">L???c k???t qu???</button>
		</form>
		
		
	</div>

<script type="text/html" id="full-filter-template">
	<form name="listing-filter" action="#" method="GET">
		<ul class="tab-content-triggers">
			<% for (var i = 0; i < obj.length; i++) { %>
				<li>
					<a href="#tab-<%= obj[i].name %>" class="has-icon icon-<%= obj[i].name %>"
						data-track-path="/danh-sach/loc/tab/<%= obj[i].name %>"
						title="L???c danh s??ch c?? s??? y t??? theo <%= obj[i].displayName %> - danh s??ch c??c t??y ch???n">
						<%= obj[i].displayName %>
					</a>
				</li>
			<% } %>
		</ul>
		<div class="tab-content-container">
			<% for (var i = 0; i < obj.length; i++) { %>
				<div id="tab-<%= obj[i].name %>" class="tab-content filter-content <%= obj[i].name %> has-no-option" data-link="<%= obj[i].link %>" <% if (obj[i].child) { %> data-child="<%= obj[i].child %>" <% } %> data-name="<%= obj[i].name %>">
					<div class="inner">
						<% if (obj[i].parent) { %>
							<p class="no-option">B???n c???n ch???n ??t nh???t m???t <a href="#tab-<%= obj[i].parent %>" class="tab-content-link"><%= obj[i].parentDisplayName %></a> tr?????c.</p>
						<% } %>
						<% if (!obj[i].parent) { %>
							<% for (var k = 0; k < 3; k++) { %>
								<ul>
									<% for (var j = Math.ceil(obj[i].options.length / 3)*k; j < Math.ceil(obj[i].options.length / 3)*(k + 1) && j < obj[i].options.length; j++) { %>
										<li>
											<label>
												<input type="checkbox" name="<%= obj[i].name %>" <% if (obj[i].options[j].checked) { %>checked<% } %>
													value="<%= obj[i].options[j].slug ? obj[i].options[j].slug : obj[i].options[j].name %>" />
												<span><%= obj[i].options[j].name %></span>
											</label>
										</li>
									<% } %>
								</ul>
							<% } %>
						<% } %>
					</div>
					<div class="search">
						<input type="text" name="<%= obj[i].name %>-keywords" placeholder="T??m tr??n danh s??ch n??y..." />
					</div>
				</div>
			<% } %>
		</div>
		<div class="button-row">
			<button type="submit"><i class="fa fa-filter fa-fw" aria-hidden="true"></i> L???c danh s??ch</button>
		</div>
	</form>
</script>

<script type="text/html" id="list-filter-template">
	<div class="<%= slug %>">
		<div class="child-name">
			<strong><%= name %></strong>
		</div>
		<div class="child-content">
			<% for (var k = 0; k < 3; k++) { %>
			<ul>
				<% for (var j = Math.ceil(data.length / 3)*k; j < Math.ceil(data.length / 3)*(k + 1) && j < data.length; j++) { %>
				<li>
					<label>
						<input type="checkbox" name="<%= child %>" <% if (data[j].checked) { %>checked<% } %>
						value="<%= data[j].slug ? data[j].slug : data[j].name %>" />
						<span><%= data[j].name %></span>
					</label>
				</li>
				<% } %>
			</ul>
			<% } %>
		</div>
	</div>
</script>

						

			<ul>
			@if(isset($clinics))
			@foreach($clinics as $cl)
				
					<li class="has-actions has-map-marker" data-map-marker="29068">
						<div class="media">
							<a href="/co-so-y-te/{{$cl->clinic_url}}-{{$cl->clinic_id}}/kham-benh" class="hero-image" 
								style="background-image: url({{url('public/images/health_facilities/'.$cl->profile_image)}})">
							</a>
							
							<a href="/co-so-y-te/{{$cl->clinic_url}}-{{$cl->clinic_id}}/kham-benh#nhan-xet" class="comments-summary" title="4.0 sao, 93 nh???n x??t">
								
									<span class="star-ratings inited" data-score="80"><span class="stars"><span class="back"><b></b><b></b><b></b><b></b><b></b></span><span class="front" style="width: 80%;"><b></b><b></b><b></b><b></b><b></b></span></span></span>
								
								<span class="comment-count">
									<i class="fa fa-comment-o"></i> 93
								</span>
							</a>
						</div>

						<div class="body">
							<div class="info">
								<h2>
									<a href="/co-so-y-te/{{$cl->clinic_url}}-{{$cl->clinic_id}}/kham-benh">{{$cl->clinic_name}}</a>
									

									
										<span class="verified-badge has-tooltip">
											<em>Ch??nh th???c</em>
											<span class="tooltip">Th??ng tin tr???c ti???p qu???n l?? b???i  Khoa Kh??m ch???a b???nh theo y??u c???u - B???nh vi???n ?????i h???c Y H?? N???i</span>
										</span>
									
								</h2>

								
									<div class="desc">
									@if(strlen($cl->clinic_desc)>200)
										{{substr( $cl->clinic_desc, 0, strpos($cl->clinic_desc, ' ', 200) )}}...
										<a class="readmore" href="/co-so-y-te/{{$cl->clinic_url}}-{{$cl->clinic_id}}/kham-benh">Xem ti???p <i class="fa fa-angle-double-right"></i></a>
									@else
										{{$cl->clinic_desc}}
										<a class="readmore" href="/co-so-y-te/{{$cl->clinic_url}}-{{$cl->clinic_id}}/kham-benh">Xem ti???p <i class="fa fa-angle-double-right"></i></a>
									@endif
									</div>
								

								<dl class="brief">

									
										<dt><i class="fa fa-map-marker"></i></dt>
										<dd>
											{{$cl->clinic_address}}
											<span class="distance-to-user ">
												(c??ch
												<span data-lat="21.004435" data-lon="105.830803">
													
												</span> km)
											</span>
										</dd>
									

									
										<dt>
											<i class="fa fa-stethoscope"></i>
										</dt>
										<dd>
											<!-- speciality list for every clinic -->
												@foreach($cl->specialities as $sp)
													<a href="/danh-sach/?specialities={{$sp->clinic->speciality_url}}">{{$sp->clinic->speciality_name}}</a>,
												
											    @endforeach
												
								
												
											
											
										</dd>
									

									
										<dt>
											<i class="fa fa-user-md"></i>
										</dt>
										<dd>
											{{count($cl->doctors)}} b??c s??
										</dd>
									
								</dl>
							</div>

							<div class="call-to-action">
								
									<a href="#contact-29068" class="button action-book" data-place-id="29068">
										<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
										?????t kh??m nhanh
									</a>
								
								<a href="#" class="sticky-nav-link action-favourite secondary weak button " title="Th??m v??o ghi nh???" data-place-id="29068">
									<i class="fa fa-spinner fa-pulse loader"></i>
									<span class="added"><i class="fa fa-bookmark" aria-hidden="true"></i> ???? ghi nh???</span>
									<span class="unadded"><i class="fa fa-bookmark-o" aria-hidden="true"></i> Ghi nh???</span>
								</a>
							</div>
						</div>

						<div class="actions" id="contact-29068">
							
								<div class="inner">
									<div class="booking">
										<p>
											Ch???n b??c s?? v?? gi??? b???n mu???n ?????t kh??m t??? l???ch d?????i ????y. ????? ???????c t?? v???n ch???n b??c s??, b???n c?? th??? chat v???i ch??ng t??i tr??n trang web n??y ho???c g???i ??i???n cho ch??ng t??i theo s??? <a href="tel:0473006008">0473 006 008</a>.
										</p>
										<div class="form-row">
											<div class="form-field">
												<label>Kh??m v???i b??c s??:</label>
												<div class="form-field-input">
													<select class="professional-select has-my-vicare" data-place-id="29068">
													
													<optgroup label="Ch???n th????ng ch???nh h??nh - C???t s???ng">
														
															<option value="40572">
															Nguy???n V??
															</option>
														
													</optgroup>
													
													<optgroup label="Da li???u">
														
															<option value="5210">
															????m Th??? H??a
															</option>
														
													</optgroup>
													
													<optgroup label="D??? ???ng - Mi???n d???ch">
														
															<option value="3066">
															Ho??ng Th??? L??m
															</option>
														
															<option value="168">
															L?? Th??? Th??y H???i
															</option>
														
															<option value="7736">
															L?? Th??? Th??y H???i
															</option>
														
															<option value="122">
															Nguy???n Th??? V??n
															</option>
														
													</optgroup>
													
													<optgroup label="Kh??m b???nh">
														
															<option value="21853">
															Danh Th??? Ph?????ng
															</option>
														
															<option value="3066">
															Ho??ng Th??? L??m
															</option>
														
															<option value="3043">
															Nguy???n C??ng Hoan
															</option>
														
															<option value="122">
															Nguy???n Th??? V??n
															</option>
														
															<option value="2941">
															Ng?? ????ng Th???c
															</option>
														
															<option value="3100">
															Phan Th??? H???ng Tuy??n
															</option>
														
															<option value="3102">
															Ph???m H???ng Huy??n
															</option>
														
															<option value="4266">
															Tr???n Th??? Ph????ng Mai
															</option>
														
															<option value="3072">
															??inh Th??? Kim Dung
															</option>
														
															<option value="21852">
															????o Th??? Loan
															</option>
														
													</optgroup>
													
													<optgroup label="L??o khoa">
														
															<option value="3035">
															????? Kh??nh H???
															</option>
														
													</optgroup>
													
													<optgroup label="Ngo???i Th???n kinh">
														
															<option value="3098">
															Ki???u ????nh H??ng
															</option>
														
															<option value="40572">
															Nguy???n V??
															</option>
														
													</optgroup>
													
													<optgroup label="Ngo???i Th???n - Ti???t ni???u">
														
															<option value="2001">
															V?? Nguy???n Kh???i Ca
															</option>
														
													</optgroup>
													
													<optgroup label="Ngo???i Ti??u ho?? - Gan m???t">
														
															<option value="3097">
															Kim V??n V??? 
															</option>
														
															<option value="406">
															Ph???m ?????c Hu???n
															</option>
														
													</optgroup>
													
													<optgroup label="N???i C?? X????ng Kh???p">
														
															<option value="168">
															L?? Th??? Th??y H???i
															</option>
														
															<option value="897">
															V?? Th??? B??ch H???nh
															</option>
														
													</optgroup>
													
													<optgroup label="N???i H?? h???p">
														
															<option value="168">
															L?? Th??? Th??y H???i
															</option>
														
															<option value="2540">
															Phan Thu Ph????ng
															</option>
														
															<option value="2932">
															Tr???n Ho??ng Th??nh
															</option>
														
													</optgroup>
													
													<optgroup label="N???i Th???n kinh">
														
															<option value="168">
															L?? Th??? Th??y H???i
															</option>
														
													</optgroup>
													
													<optgroup label="N???i Th???n - Ti???t ni???u">
														
															<option value="168">
															L?? Th??? Th??y H???i
															</option>
														
															<option value="1993">
															V????ng Tuy???t Mai
															</option>
														
															<option value="391">
															????? Gia Tuy???n
															</option>
														
															<option value="1983">
															????? Th??? Li???u
															</option>
														
													</optgroup>
													
													<optgroup label="N???i Tim m???ch">
														
															<option value="168">
															L?? Th??? Th??y H???i
															</option>
														
													</optgroup>
													
													<optgroup label="N???i Ti??u ho?? - Gan m???t">
														
															<option value="895">
															????o V??n Long
															</option>
														
															<option value="168">
															L?? Th??? Th??y H???i
															</option>
														
													</optgroup>
													
													<optgroup label="N???i soi">
														
															<option value="3056">
															L????ng Minh H????ng
															</option>
														
															<option value="11176">
															soi ?????i tr??ng
															</option>
														
													</optgroup>
													
													<optgroup label="N???i ti???t">
														
															<option value="168">
															L?? Th??? Th??y H???i
															</option>
														
													</optgroup>
													
													<optgroup label="Ph??? khoa">
														
															<option value="2775">
															Ph???m B?? Nha
															</option>
														
													</optgroup>
													
													<optgroup label="S???n khoa">
														
															<option value="2775">
															Ph???m B?? Nha
															</option>
														
													</optgroup>
													
													<optgroup label="S???n ph??? khoa">
														
															<option value="2298">
															Cung Th??? Thu Th???y
															</option>
														
															<option value="2248">
															Nguy???n Qu???c Tu???n
															</option>
														
															<option value="7749">
															Nguy???n Th??? B??ch V??n
															</option>
														
															<option value="2978">
															Nguy???n ?????c Hinh
															</option>
														
															<option value="7746">
															Ph???m B?? Nha
															</option>
														
															<option value="2775">
															Ph???m B?? Nha
															</option>
														
															<option value="3092">
															Ph???m Th??? Hoa H???ng
															</option>
														
															<option value="4266">
															Tr???n Th??? Ph????ng Mai
															</option>
														
													</optgroup>
													
													<optgroup label="Tai - M??i - H???ng">
														
															<option value="4194">
															Cao Minh Th??nh
															</option>
														
															<option value="3056">
															L????ng Minh H????ng
															</option>
														
															<option value="4051">
															Nguy???n Quang Trung
															</option>
														
															<option value="3061">
															Ng?? Ng???c Li???n
															</option>
														
															<option value="706">
															Ph???m Kh??nh H??a
															</option>
														
															<option value="3049">
															Ph???m Th??? B??ch ????o
															</option>
														
															<option value="707">
															Ph???m Tr???n Anh
															</option>
														
															<option value="3054">
															Ph???m Tu???n C???nh
															</option>
														
															<option value="7744">
															T???ng Xu??n Th???ng
															</option>
														
													</optgroup>
													
													<optgroup label="Th???n kinh">
														
															<option value="3043">
															Nguy???n C??ng Hoan
															</option>
														
															<option value="2948">
															Nguy???n V??n H?????ng
															</option>
														
															<option value="40572">
															Nguy???n V??
															</option>
														
															<option value="2941">
															Ng?? ????ng Th???c
															</option>
														
													</optgroup>
													
													<optgroup label="Th???n - Ti???t ni???u">
														
															<option value="1993">
															V????ng Tuy???t Mai
															</option>
														
															<option value="3072">
															??inh Th??? Kim Dung
															</option>
														
															<option value="1983">
															????? Th??? Li???u
															</option>
														
													</optgroup>
													
													<optgroup label="Tim m???ch">
														
															<option value="112">
															Nguy???n L??n Vi???t
															</option>
														
															<option value="7712">
															Nguy???n L??n Hi???u
															</option>
														
													</optgroup>
													
													<optgroup label="Ung b?????u">
														
															<option value="3037">
															L?? V??n Qu???ng
															</option>
														
															<option value="3040">
															Nguy???n V??n Hi???u
															</option>
														
															<option value="40572">
															Nguy???n V??
															</option>
														
															<option value="3054">
															Ph???m Tu???n C???nh
															</option>
														
													</optgroup>
													
													</select>
												</div>
											</div>
										</div>
										<div class="booking-picker">
											<table class="weeks"></table>
										</div>
										<div class="loader">
											<div class="spinner"></div>
										</div>
									</div>
								</div>
							
						</div>
					</li>
				@endforeach
			@endif
					
				
			</ul>
			
			


    <div class="pagination">
        <div class="vh">47954 k???t qu???.</div>
        <span class="step-links">
            

           <!-- <span class="current">
                Trang 1 / 4796
            </span>
-->
   
   		{!! $clinics->appends(request()->input())->links(); !!}        
        <!--         <a href="?page=2">Sau <i class="fa fa-chevron-right"></i></a>
         -->   
        </span>
    </div>


		</div>

		<aside>
	<!-- <div class="geosearch-options">
		<a href="#" class="button secondary weak sort-by-location ">
			<i class="fa fa-spinner fa-pulse loader"></i>
			X???p g???n nh???t tr?????c
		</a>
		<a class="button secondary weak update-location" href="#">
			<i class="fa fa-crosshairs" aria-hidden="true"></i><i class="fa fa-spinner fa-pulse loader"></i> ?????nh v???
		</a>
	</div>-->

	
			
				<section class="top-list">
						<h3>????ng quan t??m</h3>
						<ul>
							
									<li>
											<a class="image" href="/tuyen-chon/4-dia-chi-chua-benh-tri-hieu-qua-tai-tp-ho-chi-minh-5/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/13_06_2016_08_04_34_577453.jpeg);" title="4 ?????a ch??? ch???a b???nh tr?? hi???u qu??? t???i TP. H??? Ch?? Minh"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/4-dia-chi-chua-benh-tri-hieu-qua-tai-tp-ho-chi-minh-5/" title="4 ?????a ch??? ch???a b???nh tr?? hi???u qu??? t???i TP. H??? Ch?? Minh">
													4 ?????a ch??? ch???a b???nh tr?? hi???u qu??? t???i TP. H??? Ch?? Minh
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/5-benh-vien-lon-lam-viec-thu-7-va-chu-nhat-o-ha-noi-161/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/19_07_2016_10_59_51_367406.jpeg);" title="5 b???nh vi???n l???n l??m vi???c th??? 7 v?? ch??? nh???t ??? H?? N???i"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/5-benh-vien-lon-lam-viec-thu-7-va-chu-nhat-o-ha-noi-161/" title="5 b???nh vi???n l???n l??m vi???c th??? 7 v?? ch??? nh???t ??? H?? N???i">
													5 b???nh vi???n l???n l??m vi???c th??? 7 v?? ch??? nh???t ??? H?? N???i
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/4-benh-vien-lon-nhat-tai-quan-go-vap-o-tp-hcm-182/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/20_07_2016_08_12_47_267872.jpeg);" title="4 b???nh vi???n l???n nh???t t???i qu???n G?? V???p ??? TP. HCM"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/4-benh-vien-lon-nhat-tai-quan-go-vap-o-tp-hcm-182/" title="4 b???nh vi???n l???n nh???t t???i qu???n G?? V???p ??? TP. HCM">
													4 b???nh vi???n l???n nh???t t???i qu???n G?? V???p ??? TP. HCM
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/5-co-so-dieu-tri-mun-trung-ca-uy-tin-tai-ha-noi-200/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/21_07_2016_02_54_03_896547.jpeg);" title="5 C?? s??? ??i???u tr??? m???n tr???ng c?? uy t??n t???i h?? n???i"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/5-co-so-dieu-tri-mun-trung-ca-uy-tin-tai-ha-noi-200/" title="5 C?? s??? ??i???u tr??? m???n tr???ng c?? uy t??n t???i h?? n???i">
													5 C?? s??? ??i???u tr??? m???n tr???ng c?? uy t??n t???i h?? n???i
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/5-co-so-kham-phu-khoa-dang-tin-cay-tai-ha-noi-192/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/22_07_2016_04_21_10_110188.jpeg);" title="5 c?? s??? kh??m ph??? khoa ????ng tin c???y t???i H?? N???i"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/5-co-so-kham-phu-khoa-dang-tin-cay-tai-ha-noi-192/" title="5 c?? s??? kh??m ph??? khoa ????ng tin c???y t???i H?? N???i">
													5 c?? s??? kh??m ph??? khoa ????ng tin c???y t???i H?? N???i
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/5-benh-vien-kham-chuyen-khoa-y-hoc-co-truyen-uy-tin-tai-ha-noi-201/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/21_07_2016_03_07_28_614708.jpeg);" title="5 B???nh vi???n kh??m chuy??n khoa y h???c c??? truy???n uy t??n t???i H?? n???i"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/5-benh-vien-kham-chuyen-khoa-y-hoc-co-truyen-uy-tin-tai-ha-noi-201/" title="5 B???nh vi???n kh??m chuy??n khoa y h???c c??? truy???n uy t??n t???i H?? n???i">
													5 B???nh vi???n kh??m chuy??n khoa y h???c c??? truy???n uy t??n t???i H?? n???i
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/5-benh-vien-lon-lam-viec-thu-7-va-chu-nhat-tai-tp-hcm-205/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/21_07_2016_04_13_01_690629.jpeg);" title="5 b???nh vi???n l???n l??m vi???c th??? 7 v?? ch??? nh???t t???i TP. HCM"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/5-benh-vien-lon-lam-viec-thu-7-va-chu-nhat-tai-tp-hcm-205/" title="5 b???nh vi???n l???n l??m vi???c th??? 7 v?? ch??? nh???t t???i TP. HCM">
													5 b???nh vi???n l???n l??m vi???c th??? 7 v?? ch??? nh???t t???i TP. HCM
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/6-phong-kham-san-phu-khoa-tot-tai-quan-7-tp-hcm-159/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/20_07_2016_10_17_07_671729.jpeg);" title="6 ph??ng kh??m s???n ph??? khoa t???t t???i Qu???n 7 ??? TP. HCM"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/6-phong-kham-san-phu-khoa-tot-tai-quan-7-tp-hcm-159/" title="6 ph??ng kh??m s???n ph??? khoa t???t t???i Qu???n 7 ??? TP. HCM">
													6 ph??ng kh??m s???n ph??? khoa t???t t???i Qu???n 7 ??? TP. HCM
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/5-co-so-y-te-chua-vo-sinh-hiem-muon-dang-tin-cay-tai-ha-noi-210/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/22_07_2016_03_13_11_377573.jpeg);" title="5 c?? s??? y t??? ch???a v?? sinh hi???m mu???n ????ng tin c???y t???i H?? N???i"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/5-co-so-y-te-chua-vo-sinh-hiem-muon-dang-tin-cay-tai-ha-noi-210/" title="5 c?? s??? y t??? ch???a v?? sinh hi???m mu???n ????ng tin c???y t???i H?? N???i">
													5 c?? s??? y t??? ch???a v?? sinh hi???m mu???n ????ng tin c???y t???i H?? N???i
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/5-bac-si-chuyen-khoa-nhi-kham-tai-nha-o-ha-noi-235/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/04_08_2016_07_26_00_647500.jpeg);" title="5 B??c s?? chuy??n khoa nhi kh??m t???i nh?? ??? H?? N???i"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/5-bac-si-chuyen-khoa-nhi-kham-tai-nha-o-ha-noi-235/" title="5 B??c s?? chuy??n khoa nhi kh??m t???i nh?? ??? H?? N???i">
													5 B??c s?? chuy??n khoa nhi kh??m t???i nh?? ??? H?? N???i
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/nhung-co-so-kham-benh-tram-cam-tai-ha-noi-ma-ban-nen-biet-260/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/09_08_2016_09_16_40_393850.jpeg);" title="Nh???ng c?? s??? kh??m b???nh tr???m c???m t???i H?? N???i m?? b???n n??n bi???t"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/nhung-co-so-kham-benh-tram-cam-tai-ha-noi-ma-ban-nen-biet-260/" title="Nh???ng c?? s??? kh??m b???nh tr???m c???m t???i H?? N???i m?? b???n n??n bi???t">
													Nh???ng c?? s??? kh??m b???nh tr???m c???m t???i H?? N???i m?? b???n n??n bi???t
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/kham-suc-khoe-tong-quat-o-dau-tot-tai-tphcm-208/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/21_07_2016_04_37_01_745304.jpeg);" title="Kh??m s???c kh???e t???ng qu??t ??? ????u t???t t???i Tp.HCM?"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/kham-suc-khoe-tong-quat-o-dau-tot-tai-tphcm-208/" title="Kh??m s???c kh???e t???ng qu??t ??? ????u t???t t???i Tp.HCM?">
													Kh??m s???c kh???e t???ng qu??t ??? ????u t???t t???i Tp.HCM?
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/chua-soi-than-o-dau-tot-tai-ha-noi-va-tp-hcm-224/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/28_07_2016_07_42_07_238366.jpeg);" title="Ch???a s???i th???n ??? ????u t???t t???i H?? N???i v?? TP. HCM"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/chua-soi-than-o-dau-tot-tai-ha-noi-va-tp-hcm-224/" title="Ch???a s???i th???n ??? ????u t???t t???i H?? N???i v?? TP. HCM">
													Ch???a s???i th???n ??? ????u t???t t???i H?? N???i v?? TP. HCM
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/3-benh-vien-tam-than-uy-tin-o-ha-noi-132/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/19_07_2016_05_08_30_154036.jpeg);" title="3 b???nh vi??n t??m th???n uy t??n ??? H?? N???i"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/3-benh-vien-tam-than-uy-tin-o-ha-noi-132/" title="3 b???nh vi??n t??m th???n uy t??n ??? H?? N???i">
													3 b???nh vi??n t??m th???n uy t??n ??? H?? N???i
														</a>
												</h4>
											</div>
									</li>
							
									<li>
											<a class="image" href="/tuyen-chon/nhung-co-so-kham-nhi-uy-tin-tai-tphcm-me-nen-luu-y-152/" style="background-image: url(https://dwbxi9io9o7ce.cloudfront.net/images/19_07_2016_09_27_10_883430.jpeg);" title="Nh???ng c?? s??? kh??m nhi uy t??n t???i Tp.HCM m??? n??n l??u ??"></a>

											<div class="body">
												<h4>
														<a href="/tuyen-chon/nhung-co-so-kham-nhi-uy-tin-tai-tphcm-me-nen-luu-y-152/" title="Nh???ng c?? s??? kh??m nhi uy t??n t???i Tp.HCM m??? n??n l??u ??">
													Nh???ng c?? s??? kh??m nhi uy t??n t???i Tp.HCM m??? n??n l??u ??
														</a>
												</h4>
											</div>
									</li>
							
						</ul>

						<a href="/tuyen-chon/" class="view-more">
								Xem t???t c??? c??c tuy???n ch???n
						</a>
				</section>
			
	
</aside>


	</div>
</div>

<script type="text/html" id="professional-select-template">
	<select class="professional-select">
		<% for (var i = 0; i < obj.length; i++) { %>
			<option value="<%= obj[i].professional_id %>">
				<%= obj[i].professional_name %>
				<% for (var j = 0; j < obj[i].specialities.length; j++) {
					if (j == 0) {
						print('(');
					} else {
						print(', ');
					}
					print(obj[i].specialities[j].name);
					if (j == (obj[i].specialities.length -1)) { print(')'); }
				} %>
			</option>
		<% } %>
	</select>
</script>
<script type="text/html" id="booking-picker-template">
	<table class="weeks">
		<tr>
			<td>
				<table class="week">
					<tr>
						<% for (var i = 0; i < obj.length; i++) { %>
							<th>
								<span class="day"><%= obj[i].dayFormatted %></span>
								<span class="date"><%= obj[i].shortDateFormatted %></span>
							</th>
						<% } %>
					 </tr>
					 <tr>
						<% if (hasSlots) { %>
							<% for (var i = 0; i < obj.length; i++) { %>
								<td>
									<% for (var j = 0; j < obj[i].slots.length; j++) { %>
										<% if (obj[i].slots[j].cancelled) { %>
											<span class="cancelled" title="Bu???i kh??m n??y ???? b??? h???y"><%= obj[i].slots[j].startFormatted %></span>
										<% } else if (obj[i].slots[j].past) { %>
											<span class="past" title="Bu???i kh??m n??y ???? k???t th??c"><%= obj[i].slots[j].startFormatted %></span>
										<% } else { %>
											<a class="<% if (obj[i].slots[j].booking_count >= obj[i].slots[j].slot_size) { %>full<% } %>"
												href="/dat-kham/<%= placeId %>/<%= obj[i].dateFormatted %>/<%= obj[i].slots[j].startFormatted %>/<%= professionalId %>"
												<% if (obj.openInNewWindow) { %>target="_blank"<% } %>>
												<span class="time"><%= obj[i].slots[j].startFormatted %></span>
												<span class="occupancy" style="width: <%= obj[i].slots[j].booking_count / obj[i].slots[j].slot_size * 100 %>%"></span>
											</a>
										<% } %>
									<% } %>
									<% if (obj[i].slots.length == 0) { %>
										<span class="no-slot">&nbsp;</span>
									<% } %>
								</td>
							<% } %>
						<% } else { %>
							<td colspan="<%= obj.length %>" class="no-slot">
								<% if (professionalName) { %>
									<i class="fa fa-calendar-times-o" aria-hidden="true"></i> B??c s?? <%=professionalName%> kh??ng c?? ca tr???c n??o trong 3 tu???n t???i.
								<% } else if (placeName) { %>
									<i class="fa fa-calendar-times-o" aria-hidden="true"></i> B??c s?? kh??ng c?? ca tr???c n??o trong 3 tu???n t???i t???i <%=placeName%>.
								<% } %>
							</td>
						<% } %>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</script>


<div id="subscribe">
	<h2>????? ti???p t???c, vui l??ng nh???p ?????a ch??? email c???a b???n</h2>
	
	<form method="POST" action="#">
		<input name="email" required="" type="email">
		<button type="submit">OK</button>
	</form>

	<p>
		ViCare cam k???t b???o m???t tuy???t ?????i ?????a ch??? email v?? th??ng tin c?? nh??n c???a b???n.
	</p>
</div>
<div class="global-thread-create-cta">
	<a href="/hoi-bac-si/dat-cau-hoi/" class="button">
		<i class="fa fa-question-circle" aria-hidden="true"></i>
		<strong>H???i b??c s??</strong>
		<span>mi???n ph??</span>
	</a>
</div>


			
				

<script id="login-overlay-template" type="text/html">

	<div class="has-account-type-selector">
		<ul class="tab-content-triggers">
			<li><a href="#signup-tab" class="active"><i class="fa fa-user-plus" aria-hidden="true"></i> ????ng k??</a></li>
			<li><a href="#login-tab"><i class="fa fa-sign-in" aria-hidden="true"></i> ????ng nh???p</a></li>
		</ul>

		<div class="tab-content-container">

			<div id="login-tab" class="tab-content">
				<div class="for-email-existed">
					<p>B???n ???? c?? t??i kho???n ????ng k?? t???i ViCare v???i email n??y. Vui l??ng ????ng nh???p ????? s??? d???ng ?????y ????? ch???c n??ng c???a ViCare. Sau khi ????ng nh???p, b???n s??? ???????c ????a tr??? l???i trang tr?????c. N???i dung b???n v???a vi???t ???? ???????c l??u l???i v??o tr??nh duy???t v?? s??? kh??ng b??? m???t ??i.</p>
				</div>

				<form method="post" action="https://vicare.vn/dang-nhap/?next=/danh-sach/" name="login">
					<div class="form-row">
						<div class="form-field">
							<label>
								Email:
							</label>
							<div class="form-field-input">
								<input type="text" name="email" required />
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-field">
							<label>
								M???t kh???u:
							</label>
							<div class="form-field-input">
								<input type="password" name="password" required></input>
								<p>
									<a class="reset-password-link" href="https://vicare.vn/quen-mat-khau/">Qu??n m???t kh???u?</a>
								</p>
							</div>
						</div>
					</div>
					<div class="button-row">
						<button type="submit">????ng nh???p</button>
					</div>
					<hr class="form-hr" />
					<div class="button-row">
						<button type="button" name="facebook" data-link="https://vicare.vn/tai-khoan/ket-noi/login/facebook/?next=/danh-sach/" class="button-facebook"><i class="fa fa-facebook" aria-hidden="true"></i> ????ng nh???p qua Facebook</button>
					</div>
				</form>
			</div>

			<div id="signup-tab" class="tab-content active">

				<div class="instruction">
					<p>
						Ch??o m???ng b???n ?????n v???i ViCare!
					</p>

					<div class="for-source-register_place">
						<p>
							Sau khi m??? t??i kho???n, b???n c?? th??? d??? d??ng c???p nh???t, ch???nh s???a trang th??ng tin ph??ng kh??m, b???nh vi???n ho???c doanh nghi???p m?? b???n qu???n l?? tr??n ViCare. B???n c??ng c?? th??? g???i ph???n h???i nh???n x??t c???a kh??ch h??ng, v?? tham gia gi???i ????p c??c th???c m???c v??? y t???, s???c kh???e c???a c???ng ?????ng.
						</p>
						<p>
							B???n c???n ch???n lo???i t??i kho???n l?? "Qu???n l?? c?? s??? y t???".
						</p>
					</div>
					<div class="for-source-register_prof">
						<p>
							Sau khi m??? t??i kho???n, b???n c?? th??? d??? d??ng c???p nh???t, ch???nh s???a trang th??ng tin c???a m??nh tr??n ViCare. B???n c??ng c?? th??? g???i ph???n h???i nh???n x??t c???a b???nh nh??n, v?? tham gia gi???i ????p c??c th???c m???c v??? y t???, s???c kh???e c???a c???ng ?????ng.
						</p>
						<p>
							B???n c???n ch???n lo???i t??i kho???n l?? "B??c s??".
						</p>
					</div>
					<div class="for-source-favourite">
						<p>
							Sau khi m??? t??i kho???n, b???n c?? th??? l??u l???i c?? s??? y t??? v?? b??c s?? ????ng quan t??m, c??ng nh?? s??? d???ng ?????y ????? c??c ch???c n??ng, d???ch v??? c???a ViCare
						</p>
					</div>
					<div class="for-source-promotion">
						<p>
							B???n h??y m??? t??i kho???n ho???c ????ng nh???p ????? nh???n c??c ??u ????i v??? kh??m ch???a b???nh, ch??m s??c s???c kh???e h???p d???n t??? ViCare!
						</p>
					</div>
					<div class="for-source-others">
						<p>
							M??? t??i kho???n d??? d??ng, nhanh ch??ng v???i m???t form duy nh???t ????? c?? th??? s??? d???ng ?????y ????? c??c ch???c n??ng v?? d???ch v??? c???a ViCare.
						</p>
					</div>

				</div>

				<form method="post" action="https://vicare.vn/dang-ky/?next=/danh-sach/" name="signup">
					<div class="form-row">
						<div class="form-field">
							<label>
								Lo???i t??i kho???n:
							</label>
							<div class="form-field-input">
								<select class="account-type-selector" name="type">
									<option value="user">Th??nh vi??n</option>
									<option value="professional">B??c s??</option>
									<option value="place">C?? s??? y t??? &amp; doanh nghi???p</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-field">
							<label>
								H??? v?? t??n:
							</label>
							<div class="form-field-input">
								<input type="text" name="name" id="name" data-rules="required" class="validate" />
								<p class="validation-error help-block"></p>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-field">
							<label>
								??i???n tho???i:
							</label>
							<div class="form-field-input">
								<input type="text" name="mobile_phone" id="mobile_phone" data-rules="required" />
								<p class="validation-error help-block"></p>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-field">
							<label>
								Email:
							</label>
							<div class="form-field-input">
								<input name="email" type="text" id="email" data-rules="required|valid_email" class="validate" />
								<p class="validation-error help-block"></p>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-field">
							<label>
								M???t kh???u:
							</label>
							<div class="form-field-input">
								<input type="password" name="password" id="password" title="M???t kh???u c???n c?? ??t nh???t 5 k?? t???" placeholder="M???t kh???u c???n c?? ??t nh???t 5 k?? t???" data-display="M???t kh???u" data-rules="required|min_length[5]" class="validate"></input>
								<p class="validation-error help-block"></p>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-field">
							<label>
								X??c nh???n l???i m???t kh???u:
							</label>
							<div class="form-field-input">
								<input type="password" name="confirm_password" id="confirm_password" title="Nh???p l???i m???t kh???u" placeholder="Nh???p l???i m???t kh???u" data-rules="required|matches[password]" class="validate"></input>
								<p class="validation-error help-block"></p>
							</div>
						</div>
					</div>

					<div class="for-account-type-place">
						<hr class="form-hr" />
						<div class="form-row">
							<div class="form-field">
								<label>
									T??n c?? s??? y t??? / doanh nghi???p:
								</label>
								<div class="form-field-input">
									<input type="text" name="place_name" value="<%= meta.placeName %>"/>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-field">
								<label>
									?????a ch???:
								</label>
								<div class="form-field-input">
									<input type="text" name="place_add" value="<%= meta.placeAdd %>"/>
								</div>
							</div>
						</div>
						<p>Vui l??ng cung c???p ?????y ????? th??ng tin ????? ch??ng t??i c?? th??? li??n h??? v?? h??? tr??? b???n t???t nh???t.</p>
					</div>

					<div class="for-account-type-professional">
						<hr class="form-hr" />
						<div class="form-row">
							<div class="form-field">
								<label>
									Chuy??n khoa:
								</label>
								<div class="form-field-input">
									<input type="text" name="prof_spec" value="<%= meta.profSpec %>"/>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-field">
								<label>
									N??i c??ng t??c:
								</label>
								<div class="form-field-input">
									<input type="text" name="prof_place" value="<%= meta.profPlace %>" />
								</div>
							</div>
						</div>
						<p>Vui l??ng cung c???p ?????y ????? th??ng tin ????? ch??ng t??i c?? th??? li??n h??? v?? h??? tr??? b???n t???t nh???t.</p>
					</div>
					<div class="button-row">
						<button type="submit" name="register">????ng k??</button>
					</div>
					<hr class="form-hr" />
					<div class="button-row">
						<button type="button" name="facebook" data-link="https://vicare.vn/tai-khoan/ket-noi/login/facebook/?next=/danh-sach/" class="button-facebook"><i class="fa fa-facebook" aria-hidden="true"></i> ????ng k?? qua Facebook</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</script>

<script type="text/html" id="signup-confirmation-template">
	<div class="form-success">
		<h4><i class="fa fa-check-square-o"></i> ????ng k?? m??? t??i kho???n th??nh c??ng!</h4>
		<p>Ch??o m???ng b???n ?????n v???i ViCare!</p>
		<div class="for-account-type-professional">
			<p>C???m ??n b???n ???? g???i th??ng tin. Ch??ng t??i s??? li??n h??? v???i b???n ????? x??c nh???n trong th???i gian s???m nh???t.</p>
		</div>
		<div class="for-account-type-place">
			<p>C???m ??n b???n ???? g???i th??ng tin. Ch??ng t??i s??? li??n h??? v???i b???n ????? x??c nh???n trong th???i gian s???m nh???t.</p>
		</div>
		<p>
			<strong>H??? v?? t??n:</strong> <%= name %>
			<br />
			<strong>S??? ??i???n tho???i:</strong>
			<%= phone ? phone : '<em>ch??a cung c???p</em>' %>
			<br />
			<strong>Email:</strong> <%= email %>
		</p>
		<div class="button-row">
			<a href="<%= next %>" class="button">OK <i class="fa fa-check" aria-hidden="true"></i></a>
		</div>
	</div>
</script>



			
			<input name="csrfmiddlewaretoken" value="o76v1bf5eB34ClSCVPwbpGYopdhPhjC5" type="hidden">
		</div>
     <div class="global-thread-create-cta">
	<a href="/hoi-bac-si/dat-cau-hoi/" class="button">
		<i class="fa fa-question-circle" aria-hidden="true"></i>
		<strong>H???i b??c s??</strong>
		<span>mi???n ph??</span>
	</a>
</div>
       <!-- footer starts -->
        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                    <div class="col-md-4 article footer-widget1">
                            <h3>B??i vi???t M???i Nh???t</h3>
                            <ul class="popular-posts">
                           
                        
                       
                     @if($article)
                           @foreach($article as $art)
                            
                                                

                                <li>
                                     <a href="{!! url('bai-viet/'.$art['article_id'])!!}">

                                        <img src="@if(!empty($art->image))@if(strpos($art->image,'http')===false)/public/images/@endif{{$art->image}}@endif"  alt="#"/>
                                    </a>
                                    <?php \Carbon\Carbon::setLocale('vi') ?>
                                    <h4><a href="{!! url('bai-viet/'.$art['article_id'])!!}">{!!$art['article_title']!!} </a></h4>
                                    <span><i class="fa fa-calendar">{!! \Carbon\Carbon::parse(($art['created_at']))->toFormattedDateString() !!}   {!! \Carbon\Carbon::createFromTimeStamp(strtotime($art['created_at']))->diffForHumans() !!}</i></span>
                                </li>
                            
                               @endforeach
                    @endif  
                        
              
                            </ul>
                        </div>

                        <div class="col-md-4 footer-widget2">
                            <h3>Th??ng tin li??n h???</h3>
                            <span>283/97 C??ch M???ng Th??ng 8, Ph?????ng 12, Qu???n 10, TP.HCM,
</span>
                            <span> Vi???t Nam</span>
                            <br>
                            <span>bacsivietok@gmail.com
</span>
                            <br>
                            <span>H??? tr???: 0981.405.925
<br>
Skype : netbotvn
                            </span>

                            <div class="footer-socials">
                                <h4>K???t n???i v???i ch??ng t??i</h4>
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                                fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                               <div class="fb-page" data-href="https://www.facebook.com/B%C3%A1c-S%C4%A9-Vi%E1%BB%87t-971050299703719/" data-tabs="timeline" data-width="340" data-height="246" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Bacsyviet-1580363511992683/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Bacsyviet-1580363511992683/">Bacsyviet</a></blockquote></div>

                               
                            </div>
                        </div>

                        <div class="col-md-4 footer-widget1">
                            <h3>Khuy???n M??i N???i B???t</h3>
                            <ul class="popular-posts">
                        @if($deals)
                         <?php $i = 0;?>
                            @foreach($deals as $deal)
                               @if($i<5)
                              <li>
                                    <a href="/khuyen-mai/{{\App\Deals::strtoUrl($deal->deal_title)}}-{{$deal->deal_id}}">
                                        <img src="/public/images/{!!$deal['image']!!}"  alt="#"/>
                                    </a>
                                    <h4><a href="/khuyen-mai/{{\App\Deals::strtoUrl($deal->deal_title)}}-{{$deal->deal_id}}">{!!$deal['deal_title']!!} </a></h4>
                                    
                
                    
                                        <span style="color:#ff749c;margin-right: 20px;">{!!$deal['price']!!}<span class="currency">???</span></span>
                                        <span style="color: #eee;text-decoration: line-through;">{!!$deal['old_price']!!}</span><span class="currency">???</span>
                    
                
                                  
                                   
                                    <?php \Carbon\Carbon::setLocale('vi') ?>
                                    <span><i class="fa fa-calendar">{!! \Carbon\Carbon::parse(($deal['created_at']))->toFormattedDateString() !!}   {!! \Carbon\Carbon::createFromTimeStamp(strtotime($deal['created_at']))->diffForHumans() !!}</i></span>
                                </li>
                                @endif
                                <?php $i+=1;?>
                            @endforeach
                        @endif
                        </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div id="back-top">
                <a class="back-top" href="#slider"><i class="fa fa-angle-up"></i></a>
            </div>
            <div class="footer-bottom text-center">
               <div class="disclaimer">
               <p style="font-size: 1.5em;"><?php @include('counter.php');?></p></br>
				<p>
					Website ???????c s??? h???u v?? qu???n l?? b???i: <strong>C??ng ty C??? ph???n BacSiViet</strong>. Tr??? s??? ch??nh: 283/97 C??ch M???ng Th??ng 8, Ph?????ng 12, Qu???n 10, TP.HCM, Vi???t Nam
				</p>
				<!-- <p>Gi???y ch???ng nh???n ????ng k?? kinh doanh s??? <strong class="registration-number">*******</strong> do S??? K??? ho???ch v?? ?????u t?? TP H??? Ch?? Minh c???p ng??y *****</p> -->
				<p>C??c th??ng tin tr??n web site n??y ch??? mang t??nh ch???t tham kh???o. Ch??ng t??i kh??ng ch???u tr??ch nhi???m n??o do vi???c ??p d???ng c??c th??ng tin tr??n web site n??y g??y ra.</p>
			</div>
			 
            </div>
           
        </footer>
    </main>
    <!-- main page ends -->
	
    <!-- Jquery and javascript files -->
     <script type="text/javascript" src="/public/js/vilib.js"></script>
    <!-- <script type="text/javascript" src="/public/js/jquery-2.1.1.js"></script> -->
    <!-- date picker js -->
    <script type="text/javascript" src="/public/js/datepicker.js"></script>
    <!-- bootstrap 3.3.6 js -->
    <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
    <!-- owl carousel js-->
    <script type="text/javascript" src="/public/js/owl.carousel.js"></script>
    <!-- smooth scroll js -->
    <script type="text/javascript" src="/public/js/smoothscroll.js"></script>
    <!-- preloader js -->
    <script type="text/javascript" src="/public/js/jquery.introLoader.pack.min.js"></script> 
    <!-- custom scripts -->
    <script type="text/javascript" src="/public/js/script.js"></script>
     
     <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.tdoctor.vn/public/js/analytics.js','ga');

  ga('create', 'UA-97538710-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
function province_change(){
	//alert('aaa');
	var id=$("#province").val();
	var dataString = 'province='+id+'&_token={{csrf_token()}}';
	$.ajax({
        type: 'POST',
        url: '/api/district',
        data: dataString,
        cache: false,
        success: function(output) {
         //   alert('a');
           $("#district").html(output);
        }
    });
}
</script>
</body>

</html>

