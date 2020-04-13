<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ระบบสารสนเทศคณะกรรมการบริหารโรงเรียนเอกชน</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/plugins/morris/css/morris.css') }}" rel="stylesheet"/>  
	<link href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />
	<link href="{{asset('assets/css/layout.min.css')}}"  rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/extend.css')}}" rel="stylesheet" type="text/css">
    @section('pageCss')
    @show
</head>

<body class="bg-slate-800">

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">
				<!-- Login card -->
                @yield('content')
				<!-- /login card -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	<!-- Core JS files -->
	<script src="{{asset('assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('assets/plugins/morris/js/rapheal.min.js') }}"></script>   
	<script src="{{asset('assets/plugins/morris/js/morris.min.js') }}"></script>   
	<script src="{{asset('assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-filestyle/bootstrap-filestyle.min.js') }}"></script>
	<script src="{{asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<script src="{{asset('assets/plugins/momentjs/moment.js') }}"></script> <!-- Moment Plugin Js -->
	<script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script> <!-- Bootstrap Material Datetime Picker Plugin Js --> 
	<script src="{{asset('assets/plugins/fusionchart/fusioncharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/fusionchart/themes/fusioncharts.theme.fint.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>
