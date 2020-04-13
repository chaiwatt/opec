@extends('layouts.main')
@section('pageCss')
@stop
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">รายการโอน</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
            <div class="header-elements d-none">
                <a href="{{route('transfer.superadmin.create')}}" class="btn btn-labeled btn-labeled-right bg-primary">เพิ่มการโอน <b><i class="icon-plus3"></i></b></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> รายการโอน</a>
                    <span class="breadcrumb-item active">รายการโอน</span>
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

            <div class="card-group-control card-group-control-right " id="accordion-control-right">

                @foreach ($projectallocations as $key => $projectallocation)
                    @if (!Empty($allocationtransactions->where('subsidy_category_id',$projectallocation->subsidy_category_id)->first()))
                        <div class="card card-body border-top-info">
                            <div class="card-header">
                                <h6 class="card-title">
                                    <a class="collapsed text-default" data-toggle="collapse" href="#accordion-control-right-group{{$key+1}}">{{$projectallocation->subsidycategory->name}}</a>
                                </h6>
                            </div>
                            <div id="accordion-control-right-group{{$key+1}}" class="collapse" data-parent="#accordion-control-right">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width:20px">#</th>
                                                    <th>วันที่โอน</th>
                                                    <th>หน่วยงาน</th>
                                                    <th>จำนวนจัดสรร</th>
                                                    <th>จำนวนโอน</th>
                                                    <th style="width:120px">เพิ่มเติม</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($transfertransactions as $key => $transfertransaction)
                                                    @if ($transfertransaction->allocationtransaction->subsidycategory->id == $projectallocation->subsidy_category_id)
                                                        <tr>   
                                                            <td> {{$key + 1}}</td>
                                                            <td> {{$transfertransaction->createatthai}} </td> 
                                                            <td> {{$transfertransaction->allocationtransaction->provincialeducation->name}} </td>                                                            
                                                            <td> {{number_format($transfertransaction->allocationtransaction->budget, 2)}} </td>   
                                                            <td> {{number_format($transfertransaction->transfer, 2)}} </td> 
                                                            <td> 
                                                                <a href="#" class="badge bg-teal addsubsidycategory">แก้ไข</a> 
                                                                <a href="{{route('project.delete',['id' => $transfertransaction->id])}}" class="badge bg-danger addsubsidycategory">ลบ</a>
                                                            </td>   
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                @endforeach
            </div>
            <!-- /accordion with right control button -->

            </div>
        </div>   

        <!-- /form layouts -->
    </div>
    <!-- /content area -->
@endsection
@section('pageScript')
    <script type="text/javascript">
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
