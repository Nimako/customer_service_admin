
<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta content="Dashlot - Bootstrap Responsive Admin panel Dashboard Template Ui Kit & Premium Dashboard Design Modern Flat HTML Template. This Template Includes 100 HTML Pages & 40+ Plugins. No Need to do hard work for this template customization." name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin,dashboard,dashboard template,bootstrap dashboard template,bootstrap admin template,admin panel template,admin dashboard template,admin template,admin dashboard,bootstrap 4 admin template,bootstrap dashboard,bootstrap simple dashboard,bootstrap 4 dashboard template,modern admin,bootstrap admin panel,best admin templates,bootstrap admin dashboard template,simple admin panel template,html admin template,simple bootstrap admin template,bootstrap admin dashboard,adminlte template,html dashboard template,responsive admin template,admin dashboard bootstrap 4,admin panel design,bootstrap admin,web dashboard,user dashboard,bootstrap 4 dashboard,bootstrap admin panel template,simple dashboard html template">

		<!-- Favicon-->
		<link rel="icon" href="{{ asset('assets/images/brand/favicon.png')}}" type="image/x-icon"/>

		<!-- Title -->
		<title>HISENSE CARE APP</title>

		<!-- Bootstrap css -->
		<link href="{{ asset('assets/plugins/bootstrap-4.1.3/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- Style css -->
		<link  href="{{ asset('assets/css/style.css')}}" rel="stylesheet" />

		<!-- Default css -->
		<link href="{{ asset('assets/css/default.css')}}" rel="stylesheet">

		<!-- Sidemenu css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/sidemenu/closed-sidemenu.css')}}">

		<!-- Owl-carousel css-->
		<link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

		<!-- Bootstrap-daterangepicker css -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}">

		<!-- Bootstrap-datepicker css -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css')}}">

		<!-- Custom scroll bar css -->
		<link href="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>

		<!-- P-scroll css -->
		<link href="{{ asset('assets/plugins/p-scroll/p-scroll.css')}}" rel="stylesheet" type="text/css">

		<!-- Font-icons css -->
		<link  href="{{ asset('assets/css/icons.css')}}" rel="stylesheet">

		<!-- Rightsidebar css -->
		<link href="{{ asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!-- Nice-select css  -->
		<link href="{{ asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>

		<!-- Color-palette css-->
		<link rel="stylesheet" href="{{ asset('assets/css/skins.css')}}"/>

		<style>
			.form-control { border-color:#00AE9C}
			.app-sidebar {
				background: #00AE9C;
			}

			.icon-menu-img {
  
				background:#18B4A5																																				; 
				border: #00AE9C

			}

			.app-sidebar ul li a {
				color: #ffffff;
				font-weight: 450;
			}

			img .side_menu_img {
				fill: red;
			}

			.app-header {

			/* background: #00AE9C; */
		}

		.app-sidebar .slide-menu .slide-item:hover {
			color: #ffffff;
		}

		.text-muted {
    color: #1D532F !important;
}

	    </style>

	</head>

	<body class="app sidebar-mini">

		<!-- Loader -->
		<div id="loading_">
			<img src="{{ asset('assets/images/other/loader.svg')}}" class="loader-img" alt="Loader">
		</div>

		<!-- PAGE -->
		<div id="app" class="page">
			<div class="page-main">


			@include('layouts.menu')
			
            @yield('content')

			</div>
            
        </div>
        <!-- END wrapper -->

			{{-- <!-- Right-sidebar-->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="p-3">
					<a href="#" class="text-right float-right" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="tab-menu-heading  siderbar-tabs border-0">
					<div class="tabs-menu ">
						<!-- Tabs -->
						<ul class="nav panel-tabs">
							<li class=""><a href="#tab" class="active show" data-toggle="tab">Profile</a></li>
							<li class=""><a href="#tab1" data-toggle="tab" class="">Friends</a></li>
							<li><a href="#tab2" data-toggle="tab" class="">Activity</a></li>
							<li><a href="#tab3" data-toggle="tab" class="">Todo</a></li>
						</ul>
					</div>
				</div>
				<div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
					<div class="tab-content border-top">
						<div class="tab-pane active" id="tab">
							<div class="card-body p-0">
								<div class="header-user text-center mt-4 pb-4">
									<span class="avatar avatar-xxl brround"><img src="{{ asset("assets/images/users/2.jpg")}} alt="Profile-img" class="avatar avatar-xxl brround"></span>
									<div class="dropdown-item text-center font-weight-semibold user h3 mb-0">Jonathan Mills</div>
									<small>App Developer</small>
									<div class="card-body">
										<div class="form-group ">
											<label class="form-label  text-left">Offline/Online</label>
											<select class="form-control mb-4 nice-select " data-placeholder="Choose one">
												<option value="1">Online</option>
												<option value="2">Offline</option>
											</select>
										</div>
										<div class="form-group mt-5 mb-6">
											<label class="form-label text-left">Website</label>
											<select class="form-control nice-select " data-placeholder="Choose one">
												<option value="1">Spruko.com</option>
												<option value="2">sprukosoft.com</option>
												<option value="3">sprukotechnologies.com</option>
												<option value="4">sprukoinfo.com</option>
												<option value="5">sprukotech.com</option>
											</select>
										</div>
									</div>
								</div>
								<a class="dropdown-item  border-top" href="#">
									<i class="dropdown-icon mdi mdi-account-edit"></i> Edit Profile
								</a>
								<a class="dropdown-item  border-top" href="#">
									<i class="dropdown-icon mdi mdi-account-outline"></i> Spruko technologies
								</a>
								<a class="dropdown-item border-top" href="#">
									<i class="dropdown-icon  mdi mdi-account-plus"></i> Add Another Account
								</a>
								<a class="dropdown-item  border-top" href="#">
									<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
								</a>
								<a class="dropdown-item  border-top" href="#">
									<i class="dropdown-icon zmdi zmdi-pin-help"></i> Need Help?
								</a>
								<div class="card-body border-top">
									<h4>Gallery</h4>
									<div class="row mt-4">
										<div class="col-12">
											<div class="avatar-list">
												<ul>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="{{ asset("assets/images/users/5.jpg")}}></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="{{ asset("assets/images/photos/2.jpg")}}></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="{{ asset("assets/images/photos/3.jpg")}}></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="{{ asset("assets/images/photos/5.jpg")}}></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="{{ asset("assets/images/users/3.jpg")}}></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="{{ asset("assets/images/photos/15.jpg")}}></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="{{ asset("assets/images/photos/16.jpg")}}></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  >+48</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body border-top border-bottom">
									<div class="row">
										<div class="col-4 text-center">
											<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-20 m-0 leading-tight"></i></a>
											<div>Inbox</div>
										</div>
										<div class="col-4 text-center">
											<a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-20 m-0 leading-tight"></i></a>
											<div>Settings</div>
										</div>
										<div class="col-4 text-center">
											<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
											<div>Sign out</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab1">
							<div class="chat">
								<div class="contacts_card">
									<div class="input-group mb-0 p-3">
										<input type="text" placeholder="Search..." class="form-control search">
										<div class="input-group-prepend mr-0">
											<span class="input-group-text  search_btn  btn-secondary"><i class="fa fa-search text-white"></i></span>
										</div>
									</div>
									<ul class="contacts mb-0">
										<li class="active">
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="{{ asset("assets/images/users/12.jpg")}} class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Maryam Naz</h5>
													<small class="text-muted">is online</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="{{ asset("assets/images/users/2.jpg")}} class="rounded-circle user_img" alt="img">
													<span class=" online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Sahar Darya</h5>
													<small class="text-muted">left 7 mins ago</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="{{ asset("assets/images/users/5.jpg")}} class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Maryam Naz</h5>
													<small class="text-muted">online</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="{{ asset("assets/images/users/7.jpg")}} class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Yolduz Rafi</h5>
													<small class="text-muted">online</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="{{ asset("assets/images/users/8.jpg")}} class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Nargis Hawa</h5>
													<small class="text-muted">30 mins ago</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="{{ asset("assets/images/users/3.jpg")}} class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Khadija Mehr</h5>
													<small class="text-muted">50 mins ago</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="{{ asset("assets/images/users/14.jpg")}} class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Petey Cruiser</h5>
													<small class="text-muted">1hr ago</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="{{ asset("assets/images/users/11.jpg")}} class="rounded-circle user_img" alt="img">
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Khadija Mehr</h5>
													<small class="text-muted">2hr ago</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab2">
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-primary brround avatar-md">CH</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>New Websites is Created</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">30 mins ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-danger brround avatar-md">N</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Prepare For the Next Project</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">2 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-info brround avatar-md">S</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Decide the live Discussion Time</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">3 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-warning brround avatar-md">K</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Team Review meeting</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">4 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-success brround avatar-md">R</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">1 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center  border-bottom p-4">
								<div class="">
									<span class="avatar bg-pink brround avatar-md">MS</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">1 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-purple brround avatar-md">L</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">45 mintues ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-primary brround avatar-md">CH</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>New Websites is Created</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">30 mins ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center p-4">
								<div class="">
									<span class="avatar bg-blue brround avatar-md">U</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">2 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab3">
							<div class="">
								<div class="d-flex p-3">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
										<span class="custom-control-label">Do Even More..</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked="">
										<span class="custom-control-label">Find an idea.</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" checked="">
										<span class="custom-control-label">Hangout with friends</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4">
										<span class="custom-control-label">Do Something else</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5">
										<span class="custom-control-label">Eat healthy, Eat Fresh..</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6" checked="">
										<span class="custom-control-label">Finsh something more..</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7" checked="">
										<span class="custom-control-label">Do something more</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8">
										<span class="custom-control-label">Updated more files</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
										<span class="custom-control-label">System updated</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top border-bottom">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox10" value="option10">
										<span class="custom-control-label">Settings Changings...</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="text-center pt-5">
									<a href="#" class="btn btn-primary">Add more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Right-sidebar-closed --> --}}

			<!-- Footer opened -->
			<footer class="footer-main icon-footer">
				<div class="container">
					<div class="  mt-2 mb-2 text-center">
						Copyright © 2019 <a href="#" class="fs-14 text-primary">Dashlot</a>. Designed by <a href="https://spruko.com/" class="fs-14 text-primary">Spruko Technologies Private Limited</a> All rights reserved.
					</div>
				</div>
			</footer>
			<!-- Footer closed -->
		</div>

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

		<!-- Jquery-scripts -->
		<script src="{{ asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>

		<!-- Moment js-->
        <script src="{{ asset('assets/plugins/moment/moment.min.js')}}"></script>

		<!-- Bootstrap-scripts js -->
		<script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>

		<!-- Sparkline JS-->
		<script src="{{ asset('assets/js/vendors/jquery.sparkline.min.js')}}"></script>

		<!-- Bootstrap-daterangepicker js -->
		<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

		<!-- Bootstrap-datepicker js -->
		<script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>

		<!-- Chart-circle js -->
		<script src="{{ asset('assets/js/vendors/circle-progress.min.js')}}"></script>

		<!-- Rating-star js -->
		<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- Clipboard js -->
		<script src="{{ asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Prism js -->
		<script src="{{ asset('assets/plugins/prism/prism.js')}}"></script>

		<!-- Custom scroll bar js-->
		<script src="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

		<!-- Nice-select js-->
		<script src="{{ asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
		<script src="{{ asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

        <!-- P-scroll js -->
		<script src="{{ asset('assets/plugins/p-scroll/p-scroll.js')}}"></script>
		<script src="{{ asset('assets/plugins/p-scroll/p-scroll-1.js')}}"></script>

		<!-- Sidemenu js-->
		<script src="{{ asset('assets/plugins/sidemenu/icon-sidemenu.js')}}"></script>

		<!-- JQVMap -->
		<script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.js')}}"></script>
		<script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
		<script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.sampledata.js')}}"></script>

		<!-- Apexchart js-->
		<script src="{{ asset('assets/js/apexcharts.js')}}"></script>

		<!-- Chart js-->
		<script src="{{ asset('assets/plugins/chart/chart.min.js')}}"></script>

		<!-- Index js -->
		<script src="{{ asset('assets/js/index.js')}}"></script>
		<script src="{{ asset('assets/js/index-map.js')}}"></script>

		<!-- Rightsidebar js -->
		<script src="{{ asset('assets/plugins/sidebar/sidebar.js')}}"></script>

		<!-- Custom js -->
		<script src="{{ asset('assets/js/custom.js')}}"></script>

	</body>
</html>