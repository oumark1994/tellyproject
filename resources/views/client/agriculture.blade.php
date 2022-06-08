@extends('client.template')
@section('container')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div>


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('clients/assets/Picture/img3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown text-center"><span>agriculture</span></h2>
              </div>
            </div>
          </div>
        </div>
    
    </div>
  </section><!-- End Hero -->
      <!-- ======= Counts Section ======= -->
     

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="row no-gutters">
            @foreach ($agricultures as $agriculture )
      
 
            <div class="col-lg-5 video-box">
              <img src="/storage/agriculture_images/{{$agriculture->agriculture_image}}" class="img-responsive" height="350px" width="470px" alt="">
            </div>
  
            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
  
              <div class="section-title">
                <h2>{{$agriculture->title}}</h2>
                <p>{{$agriculture->description}}</p>
              </div>
            </div>

            @endforeach
            
  
            </div>
          </div>
  
        </div>
      </section><!-- End About Us Section --> 
     

  
@endsection