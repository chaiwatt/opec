@extends('layouts.main')
@section('pageCss')
@stop
@section('content')
    <div class="page-header page-header-light">
        
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">ห้องเรียน</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
            <div class="header-elements d-none">
                <a href="#" class="btn btn-labeled btn-labeled-right bg-primary" data-toggle="modal" data-target="#modal_add_yearbudget">เพิ่มห้องเรียน <b><i class="icon-plus3"></i></b></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> โรงเรียน</a>
                    <span class="breadcrumb-item active">ห้องเรียน</span>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body border-top-info">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ชั้น</th>
                                        <th>ห้อง</th>
                                        <th>ความจุสูงสุด</th>
                                        <th style="width:150px">เพิ่มเติม</th>
                                    </tr>
                                </thead>
                                <tbody id="table_yearbudget">
                                    @foreach ($classrooms as $key => $classroom)
                                    <tr>   
                                        <td> {{$key+1}}</td>
                                        <td> {{$classroom->classlevel->name}}</td>
                                        <td> {{$classroom->name}}</td>
                                        <td> {{$classroom->quantity}}</td>
                                        <td> 
                                            <a href="#" class="badge bg-teal useyear" data-id="{{$classroom->id}}" data-data="{{$classroom->name}}">รายละเอียด</a>                                       
                                            <a href="{{route('setting.general.yearbudget.delete',['id' => $classroom->id])}}" data-data="{{$classroom->name}}" onclick="confirmation(event)" class=" badge bg-danger">ลบ</a>
                                        </td>                                                            
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>      
                        </div>
                    </div>
                </div>
            </div>   
        <!-- /form layouts -->
    </div>
    <!-- /content area -->
@endsection
@section('pageScript')
<script  type="" src="{{asset('assets/js/helper/alert.js')}}"></script>
<script>
var route = {
			url: "{{ url('/') }}",
			token: $('meta[name="csrf-token"]').attr('content'),
		};

</script>
@stop
