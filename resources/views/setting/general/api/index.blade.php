@extends('layouts.main')
@section('pageCss')
@stop
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Web API</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
            <div class="header-elements d-none">
                <a href="#" class="btn btn-labeled btn-labeled-right bg-primary" data-toggle="modal" data-target="#modal_add_yearbudget">Web API <b><i class="icon-plus3"></i></b></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> ตั้งค่า</a>
                    <span class="breadcrumb-item active">Web API</span>
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>โครงการ</label>
                                <input type="text" name="name" id="name" value="http://localhost/opec/public/api/webapi/project" placeholder="โครงการ" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>การจัดสรร<span class="text-danger"><small> (ต้องการ projectid เช่น http://localhost/opec/public/api/webapi/allocation/1)*</small></span></label>
                                <input type="text"  id="lastname" name="lastname"  value="http://localhost/opec/public/api/webapi/allocation/" placeholder="การจัดสรร" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>การโอนเงิน<span class="text-danger"><small> (ต้องการ projectid)*</small> </span></label>
                                <input type="text"  id="lastname" name="lastname"  value="" placeholder="การโอนเงิน" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>รายการอุดหนุน</label>
                                <input type="text"  id="lastname" name="lastname"  value="" placeholder="รายการอุดหนุน" class="form-control" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        <!-- /form layouts -->
    </div>
    <!-- /content area -->
@endsection
@section('pageScript')

@stop
