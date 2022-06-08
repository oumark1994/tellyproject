@extends('client.template')
@section('container')
<section id="hero">
    <div class="hero-container">
      <div>


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('clients/assets/Picture/img6.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown text-center">A Propos de nous</h2>
              </div>
            </div>
          </div>
        </div>
    
    </div>
  </section><!-- End Hero -->
      <!-- ======= Counts Section ======= -->
     
      <!-- End Counts Section -->

  <main id="main">

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
@foreach ($abouts as $about )
      <div class="row no-gutters">
        <div class="col-lg-6 video-box">
          <img src="/storage/about_images/{{$about->about_image}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

          <div class="section-title">
            <h2>A Propos de nous</h2>
            <P>{{$about->about}}</P>
          </div>

       
        </div>

        </div>
@endforeach
    </div>
  </section>
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

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
  </div>
</section>
      </div>

  </section><!-- End About Us Section -->
    @endsection('container')
