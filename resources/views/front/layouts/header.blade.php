@php
use App\Models\College;
$colleges = College::where(['status' => 0,'flag' => 0])->with('departments')->get();
@endphp
<div class="bg-top navbar-light">
  <div class="container-fluid">
    <div class="row d-flex align-items-center align-items-stretch">
      <div class="col-lg-5 col-md-5 col-12 d-flex align-items-center justify-content-md-center justify-content-sm-center justify-content-center py-2">
        <a class="navbar-brand text-center m-0">
          <img class="logo lazy-load-images" src="{{ asset('frontend/images/logo.png') }}" alt="">
        </a>
      </div>
      <div class="col-lg-7 col-md-7 col-12 d-block">
        <div class="d-flex" style="height: 100%; justify-content: center; align-items: center;">
          <div class="col-md topper align-items-center p-3 px-md-0">
            <div class="icon d-flex align-items-center">
              <!-- <span>Email</span>
              <span class="fa fa-envelope">
              </span> -->
            </div>
            <div class="text text-md-center text-sm-center text-center">
              <span><i class="fa fa-envelope mr-1"></i>youremail@email.com</span>
            </div>
          </div>
          <div class="col-md topper align-items-center p-3 px-md-0">
            <div class="icon d-flex align-items-center">
              <!-- <span>Call</span>
              <span class="fa fa-phone">
              </span> -->
            </div>
            <div class="text text-md-center text-sm-center text-center">
              <span><i class="fa fa-phone mr-1"></i>Call Us: + 1235 2355 98</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg sticky-top" id="ftco-navbar" style="background-color: #8baddc;">
  <div class="d-flex align-items-center justify-content-between w-100">
    <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon">
        <i class="fa fa-bars" style="color:#fff; font-size:28px;"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav mr-auto">
        <div class="mega-menu">
          <li class="menubtn">
            <a class="mega-a" href="{{ url('/') }}">Home</a>
          </li>
        </div>
        <div class="mega-menu">
          <li class="menubtn">
            <a class="mega-a" href="">Administration
              <i class="fa fa-caret-down ml-1"></i>
            </a>
          </li>
          <div class="menu-content">
            <div class="row">
              <div class="column">
                
                <a href="{{ url('recruitment') }}">Recruitment</a>
              </div>
            </div>
          </div>
        </div>
        <div class="mega-menu">
          <li class="menubtn">
            <a class="mega-a" href="">Academics
              <i class="fa fa-caret-down ml-1"></i>
            </a>
          </li>
          <div class="menu-content">
            <div class="row">
              @foreach($colleges as $college)
              @if(!empty($college->departments) && count($college->departments) > 0)
              <div class="column col-md-3">
                <div class="menu-head">{{ $college->name }}</div>
                @foreach($college->departments as $department)
                <a style="text-transform: capitalize !important;" href="{{ route('front.department',['department' => $department->slug]) }}">{{ strtolower($department->name) }}</a>
                @endforeach
                <div class="dropdown-divider"></div>
              </div>
              @endif
              @endforeach
            </div>
          </div>
        </div>
        <div class="mega-menu">
          <li class="menubtn"><a class="mega-a" href="">Media<i class="fa fa-caret-down ml-1"></i></a></li>
          <div class="menu-content">
            <div class="row">
              <div class="column">
                <div class="menu-head">JRNRV Media</div>
                <a href="{{ url('news-events') }}">News & Events</a>
                <a href="{{ route('front.photo.gallery') }}">Photo Gallery</a>
                <a href="{{ route('front.video.gallery') }}">Video Gallery</a>
              </div>
            </div>
          </div>
        </div>
        <div class="mega-menu">
          <li class="menubtn">
            <a class="mega-a" href="{{url('about-us')}}">About Us
            </a>
          </li>
        </div>
        <div class="mega-menu">
          <li class="menubtn">
            <a class="mega-a" href="contact-us">Contact Us
            </a>
          </li>
        </div>
      </ul>
    </div>
  <ul class="nav navbar-nav navbar-right" id="search-form">
    <li>
      <form action="/action_page.php" style="text-align:right;float: right !important;">
        <input type="text" placeholder="Search.." name="search2" class="search-field">
        <button type="submit" style="border: none; margin-left: -10px; border-radius: 5px; padding: 7px;"><i class="fa fa-search"></i></button>
      </form>
    </li>
  </ul>
  </div>
</nav>