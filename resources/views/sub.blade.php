@extends('template')
@section('content')
@include('logout')
    <div class="container w-75">
        <div class="form-control m-3">
        <h1 class="text-center m-5"> Your entry has been recorded</h1>
        <div class="d-flex justify-content-center text-center">
        <a href="{{url('/')}}">
            <button name="ques" class="btn btn-dark m-1" >Go Back</button>
        </a>
        <a href="{{url('/data')}}" class="btn btn-dark m-1">View Data</a>
        </div>
    </div>
    </div>
@endsection 