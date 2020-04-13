@extends('layouts.main')
@section('pageCss')
@stop
@section('content')
	<!-- Page header -->
	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
			<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">เพิ่มการจัดสรรงบประมาณ</span></h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
			<div class="header-elements d-none">
			</div>
		</div>

		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
                    <a class="breadcrumb-item"><i class="icon-home2 mr-2"></i> โครงการ</a>
                    <a class="breadcrumb-item"> จัดสรรงบประมาณตั้งต้น</a>
                    <a class="breadcrumb-item"> รายการจัดสรรงบประมาณตั้งต้น</a>
                    <span class="breadcrumb-item active">เพิ่มการจัดสรรงบประมาณ</span>
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
				<h5 class="card-title">จัดสรรงบประมาณ ({{number_format($project->budget, 2)}} บาท)</h5>
			</div>

			<div class="card-body">
				<form method="POST" action="{{route('project.allocation.createsave',['id' => $project->id])}}" enctype="multipart/form-data">
					@csrf
					<div class="row">	
						<div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    @foreach ($subsidycategories as $subsidycategory)
                                    <div class="form-group">
                                        <label>{{$subsidycategory->name}}<span class="text-danger">*</span></label>
                                        <input type="number" name="subsidycategory[{{$subsidycategory->id}}]" value="{{old('subsidycategory[]')}}" placeholder="" class="form-control" >
                                    </div>  
                                    @endforeach
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

    </script>
@stop
