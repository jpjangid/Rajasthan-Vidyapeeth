@extends('front.layouts.app')

@section('content')
<!-- Carousel Begin -->
<div id="rv-carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach($sliders as $key => $slider)
    <div class="carousel-item {{ $key === 0 ? "active" : "" }}">
      <img class="lazy-load-images" src="{{ asset('storage/slider/'.$slider->image) }}" alt="{{ $slider->slider_title }}" height="325">
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#rv-carousel" data-slide="prev">
    <span class="carousel-control-prev-icon">
    </span>
  </a>
  <a class="carousel-control-next" href="#rv-carousel" data-slide="next">
    <span class="carousel-control-next-icon">
    </span>
  </a>
</div>
<!-- Carousel End -->
<section class="short-links">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-4 short-column-1 p-3 text-center">
        <a href="{{url('admission')}}" class="short-column-1">
          <i class="fa fa-university icon"></i>
          <br>Online
          <br>Admissions</a>
      </div>
      <div class="col-lg-2 col-4 short-column-2 p-3 text-center">
        <a href="{{ url('university-exams') }}" class="short-column-2">
          <i class="fa fa-edit icon"></i>
          <br>University
          <br>Exams</a>
      </div>
      <div class="col-lg-2 col-4 short-column-1 p-3 text-center">
        <a href="{{ url('courses-offered') }}" class="short-column-1">
          <i class="fa fa-book custom icon"></i>
          <br>Courses
          <br>Offered</a>
      </div>
      <div class="col-lg-2 col-4 short-column-2 p-3 text-center">
        <a href="{{ url('recruitment') }}" class="short-column-2">
          <i class="fa fa-plus icon"></i>
          <br>University
          <br>Recruitment</a>
      </div>
      <div class="col-lg-2 col-4 short-column-1 p-3 text-center">
        <a href="#" class="short-column-1">
          <i class="fa fa-laptop icon"></i>
          <br>Digital
          <br>Notes</a>
      </div>
      <div class="col-lg-2 col-4 short-column-2 p-3 text-center">
        <a href="{{ url('award-achievements') }}" class="short-column-2">
          <i class='fa fa-trophy icon'></i>
          <br>Awards &
          <br>Achievements</a>
      </div>
    </div>
  </div>
</section>
<!-- marquee -->
<div style="background: #ffdbc4; color:#597cab">
  <marquee class="font-weight-bold">Admission Alert!! Applications are now open for B.Sc. Agriculture</marquee>
</div>
<!-- Courses deatils -->
<section class="course-section">
  <div id="fh5co-course">
    <div class="container">
      <div class="animate-box">
        <div class="text-center pt-5 pb-4 fh5co-heading">
          <h2 class="section-heading text-uppercase font-weight-bold">Our Courses</h2>
          <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus <br>
            alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 animate-box mt-4">
          <div class="card">
            <a href="#" class="course-img" style="background-image: url(images/project-1.jpg);">
            </a>
            <div class="desc">
              <h3><a href="#">Homeopathy</a></h3>
              <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
              <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 animate-box mt-4">
          <div class="card">
            <a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
            </a>
            <div class="desc">
              <h3><a href="#">Agriculture</a></h3>
              <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
              <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 animate-box mt-4">
          <div class="card">
            <a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
            </a>
            <div class="desc">
              <h3><a href="#">Physiotherapy</a></h3>
              <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
              <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 animate-box mt-4">
          <div class="card">
            <a href="#" class="course-img" style="background-image: url(images/project-3.jpg);">
            </a>
            <div class="desc">
              <h3><a href="#">Pharmacy</a></h3>
              <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
              <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 animate-box mt-4">
          <div class="card">
            <a href="#" class="course-img" style="background-image: url(images/project-4.jpg);">
            </a>
            <div class="desc">
              <h3><a href="#">Basic Sciences</a></h3>
              <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
              <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 animate-box mt-4">
          <div class="card">
            <a href="#" class="course-img" style="background-image: url(images/project-4.jpg);">
            </a>
            <div class="desc">
              <h3><a href="#">Master of Business Administration</a></h3>
              <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
              <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- founder &  vice chancellor-->
<section class="ftco-section ftco-no-pt ftc-no-pb">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
        <div class="founder-section" style="width: 100%">
          <div class="my-4 px-4 ">
            <h2 class="section-heading py-3 font-weight-bold text-uppercase">
              <span class="founder">founder</span>
            </h2>
            <div class="row">
              <div class="col-md-5">
                <img class="lazy-load-images" width="85%" src="{{ asset('frontend/images/founder.webp') }}">
              </div>
              <div class="col-md">
                <p class="text">Education is not preparation for life; education is life itself.</p>
                <p class="float-right font-weight-bold founder">- Pandit Janardan Rai Nagar</p>
              </div>
            </div>
            <h2 class="section-heading py-3 font-weight-bold text-uppercase pt-5">
              <span class="chancellor"> vice chancellor</span>
            </h2>
            <div class="row">
              <div class="col-md-5">
                <img class="lazy-load-images" width="90%" src="{{ asset('frontend/images/vc.webp') }}">
              </div>
              <div class="col-md">
                <p class="text">Education is the passport to the future, for tomorrow belongs to those who prepare for it today.</p>
                <p class="float-right font-weight-bold chancellor">- Prof. S.S. Sarangdevot</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
        <div class="news-section" style="width: 100%">
          <div class="border border-2 border-dark my-4 px-4 in-news-section">
            <h2 class="section-heading py-3 font-weight-bold text-uppercase">
              <span class="founder">news </span>&
              <span class="chancellor">events</span>
            </h2>
            @foreach($news as $new)
            <a href="{{ url('news-events',$new->slug) }}">
              <div class="text" style="text-transform: capitalize !important;">{{ strtolower($new->heading) }}
                <p class="current-date"></p>
                <div class="dropdown-divider">
                </div>
              </div>
            </a>
            @endforeach
          </div>
        </div>
      </div> -->
      <!-- what we offer -->
      <div class="col-md-7 wrap-about py-2 pr-md-4 ftco-animate fadeInUp ftco-animated">
        <h2 class="section-heading text-uppercase mb-2 mt-3 font-weight-bold">
          <span class="founder">what</span> we
          <span class="chancellor"> offer</span>
        </h2>
        <p class="section-para">The university has always felt concerned about increasing access of students from various sections of the society to higher education. By providing reservations, financial aids, scholarships and relaxation in qualifications for socially backward classes, the university has registered significant increase in access during last few years. The university aims to achieve its goal of providing higher education to create just, plural and equitable society in consonance with constitutional values.</p>
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 d-flex justify-content-center align-items-center">
                <span class="fa fa-check">
                </span>
              </div>
              <div class="text pl-3">
                <h3>Safety First</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 d-flex justify-content-center align-items-center">
                <span class="fa fa-book">
                </span>
              </div>
              <div class="text pl-3">
                <h3>Regular Classes</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 d-flex justify-content-center align-items-center">
                <span class="fa fa-book">
                </span>
              </div>
              <div class="text pl-3">
                <h3>Creative Lessons</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 d-flex justify-content-center align-items-center">
                <span class="fa fa-futbol-o">
                </span>
              </div>
              <div class="text pl-3">
                <h3>Sports Facilities</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- about us section -->
<section class="ftco-section ftco-counter img py-3" id="section-counter" style="background-image: url({{asset('frontend/images/college.png')}}); background-position: 50% 50%;" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2 d-flex">
      <div class="col-md-6 align-items-stretch d-flex pt-4">
        <div class="img img-video d-flex align-items-center" style="background-image:url(https://preview.colorlib.com/theme/fox/images/xabout-2.jpg.pagespeed.ic.T9hY_q2wIF.webp)">
          <div class="video justify-content-center">
            <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
              <span class="fa fa-play">
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 fadeInUp ftco-animated">
        <h2 class="mb-3 mt-3">Rajasthan Vidyapeeth</h2>
        <p class="section-para">Ever since its inception university has been striving to maintain excellence in teaching, research and community service. Great emphasis has been laid in creating scientific temper, maintaining high ethical values and in keeping pace with emerging areas of higher learning. University has ensured overall socio-economic growth of all the sections of society by encouraging greater access and inclusive approach making it most preferred institution for higher education, learning and research.</p>
      </div>
    </div>
  </div>
</section>
<!-- photo gallery -->
<section class="ftco-gallery">
  <div class="container-wrap">
    <div class="row justify-content-center my-4 no-gutters">
      <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">
        <h3 class="text-center text-uppercase font-weight-bold">
          <span class="founder">photo</span>
          <span class="chancellor"> gallery</span>
        </h3>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="gallery-sec">
        <div class="row">
          <div class="item col-lg-3">
            <img class="lazy-load-images" src="{{ asset('frontend/images/university.jpg') }}" alt="Owl Image">
          </div>
          <div class="item col-lg-3">
            <img class="lazy-load-images" src="{{ asset('frontend/images/college.png') }}" alt="Owl Image">
          </div>
          <div class="item col-lg-3">
            <img class="lazy-load-images" src="{{ asset('frontend/images/university.jpg') }}" alt="Owl Image">
          </div>
          <div class="item col-lg-3">
            <img class="lazy-load-images" src="{{ asset('frontend/images/college.png') }}" alt="Owl Image">
          </div>
        </div>
        <div class="row">
          <div class="item col-lg-3">
            <img class="lazy-load-images" src="{{ asset('frontend/images/university.jpg') }}" alt="Owl Image">
          </div>
          <div class="item col-lg-3">
            <img class="lazy-load-images" src="{{ asset('frontend/images/college.png') }}" alt="Owl Image">
          </div>
          <div class="item col-lg-3">
            <img class="lazy-load-images" src="{{ asset('frontend/images/university.jpg') }}" alt="Owl Image">
          </div>
          <div class="item col-lg-3">
            <img class="lazy-load-images" src="{{ asset('frontend/images/college.png') }}" alt="Owl Image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--<section class="ftco-section my-0 py-5 course-section">-->
<!--  <div class="container-fluid px-4">-->
<!--    <div class="row justify-content-center mb-3 pb-2">-->
<!--      <div class="col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated">-->
<!--        <h2 class="text-center text-uppercase font-weight-bold pb-5 mt-0">-->
<!--          <span class="founder">our</span> top-->
<!--          <span class="chancellor"> courses</h2>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--    @foreach($topCourses as $topCourse)  -->
<!--      <div class="col-md-3 course ftco-animate fadeInUp ftco-animated border border-2">-->
<!--        <div class="text py-3">-->
<!--          <h3 class="text-center top-department">-->
<!--            {{ $topCourse->name }}-->
<!--          </h3>-->
<!--          <p class="text-justify">{{ $topCourse->short_description }}</p>-->
<!--          <div class="text-center">-->
<!--            <a href="#" class="btn btn-primary">Apply now</a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    @endforeach  -->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->
<!-- Our top courses -->
<!-- <section class="ftco-section my-0 py-5 course-section">
  <div class="container-fluid px-4">
    <div class="row justify-content-center mb-3 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated">
        <h2 class="text-center text-uppercase font-weight-bold pb-5 mt-0"><span class="founder">our</span> top <span class="chancellor">courses</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        @foreach($topCourses as $topCourse)
        <div class="col-md-4 course ftco-animate fadeInUp ftco-animated">
          <div class="course-border mr-2">
            <div class="text py-3 px-2">
              <h3 class="text-center top-department font-weight-bold">
                {{ $topCourse->name }}
              </h3>
              <p class="text-justify">{{ $topCourse->short_description }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section> -->

<!-- Alumni speak -->
<section class="testimony-section my-5 py-4">
  <div class="container">
    <div class="row justify-content-center pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated">
        <h3 class="text-center text-uppercase font-weight-bold">Alumni speak</h3>
      </div>
    </div>
    <div class="row ftco-animate justify-content-center fadeInUp ftco-animated py-5">
      <div class="col-md-12">
        <div id="alumni-carousel" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators alumni-indicators">
            <li data-target="#alumni-carousel" data-slide-to="0" class="active">
            </li>
            <li data-target="#alumni-carousel" data-slide-to="1">
            </li>
            <li data-target="#alumni-carousel" data-slide-to="2">
            </li>
          </ul>
          <div class="carousel-inner">
            @foreach ($alumnispeaks as $key => $alumnispeak)
            <div class="carousel-item {{ $key === 0 ? "active" : "" }}">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url();">
                    <img src="{{ asset('storage/alumni_image/'.$alumnispeak->alumni_image) }}" alt="">
                  </div>
                  <div class="text ml-2">
                    <p class="section-para">{{ $alumnispeak->description}}</p>
                    <p class="name">{{ $alumnispeak->name}}</p>
                    <span class="position">{{ $alumnispeak->designation}}</span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- photo gallery -->
<!-- <section class="ftco-gallery">
  <div class="container-wrap">
    <div class="row justify-content-center my-4 no-gutters">
      <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">
        <h2 class="text-center text-uppercase font-weight-bold">
          <span class="founder">photo</span>
          <span class="chancellor"> gallery</span>
        </h2>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-md-12 py-5">
        <div id="owl-demo" class="owl-carousel owl-theme">
          <div class="item">
            <img class="lazy-load-images" src="{{ asset('frontend/images/university.jpg') }}" alt="Owl Image">
          </div>
          <div class="item">
            <img class="lazy-load-images" src="{{ asset('frontend/images/college.png') }}" alt="Owl Image">
          </div>
          <div class="item">
            <img class="lazy-load-images" src="{{ asset('frontend/images/university.jpg') }}" alt="Owl Image">
          </div>
          <div class="item">
            <img class="lazy-load-images" src="{{ asset('frontend/images/college.png') }}" alt="Owl Image">
          </div>
          <div class="item">
            <img class="lazy-load-images" src="{{ asset('frontend/images/university.jpg') }}" alt="Owl Image">
          </div>
          <div class="item">
            <img class="lazy-load-images" src="{{ asset('frontend/images/college.png') }}" alt="Owl Image">
          </div>
          <div class="item">
            <img class="lazy-load-images" src="{{ asset('frontend/images/university.jpg') }}" alt="Owl Image">
          </div>
          <div class="item">
            <img class="lazy-load-images" src="{{ asset('frontend/images/college.png') }}" alt="Owl Image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
@endsection