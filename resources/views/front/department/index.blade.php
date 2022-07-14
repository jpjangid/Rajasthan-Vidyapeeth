@extends('front.layouts.app')

@section('title','Department')

@section('css')
<style>
  li.parsley-required {
      color: red;
  }
  li.parsley-minlength {
    color: red;
  }
  li.parsley-maxlength {
    color: red;
  }
  ul.parsley-errors-list li.parsley-required {
    color: red !important;
  }
  html {
  overflow-x: hidden;
}
</style>
@endsection

@section('content')
<section class="dept-profile">
  <div class="container-wrap my-3">
    <div class="row no-gutters">
      <div class="col-md-12">
        <div class="container p-0">
          <h1 class="page_sub_heading text-uppercase section-heading text-center font-weight-bold" style="color:#597cab">{{$department->name }}</h1>
            <div class="row mx-0 dept-intro text-justify">
             <!-- <p>{{ $department->description }}</p> -->
             <div class="col-lg-6 col-md-6 col-12 my-3">
              <img src="https://21btrj3i7vy42n2f4044931p-wpengine.netdna-ssl.com/wp-content/uploads/2021/02/CG10131_featured.jpg" alt="" style="width:100%;height:100%;">
             </div>
             <div class="col-lg-6 col-md-6 col-12 my-3">
             <p class="m-0" style="line-height:33px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis necessitatibus accusamus odit reiciendis eveniet, quam perspiciatis iusto a vero modi sequi minima culpa mollitia vel, facilis officiis et maiores quos, quam perspiciatis iusto a vero modi sequi minima culpa mollitia vel, facilis officiis et maiores quosaccusamus odit reiciendis eveniet, quam perspiciatis iusto a vero modi sequi minima culpa mollitia vel Lorem, Veritatis necessitatibus accusamus !</p>
             </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="short-links my-3">
  <div class="container">
    <div class="row m-0" style="border:1px solid lightgray;">
      <div class="col-lg-3 col-6 short-column-1 p-3 text-center" style="border:1px solid lightgray;">
        <a href="{{url('admission')}}" class="short-column-1">
          <i class="fa fa-file-pdf-o fa-2x" style="color:black;"></i>
          <div class="pt-2" style="color:blue;cursor:pointer;">
          Business <br>Org
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-6 short-column-2 p-3 text-center" style="border:1px solid lightgray;">
        <a href="{{ url('university-exams') }}" class="short-column-2">
          <i class="fa fa-file-pdf-o fa-2x" style="color:black;"></i>
          <div class="pt-2" style="color:blue;cursor:pointer;">
            Science
            <br>Research
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-6 short-column-1 p-3 text-center" style="border:1px solid lightgray;">
        <a href="{{ url('courses-offered') }}" class="short-column-1">
          <i class="fa fa-file-pdf-o fa-2x" style="color:black;"></i>
          <div class="pt-2" style="color:blue;cursor:pointer;">
          ACCOUNTANCY
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-6 short-column-2 p-3 text-center" style="border:1px solid lightgray;">
        <a href="{{ url('recruitment') }}" class="short-column-2">
          <i class="fa fa-file-pdf-o fa-2x" style="color:black;"></i>
          <div class="pt-2" style="color:blue;cursor:pointer;">
          BUSINESS <br>STATSTICS
          </div>
        </a>
      </div>
    </div>
  </div>
</section> -->
<section class="dept-profile">
  <div class="container my-3 p-0">
    <div class="row m-0">
      <div class="col-md-3 col-12">
        <div class="dept-faculty py-3">
          <h1 class="page_sub_heading section-heading text-uppercase font-weight-bold" style="color:#597cab">Downloads</h1>
          <div class="hyper_links" style="overflow-y:scroll;">
            <div class="row m-0" style="line-height:35px;height:289px;cursor:pointer;color:#597cab;">
              <div class="quick_links col-12">
                <span class="results"><i class="fa fa-file-pdf-o mr-2"></i>Sem 1st Result</span>
              </div>
              <div class="quick_links col-12">
                <span class="results"><i class="fa fa-file-pdf-o mr-2"></i>Distance Examination</span>
              </div>
              <div class="quick_links col-12">
                <span class="results"><i class="fa fa-file-pdf-o mr-2"></i>Distance Examination</span>
              </div>
              <div class="quick_links col-12">
                <span class="results"><i class="fa fa-file-pdf-o mr-2"></i>Distance Examination</span>
              </div>
              <div class="quick_links col-12">
                <span class="results"><i class="fa fa-file-pdf-o mr-2"></i>Lorem, ipsum dolor</span>
              </div>
              <div class="quick_links col-12 ">
                <span class="results"><i class="fa fa-file-pdf-o mr-2"></i>Sem 4st Result</span>
              </div>
              <div class="quick_links col-12">
                <span class="results"><i class="fa fa-file-pdf-o mr-2"></i>13th Convocation Notice</span>
              </div>
              <div class="quick_links  col-12">
                <span class="results"><i class="fa fa-file-pdf-o mr-2"></i>Sem 6st Result</span>
              </div>
              <div class="quick_links  col-12">
                <span class="results"><i class="fa fa-file-pdf-o mr-2"></i>Distance Examination</span>
              </div>
              <div class="quick_links col-12">
                <span class="results"><i class="fa fa-file-pdf-o mr-2"></i>Sem 8st Result</span>
              </div>
              <div class="quick_links col-12">
                <span class="results"><i class="fa fa-file-pdf-o mr-2"></i>Lorem ipsum dolor</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-12">
        <div class="dept-faculty py-3">
          <h1 class="page_sub_heading section-heading text-uppercase font-weight-bold" style="color:#597cab">Faculty in Department of CS & IT</h1>
          <div id="owl-demo" class="owl-carousel owl-theme pb-3" style="background:aliceblue;">
            <div class="item pt-3">
              <img src="https://media.istockphoto.com/photos/portrait-concept-picture-id1016761216?k=20&m=1016761216&s=612x612&w=0&h=jEC8voGLjSyhdOO7EMQyrLtZ9m--TEUmd4X56sqyZk0=" alt="Owl Image" style="width:70%;margin:auto; border-radius: 3%;">
              <div class="faculty-name my-1">Dr. Sourabh Jain <br> Assistant Prof.</div>
            </div>
            <div class="item pt-3">
              <img src="https://media.istockphoto.com/photos/portrait-concept-picture-id1016761216?k=20&m=1016761216&s=612x612&w=0&h=jEC8voGLjSyhdOO7EMQyrLtZ9m--TEUmd4X56sqyZk0=" alt="Owl Image" style="width:70%;margin:auto; border-radius: 3%;">
              <div class="faculty-name my-1">Dr. Sourabh Jain <br> Assistant Prof.</div>
            </div>
            <div class="item pt-3">
              <img src="https://media.istockphoto.com/photos/portrait-concept-picture-id1016761216?k=20&m=1016761216&s=612x612&w=0&h=jEC8voGLjSyhdOO7EMQyrLtZ9m--TEUmd4X56sqyZk0=" alt="Owl Image" style="width:70%;margin:auto; border-radius: 3%;">
              <div class="faculty-name my-1">Dr. Sourabh Jain <br> Assistant Prof.</div>
            </div>
            <div class="item pt-3">
              <img src="https://media.istockphoto.com/photos/portrait-concept-picture-id1016761216?k=20&m=1016761216&s=612x612&w=0&h=jEC8voGLjSyhdOO7EMQyrLtZ9m--TEUmd4X56sqyZk0=" alt="Owl Image" style="width:70%;margin:auto; border-radius: 3%;">
              <div class="faculty-name my-1">Dr. Sourabh Jain <br> Assistant Prof.</div>
            </div>
            <div class="item pt-3">
              <img src="https://media.istockphoto.com/photos/portrait-concept-picture-id1016761216?k=20&m=1016761216&s=612x612&w=0&h=jEC8voGLjSyhdOO7EMQyrLtZ9m--TEUmd4X56sqyZk0=" alt="Owl Image" style="width:70%;margin:auto; border-radius: 3%;">
              <div class="faculty-name my-1">Dr. Sourabh Jain <br> Assistant Prof.</div>
            </div>
            <div class="item pt-3">
              <img src="https://media.istockphoto.com/photos/portrait-concept-picture-id1016761216?k=20&m=1016761216&s=612x612&w=0&h=jEC8voGLjSyhdOO7EMQyrLtZ9m--TEUmd4X56sqyZk0=" alt="Owl Image" style="width:70%;margin:auto; border-radius: 3%;">
              <div class="faculty-name my-1">Dr. Sourabh Jain <br> Assistant Prof.</div>
            </div>
            <div class="item pt-3">
              <img src="https://media.istockphoto.com/photos/portrait-concept-picture-id1016761216?k=20&m=1016761216&s=612x612&w=0&h=jEC8voGLjSyhdOO7EMQyrLtZ9m--TEUmd4X56sqyZk0=" alt="Owl Image" style="width:70%;margin:auto; border-radius: 3%;">
              <div class="faculty-name my-1">Dr. Sourabh Jain <br> Assistant Prof.</div>
            </div>
            <div class="item pt-3">
              <img src="https://media.istockphoto.com/photos/portrait-concept-picture-id1016761216?k=20&m=1016761216&s=612x612&w=0&h=jEC8voGLjSyhdOO7EMQyrLtZ9m--TEUmd4X56sqyZk0=" alt="Owl Image" style="width:70%;margin:auto; border-radius: 3%;">
              <div class="faculty-name my-1">Dr. Sourabh Jain <br> Assistant Prof.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="dept-profile">
  <div class="container-wrap my-3">
    <div class="row no-gutters">
      <div class="col-md-12">
          <h1 class="page_sub_heading text-uppercase section-heading text-center font-weight-bold" style="color:#597cab">Courses Offered</h1>
          <div class="container courses-offered">
            <div class="row">
              <div class="col-md-6 my-2 text-center">
                <img src="https://www.mahavirinfotech.in/assets/img/portfolio/portfolio-details-5.jpg" alt="" style="width:100%">
              </div>
              <div class="col-md-6 my-2 text-capitalize">
                <a href="" style="color: white">
                  <div class="dept-courses p-3 mb-2">Accountancy</div>
                </a>
                <a href="" style="color: white">
                  <div class="dept-courses p-3 mb-2">Economics</div>
                </a>
                <a href="" style="color: white">
                  <div class="dept-courses p-3 mb-2">Business Org</div>
                </a>
                <a href="" style="color: white">
                  <div class="dept-courses p-3 mb-2">Statistics</div>
                </a>
                <a href="" style="color: white">
                  <div class="dept-courses p-3 mb-2">Partnership</div>
                </a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>  
<section class="dept-profile">
  <div class="container my-3">
    <div class="row">
      <div class="col-md-6">
        <!-- <h2 class="text-uppercase text-center font-weight-bold text-light">Notifications</h2> -->
        <h1 class="page_sub_heading text-uppercase section-heading font-weight-bold my-3" style="color:#597cab">Notifications</h1>
        <div class="section-content">
            <ul style="padding-left:15px;;">
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
        <div class="col-md-6 col-12">
        <h1 class="page_sub_heading text-uppercase section-heading font-weight-bold my-3" style="color:#597cab">view Gallery</h1>
          <div class="row m-0">
            <div class="gallery_image col-md-6 col-12">
              <img src="{{ asset('frontend/images/university.jpg') }}" alt="">
              <div class="video_icon">
                <i class="fa fa-play-circle"></i>
              </div>
            </div>
            <div class=" gallery_image col-md-6 col-12">
              <img src="{{ asset('frontend/images/college.png') }}" alt="">
            </div>
            <div class=" gallery_image col-md-6 col-12">
              <img src="https://jessecollege.com/wp-content/uploads/2018/03/dummy-inner.jpg" alt="" >
            </div>
            <div class="gallery_image col-md-6 col-12">
              <img src="{{ asset('frontend/images/college.png') }}" alt="" >
            </div>
          </div>
          <div class="load_more">
            <span>Load More...</span>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-12">
          <div class="row">
          @foreach($notifications as $notification)  
            <div class="col-md-3" style="padding: 2px 2px 10px 2px;">
              <div class="col-md-12" style="background-color: #f0f0f09c;">
                <span style="color: black;">
                  {{ $notification->college->name }} {{ $notification->department->name }}  {{ $notification->course->name }} exams from {{ $notification->start_date }}  till {{ $notification->start_date }}                                  
                </span>
              </div>
              <div class="col-md-12" style="background-color: white !important;">
                <p class="current-date float-right">{{ $notification->created_date }}</p>
              </div>
            </div>
          @endforeach  
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
<section class="student_portal my-3">
    <div class="container">
    <div class="row m-0">
      <div class="col-12">
        <h1 class="page_sub_heading text-uppercase section-heading text-center font-weight-bold my-3" style="color:#597cab">Student Area</h1>
      </div>
    </div>
        <div class="student_section">
            <div class="row m-0">
                <div class="col-lg-3 col-12 links_col">
                  <div class="row m-0" style="position:sticky;top:60px;">
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
                <div class="col-lg-9 col-12" style="padding:10px 0;">
                    <div class="tiles_section">
                    <div class="row m-0">
                        <div class="col-12"> 
                        <h6 class="text-uppercase text-center m-0 py-2" style="background:#597cab;color:white;">Notices</h6>
                        <div class="section-content">
                          <ul style="padding: 10px 0;list-style:none;">
                            <li>
                            <article class="list_style" style="border-bottom: 1px solid lightgray;">
                                <header class="my-2"><a href="#">Syllabus Of Department of Psychology</a></header>
                                <!-- <div class="additional-info1">Recruitments in Homeopathic Department</div> -->
                            </article><!-- /article -->
                            </li>
                            <li>
                            <article  style="border-bottom: 1px solid lightgray;">
                                <header class="my-2"><a href="#">Distance Education Revised Fee Structure for various certificates</a></header>
                                <!-- <div class="additional-info1">Recruitments in Homeopathic Department</div> -->
                            </article><!-- /article -->
                            </li>
                            <li>
                            <article class="list_style" style="border-bottom: 1px solid lightgray;">
                                <header class="my-2"><a href="#">Syllabus Of Department of Psychology</a></header>
                                <!-- <div class="additional-info1">Recruitments in Homeopathic Department</div> -->
                            </article><!-- /article -->
                            </li>
                            <li>
                            <article style="border-bottom: 1px solid lightgray;">
                                <header class="my-2"><a href="#">Distance Education Revised Fee Structure for various certificates</a></header>
                                <!-- <div class="additional-info1">Recruitments in Homeopathic Department</div> -->
                            </article><!-- /article -->
                            </li>
                            <li>
                            <article class="list_style">
                                <header class="my-2"><a href="#">Syllabus Of Department of Psychology</a></header>
                                <!-- <div class="additional-info1">Recruitments in Homeopathic Department</div> -->
                            </article><!-- /article -->
                            </li>
                          </ul>
                        </div>
                        </div>
                    </div>
                      <div class="row m-0">
                        <div class="col-lg-6 col-md-6 col-12"> 
                          <h6 class="text-uppercase text-center m-0 py-2" style="background:#597cab;color:white;">Exam TimeTable</h6>
                          <div class="row m-0">
                            <div class="quick_links col-12 mb-3" style="border: 1px solid lightgray;">
                              <!-- <span class="results"><i class="fa fa-book mr-2"></i>Sem 1st Result</span> -->
                              <ul class="results">
                                <li>
                                  TIME TABLE OF PG DIPLOMA
                                </li>
                                <li>
                                  TIME TABLE OF M.SC. CHEMISTRY 
                                </li>
                                <li>
                                  TIME TABLE M.SC. BOTANY
                                </li>
                                <li>
                                TIME TABLE Ist SEMESTER
                                </li>
                                <li>
                                  Sem 1st Result
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                          <h6 class="text-uppercase text-center m-0 py-2" style="background:#597cab;color:white;">Class TimeTable</h6>
                          <div class="row m-0">
                            <div class="quick_links col-12 mb-3" style="border: 1px solid lightgray;">
                              <!-- <span class="results"><i class="fa fa-book mr-2"></i>Sem 1st Result</span> -->
                              <ul class="results ">
                                <li>
                                  TIME TABLE OF PG DIPLOMA
                                </li>
                                <li>
                                  TIME TABLE OF M.SC. CHEMISTRY 
                                </li>
                                <li>
                                  TIME TABLE M.SC. BOTANY
                                </li>
                                <li>
                                TIME TABLE Ist SEMESTER
                                </li>
                                <li>
                                  Sem 1st Result
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row m-0">
                        <div class="col-12"> 
                          <h6 class="text-uppercase text-center m-0 py-2" style="background:#597cab;color:white;">Feedback</h6>
                          <div class="feedback_form">
                          <form>
                            <div class="row m-0">
                              <div class="col-lg-6 col-md-6 col-12 ">
                                <div class="form-group col-12 mt-3 p-0">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                              </div>
                              <div class="form-group col-12 mt-3 p-0">
                                <label for="exampleInputPassword1">Email Id</label>
                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                              </div>
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-12 mt-3">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                              </div>
                            </div>
                            <div class="row m-0">
                              <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary text-right" style="border-radius:0; padding:5px 30px;">Submit</button>
                              </div>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="calendar" style="margin:25px 0 25px 0;">
  <div class="container p-0">
    <div class="row m-0">
      <div class="col-lg-6 col-md-6 col-12">
      <h1 class="page_sub_heading text-uppercase section-heading text-center font-weight-bold my-3" style="color:#597cab">Calendar</h1>
       <div class="calendar_image" style="height:350px;margin:auto;">
        <img src="https://img.freepik.com/premium-vector/monthly-calendar-july-2022_7459-152.jpg?w=2000" alt="" width="100%" height="100%">
       </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
      <h1 class="page_sub_heading text-uppercase section-heading text-center font-weight-bold my-3" style="color:#597cab">Council's data</h1>
      <div class="row m-0">
        <div class="quick_links col-12" style="border: 1px solid lightgray;border-radius:5px;">
          <ul class="results p-4" style="line-height:35px;color:#597cab;">
            <li>
            Distance Education Revised Fee Structure
            </li>
            <li>
            Lorem ipsum dolor sit amet consectetur
            </li>
            <li>
            For 1st year students
            </li>
            <li>
            Lorem ipsum dolor sit amet consectetur
            </li>
            <li>
            TIME TABLE Ist SEMESTER
            </li>
            <li>
            Distance Education Revised Fee Structure 
            </li>
            <li>
            Lorem ipsum dolor sit amet consectetur
            </li>
          </ul>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(function () {
      $('#demo-form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
      }).on('form:submit', function() {
        $('.submit-button').attr('disabled',true);    
      });
    });

    var current = new Date();
    var dd = current.getDate();
    var mm = current.getMonth() + 1;
    var yyyy = current.getFullYear();  
    if (dd < 10) 
    {
        dd = '0' + dd;
    }
    if (mm < 10) 
    {
        mm = '0' + mm;
    }
    var today = dd + '-' + mm + '-' + yyyy;
    $(".current-date").text(today);
</script>  
<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    // margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
})
</script>  
@endsection