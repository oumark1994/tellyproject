@extends('admin.template')
@section('container')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Nos Partenaires</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                {{Form::hidden('',$increment=1)}}
                @if (Session::has('status'))
                <div class="alert alert-success">
                  {{Session::get('status')}}
  </div>
               @endif
               <a class="btn bg-gradient-dark mb-0" href="{{url('/newpartenaire')}}"><i class="fas fa-plus"></i>Nouveau partenaire</a>

              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>


                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>

                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($partenaires as $partenaire)

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                           
                          <img src="/storage/partenaire_images/{{$partenaire->partenaire_image}}" class="avatar avatar-sm me-3">
                        </div>
                       
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        {{$partenaire->name}}
                    </td>
                    <td class="align-middle text-center text-sm">
                        {{$partenaire->status}}
                    </td>
                    
                   @if($partenaire->status==1)
                    <td class="align-middle text-center">
                        <button class="badge badge-sm bg-gradient-success" onclick="window.location='{{url('/desactive_partenaire/'.$partenaire->id)}}'">Active</button>    

                    </td>    
                    @else
                    <td class="align-middle text-center">
        <button class="badge badge-sm bg-gradient-danger" onclick="window.location='{{url('/activate_partenaire/'.$partenaire->id)}}'">Desactive</button>    
</td>   
                    @endif
                    <td class="align-middle text-center">
                      
                      <a class="btn bg-gradient-primary mb-0" href="{{url('/editpartenaire/'.$partenaire->id)}}"><i class="fas fa-plus"></i>Edit</a>
                      <a class="btn bg-gradient-danger mb-0" href="{{url('/deletepartenaire/'.$partenaire->id)}}"><i class="fas fa-plus"></i>Delete</a>
                    </td>
                  </tr>
                  {{Form::hidden('',$increment=$increment + 1)}}
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection