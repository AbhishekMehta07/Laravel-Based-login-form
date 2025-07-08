@extends('template')
@section('content')
     <div class="mt-5 container w-25" >
        <h1 class=" m-5 text-center">Sign-Up Page</h1>
        <form  action="{{route('checkReg')}}" method="POST">
            @csrf

            <label class="mb-1 mt-3" for="name"> Name </label>
            <input  class="form-control" type="name" name="name" placeholder="Enter your Full Name" required>

            <label class="mb-1 mt-3" for="email"> Email-Id </label>
            <input  class="form-control" type="email" name="email" placeholder="Enter your Email Id" required>


            <label class="mb-1 mt-3" for="password"> Password </label>
            <input  class="form-control" type="password" name="password" placeholder="Enter your Password">

            <label class="mb-1 mt-3" for="password_confirmation"> Confirm Password </label>
            <input  class="form-control" type="password" name="password_confirmation" placeholder="Confirm your Password">

            <div class="custom-register">
                <button type="submit" class="mt-3 btn btn-sm btn-dark">Sign-Up</button>
            </div>
        </form>
    </div>
@endsection