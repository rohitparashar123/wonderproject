@extends('front/master')
@section('title','Document Center | My account')
@section('content')
<div class="changePassword">
   @if(session('msg'))
   <p class="alert alert-success alert-dismissible fade show" role="alert" style="color: red; ">
      {{session('msg')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
   </p>
   @endif
   <div class="container">
      <div class="row pb-4">
         <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               <a class="nav-link active" href="{{url('myaccount/orders')}}">Documents</a>
               <a class="nav-link" href="{{url('myaccount/account-settings')}}">Account Settings</a>
               <a class="nav-link" href="{{url('myaccount/others')}}">Others</a>
            </div>
         </div>
          <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <h2>Orders</h2>
                    <div class="password">
                        
                        <p>You do not yet have any completed documents.</p>
                        <button class="btn btn-sm">Choose a documents</button>
            
            
                    </div>                        </div>
                  
            </div>
            </div>
      </div>
   </div>
</div>
@endsection
