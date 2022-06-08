@extends('admin.template')
@section('container')
<div class="container-fluid my-5">
        <div class="col-xl-4 col-lg-12 col-md-7 mx-auto">
          <div class="card z-index-0">
            @if (count($errors) >0)
            <div class="alert alert-danger">
               <ul>
                 @foreach ($errors->all() as $error)
                 
                 <li>{{$error}}</li>
                 @endforeach
               </ul>
               </div>
            @endif 
            <div class="card-header text-center pt-4">
              <h5>New Produit</h5>
            </div>
            <div class="card-body">
              <form role="form text-left" method="post" action="{{url('/updateproduit')}}" enctype="multipart/form-data">
        
                {{csrf_field()}}
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="id" value="{{$produit->id}}" aria-label="Name" aria-describedby="email-addon">

                    <input type="text" class="form-control" name="name"  value="{{$produit->name}}" aria-label="Name" aria-describedby="email-addon">
                  </div>
                 
                  <div class="mb-3">
                    <input type="text" class="form-control" name="price"  value="{{$produit->price}}"  aria-label="Name" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" name="quantite"  value="{{$produit->quantite}}" aria-label="Name" aria-describedby="email-addon">
                  </div>

                  <div class="mb-3">
                    <textarea  class="form-control" name="description" rows="5" cols="auto">{{$produit->description}}"</textarea>
                  </div>
                  <div class="mb-3">
                    <input type="file" class="form-control" name="product_image" placeholder="Select image" >
                  </div>
                  <div class="mb-3">
                   <select class="form-control" name="categorie">
                    <option value="electrique">Materiel electrique</option>
                    <option  value="electronique">Materiel electronique</option>
                    <option  value="industriel">Materiel industriel</option>
                </select>
                  </div>
                
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Submit</button>
                </div>
                <p class="text-sm mt-3 mb-0"><a href="{{url('/produits')}}" class="text-dark font-weight-bolder">Cancel</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection