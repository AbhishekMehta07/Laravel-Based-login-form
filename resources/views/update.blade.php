@extends('template')
@section('content')
@extends('logout')

<h1 class="text-center d-flex justify-content-center m-auto p-5"> DATA HAS BEEN UPDATED </h1>
<div class="text-center d-flex justify-content-center m-auto">
        <a href="{{url('/data')}}" class="btn btn-dark">View Data</a>
    </div>

    
@endsection