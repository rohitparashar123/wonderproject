@extends('front/master')
@section('title','Document Center | Recovery Document')
@section('content')
<div class="recovery">
        <div class="container">

            <div class="row pb-4 pt-4">
                <div class="offset-md-2 col-md-8 offset-md-2">
                    <h2 class="text-center">Document Recovery</h2>
                    <div class="card py-3 pl-3 pr-3">
                        <p>Follow the procedure below if you bought a document, but didn't receive it.</p>
                        <p><b>Step 1:</b> Check your spam folder. The document is almost always there.</p>
                        <p><b>Step 2:</b> If the document is not in your spam folder, <a data-toggle="collapse"
                                href="#collapseExample">enter the email address</a> you used to order
                            it.</p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email Address</label>
                                         @if(Auth::check())
                                        <input type="email" class="form-control" id="exampleInputPassword1"
                                            placeholder="Enter Email Address" value="{{Auth::user()->email}}">
                                            @else
                                            <input type="email" class="form-control" id="exampleInputPassword1"
                                            placeholder="Enter Email Address">
                                            @endif

                                    </div>


                                    <div class="capbox">

                                        <div id="CaptchaDiv">
                                            <input id="skip_CaptchaCode" class="form-control" name="skip_CaptchaCode"
                                                type="text" placeholder="Enter Captcha">

                                        </div>

                                        <div class="capbox-inner">

                                            <img id="CaptchaImage" alt="Web Form Code"
                                                style="border-width:0px; width: 120px;"
                                                src="https://www.SnapHost.com/captcha/CaptchaImage.aspx?id=DEMO12345678">
                                            <a href="#" onclick="return ReloadCaptchaImage('CaptchaImage');"><i
                                                    class="fa fa-refresh"></i></a>
                                            <script type="text/javascript">
                                                function ReloadCaptchaImage(captchaImageId) {
                                                    var obj = document.getElementById(captchaImageId);
                                                    var src = '' + obj.src;
                                                    obj.src = '';
                                                    var date = new Date();
                                                    var pos = src.indexOf('&rad=');
                                                    if (pos >= 0) {
                                                        src = src.substr(0, pos);
                                                    }
                                                    obj.src = src + '&rad=' + date.getTime();
                                                    return false;
                                                }

                                            </script>
                                        </div>
                                    </div>
                                    <div class="btn1">
                                        <button class="btn">Resend Document</button>
                                        <p><span style="color:red">*</span> Required field</p>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection