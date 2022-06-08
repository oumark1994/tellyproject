@extends('/template')
@section('container')
  <!-- ======= Intro Section ======= -->
  @foreach ($sliders as $slider)

  <div id="homepage" data-aos="flip-left" data-aos-duration="2000" class="intro route bg-image" style="background-image: url({{asset('storage/slider_images/'.$slider->image)}})">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container" >
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1  class="intro-title mb-4">I am {{$slider->name}}</h1>
          <p class="intro-subtitle"><span class="text-slider-items"> {{$slider->profile1}},{{$slider->profile2}}</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
      
  @endforeach

  <!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @foreach ($abouts as $about)
    <section id="aboutsection" class="about-mf sect-pt4 route"  data-aos="flip-right" data-aos-duration="3000">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="{{asset('storage/about_images/'.$about->image)}}" width="200px" height="200px" style="border-radius:80% !important;border:2px solid #ffc107;" class="img-responsive rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6   col-md-7" >
                   
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>{{$about->name}}</span></p>
                        <p><span class="title-s">Profile: </span> <span>{{$about->profile}}</span></p>
                        <p><span class="title-s">Email: </span> <span>{{$about->email}}</span></p>
                        <p><span class="title-s">Phone: </span> <span>+{{$about->phone}}</span></p>
                      </div>
                        <a href="/download" type="submit" class="button button-a button-big button-rouded">Download cv</a>
                          
                    
                   
                    </div>
                  </div>
          
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                     {{$about->details}}
                    </p>

                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    @endforeach
      <!-- ======= Skill Section ======= -->
     
      <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="title-box text-center"  data-aos="zoom-in" data-aos-duration="3000">
                <h5>
                  My Skills
                </h5>
               
                <div class="line-mf"></div>
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up"
          data-aos-duration="3000">
            <div class="col-sm-12">
              <div class="box-shadow-full">
                <div class="row justify-content-center">
                  <div class="col-md-6" data-aos="fade-down"
                  data-aos-duration="3000">
                    
                  
                    <div class="skill-mf">
                      <p class="title-s">Languages</p
                      @foreach ($skills as $skill)
                      <span>{{$skill->name}}</span> <span class="pull-right">{{$skill->percentage}}%</span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width:{{$skill->percentage}}%;" aria-valuenow="{{$skill->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      @endforeach

                    </div>
                  </div>
                  <div class="col-md-6" data-aos="fade-right"
                  data-aos-duration="2000">
                    
                  
                    <div class="skill-mf">
                      <p class="title-s">Frameworks</p
                      @foreach ($frameworks as $framework)
                      <span>{{$framework->name}}</span> <span class="pull-right">{{$framework->percentage}}%</span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width:{{$framework->percentage}}%;" aria-valuenow="{{$framework->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      @endforeach

                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" data-aos="zoom-in"
    data-aos-duration="3000" class="services-mf pt-5 route">
      <div class="container">
        <div class="row" data-aos="fade-in-t"
        data-aos-duration="3000">
          <div class="col-sm-12">
            <div class="title-box text-center" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500">
            <h5>
              My Services
            </h5>
           
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row " data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine">
          @foreach ($services as $service)

          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="{{$service->image}}"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">{{$service->name}} </h2>
                <p class="s-description text-center">
                 {{$service->details}}
                </p>
              </div>
            </div>
          </div>
              
          @endforeach
          
       
         
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" data-aos="flip-up" style="background-image: url(img/project.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          @foreach ($features as $feature )
          <div class="col-sm-4 col-lg-4" data-aos="zoom-in-up" data-aos-duration="2500">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="{{$feature->image}}"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">{{$feature->number}}</p>
                <span class="counter-text">{{$feature->title}}</span>
              </div>
            </div>
          </div>
          @endforeach
         
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row" data-aos="zoom-in-down">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h5>
                Porfolio
              </h5>
              <p class="subtitle-a">
               Those are my recents projects
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row" >
          @foreach ($portfolios as $portfolio)
              
          <div class="col-md-4" data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-duration="1800"
          data-aos-delay="300"
          data-aos-offset="0">
            <div class="work-box">
              <a href="{{asset('storage/project_images/'.$portfolio->image)}}" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{asset('storage/project_images/'.$portfolio->image)}}" width="100%" height="300px" alt="" class="img-responsive">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">{{$portfolio->title}}</h2>
                    <div class="w-more">
                      <span class="w-ctegory">{{$portfolio->category}}<span> / <span class="w-date">{{$portfolio->date}}</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{asset('/projectbyid/'.$portfolio->id)}}"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

          
      
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    {{-- <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url({{asset('img/overlay-bg.jpg')}})">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-mf" class="owl-carousel owl-theme">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="{{asset('/img/testimonial-2.jpg')}}" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Xavi Alonso</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="{{asset('/img/testimonial-4.jpg')}}" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Marta Socrate</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section --> --}}

    <!-- ======= Blog Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" data-aos="fade-down-left" data-aos-duration="1500" style="background-image: url(img/pro.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                 @livewire('contactform')
                  <div class="col-md-6" data-aos="fade-in-left" data-aos-duration="1200">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    @foreach ($abouts as $about )
                        
                    
                    <div class="more-info">
                      <p class="lead">
                      </p>
                      <ul class="list-ico">

                        <li><span class="ion-ios-location"></span> {{$about->address}}</li>
                        <li><span class="ion-ios-telephone"></span>+{{$about->phone}}</li>
                        <li><span class="ion-email"></span>{{$about->email}}</li>
                      </ul>
                      @endforeach
                    </div>
                    <div class="socials">
                      @foreach ($links as $link)
                          
                      <ul>
                        <li><a href="{{url($link->facebook_link)}}"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href="{{url($link->instagram_link)}}"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                        <li><a href="{{url($link->github_link)}}"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                      </ul>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection

