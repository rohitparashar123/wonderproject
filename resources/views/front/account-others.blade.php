@extends('front/master')
@section('title','Document Center | My account')
@section('content')
<div class="changePassword mt-5">
   <div class="container">
      <h2>Orders</h2>
      <div class="row">
         <div class="col-md-3" style="margin-top: -90px;">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               <a class="nav-link" href="{{url('myaccount/orders')}}">Documents</a>
               <a class="nav-link" href="{{url('myaccount/account-settings')}}">Account Settings</a>
               <a class="nav-link active" href="{{url('myaccount/others')}}">Others</a>
            </div>
         </div>
         <div class="col-md-9">
            <div class="password">
               <h3>Order history</h3>
               <p>There are no orders.</p>
               <button class="btn btn-sm">Orders</button>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection
