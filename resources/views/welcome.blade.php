@extends('template')
@section('content')
@extends('logout')
    <div class="container w-75">
            <form class=" m-3" method="POST" action="{{ url('/submit') }}">
                <h1 class="text-center m-5">STUDENT FORM</h1>
                @csrf
                <div class="row p-5">
                <div class="col-6">
                    <label class="mb-1" for="name">Full Name</label>
                    <input class="form-control mb-4" type="text" name="name" placeholder="Enter your name"   required>

                    <label class="mb-1" for="email">Email ID</label>
                    <input class="form-control mb-4" type="email" name="email" placeholder="example@test.com"  required>
                </div>
                <div class="col-6">
                    <label class="mb-1" for="age">Age</label>
                    <input class="form-control mb-4" type="number" name="age" placeholder="Enter your age"  required>

                    <label class="mb-1" for="phone_num">Phone Number</label>
                    <input class="form-control mb-4" type="number" name="phone_num" placeholder="Enter your Phone Number"  required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="mx-2 btn btn-dark">Submit</button>
                    <a href="{{url('/data')}}" class=" mx-2 btn btn-dark"> View Data </a>
                </div>
            </div>
            </form>
        </div>
@endsection