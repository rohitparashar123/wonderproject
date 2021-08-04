@extends('front/master')
@section('title','Document Center | Signin ')
@section('content')
      <div class="login">
         <div class="container">
            <div class="row">
               <div class="offset-md-3 col-md-6 offset-md-3">
                  @if(session('msg'))
                  <p class="alert alert-success alert-dismissible fade show" role="alert" style="color: red; ">
                     {{session('msg')}}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </p>
                  @endif
                  <form method="post" action="{{url('/signin')}}">
                     @csrf
                     <div class="form-group">
                        <h3 class="text-start">Login</h3>
                        <p>New User? <span><a href="{{url('/signup')}}">Create an account</a></span></p>
                        <label for="exampleFormControlInput1">What is your email address?</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" autofocus required>
                        @error('email')
                        <span class="error mt-1" role="alert" style="font-style: italic; color: red; font-weight: bold; font-size: 14px;">
                        {{ $message }}
                        </span>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlInput1">What is your password?</label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"  autofocus required>
                        @error('password')
                        <span class="error mt-1" role="alert" style="font-style: italic; color: red; font-weight: bold; font-size: 14px;">
                        {{ $message }}
                        </span>
                        @enderror
                     </div>
                     <div class="submit">
                        <button  class="btn btn-success" type="submit">Login (secure server)</button><br>
                        <a href="#">Forget your password</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
    @endsection  