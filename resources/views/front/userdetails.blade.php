@extends('front/master')
@section('title','Document hub | user-details')
@section('content')
<div class="changePassword">
   <div class="container">
      @if(session('msg'))
      <p class="alert alert-success alert-dismissible fade show" role="alert" style="color: red; ">
         {{session('msg')}}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </p>
      @endif
      <h2>Account Settings</h2>
      <div class="row justify-content-center pb-4">
         <div class="col-md-9">
            <div class="password">
               <form >
                  <h3>Billing Address</h3>
                  <div class="form-group row">
                     <label  class="col-sm-4 col-form-label">Full Name</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" 
                           placeholder="">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label  class="col-sm-4 col-form-label">Email Address</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" 
                           placeholder="" value="{{ Auth::user()->email }} ">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label  class="col-sm-4 col-form-label">Phone</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control" 
                           placeholder="">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label  class="col-sm-4 col-form-label"> Address</label>
                     <div class="col-sm-8">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                     </div>
                  </div>
                  <div class="btn2">
                     <button class="btn btn-sm">Save Changes</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
