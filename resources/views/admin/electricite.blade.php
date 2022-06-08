@extends('admin.template')
@section('container')
    <div class="container-fluid py-4">
      <div class="row justify-content-center">
        <div class="col-xl-6 mt-5 col-sm-6 mb-xl-0 mb-4">
            <a href="{{url('/electricite_batiment')}}">

          <div class="card">
            <div class="card-body p-3">
              <div class="row ">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ELECTRICITE BATIMENT</p>
                    <h5 class="font-weight-bolder mb-0">
                      $53,000
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </a>
        </div>
        <div class="col-xl-6 mt-5 col-sm-6 mb-xl-0 mb-4">
            <a href="{{url('/electricite_industriel')}}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ELECTRICITE INDUSTRIEL</p>
                    <h5 class="font-weight-bolder mb-0">
                      2,300
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>
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
      
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>      
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>

                          @foreach ($electricites as $electricite)
      
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                 
                                <img src="/storage/electricite_images/{{$electricite->electricite_image}}" class="avatar avatar-sm me-3">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                
                              </div>
                            </div>
                          </td>
                          <td class="align-middle  text-sm">
                              {{$electricite->title}}
                          </td> 
                        
                          <td class="align-middle  text-sm">
                              {{$electricite->type}}
                          </td>
                          <td class=" ps-5 ">
                            
                            <a class="btn bg-gradient-primary mb-0" href="{{url('/editelectricite/'.$electricite->id)}}"><i class="fas fa-plus"></i>Edit</a>
                            <a class="btn bg-gradient-danger mb-0" href="{{url('/deleteelectricite/'.$electricite->id)}}"><i class="fas fa-plus"></i>Delete</a>
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
  
      
      </div>
      
   
      @endsection
    