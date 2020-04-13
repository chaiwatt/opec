@extends('layouts.login')
    @if( Session::has('error') )
        <div class="alert bg-warning text-white alert-styled-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <span class="font-weight-semibold">{{ Session::get('error') }}</span>
        </div>
    @endif
@section('content')

    <div class="card mb-0">
        <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="text-center mb-3">
                    <i class="icon-lock icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h5 class="mb-0">เข้าสู่ระบบ</h5>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    <div class="form-control-feedback">
                        <i class="icon-user text-muted"></i>
                    </div>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input id="password" type="password" class="form-control" name="password" required>
                    <div class="form-control-feedback">
                        <i class="icon-lock2 text-muted"></i>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">เข้าสู่ระบบ <i class="icon-circle-right2 ml-2"></i></button>
                    <button type="button" class="btn btn-primary btn-block">ลงทะเบียน <i class="icon-user ml-2"></i></button>
                </div>
                {{-- <div class="form-group text-center">
                        <a href="{{url('/')}}" class="ml-auto">เว็บไซต์</a>
                    </div> --}}
            </form>
            
        </div>
    </div>
@endsection



