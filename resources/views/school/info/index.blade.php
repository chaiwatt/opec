@extends('layouts.main')
@section('pageCss')
@stop
@section('content')
	<!-- Page header -->
	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{$school->name}}</span></h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
			<div class="header-elements d-none">
                
            </div>
		</div>

		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<span class="breadcrumb-item "><i class="icon-home2 mr-2"></i>โรงเรียน</span>
					<span class="breadcrumb-item active">ข้อมูลโรงเรียน</span>
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

		<!-- Cover area -->
		<div class="profile-cover">

			<div class="profile-cover-img" style="background-image: url({{asset('assets/images/schoolcover.png')}})"></div>

			
			<div class="media align-items-center text-center text-md-left flex-column flex-md-row m-0">
				<div class="mr-md-3 mb-2 mb-md-0">
					<a href="#" class="profile-thumb">
						<img src="ccc" class="border-white rounded-circle" width="48" height="48" alt="">
					</a>
				</div>

				<div class="media-body text-white">
					<h1 class="mb-0">{{$school->name}}</h1>
					<span class="d-block">{{$school->schoollicense->license}}</span>
				</div>

				<div class="ml-md-3 mt-2 mt-md-0">
					<ul class="list-inline list-inline-condensed mb-0">
						{{-- <li class="list-inline-item"><a href="#" class="btn btn-light border-transparent"><i class="icon-file-picture mr-2"></i> Cover image</a></li> --}}
						{{-- <li class="list-inline-item"><a href="#" class="btn btn-light border-transparent"><i class="icon-file-stats mr-2"></i> Statistics</a></li> --}}
					</ul>
				</div>
			</div>
		</div>
		<!-- /cover area -->
		<br>
		<div class="card">
			<div class="card-header header-elements-inline">
				{{-- <h5 class="card-title">เพิ่มผู้ใช้</h5> 
				 <div class="header-elements">
					<div class="list-icons">
						<a class="list-icons-item" data-action="collapse"></a>
						<a class="list-icons-item" data-action="reload"></a>
						<a class="list-icons-item" data-action="remove"></a>
					</div>
				</div> --}}
			</div>

			<div class="card-body">
				<form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    

				<!-- Left icons -->
				<div class="row">
					<div class="col-md-12">
						{{-- <div class="card">


							<div class="card-body"> --}}
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item"><a href="#left-icon-tab1" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> ข้อมูลทั่วไป</a></li>
									<li class="nav-item"><a href="#left-icon-tab2" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> ข้อมูลธนาคาร</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="left-icon-tab1">
                                        <div class="row">	
                                            <div class="col-md-12">
                                                <fieldset>	
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>โรงเรียน<span class="text-danger">*</span></label>
                                                                <input type="text" name="name" value="{{$school->name}}" placeholder="โรงเรียน" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>เลขที่ใบอณุญาติ<span class="text-danger">*</span></label>
                                                                <input type="text"  name="lastname" value="{{$school->schoollicense->license}}"  placeholder="เลขที่ใบอณุญาติ" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>อีเมล์</label>
                                                                <input type="text" name="medicalcert" value="" placeholder="เลขที่ใบประกอบวิชาชีพ" class="form-control">
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>เบอร์โทรศัพท์</label>
                                                                <input type="text" name="phone" value="" placeholder="เบอร์โทรศัพท์" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>เฟสบุค</label>
                                                                <input type="text" name="facebook" value="" placeholder="เฟสบุค" class="form-control">
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Twitter</label>
                                                                <input type="text" name="twitter" value="" placeholder="Twitter" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Instagram</label>
                                                                <input type="text" name="instagram" value="" placeholder="Instagram" class="form-control">
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Line id</label>
                                                                <input type="text" name="lineid" value="" placeholder="Line id" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>รูปถ่าย</label>
                                                                <div class="input-group">													
                                                                    <input type="text" id="filename" class="form-control border-right-0" placeholder="รูปถ่าย" disabled>
                                                                    <span class="input-group-append">
                                                                        <button class="btn bg-info" type="button" onclick="document.getElementById('file').click();">อัพโหลดรูป</button>													
                                                                    </span>
                                                                </div>
                                                                <input type="file" style="display:none;" id="file" name="picture"/>
                                                            </div>
                                                        </div>
                    
                                                    </div>
                                                    <div class="form-group">
                                                        <label>ที่อยู่</label>
                                                        <textarea name="address" rows="5" cols="5" class="form-control" ></textarea>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
									</div>

									<div class="tab-pane fade" id="left-icon-tab2">
										<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>บัญชี</th>
														<th>เลขที่บัญชี</th>
														<th style="width:100px">เพิ่มเติม</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($schoolbankaccounts as $schoolbankaccount)
													<tr>   
														<td> {{$schoolbankaccount->subsidycategory->name}}</td>
														<td> {{$schoolbankaccount->accountnumber}} </td>                                                          
														<td>  <a href="#" class="badge bg-info">รายละเอียด</a>  </td> 
													</tr>
													@endforeach
												</tbody>
											</table>      
										</div>
									</div>
								</div>
							{{-- </div>
						</div> --}}
					</div>
				</div>
				<!-- /left icons -->



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
			// document.getElementById("file").onchange = function () {
			// 	document.getElementById("filename").value = this.value;
			// };
			$("#file").on('change', function() {
				//  alert(this.value);
				$("#filename").val(this.value);
			});
    </script>
@stop
