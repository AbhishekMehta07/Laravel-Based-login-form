@extends('template')
@section('content')
<div class="container">
    <h1 class="my-5 text-center">Wrong Credentials</h1>
    <div class="d-flex justify-content-center">
        <a href="{{route('regis')}}" class="btn btn-dark m-1">Sign Up </a>
        <a href="{{route('auth')}}" class="btn btn-dark m-1">Try Again</a>
    </div>
</div>
    
@endsection