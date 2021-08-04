<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('front/css/login.css')}}">
      <link rel="stylesheet" href="{{asset('front/css/account-setting.css')}}">
      <link rel="stylesheet" href="{{asset('front/css/faq.css')}}">
      <link rel="stylesheet" href="{{asset('front/css/recovery.css')}}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>@yield('title')</title>
      <style type="text/css">
         #logout-btn{
         color: red;
         font-size: 12px;
         margin-top: -16px;
         }
         #logout-btn:hover{
         text-decoration: underline;
         }
      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg">
         <div class="container">
            <a class="navbar-brand" href="#"><img src="{{asset('front/images/Document Center_Final Logo_2-01.png')}}" width="50px" height="auto"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav m-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="{{url('/')}}">HOME <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">DOCUMENT</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('/faq')}}">FAQ</a>
                  </li>
                  <li class="nav-item">
                     @if(Auth::check())
                     <a class="nav-link" href="{{url('/myaccount')}}">MY ACCOUNT</a>
                     <small>
                        <a class="nav-link text-center" id="logout-btn" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>
                     </small>
                     @else
                     <a href="{{url('/signin')}}" class="nav-link">MY ACCOUNT</a>
                     @endif
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
               </form>
            </div>
         </div>
      </nav>
      @yield('content')
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="footerpage">
                     <ul>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Legal Guides</a></li>
                        <li><a href="#">Legal Notice</a></li>
                        <li><a href="#">Terms and Conditons</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footerpage">
                     <ul>
                        <li><a href="#">FQA </a></li>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Documents</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="icons">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <p>Copyright @ 2021 All right reseved</p>
         </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
         crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
         integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
         crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
         integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
         crossorigin="anonymous"></script>
   </body>
</html>