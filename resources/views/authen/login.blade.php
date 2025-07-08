@extends('template')
@section('content')
    <div class="mt-5 container w-25" >
        <h1 class=" m-5 text-center">Sign-in Page</h1>
        <form method="POST" action="{{route('checkLog')}}">
            @csrf
            <label class="mb-1 mt-3" for="email"> Email-Id </label>
            <input  class="form-control" type="email" name="email" placeholder="Enter your Email Id">


            <label class="mb-1 mt-3" for="password"> Password </label>
            <input  class="form-control" type="password" name="password" placeholder="Enter your Password">

            <div class="custom-login">
                <button type="submit" class="mt-3 btn btn-sm btn-dark">Sign-in</button>
                <a href="{{route('regis')}}" class="mt-3 btn btn-sm btn-dark">Sign-Up</a>
            </div>
        </form>
    </div>
@endsection