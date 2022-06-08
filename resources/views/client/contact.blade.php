@extends('client.template')
@section('container')

<section id="hero">
    <div class="hero-container">
      <div>


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('clients/assets/Picture/img6.jpg');');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown text-center">Contact</h2>
              </div>
            </div>
          </div>
        </div>
    
    </div>
  </section><!-- End Hero -->

 

  <main id="main">



  


   
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Contactez  Nous</h2>
          </div>
  
          <div class="row justify-content-center">
            @if (Session::has('status'))
            <div class="alert alert-success">
              {{Session::get('status')}}
</div>
           @endif
  
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
              <form action="{{url('/addmessage')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-lg-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder=" Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Suject" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                {{-- <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Votre message a ete envoye avec success.Merci!!!</div>
                </div> --}}
                 <div class="text-center form-group"><input type="submit" class="btn btn-primary form-control" value="Envoyer message"/></div>
              </form>

            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Us Section -->

 


@endsection
