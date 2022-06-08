@extends('admin.template')
@section('container')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Messages</h6>
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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Subject</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Message</th>


                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)

                  <tr>
                    <td class="align-middle text-center text-sm">
                        {{$message->name}}
                    </td>
                    <td class="align-middle text-center text-sm">
                        {{$message->email}}
                    </td>
                    <td class="align-middle text-center text-sm">
                        {{$message->subject}}
                    </td>
                    <td class="align-middle text-center text-sm">
                        {{$message->message}}
                    </td>
                    
                    <td class="align-middle text-center">
                      
                      <a class="btn bg-gradient-danger mb-0" href="{{url('/deletemessage/'.$message->id)}}"><i class="fas fa-plus"></i>Delete</a>
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