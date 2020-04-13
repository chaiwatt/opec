@extends('layouts.main')
@section('pageCss')
@stop
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">รายการจัดสรร</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
            {{-- <div class="header-elements d-none">
                <a href="{{route('demo.create')}}" class="btn btn-labeled btn-labeled-right bg-warning">เพิ่มข้อมูลทดสอบ <b><i class="icon-plus3"></i></b></a>
            </div> --}}
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> รายการจัดสรร</a>
                    <span class="breadcrumb-item active">รายการจัดสรร</span>
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
                                        <th>รายการ</th>
                                        <th>วันที่จัดสรร</th>
                                        <th>จำนวนจัดสรร</th>
                                        <th>จำนวนโอน</th>
                                        <th style="width:100px">เพิ่มเติม</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allocationtransactions as $allocationtransaction)
                                    <tr>   
                                        <td> {{$allocationtransaction->subsidycategory->name}}</td>
                                        <td> {{$allocationtransaction->createatthai}} </td>                                                          
                                        <td> {{number_format($allocationtransaction->budget, 2)}} </td> 
                                        <td> {{number_format($allocationtransaction->transfertransaction->transfer, 2)}} </td> 
                                        <td>  <a href="#" class="badge bg-info">รายละเอียด</a>  </td> 
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
