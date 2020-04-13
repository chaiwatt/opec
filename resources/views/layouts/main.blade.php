<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>ระบบแบบสารสนเทศ สำนักงานคณะกรรมการส่งเสริมการศึกษาเอกชน</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>  
	<link href="{{asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"/>  
	<link href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />
	<link href="{{asset('assets/css/layout.min.css')}}"  rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/extend.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	
	<!-- /global stylesheets -->
    @section('pageCss')
    @show
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="{{url('/')}}" class="d-inline-block">
				<img src="{{asset('assets/images/logo_light_1.png')}}" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<span class="navbar-text ml-md-3 mr-md-auto">
				<span class="badge bg-success ml-md-3 mr-md-auto">ออนไลน์</span>
			</span>

			<ul class="navbar-nav ml-auto">

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link">
						<i class="icon-bell2"></i>
						<span class="text-info">(10)</span>
					</a>					
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<img src="{{asset('assets/images/user.jpg')}}" class="rounded-circle" alt="">
						<span>{{Auth::user()->name}} {{Auth::user()->lastname}}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						
						<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
											document.getElementById('logout-form').submit();" >
							<i class="icon-switch2"></i>ออกจากระบบ
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->
			<!-- Sidebar content -->
			<div class="sidebar-content">
				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
						<li class="nav-item">
							@if (Auth::user()->user_type_id == 1)
									<a href="{{route('dashboard.superadmin.index')}}" class="nav-link">
								@elseif(Auth::user()->user_type_id == 2)
									<a href="{{route('dashboard.provincial.index')}}" class="nav-link">
								@elseif(Auth::user()->user_type_id == 3)
									<a href="{{route('dashboard.provincialarea.index')}}" class="nav-link">
								@elseif(Auth::user()->user_type_id == 4)
									<a href="{{route('dashboard.school.index')}}" class="nav-link">
							@endif
								
							<i class="icon-home4"></i>
							<span>แดชบอร์ด</span>
							</a>
						</li>
						@if (Auth::user()->user_type_id == 4)
							<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
								<a href="#" class="nav-link"><i class="icon-magazine"></i> <span>โรงเรียน</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="โรงเรียน">
									<li class="nav-item"><a href="{{route('school.info.index')}}" class="nav-link">ข้อมูลโรงเรียน</a></li>	
									<li class="nav-item"><a href="" class="nav-link">ข้อมูลห้องเรียน</a></li>
									<li class="nav-item"><a href="" class="nav-link">ข้อมูลนักเรียน</a></li>
									<li class="nav-item"><a href="" class="nav-link">ข้อมูลครู</a></li>
									<li class="nav-item"><a href="" class="nav-link">ข้อมูลพนักงาน</a></li>
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link"><span>รายงาน</span></a>
										<ul class="nav nav-group-sub" data-submenu-title="รายงาน">
											<li class="nav-item"><a href="" class="nav-link">รายงาน อน.1</a></li>										
											<li class="nav-item"><a href="" class="nav-link">รายงาน อน.2</a></li>	
											<li class="nav-item"><a href="" class="nav-link">รายงาน อน.3</a></li>	
											<li class="nav-item"><a href="" class="nav-link">รายงาน อน.4</a></li>	
											<li class="nav-item"><a href="" class="nav-link">รายงาน อน.5</a></li>
											<li class="nav-item"><a href="" class="nav-link">รายงาน อน.6</a></li>			
										</ul>	
									</li>
								</ul>	
							</li>
						@endif
						@if (Auth::user()->user_type_id == 1 )
							<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
								<a href="#" class="nav-link"><i class="icon-stack"></i> <span>โครงการ</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="การฝากถอน">
									<li class="nav-item"><a href="{{route('project.index')}}" class="nav-link">รายการโครงการ</a></li>	
								</ul>
							</li>
						@endif
						@if (Auth::user()->user_type_id != 4)
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-tree7"></i> <span>จัดสรร</span></a>
									<ul class="nav nav-group-sub" data-submenu-title="จัดสรร">
										@if (Auth::user()->user_type_id == 1)
												<li class="nav-item"><a href="{{route('allocation.superadmin.index')}}" class="nav-link">รายการจัดสรรส่วนกลาง</a></li>
											@elseif(Auth::user()->user_type_id == 2)
												<li class="nav-item"><a href="{{route('allocation.provincial.index')}}" class="nav-link">รายการจัดสรรจังหวัด</a></li>
											@elseif(Auth::user()->user_type_id == 3)
												<li class="nav-item"><a href="{{route('allocation.provincialarea.index')}}" class="nav-link">รายการจัดสรรเขตพื้นที่</a></li>
										@endif
									</ul>	
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-git-pull-request"></i> <span>โอนเงิน</span></a>
									<ul class="nav nav-group-sub" data-submenu-title="ผลการทดสอบ">
										@if (Auth::user()->user_type_id == 1)
												<li class="nav-item"><a href="{{route('transfer.superadmin.index')}}" class="nav-link">รายการโอนเงินส่วนกลาง</a></li>
											@elseif(Auth::user()->user_type_id == 2)
												<li class="nav-item"><a href="{{route('transfer.provincial.index')}}" class="nav-link">รายการโอนเงินจังหวัด</a></li>
											@elseif(Auth::user()->user_type_id == 3)
												<li class="nav-item"><a href="{{route('transfer.provincialarea.index')}}" class="nav-link">รายการโอนเงินเขตพื้นที่</a></li>	
										@endif
									</ul>	
							</li>
						@endif
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-git-compare"></i> <span>คืนเงิน</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="ผลการทดสอบ">
								@if (Auth::user()->user_type_id == 1)
										<li class="nav-item"><a href="" class="nav-link">รายการคืนเงิน</a></li>										
									@elseif(Auth::user()->user_type_id == 2)
										<li class="nav-item"><a href="" class="nav-link">รายการคืนเงินจังหวัด</a></li>	
									@elseif(Auth::user()->user_type_id == 3)
										<li class="nav-item"><a href="" class="nav-link">รายการคืนเงินเขตพื้นที่</a></li>	
									@elseif(Auth::user()->user_type_id == 4)
										<li class="nav-item"><a href="" class="nav-link">รายการคืนเงินโรงเรียน</a></li>	
								@endif	
							</ul>	
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cash3"></i> <span>รายการเบิกจ่าย</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="ผลการทดสอบ">
								@if (Auth::user()->user_type_id == 4)
									<li class="nav-item"><a href="{{route('cost.school.index')}}" class="nav-link">การเบิกจ่ายเงินอุดหนุน</a></li>	
									<li class="nav-item"><a href="" class="nav-link">การเบิกจ่ายเงินเดือนครู</a></li>	
								@endif	
							</ul>	
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-gear"></i> <span>ตั้งค่า</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="ตั้งค่า">
								@if (Auth::user()->user_type_id == 1)
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link"> <span>ตั้งค่าระบบ</span></a>
										<ul class="nav nav-group-sub" data-submenu-title="ตั้งค่าระบบ">
												<li class="nav-item"><a href="{{route('setting.general.yearbudget.index')}}" class="nav-link">ปีงบประมาณ</a></li>
												<li class="nav-item nav-item-submenu">
													<a href="#" class="nav-link"><span>เงินอุดหนุน</span></a>
													<ul class="nav nav-group-sub" data-submenu-title="เงินอุดหนุน">
														<li class="nav-item"><a href="{{route('setting.general.subsidycategory.index')}}" class="nav-link">หมวดหมู่</a></li>										
														<li class="nav-item"><a href="{{route('setting.general.subsidycategory.subsidysubcategory.index')}}" class="nav-link">ค่าใช้จ่าย</a></li>	
													</ul>	
												</li>
												<li class="nav-item"><a href="{{route('setting.general.api.index')}}" class="nav-link">Web Api</a></li>
										</ul>	
									</li>	
								@endif
									@if (Auth::user()->user_type_id == 4)
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link"> <span>โรงเรียน</span></a>
											<ul class="nav nav-group-sub" data-submenu-title="โรงเรียน">
												<li class="nav-item"><a href="{{route('setting.school.class.index')}}" class="nav-link">ระดับชั้นเรียน</a></li>	
												<li class="nav-item"><a href="{{route('setting.school.room.index')}}" class="nav-link">ห้องเรียน</a></li>	
												<li class="nav-item"><a href="{{route('setting.school.student.index')}}" class="nav-link">นักเรียน</a></li>	
												<li class="nav-item"><a href="{{route('setting.school.teacher.index')}}" class="nav-link">ครู</a></li>	
												<li class="nav-item nav-item-submenu">
													<a href="#" class="nav-link"><span>ความซ้ำซ้อน</span></a>
													<ul class="nav nav-group-sub" data-submenu-title="จัดการความซ้ำซ้อน">
														<li class="nav-item"><a href="" class="nav-link">ครู</a></li>										
														<li class="nav-item"><a href="" class="nav-link">นักเรียน</a></li>	
													</ul>	
												</li>
											</ul>	
										</li>
									@endif
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link"> <span>ผู้ใช้งาน</span></a>
										<ul class="nav nav-group-sub" data-submenu-title="ผู้ใช้งาน">
											<li class="nav-item"><a href="" class="nav-link">ผู้ใช้งาน</a></li>									
										</ul>	
									</li>	
							</ul>	
						</li>
					</ul>
				</div>
			</div>			
		</div>

		<!-- Main content -->
		<div class="content-wrapper">
            
            @yield('content')

			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy;สงวนลิขสิทธิ์ 2020. <a href="{{url('')}}">ระบบแบบสารสนเทศ {{$generalinfo->company}}</a>
					</span>

					{{-- <ul class="navbar-nav ml-lg-auto">
						<li class="nav-item">
							<a href="http://npcsolution.com" class="navbar-nav-link">บริษัท เอ็นพีซีโซลูชั่นแอนด์เซอร์วิส จำกัด</a>
						</li>
					</ul> --}}
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	<!-- Core JS files -->
	<script src="{{asset('assets/js/main/jquery-3.3.1.js')}}"></script>
	{{-- <script src="{{asset('assets/plugins/morris/js/rapheal.min.js') }}"></script>   
	<script src="{{asset('assets/plugins/morris/js/morris.min.js') }}"></script>    --}}
	<script src="{{asset('assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-filestyle-2.1.0/bootstrap-filestyle.min.js') }}"></script>
	<script src="{{asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatable/buttons/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatable/ajax/jszip.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatable/ajax/pdfmake.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatable/ajax/vfs_fonts.js')}}"></script>
	<script src="{{asset('assets/plugins/datatable/buttons/buttons.html5.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatable/buttons/buttons.print.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatable/buttons/buttons.colVis.min.js')}}"></script>
	<script src="{{asset('assets/plugins/momentjs/moment.js') }}"></script> <!-- Moment Plugin Js -->
	<script src="{{asset('assets/js/plugins/sweetalert2/sweetalert2.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script> <!-- Bootstrap Material Datetime Picker Plugin Js --> 
	{{-- <script src="{{asset('assets/plugins/fusionchart/fusioncharts.js') }}"></script>
	<script src="{{ asset('assets/plugins/fusionchart/themes/fusioncharts.theme.fint.js') }}"></script> --}}

	<script src="{{asset('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	{{-- <script src="{{asset('assets/js/plugins/forms/styling/switchery.min.js')}}"></script> --}}
	{{-- <script src="{{asset('assets/js/plugins/forms/styling/switch.min.js')}}"></script> --}}
	<script src="{{asset('assets/js/demo_pages/form_checkboxes_radios.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('assets/js/demo_pages/form_layouts.js')}}"></script>
    @section('pageScript')
    @show
</body>
</html>
