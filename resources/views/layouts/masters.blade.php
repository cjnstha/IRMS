<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Data Tables -->
  <link href="{{asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- jQuery custom content scroller -->
  <link href="{{asset('assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
   {{-- <link href="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet"> --}}
  <!-- date picker -->
  {{-- <link href="{{asset('assets/build/js/bootstrap-datepicker.css')}}" rel="stylesheet"/> --}}
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- Timepicker -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/build/css/mdtimepicker.css')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{asset('assets/build/css/custom.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/build/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('assets/build/css/style.css')}}">
  <link rel="stylesheet"  href="{{asset('assets/build/css/new-style.css')}}">

  <!-- PNotify -->
  <link href="{{asset('assets/vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet">



  <script type="text/javascript">
       var base_url = "{{url('/')}}";
   </script>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">

      @include('layouts.sidebar')
      @include('layouts.header')

      <!-- page content -->
      <div class="right_col prfinfo" role="main">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 main-title">
            @yield('content')
          </div>
        </div>
      </div>
          
      <!-- /page content -->

    </div>
  </div>

  @include('layouts.footer')

  <!-- jQuery -->
  <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- Bootstrap -->
  <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{asset('assets/vendors/nprogress/nprogress.js')}}"></script>
  <!-- jQuery custom content scroller -->
  <script src="{{asset('assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  
  <script src="{{asset('assets/build/js/jquery.sumoselect.js')}}"></script>
  <!-- date picker -->
  {{-- <script src="{{asset('assets/build/js/bootstrap-datepicker.min.js')}}"></script> --}}
  <script src="{{asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    
  <!-- Time Picker Scripts -->
  <script src="{{asset('assets/build/js/mdtimepicker.js')}}"></script>
  <!-- Main Custom scripts -->
  {{-- <script src="{{asset('assets/build/js/custom.js')}}"></script> --}}
  <script src="{{asset('assets/build/js/main.js')}}"></script>
  <script src="{{asset('assets/vendors/pnotify/dist/pnotify.js')}}"></script>
  <script src="{{asset('assets/vendors/pnotify/dist/pnotify.buttons.js')}}"></script>
  <script src="{{asset('assets/vendors/pnotify/dist/pnotify.nonblock.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
  <script src="{{asset('assets/js/filter.js')}}"></script>
</body>
</html>