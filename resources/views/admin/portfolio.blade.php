@extends('admin.template')
@section('container')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Portofeuille</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                {{Form::hidden('',$increment=1)}}
                @if (Session::has('status'))
                <div class="alert alert-success">
                  {{Session::get('status')}}
  </div>
               @endif
               <a class="btn bg-gradient-dark mb-0" href="{{url('/newportfolio')}}"><i class="fas fa-plus"></i>New Project</a>

              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Client</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type Project</th>

                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($portfolios as $portfolio)

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                           
                          <img src="/storage/portfolio_image/{{$portfolio->portfolio_image}}" class="avatar avatar-sm me-3">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        {{$portfolio->title}}
                    </td> 
                    <td class="align-middle text-center text-sm">
                        {{$portfolio->description}}
                    </td>
                    <td class="align-middle text-center text-sm">
                        {{$portfolio->client}}
                    </td>
                    <td class="align-middle text-center text-sm">
                        {{$portfolio->service_name}}
                    </td>
                    <td class="align-middle text-center">
                      
                      <a class="btn bg-gradient-primary mb-0" href="{{url('/editportfolio/'.$portfolio->id)}}"><i class="fas fa-plus"></i>Edit</a>
                      <a class="btn bg-gradient-danger mb-0" href="{{url('/deleteportfolio/'.$portfolio->id)}}"><i class="fas fa-plus"></i>Delete</a>
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