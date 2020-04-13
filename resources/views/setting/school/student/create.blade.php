@extends('layouts.main')
@section('pageCss')
<link rel="stylesheet" href="{{asset('assets/css/imgSelect.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/toast/jquery.toast.min.css')}}">
<style>
	.imgs-webcam-container video {max-width: 100%;}
	.imgs-crop-container > img {width: 100%;}
	.kanit{
		font-family: 'Kanit' !important;
		font-size: 14px;
	}
	
</style>
@stop
@section('content')
	<!-- Page header -->
	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">เพิ่มนักเรียน</span></h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
			<div class="header-elements d-none">
				<div class="breadcrumb justify-content-center">
					<div class="btn-group">
						<button type="button" class="btn btn-primary "><i class="icon-cog5 mr-2"></i> ช่วยเหลือ</button>
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"></button>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="#" id="cardreader" class="dropdown-item"><i id="card_reader" class="icon-user"></i> เครื่องอ่านบัตรประชาชน</a>
							<div class="dropdown-divider"></div>
							<a href="#" id="btnimgSelectModal" class="dropdown-item"><i class="icon-camera"></i> ถ่ายรูป</a>
						</div>
					</div>
				</div>        
            </div>
		</div>
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<span class="breadcrumb-item "><i class="icon-home2 mr-2"></i>โรงเรียน</span>
					<span class="breadcrumb-item ">นักเรียน</span>
					<span class="breadcrumb-item ">เพิ่มนักเรียน</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
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
				<h6 class="card-title">เพิ่มนักเรียน</h6>
				<div class="header-elements">
					<div class="list-icons">
						<a class="list-icons-item" data-action="collapse"></a>
					</div>
				</div>
			</div>

			<div class="card-body">
				<form method="POST" action="" enctype="multipart/form-data">
					@csrf
					<ul class="nav nav-tabs nav-tabs-highlight">
						<li class="nav-item"><a href="#left-icon-student" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> ข้อมูลนักเรียน</a></li>
						<li class="nav-item"><a href="#left-icon-parent" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> ข้อมูลผู้ปกครอง</a></li>			
					</ul>
					<div class="tab-content">
						<input id="hidden_amphur" type="text" value="" hidden>
						<input id="hidden_tambol" type="text" value="" hidden>
						<div class="tab-pane fade show active" id="left-icon-student">
							<div class="row">									
								<div class="col-md-12">																		
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>คำนำหน้า<span class="text-danger">*</span></label>
												<select name ="prefix" id="prefix" data-placeholder="คำนำหน้า" class="form-control form-control-select2">
													@foreach ($prefixes as $prefix)
														<option value="{{$prefix->id}}">{{$prefix->name}}</option> 
													@endforeach
												</select>
											</div>
										</div>
	
										<div class="col-md-4">
											<div class="form-group">
												<label>ชื่อ<span class="text-danger">*</span></label>
												<input type="text" name="name" id="name" value="{{old('name')}}" placeholder="ชื่อ" class="form-control" >
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>นามสกุล<span class="text-danger">*</span></label>
												<input type="text"  id="lastname" name="lastname"  value="{{old('lastname')}}" placeholder="นามสกุล" class="form-control" >
											</div>
										</div>
									</div>
	
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>เพศ<span class="text-danger">*</span></label>
												<select name ="gender" id="gender" data-placeholder="เพศ" class="form-control form-control-select2">
													@foreach ($genders as $gender)
														<option value="{{$gender->id}}">{{$gender->name}}</option> 
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>หมายเลขบัตรประชาชน<span class="text-danger">*</span></label>
												<input  type="text" id="hid" name="hid"  value="{{old('hid')}}" placeholder="หมายเลขบัตรประชาชน" class="form-control">
												<span id="hidinvalid" class="form-text text-danger" hidden></span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>หมู่เลือด</label>
												<select name ="blood" id="blood" data-placeholder="หมู่เลือด" class="form-control form-control-select2">
													<option value="0">เลือกรายการ</option> 
													@foreach ($bloods as $blood)
														<option value="{{$blood->id}}">{{$blood->name}}</option> 
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>เชื้อชาติ<span class="text-danger">*</span></label>
												<select name ="nationality" id="nationality" data-placeholder="เชื้อชาติ" class="form-control form-control-select2">
													@foreach ($nationalities as $nationality)
														<option value="{{$nationality->id}}">{{$nationality->name}}</option> 
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>สัญชาติ<span class="text-danger">*</span></label>
												<select name ="ethniciy" id="ethniciy" data-placeholder="สัญชาติ" class="form-control form-control-select2">
													@foreach ($ethnicities as $ethnicity)
														<option value="{{$ethnicity->id}}">{{$ethnicity->name}}</option> 
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>ศาสนา<span class="text-danger">*</span></label>
												<select name ="religion" id="religion" data-placeholder="ศาสนา" class="form-control form-control-select2">
													@foreach ($religions as $religion)
														<option value="{{$religion->id}}">{{$religion->name}}</option> 
													@endforeach
												</select>
											</div>
										</div>
									</div>
		
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>แพ้ยา<span class="text-danger">*</span></label>
												<input type="text"  id="lastname" name="lastname"  value="{{old('lastname')}}" placeholder="นามสกุล" class="form-control" >
											</div>
										</div>
	
										<div class="col-md-4">
											<div class="form-group">
												<label>วดป เกิด</label><span class="text-danger">*</span> <a href="" class="icon-cog5 text-info" data-toggle="dropdown"></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_generate_dob"><i class="icon-calculator4"></i> กำหนดอายุ</a>
												</div>
												<input type="text" name="dob" id="dob" value="{{old('dob')}}" placeholder="วดป เกิด" class="form-control" >
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>โทรศัพท์</label>
												<input type="text" id="phone" name="phone" value="{{old('phone')}}"  placeholder="โทรศัพท์" class="form-control">
											</div>
										</div>
									</div>
									<legend class="text-uppercase font-size-sm font-weight-bold">ที่อยู่ปัจจุบัน</legend>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>เลขที่<span class="text-danger">*</span></label>
												<input type="text" id="addressno" name="addressno" value="{{old('addressno')}}" placeholder="ที่อยู่" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>ที่อยู่ (หมู่ที่, หมู่บ้าน, ซอย)<span class="text-danger">*</span></label>
												<input type="text" id="address" name="address" value="{{old('address')}}" placeholder="ที่อยู่" class="form-control">
											</div>
										</div>
	
										<div class="col-md-4">
											<div class="form-group">
												<label>จังหวัด<span class="text-danger">*</span></label>

												<select name="province" id="province" data-placeholder="จังหวัด" class="form-control form-control-select2">
													<option value=""></option>
													@foreach ($provinces as $province)
														<option value="{{$province->id}}">{{$province->name}}</option> 
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>อำเภอ<span class="text-danger">*</span></label>
												<select name="amphur" id="amphur" data-placeholder="อำเภอ" class="form-control form-control-select2"></select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>ตำบล<span class="text-danger">*</span></label>
												<select name="tambol" id="tambol" data-placeholder="ตำบล" class="form-control form-control-select2"></select>
											</div>
										</div>
	
										<div class="col-md-4">
											<div class="form-group">
												<label>รหัสไปรษณีย์<span class="text-danger">*</span></label>
												<input type="number" name="postalcode" id="postalcode" value="{{old('postalcode')}}" placeholder="รหัสไปรษณีย์" class="form-control" >
											</div>
										</div>
									</div>

									<legend class="text-uppercase font-size-sm font-weight-bold">ที่อยู่ตามทะเบียนบ้าน </legend>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>เลขที่<span class="text-danger">*</span></label>
												<input type="text" id="addressno_house_registration" name="addressno_house_registration" value="{{old('addressno_house_registration')}}" placeholder="ที่อยู่" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>ที่อยู่ (หมู่ที่, หมู่บ้าน, ซอย)<span class="text-danger">*</span></label>
												<input type="text" id="address_house_registration" name="address_house_registration" value="{{old('address_house_registration')}}" placeholder="ที่อยู่" class="form-control">
											</div>
										</div>
	
										<div class="col-md-4">
											<div class="form-group">
												<label>จังหวัด<span class="text-danger">*</span></label>

												<select name="province_house_registration" id="province_house_registration" data-placeholder="จังหวัด" class="form-control form-control-select2">
													<option value=""></option>
													@foreach ($provinces as $province)
														<option value="{{$province->id}}">{{$province->name}}</option> 
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>อำเภอ<span class="text-danger">*</span></label>
												<select name="amphur_house_registration" id="amphur_house_registration" data-placeholder="อำเภอ" class="form-control form-control-select2"></select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>ตำบล<span class="text-danger">*</span></label>
												<select name="tambol_house_registration" id="tambol_house_registration" data-placeholder="ตำบล" class="form-control form-control-select2"></select>
											</div>
										</div>
	
										<div class="col-md-4">
											<div class="form-group">
												<label>รหัสไปรษณีย์<span class="text-danger">*</span></label>
												<input type="number" name="postalcode_house_registration" id="postalcode_house_registration" value="{{old('postalcode_house_registration')}}" placeholder="รหัสไปรษณีย์" class="form-control" >
											</div>
										</div>
									</div>
									<div id="migrantworker" style="display:none">
										<legend class="text-uppercase font-size-sm font-weight-bold">ข้อมูลต่างด้าว</legend>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label>ชื่อ-สกุลนายจ้าง</label>
													<input type="text" id="migrantworker_employer_name" name="migrantworker_employer_name" value="{{old('migrantworker_employer_name')}}" placeholder="ชื่อ-สกุลนายจ้าง" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>ประเภทนายจ้าง</label>
													<input type="text" id="migrantworker_employer_type" name="migrantworker_employer_type" value="{{old('migrantworker_employer_type')}}" placeholder="ประเภทนายจ้าง" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>หน่วยขึ้นทะเบียน</label>
													<input type="text" id="migrantworker_registration" name="migrantworker_registration" value="{{old('migrantworker_registration')}}" placeholder="หน่วยขึ้นทะเบียน" class="form-control">
												</div>
											</div>
										</div>
									</div>

									<div class="row ">
										<div class="col-md-2">
											<div class="form-group">
												<label>รูปนักเรียน<span class="text-danger">*</span></label>
												<div class="input-group">													
													<input type="text" id="filename" class="form-control border-right-0" placeholder="รูปนักเรียน" disabled hidden>
													<span class="input-group">
														<button id="btnpicture" class="btn bg-info" type="button" onclick="document.getElementById('file').click();">อัพโหลดรูป</button>													
													</span>
												</div>
												<input type="file" style="display:none;" id="file" name="picture"/>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group ">
												<input type="text" id="base64fromcard" name="base64fromcard" hidden >                                                                    
												<img id="imgbase64fromcard" src="{{asset('assets/img/pic.jpg')}}" width="120" height="120" class="avatar"/>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="left-icon-parent">
							<div class="row">	
								<div class="col-md-12">	
									<div class="row">
										<div class="col-md-12">	
										<a href="" class="btn btn-info  btn-icon ml-2 btn-sm float-right"  data-toggle="modal" data-target="#modal_contact"><i class="icon-add"></i></a>
										</div>
									</div>																								
									<div class="row">	
										<div class="col-md-12" id="contact_wrapper" >	
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">	
											<div class="table-responsive">
												<table class="table table-striped" >
													<thead>
														<tr>
															<th>ชื่อ-สกุล</th>
															<th>ความสัมพันธ์</th>      
															<th>โทรศัพท์</th>      
															<th>อีเมล์</th>                                                                                     
															<th style="width:120px">เพิ่มเติม</th>
														</tr>
													</thead>
													<tbody id="contact_wrapper_tr">                                
													</tbody>
												</table>
											</div>
										</div>      
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

@stop
