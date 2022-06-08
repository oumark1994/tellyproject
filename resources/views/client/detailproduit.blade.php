@extends('client/template')
@section('container')
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Details produit</h2>
     
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center gy-4">

        <div class="col-lg-6">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="/storage/product_images/{{$produit->product_image}}" width="350px" height="450px" alt="">
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Plus d'info</h3>
            <ul>
              <li><strong>Categorie</strong>:{{$produit->categorie}} </li>
              <li><strong>Price</strong>: {{$produit->price}}</li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>{{$produit->name}}</h2>
            <p>
              {{$produit->description}}
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->
  @endsection