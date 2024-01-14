@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header p-0 m-3 position-relative z-index-1">
                    <a href="javascript:;" class="d-block">
                        <img src="{{ asset('assets/img/exam-vocal-1.jpeg') }}" class="img-fluid border-radius-lg">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header p-0 m-3 position-relative z-index-1">
                    <a href="javascript:;" class="d-block">
                        <img src="{{ asset('assets/img/exam-vocal.jpeg') }}" class="img-fluid border-radius-lg">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
