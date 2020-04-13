@extends('layouts.main')
@section('pageCss')
@stop
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">รายการโครงการ</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
            <div class="header-elements d-none">
                <a href="{{route('project.create')}}" class="btn btn-labeled btn-labeled-right bg-primary">เพิ่มโครงการ <b><i class="icon-plus3"></i></b></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> ตั้งค่า</a>
                    <span class="breadcrumb-item active">รายการโครงการ</span>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body border-top-info">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ชื่อโครงการ</th>
                                    <th>ปีงบประมาณ</th>
                                    <th>งบประมาณตั้งต้น</th>
                                    <th>จัดสรร</th>
                                    <th>สถานะ</th>
                                    <th style="width:160px">เพิ่มเติม</th>
                                </tr>
                            </thead>
                            <tbody id="table_project">
                                @foreach ($projects as $key => $project)
                                <tr>   
                                    <td> {{$key + 1}}</td>
                                    <td> {{$project->name}}</td>
                                    <td> {{$project->yearbudget->name}} </td>                                                            
                                    <td> {{$project->budget}} </td>   
                                    <td> <a href="{{route('project.allocation.index',['id' => $project->id])}}" class="badge bg-warning addsubsidycategory">จัดสรร</a> </td>   
                                    <td>     
                                        @if ($project->status == 1)
                                            <span class="badge badge-flat border-success text-success-600">ใช้งาน</span>                              
                                        @endif
                                    </td>   
                                    <td> 
                                        <a href="{{route('project.select',['id' => $project->id])}}" class="badge bg-info useproject">ใช้โปรเจค</a> 
                                        <a href="#" class="badge bg-teal addsubsidycategory">แก้ไข</a> 
                                        <a href="{{route('project.delete',['id' => $project->id])}}" class="badge bg-danger addsubsidycategory">ลบ</a>
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
<script  type="module" src="{{asset('assets/js/helper/projecthelper.js')}}"></script>
    <script type="text/javascript">
            
        var route = {
			url: "{{ url('/') }}",
			token: $('meta[name="csrf-token"]').attr('content'),
        };

        $(document).ready(function() {
            $('#testtopictable').DataTable({
                "oLanguage": {
                    "sSearch": "ค้นหา",
                    "sLengthMenu": "แสดง _MENU_ รายการ",
                    "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                    "sEmptyTable": "ไม่มีรายการ",
                    "sInfoEmpty":  "0 รายการ",
                } ,
                dom: "Bfrtip",
                order: [[ 0, "desc" ]],
                info: false,
                buttons: [
                    {extend: 'copy',text: 'คัดลอก'},
                    {extend: 'print',text: 'พิมพ์'},
                    {extend: 'excel',text: 'ส่งออก Excel' },
                ]
            });
        } );

    </script>
@stop
