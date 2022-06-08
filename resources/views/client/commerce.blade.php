
  @extends('client.template')
  @section('container')
  
  <main id="main">

    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Nos Produit</h2>
          <p>Les differents produits que nous possedons</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".electrique">Materiel Electrique</li>
              <li data-filter=".electronique">Materiel Electronique</li>
              <li data-filter=".industriel">Materiel Industriel</li>

            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          @foreach ($produits as $produit )
          <div class="col-lg-4 col-md-6 portfolio-item {{$produit->categorie}}">
            <div class="portfolio-wrap">
              <img src="/storage/product_images/{{$produit->product_image}}" class="img-responsive" width="100%" height="300px" alt="">
              <div class="portfolio-info">
                <h4>{{$produit->name}}</h4>
                <p>{{$produit->price}}</p>
                <div class="portfolio-links">
                  <a href="/storage/product_images/{{$produit->product_image}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bi bi-eye"></i></a>
                  <a href="{{url('/detail_produit/'.$produit->id)}}" title="Voir details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
              
          @endforeach
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->
    @endsection

 