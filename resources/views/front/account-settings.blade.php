@extends('front/master')
@section('title','Document Center | Account Settings')
@section('content')
<div class="changePassword">
   <div class="container">
      <h2>Account Settings</h2>
      <div class="row">
         <div class="col-md-3" style="margin-top: -90px;">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               <a class="nav-link " href="{{url('myaccount/orders')}}">Documents</a>
               <a class="nav-link active" href="{{url('myaccount/account-settings')}}">Account Settings</a>
               <a class="nav-link" href="{{url('myaccount/others')}}">Others</a>
            </div>
         </div>
         <div class="col-md-9">
            <div class="password">
               <div class="p3" style="display: flex; justify-content: space-between;">
                  <div class="p1">
                     <h3>Billing Address</h3>
                  </div>
                  <div class="btn2">
                     <a class="btn btn-sm" href="{{url('/user-details')}}">Edit contect information</a>
                  </div>
               </div>
               <form>
                  <div class="form-group row">
                     <label class="col-sm-4 col-form-label">Full Name</label>
                     <div class="col-sm-8">
                     </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                     <label class="col-sm-4 col-form-label">Email Address</label>
                     <div class="col-sm-8">
                        <p>dhananjayk7724@gmail.com</p>
                     </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                     <label class="col-sm-4 col-form-label">Phone</label>
                     <div class="col-sm-8">
                     </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                     <label class="col-sm-4 col-form-label">Business name(optional)</label>
                     <div class="col-sm-8">
                     </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                     <label class="col-sm-4 col-form-label"> Address</label>
                     <div class="col-sm-8">
                     </div>
                  </div>
                  <hr>
                  <div class="p3" style="display: flex; justify-content: space-between;">
                     <div class="p1">
                        <h3>Password</h3>
                     </div>
                     <div class="btn2">
                        <a href="{{url('/myaccount/change-password')}}" class="btn btn-sm">Change password</a>
                     </div>
                  </div>
                  <br>
                  <div class="p3" style="display: flex; justify-content: space-between;">
                     <div class="p1">
                        <h3>Deleting your account</h3>
                     </div>
                     <div class="btn2">
                        <a href="delete-account.html" class="btn btn-sm">Entirely delete the
                        account</a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
