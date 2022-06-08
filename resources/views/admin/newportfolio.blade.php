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
              <h5>Add new portfolio</h5>
            </div>
            <div class="card-body">
              <form role="form text-left" method="post" action="{{url('/addportfolio')}}" enctype="multipart/form-data">
        
                {{csrf_field()}}
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" placeholder="Enter project name" aria-label="Name" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" name="client" placeholder="Enter project  client" aria-label="Name" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <textarea  class="form-control" name="description" rows="5" cols="auto"></textarea>
                  </div>
                  <div class="mb-3">
                    <input type="file" class="form-control" name="portfolio_image" placeholder="Select image" >
                  </div>
                  <div class="mb-3">
                    {{Form::label('','Select Service')}}
                    {{Form::select('service_name',$categories,null,['placeholder'=>'Select category','class'=>'form-control'])}}
                  </div>
                
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Submit</button>
                </div>
                <p class="text-sm mt-3 mb-0"><a href="{{url('/portfolios')}}" class="text-dark font-weight-bolder">Cancel</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection