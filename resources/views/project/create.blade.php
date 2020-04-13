@extends('layouts.main')
@section('pageCss')
@stop
@section('content')
	<!-- Page header -->
	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
			<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">เพิ่มโครงการ</span></h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
			<div class="header-elements d-none">
			</div>
		</div>

		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<span class="breadcrumb-item "><i class="icon-home2 mr-2"></i>โครงการ</span>
					<span class="breadcrumb-item ">รายการโครงการ</span>
					<span class="breadcrumb-item active">เพิ่มโครงการ</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none">

			</div>
		</div>
	</div>
	<!-- /page header -->

	<!-- Content area -->
	<div class="content">
		@if (Session::has('success'))
			<div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
				<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
				{{ Session::get('success') }}
			</div>
		@elseif( Session::has('error') )
			<div class="alert alert-warning alert-styled-left alert-dismissible">
				<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
				{{ Session::get('error') }}
			</div>
		@endif
		@if ($errors->count() > 0)
			<div class="alert alert-warning alert-styled-left alert-dismissible">
				<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
				{{ $errors->first() }}
			</div>
		@endif

		<div class="card">
			<div class="card-header header-elements-inline">
				<h5 class="card-title">เพิ่มโครงการ</h5>
			</div>

			<div class="card-body">
				<form method="POST" action="{{route('project.createsave')}}" enctype="multipart/form-data">
					@csrf
					<div class="row">	
						<div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>ชื่อโครงการ<span class="text-danger">*</span></label>
                                        <input type="text" name="project" value="{{old('project')}}" placeholder="ชื่อโครงการ" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>ปีงบประมาณ<span class="text-danger">*</span></label>
                                        <select name="yearbudget" data-placeholder="ปีงบประมาณ" class="form-control form-control-select2 ">
                                            @foreach ($yearbudgets as $yearbudget)
                                                <option value="{{$yearbudget->id}}">{{$yearbudget->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>วันเริ่มโครงการ</label><span class="text-danger">*</span> 
                                        <input type="text" name="start" id="start" value="{{old('start')}}" placeholder="วันเริ่มโครงการ" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>วันเริ่มสิ้นสุดโครงการ</label><span class="text-danger">*</span> 
                                        <input type="text" name="end" id="end" value="{{old('end')}}" placeholder="วันเริ่มสิ้นสุดโครงการ" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>งบประมาณตั้งต้น<span class="text-danger">*</span></label>
                                        <input type="number" name="budget" value="{{old('budget')}}" placeholder="งบประมาณตั้งต้น" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>เพิ่มเติม<span class="text-danger">*</span></label>
                                        <textarea name="note" class="form-control" cols="3" rows="5" placeholder="เพิ่มเติม" ></textarea>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
					<div class="text-right">
						<button type="submit" class="btn bg-teal">บันทึก <i class="icon-paperplane ml-2"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('pageScript')

	<script type="text/javascript">
        $(function () {
            $('#start').bootstrapMaterialDatePicker({
                format: 'DD/MM/YYYY',
                clearButton: true,
                weekStart: 1,
                cancelText: "ยกเลิก",
                okText: "ตกลง",
                clearText: "เคลียร์",
                time: false
            });
        });
        $(function () {
            $('#end').bootstrapMaterialDatePicker({
                format: 'DD/MM/YYYY',
                clearButton: true,
                weekStart: 1,
                cancelText: "ยกเลิก",
                okText: "ตกลง",
                clearText: "เคลียร์",
                time: false
            });
        });
    </script>
@stop
