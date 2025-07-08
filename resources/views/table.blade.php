@extends('template')
@section('content')
@include('logout')
<div class="container">
    <div class="row">
        <div class="m-3">
        <table class="table table-light table-hover table-responsive table-bordered table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            @foreach ($data as $item => $stud)
            <tr>
                <td>{{$stud->id}}</td>
                <td>{{$stud->name}}</td>
                <td>{{$stud->age}}</td>
                <td>{{$stud->phone_num}}</td>
                <td>{{$stud->email}}</td>
                <td><a href="{{route('edit')}}" class="btn mx-2 edit">edit</a><a href="{{route('delete')}}" class="btn  mx-2 delete">delete</td></a>
            </tr>    
            @endforeach
        </table>
    </div>
    <div class="d-flex justify-content-center text-center">
        <a href="{{url('/')}}">
            <button name="ques" class="btn btn-dark mx-3" >Fill Form</button>
        </a>
        </div>
    </div>
</div>    
@endsection