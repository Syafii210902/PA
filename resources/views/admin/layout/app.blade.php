<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>ADMIN | {{ $tittle }}</title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('adm/img/apple-touch-icon-57x57-precomposed.png') }}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('adm/img/apple-touch-icon-72x72-precomposed.png') }}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('adm/img/apple-touch-icon-114x114-precomposed.png') }}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('adm/img/apple-touch-icon-144x144-precomposed.png') }}">

  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('adm/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Main styles -->
  <link href="{{ asset('adm/css/admin.css') }}" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="{{ asset('adm/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="{{ asset('adm/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="{{ asset('adm/css/custom.css') }}" rel="stylesheet">
	
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  @if ($tittle != "Admin Login")
  @include('admin.layout.nav')
  @yield('content')
  @include('admin.layout.footer')
  @else
    @yield('adminlogin')
  @endif
    

</body>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('adm/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('adm/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('adm/vendor/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('adm/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('adm/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('adm/vendor/jquery.selectbox-0.2.js') }}"></script>
    <script src="{{ asset('adm/vendor/retina-replace.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/jquery.magnific-popup.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('adm/js/admin.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('adm/js/admin-charts.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('adm/js/admin-datatables.js') }}"></script>

</html>
