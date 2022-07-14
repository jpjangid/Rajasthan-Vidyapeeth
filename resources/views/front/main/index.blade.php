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
<div style="background: #ffdbc4; color:#597cab" class="d-flex align-items-center">
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
              <h3><a href="#">MBA</a></h3>
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
      <div class="col-md-5 order-md-last py-2 wrap-about wrap-about d-flex align-items-stretch">
        <div class="founder-section" style="width: 100%">
          <div class="px-4 ">
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
            <h2 class="section-heading py-3 font-weight-bold text-uppercase" style="padding-top: 37px!important;">
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
<!-- Result & Exam Form Quick links -->
<section class="student_portal">
    <div class="container">
    <div class="row m-0">
      <h2 class="news_heading2 text-uppercase mb-3 font-weight-bold">Student Portal</h2>
    </div>
        <div class="student_section">
            <div class="row m-0">
                <div class="col-lg-3 col-12 links_col">
                  <div class="row m-0">
                    <div class="quick_links col-lg-12 col-md-6 col-sm-6">
                      <span class="results"><i class="fa fa-book mr-2"></i>Sem 1st Result</span>
                    </div>
                    <div class="quick_links col-lg-12 col-md-6 col-sm-6">
                      <span class="results"><i class="fa fa-book mr-2"></i>Distance Examination</span>
                    </div>
                    <div class="quick_links col-lg-12 col-md-6 col-sm-6">
                      <span class="results"><i class="fa fa-book mr-2"></i>Lorem, ipsum dolor</span>
                    </div>
                    <div class="quick_links col-lg-12 col-md-6 col-sm-6">
                      <span class="results"><i class="fa fa-book mr-2"></i>Sem 4st Result</span>
                    </div>
                    <div class="quick_links col-lg-12 col-md-6 col-sm-6">
                      <span class="results"><i class="fa fa-book mr-2"></i>13th Convocation Notice</span>
                    </div>
                    <div class="quick_links col-lg-12 col-md-6 col-sm-6">
                      <span class="results"><i class="fa fa-book mr-2"></i>Sem 6st Result</span>
                    </div>
                    <div class="quick_links col-lg-12 col-md-6 col-sm-6">
                      <span class="results"><i class="fa fa-book mr-2"></i>Distance Examination</span>
                    </div>
                    <div class="quick_links col-lg-12 col-md-6 col-sm-6">
                      <span class="results"><i class="fa fa-book mr-2"></i>Sem 8st Result</span>
                    </div>
                    <div class="quick_links col-lg-12 col-md-6 col-sm-6">
                      <span class="results"><i class="fa fa-book mr-2"></i>Lorem ipsum dolor</span>
                    </div>
                  </div>
                    <!-- <ul class="quick_links my-2">
                        <li class="my-1">Sem 1st Result</li>
                        <li class="my-1">Sem 2nd Result</li>
                        <li class="my-1">Sem 3rd Result</li>
                        <li class="my-1">Sem 4th Result</li>
                        <li class="my-1">Sem 5th Result</li>
                        <li class="my-1">Sem 6th Result</li>
                    </ul> -->
                </div>
                <div class="col-lg-9 col-12" style="padding-top:15px;">
                    <div class="tiles_section">
                      <div class="row m-0">
                        <div class="col-lg-6 col-md-6 col-12 tiles_col"><img src="https://www.mlsu.ac.in/images/exam.jpg" alt=""> <div class="tiles_content">University <br> Exams</div></div>
                      <!-- </div>
                      <div class="row m-0"> -->
                        <div class="col-lg-6 col-md-6 col-12 tiles_col"><img src="https://i1.wp.com/thecostaricanews.com/wp-content/uploads/2019/03/The-World-Connected-through-the-WWW.jpg?fit=1280%2C720&ssl=1" alt=""><div class="tiles_content">Digital <br> Connect</div></div>
                      </div>
                      <div class="row m-0">
                        <div class="contact_person col-lg-6 col-12" style="margin:3px 0">
                        <h5 style="color:#597cab;">GRIEVANCES</h5>
                          <p>Please contact for any query</p>
                        </div>
                        <div class="contact_person col-lg-6 col-12">
                          <div class="contact_detail row">
                            <div class="image_row col-lg-4 col-md-4 col-12 p-0">
                              <img src="https://www.techsparktechnologies.com/wp-content/uploads/2017/12/testimonial-dummy1.png" alt="">
                            </div>
                            <div class="contact_content col-lg-8 col-md-8 col-12" style="display:flex;align-items:center;">
                              <div style="width:100%;">
                                <h4 class="m-0" style="font-size:20px;">Jaiprakash Jangid</h4>
                                <p class="m-0" style="font-size:15px;">jaiprakash@gmail.com</p>
                                <p class="m-0" style="font-size:15px;">+919876887873, +917883748342</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News & Events -->
<section class="news_events">
  <div class="container">
    <div class="row m-0">
      <div class="news_col col-lg-6 col-12">
        <header>
            <h2 class="news_heading text-uppercase mb-3 mt-3 font-weight-bold">News</h2>
        </header>
        <div class="section-content">
            <article style="border-bottom: 1px solid lightgray; margin-bottom: 15px;">
                <figure class="date"><i class="fa fa-file-o" style="margin-right: 5px;"></i>08-24-2014</figure>
                <header style="margin:10px 0;"><a href="#">Distance Education Revised Fee Structure for various certificates</a></header>
            </article><!-- /article -->
            <article  style="border-bottom: 1px solid lightgray; margin-bottom: 15px;">
                <figure class="date"><i class="fa fa-file-o" style="margin-right: 5px;"></i>08-24-2014</figure>
                <header style="margin:10px 0;"><a href="#">Distance Education Revised Fee Structure for various certificates</a></header>
            </article><!-- /article -->
            <article>
                <figure class="date"><i class="fa fa-file-o" style="margin-right: 5px;"></i>08-24-2014</figure>
                <header><a href="#">Distance Education Revised Fee Structure for various certificates</a></header>
            </article><!-- /article -->
        </div><!-- /.section-content -->
        <div style="padding:25px 0;font-size: 16px;">
          <a href="" class="all_news">All News<i class="fa fa-angle-right" style="margin-left:5px;"></i></a>
        </div>
      </div>
      <div class="news_col col-lg-6 col-12">
      <section class="events small" id="events-small">
          <header>
              <h2 class="news_heading text-uppercase mb-2 mt-3 font-weight-bold">Events</h2>
          </header>
          <div class="section-content">
              <article class="event nearest">
                  <div class="date_image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Emoji_u1f4c6.svg/1200px-Emoji_u1f4c6.svg.png" alt="">
                  </div>
                  <aside class="event-content">
                      <header>
                          <a href="event-detail.html">Distance Education Revised Fee Structure for various certificates.</a>
                      </header>
                      <div class="additional-info">Recruitments in Homeopathic Department</div>
                  </aside>
              </article><!-- /article -->
              <article class="event nearest-second">
              <div class="date_image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Emoji_u1f4c6.svg/1200px-Emoji_u1f4c6.svg.png" alt="">
                  </div>
                  <aside class="event-content">
                      <header>
                          <a href="event-detail.html">Distance Education Revised Fee Structure for various certificates.</a>
                      </header>
                      <div class="additional-info clearfix">Recruitments in Homeopathic Department</div>
                  </aside>
              </article><!-- /article -->
              <article class="event nearest-third">
              <div class="date_image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Emoji_u1f4c6.svg/1200px-Emoji_u1f4c6.svg.png" alt="">
                  </div>
                  <aside class="event-content">
                      <header>
                          <a href="event-detail.html">Distance Education Revised Fee Structure for various certificates</a>
                      </header>
                      <div class="additional-info">Recruitments in Homeopathic Department</div>
                  </aside>
              </article><!-- /article -->
              <article class="event nearest-fourth">
              <div class="date_image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Emoji_u1f4c6.svg/1200px-Emoji_u1f4c6.svg.png" alt="">
                  </div>
                  <aside class="event-content">
                      <header>
                          <a href="event-detail.html">Distance Education Revised Fee Structure for various certificates</a>
                      </header>
                      <div class="additional-info">Recruitments in Homeopathic Department</div>
                  </aside>
              </article><!-- /article -->
          </div><!-- /.section-content -->
          <div style="padding:25px 0;font-size: 16px;">
          <a href="" class="all_news">All Events<i class="fa fa-angle-right" style="margin-left:5px;"></i></a>
        </div>
      </section>
      </div>
    </div>
  </div>
</section>
<!-- Gallery section -->

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
<section class="gallery_section">
  <div class="container">
    <div class="gallery">
      <div class="row m-0">
        <div class="col-lg-4 col-12">
          <h2 class="news_heading1 text-uppercase mb-3 mt-3 font-weight-bold px-0">Notice Board</h2>
          <div class="section-content">
            <ul style="padding-left:15px">
              <li>
              <article class="list_style" style="border-bottom: 1px solid lightgray; margin-bottom: 15px;">
                  <header><a href="#">Syllabus Of Department of Psychology</a></header>
                  <div class="additional-info1">Recruitments in Homeopathic Department</div>
              </article><!-- /article -->
              </li>
              <li>
              <article  style="border-bottom: 1px solid lightgray; margin-bottom: 15px;">
                  <header ><a href="#">Distance Education Revised Fee Structure for various certificates</a></header>
                  <div class="additional-info1">Recruitments in Homeopathic Department</div>
              </article><!-- /article -->
              </li>
              <li>
              <article class="list_style" style="border-bottom: 1px solid lightgray; margin-bottom: 15px;">
                  <header><a href="#">Syllabus Of Department of Psychology</a></header>
                  <div class="additional-info1">Recruitments in Homeopathic Department</div>
              </article><!-- /article -->
              </li>
              <li>
              <article style="border-bottom: 1px solid lightgray; margin-bottom: 15px;">
                  <header><a href="#">Distance Education Revised Fee Structure for various certificates</a></header>
                  <div class="additional-info1">Recruitments in Homeopathic Department</div>
              </article><!-- /article -->
              </li>
              <li>
              <article class="list_style">
                  <header><a href="#">Syllabus Of Department of Psychology</a></header>
                  <div class="additional-info1">Recruitments in Homeopathic Department</div>
              </article><!-- /article -->
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-8 col-12">
          <h2 class="news_heading1 text-uppercase mb-3 mt-3 font-weight-bold">View Gallery</h2>
          <div class="row m-0">
            <div class="gallery_image col-lg-4 col-md-6 col-12">
              <img src="{{ asset('frontend/images/university.jpg') }}" alt="">
              <div class="video_icon">
                <i class="fa fa-play-circle"></i>
              </div>
            </div>
            <div class=" gallery_image col-lg-4 col-md-6 col-12">
              <img src="{{ asset('frontend/images/college.png') }}" alt="">
            </div>
            <div class=" gallery_image col-lg-4 col-md-6 col-12">
              <img src="https://jessecollege.com/wp-content/uploads/2018/03/dummy-inner.jpg" alt="" >
            </div>
            <div class="gallery_image col-lg-4 col-md-6 col-12">
              <img src="{{ asset('frontend/images/college.png') }}" alt="" >
            </div>
            <div class=" gallery_image col-lg-4 col-md-6 col-12">
              <img src="https://jessecollege.com/wp-content/uploads/2018/03/dummy-inner.jpg" alt="">
              <div class="video_icon">
                <i class="fa fa-play-circle"></i>
              </div>
            </div>
            <div class=" gallery_image col-lg-4 col-md-6 col-12">
              <img src="{{ asset('frontend/images/university.jpg') }}" alt="" >
            </div>
          </div>
          <div class="load_more">
            <span>Load More...</span>
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
</section> -->
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
<!-- <section class="testimony-section my-5 py-4">
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
</section> -->

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