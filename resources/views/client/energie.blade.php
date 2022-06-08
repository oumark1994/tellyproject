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
                <h2 class="animate__animated animate__fadeInDown text-center">Energie<span>Renouvelables</span></h2>
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
            @foreach ($energies as  $energie)
            <div class="col-lg-5 video-box my-4">
              <img src="/storage/energie_images/{{$energie->energie_image}}" height="350px" width="470px" class="img-responsive" alt="">
            </div>
  
            <div class="col-lg-6 d-flex flex-column  about-content">
  
              <div class="section-title">
                <h2>{{$energie->title}}</h2>
                  <p>{{$energie->description}}</p>
              </div>
          
  
           
            </div>
                
            @endforeach
          
            
  
            </div>
          </div>
  
        </div>
    </section>
  </main>
      @endsection