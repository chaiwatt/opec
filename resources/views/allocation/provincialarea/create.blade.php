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
            <div class="header-elements d-none">
                <a href="{{route('allocation.provincial.create')}}" class="btn btn-labeled btn-labeled-right bg-primary">เพิ่มการจัดสรร <b><i class="icon-plus3"></i></b></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> การจัดสรร</a>
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
                @php
                    $check = $allocationtransactions->where('subsidy_category_id',$projectallocation->subsidy_category_id)->first();
                @endphp
                    @if (!Empty($check))
                        <div class="card card-body border-top-info">
                            <form method="POST" action="{{route('allocation.provincialarea.createsave')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h6 class="card-title">
                                        <a class="collapsed text-default" data-toggle="collapse" href="#accordion-control-right-group{{$key+1}}"> {{$projectallocation->subsidycategory->name}} </a>
                                    </h6>
                                </div>
                                <div id="accordion-control-right-group{{$key+1}}" class="collapse" data-parent="#accordion-control-right">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @foreach ($schools as $school)
                                                <div class="form-group">
                                                    <label>{{$school->name}}<span class="text-danger">*</span></label>
                                                    <input type="number" name="projectallocation[{{$projectallocation->id}}][{{$school->id}}]" value="" placeholder="" class="form-control" >
                                                </div>  
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="submit[{{$projectallocation->id}}]" class="btn bg-teal">บันทึก <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </div>
                            </form>
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
