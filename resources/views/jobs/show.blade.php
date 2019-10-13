@extends('layouts.main')

@section('content')
<div class="album text-muted">
    <div class="container">
        @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
        <div class="row" id="app">
            <div class="title" style="margin-top:20px;">
                <h2>SE Wanted</h2>
            </div>
            <img src="{{asset('bg_cover.jpg')}}" style="width:100%;" alt="">
            <div class="col-lg-8">
                <div class="p-4 mb-8 bg-white">
                    <h3 class="h5 text-black mb-3">More Info</h3>
                    <p>Once you create an account a verification link will be sent to your email.</p>
                </div>
                <div class="p-4 mb-8 bg-white">
                    <h3 class="h5 text-black mb-3">More Info</h3>
                    <p>Once you create an account a verification link will be sent to your email.</p>
                </div>
                <div class="p-4 mb-8 bg-white">
                    <h3 class="h5 text-black mb-3">More Info</h3>
                    <p>Once you create an account a verification link will be sent to your email.</p>
                </div>
                <div class="p-4 mb-8 bg-white">
                    <h3 class="h5 text-black mb-3">More Info</h3>
                    <p>Once you create an account a verification link will be sent to your email.</p>
                </div>
                <div class="p-4 mb-8 bg-white">
                    <h3 class="h5 text-black mb-3">More Info</h3>
                    <p>Once you create an account a verification link will be sent to your email.</p>
                </div>
                <div class="p-4 mb-8 bg-white">
                    <h3 class="h5 text-black mb-3">More Info</h3>
                    <p>Once you create an account a verification link will be sent to your email.</p>
                </div>
            </div>

            <div class=" col-md-4 p-4 site-section bg-light">
                <h3 class="h5 text-black mb-3 text-center">Short Info</h3>
                <p>Company Name:</p>
                <p>Company Name:</p>
                <p>Company Name:</p>
                <p>Company Name:</p>
                <p>Company Name:</p>
                <p>Company Name:</p>
                <p><a href="#" class="btn btn-primary py-2 px-4">Visit Company Page</a></p>

            </div>

        </div>
    </div>
</div>

@endsection

<style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #2d4739;
    }
</style>
