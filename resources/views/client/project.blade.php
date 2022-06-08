
  @extends('client.template')
  @section('container')
  <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="section-title">
        <h2>Nos Projects </h2>
        <p>Quelques realisations que nous avons achevees dans des differents sectons</p>
      </div>

      <div class="row">
        <div class="col-lg-12">
              
       
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Tout</li>

            @foreach ($categories as $categorie )
            <li data-filter =".{{$categorie->name}}">{{$categorie->name}}</li>
             @endforeach

          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        @foreach ($portfolios as $portfolio )

        <div class="col-lg-3 col-md-6 portfolio-item {{$portfolio->service_name}}">
          <div class="portfolio-wrap">
            <img src="/storage/portfolio_image/{{$portfolio->portfolio_image}}" class="img-responsive" width="100%" height="300px" alt="">
            <div class="portfolio-info">
              <h4>{{$portfolio->title}}</h4>
              <p>{{$portfolio->description}}</p>
              <div class="portfolio-links">
                <a href="/storage/portfolio_image/{{$portfolio->portfolio_image}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bi bi-eye"></i></a>
                {{-- <a href="{{url('/detail_produit/'.$portfolio->id)}}" title="Voir details"><i class="bi bi-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
     
        @endforeach
      </div>
      </div>

    </div>
  </section><!-- End Our Portfolio Section -->
  @endsection