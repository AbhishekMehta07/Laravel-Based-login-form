@extends('template')
@section('content')
@include('logout')
<div class="container">
    <form action="{{route('update')}}" method="POST" class="m-4 p-5">
        @csrf
        <h1 class="text-center my-3">UPDATE DETAILS</h1>
    <div class="row my-3">
       <label for="name">Full Name</label> 
      
       <input type="text" name="name" class="form-control w-50" value="{{$student->name}}" required>
    </div>
    <div class="row my-3">
        <label for="age">Age</label> 
       <input type="number" name="age" class="form-control w-50"  value="{{$student->age}}" required>
    </div>
    <div class="row my-3">
        <label for="phone_num">Phone Number</label> 
       <input type="number" name="phone_num" class="form-control w-50" value="{{$student->phone_num}}" required>
    </div>
    <div class="row">
        <label for="email">Email</label> 
       <input type="email" name="email" class="form-control w-50" value="{{$student->email}}" required>
    </div>

    <div>
        <button type="submit" class="btn btn-dark my-4">Submit</button>
        <a href="{{url('/data')}}" class="btn btn-dark">View Data</a>
    </div>
    </form>
    
</div>    
@endsection