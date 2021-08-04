@extends('front/master')
@section('title','Document Center | Signup')
@section('content')
      <div class="registration pb-4">
         <div class="container">
            <div class="row">
               <div class=" offset-md-3 col-md-6 offset-md-3">
                  @if(session('msg'))
                  <p class="alert alert-success alert-dismissible fade show" role="alert" style="color: red; ">
                     {{session('msg')}}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </p>
                  @endif
                  <div class="registration2">
                     <h2>Registration</h2>
                  </div>
                  <div class="registration3">
                     <h3>New client with Document Center?</h3>
                     <p>Create an account.</p>
                     <form action="{{url('/sign')}}" method="post">
                        @csrf
                        <div class="form-group">
                           <label for="exampleFormControlInput1">Your Email Address is <span style="color: red;">*</span></label>
                           <input type="email" class="form-control rounded" id="exampleFormControlInput1" placeholder="name@example.com" name="email" autofocus>
                           @error('email')
                           <span class="error mt-1" role="alert" style="font-style: italic; color: red; font-weight: bold; font-size: 14px;">
                           {{ $message }}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <p style="margin-top: 30px; line-height: 0;">Protect your accout with a passowrd</p>
                           <label for="exampleFormControlInput1">Enter a Password (6 characters min.)<span style="color: red;">*</span></label>
                           <input type="password" class="form-control rounded" id="exampleFormControlInput1" placeholder="password" name="password">
                           @error('password')
                           <span class="error mt-1" role="alert" style="font-style: italic; color: red; font-weight: bold; font-size: 14px;">
                           {{ $message }}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleFormControlInput1">Confirm your password to create an account <span style="color:red;">*</span></label>
                           <input type="password" class="form-control rounded" id="exampleFormControlInput1" placeholder="Enter re-password" name="password_confirmation">
                           @error('password_confirmation')
                           <span class="error" role="alert" style="font-style: italic; color: red;">
                           {{ $message }}
                           </span>
                           @enderror
                        </div>
                        <div class="submitBtn">
                           <button class="btn btn-sm">Create an account</button>
                           <p><span style="color: red;">*</span>Required field</p>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   @endsection