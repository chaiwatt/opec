@extends('layouts.main')
@section('pageCss')
@stop
@section('content')
    {{-- modal add year budget --}}
    <div id="modal_add_yearbudget" class="modal fade" style="overflow:hidden;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="icon-menu7 mr-2"></i> &nbsp;เพิ่มปีงบประมาณ</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>ปีงบประมาณ</label><span class="text-danger">*</span>
                                <input type="number" id="yearbudget" placeholder="ปีงบประมาณ" class="form-control" >
                            </div>
                        </div>
                    </div>
                </div>           
                <div class="modal-footer">
                    <button class="btn btn-link" data-dismiss="modal"><i class="icon-cross2 font-size-base mr-1"></i> ปิด</button>
                    <button id="btn_modal_add_yearbudget" class="btn bg-primary" data-dismiss="modal"><i class="icon-checkmark3 font-size-base mr-1"></i> เพิ่มรายการ</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Page header -->
    <div class="page-header page-header-light">
        
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">ปีงบประมาณ</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
            <div class="header-elements d-none">
                <a href="#" class="btn btn-labeled btn-labeled-right bg-primary" data-toggle="modal" data-target="#modal_add_yearbudget">เพิ่มปีงบประมาณ <b><i class="icon-plus3"></i></b></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> ตั้งค่า</a>
                    <span class="breadcrumb-item active">ปีงบประมาณ</span>
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
                                        <th>ปีงบประมาณ</th>
                                        <th>สถานะ</th>
                                        <th style="width:150px">เพิ่มเติม</th>
                                    </tr>
                                </thead>
                                <tbody id="table_yearbudget">
                                    @foreach ($yearbudgets as $key => $yearbudget)
                                    <tr>   
                                        <td> {{$key+1}}</td>
                                        <td> {{$yearbudget->name}}</td>
                                        <td> 
                                            @if ($yearbudget->status == 1)
                                                <span class="badge badge-flat border-success text-success-600">ใช้งาน</span>
                                            @endif
                                        </td>
                                        <td> 
                                            <a href="#" class="badge bg-teal useyear" data-id="{{$yearbudget->id}}" data-data="{{$yearbudget->name}}">ใช้ปีงบประมาณ</a>                                       
                                            <a href="{{route('setting.general.yearbudget.delete',['id' => $yearbudget->id])}}" data-data="ปีงบประมาณ {{$yearbudget->name}}" onclick="confirmation(event)" class=" badge bg-danger">ลบ</a>
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
<script  type="module" src="{{asset('assets/js/helper/settinghelper.js')}}"></script>
<script>
var route = {
			url: "{{ url('/') }}",
			token: $('meta[name="csrf-token"]').attr('content'),
		};

</script>
@stop
