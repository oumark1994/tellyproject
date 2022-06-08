@extends('client.template')
@section('container')
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        @foreach ($sliders as $slider )
        <div class="carousel-item {{$slider->active}}" style="background-image: url('/storage/slider_images/{{$slider->slider_image}}');">
          <div class="carousel-container">
            <div class="carousel-content container">
              <h2 class="animate__animated animate__fadeInDown">{{$slider->description1}}</span></h2>
              <p class="animate__animated animate__fadeInUp">{{$slider->description2}}</p>
              <a href="{{url('/produits')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir plus</a>
            </div>
          </div>
        </div>
            
        @endforeach 

      </div>


    </div>
  </div>
</section><!-- End Hero -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
@foreach ($abouts as $about )
    <div class="row no-gutters">
      <div class="col-lg-6 video-box">
        <img src="/storage/about_images/{{$about->about_image}}" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

        <div class="section-title">
          <h2>Bienvenue chez Dottechnology</h2>
          <P>{{$about->about}}</P>
          <a href="{{url('/apropos')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir plus</a>

        </div>

     
      </div>

      </div>
@endforeach
  </div>
</section>
    <!-- ======= Counts Section ======= -->
   <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Nos services</h2>

        </div>

        <div class="row ">
      

          @foreach ($categories as $categorie )
          <div class="col-xl-3 col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="/storage/categorie_image/{{$categorie->categorie_image}}"  width="100%" height="250px" class="img-responsive" alt=""></div>
              <div class="member-info">
                <h4>{{$categorie->name}}</h4>
              
              </div>
            </div>
          </div>

              
          @endforeach
      </div>
    </section>
    

<main id="main">




  <!-- ======= Services Section ======= -->
  <section id="services" class="services" style="background-image: url('clients/assets/Picture/img11.jpg');background-size:cover; height:60vh;">
    <div class="container" data-aos="fade-up">

      <div class="section-title" >
        <h2 class="text-white">Pourquoi Dot Technology?</h2>
      </div>

      <div class="row justify-content-center" >
     
       
        <div class="col-lg-10 col-md-10 icon-box" data-aos="fade-up" data-aos-delay="300">
          <p class="description text-center text-white">We are focused on maintaining a high level of professionalism which is very rare in the trades industry.
            Our team has extensive experience in all aspects of the electrical trade so no job is too complicated or challenging for us to handle.
            We pride ourselves on building long term relationships by providing a high level of customer service.
            We are a local Vancouver based business with our office located here in the city.
            We are continually striving to improve our processes and systems to provide our clients with the best possible experience.
            We are licensed, insured, bonded and certified for all types of electrical work.</p>
        </div>
      </div>
     
      </div>

    </div>
    
  </section><!-- End Services Section -->
 

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

    
      <div class="row">
        <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
          <div class="icon"><i class="bx bx-bulb"></i></div>
          <h4 class="title"><a href="">Service fiable et rapide</a></h4>
          <p class="description">Nous nous présentons quand nous disons que nous le ferons.</p>
        </div>
        <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><i class="bi bi-bounding-box"></i></div>
          <h4 class="title"><a href="">Experts de l'industrie</a></h4>
          <p class="description">39 ans en affaires</p>
        </div>
        <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="bi bi-activity"></i></div>
          <h4 class="title"><a href="">Garantie des maîtres électriciens</a></h4>
          <p class="description">Un travail de qualité à chaque fois garanti</p>
        </div>
        <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="bi bi-strava"></i></div>
          <h4 class="title"><a href="">Après les heures d'ouverture</a></h4>
          <p class="description">Nous sommes en attente après les heures et les week-ends.</p>
        </div>
      </div>


    </div>

  </section><!-- End Services Section -->
  <section class="counts section-bg" style="background-image: url('clients/assets/Picture/img.jpg');background-size:cover;">
    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
          <div class="count-box">
            <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients satisfaits</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="count-box">
            <i class="bi bi-document-folder" style="color: #c042ff;"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="count-box">
            <i class="bi bi-live-support" style="color: #46d1ff;"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Heures d'assistance</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
          <div class="count-box">
            <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Travailleurs acharnés</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->
     <!-- ======= Testimonials Section ======= -->
     <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Témoignages</h2>
          <p>Ce qu'ils disent de nous</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach ($testimonials as $testimonial)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/storage/testimonial_images/{{$testimonial->testimonial_image}}" class="testimonial-img" alt="">
                <h3>{{$testimonial->name}}</h3>
                <h4>{{$testimonial->position}}</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{$testimonial->message}}           
                         <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
               
              </div>
            </div><!-- End testimonial item -->
                
            @endforeach

           

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
          <div class="container">
    
            <div class="row">
    
              <div class=" section-title col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-out">
                <h2>Nos Partenaires</h2>
              </div>
    @foreach ($partenaires as $partenaire )
    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
      <img src="/storage/partenaire_images/{{$partenaire->partenaire_image}}" class="img-fluid" alt="">
    </div>
        
    @endforeach
              
            </div>
    
          </div>
        </section>

 
  @endsection
  <!-- ======= Our Portfolio Section ======= -->




 

      

       

    