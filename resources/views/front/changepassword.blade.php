@extends('front/master')
@section('title','Document hub | change-password')
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
            <h2>Change Password</h2>
            <div class="row">
                <div class="offset-md-3 col-md-9 offset-md-3">
                    <div class="password">
                        <form action="{{url('/change-pwd')}}" method="post">
                            @csrf
                            <h3>Change your Password</h3>
                            <div class="form-group row">
                                <label  class="col-sm-5 col-form-label">Enter a new Password ( 6 characters min.)<span style="color: red;">*</span></label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" id="inputPassword"
                                        placeholder="Password" name="new_password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-5 col-form-label">Confirm your new Password<span style="color: red;">*</span></label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" id="inputPassword"
                                        placeholder="Password" name="new_change_password">
                                </div>
                            </div>
                            <div class="btn2">
                                <button class="btn btn-sm" type="submit">Change password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection