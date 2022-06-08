
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('admin/assets/img/favicon.png')}}">
  <title>
    Dot Technology
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('admin/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('admin/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('admin/assets/css/soft-ui-dashboard.css?v=1.0.2')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
<section class="h-100-vh mb-8">
    <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome to DotTechnology</h1>
            <p class="text-lead text-white">Register your account to access the dashboard</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
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
            @if (Session::has('status'))
            <div class="alert alert-success">
              {{Session::get('status')}}
</div>
           @endif
            <div class="card-body">
              <form role="form text-left" method="post" action="{{url('/signup')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="name" aria-describedby="email-addon">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Email" name="password" aria-label="Email" aria-describedby="email-addon">
                  </div>
         
                <div class="text-center">
                  <input type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2" value="Sign up">
                </div>
                <p class="text-sm mt-3 mb-0">Don't have an account <a href="{{url('/mylogin')}}" class="text-dark font-weight-bolder">Login</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--   Core JS Files   -->
  <script src="{{asset('admin/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/chartjs.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/Chart.extension.js')}}"></script>

  <script src="{{asset('admin/assets/js/soft-ui-dashboard.min.js?v=1.0.2')}}"></script>
</body>

</html>