<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/dataTables.bootstrap4.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/app-dark.css') }}" id="darkTheme" disabled>


    <link rel="stylesheet" href="{{ asset('admin_assets/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/uppy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/quill.snow.css') }}">


    @stack('css')
    <style>
      .flex-row {
          display: flex;
          justify-content: space-between;
          align-items: center;
        }

        .card-title {
          margin: 0;
        }

        .btn-primary {
          margin: 0;
        }
    </style>
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">

        {{-- navigation --}}
        <x-admin-nav/>

       <!-- sidebar -->
       <x-admin-side-bar/>
       <!-- /sidebar -->

       {{-- <x-admin-dashboard/> --}}

      <main role="main" class="main-content">
        @yield('content')

      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="{{ asset('admin_assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/simplebar.min.js') }}"></script>
    <script src='{{ asset('admin_assets/js/daterangepicker.js') }}'></script>
    <script src='{{ asset('admin_assets/js/jquery.stickOnScroll.js') }}'></script>
    <script src="{{ asset('admin_assets/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/config.js') }}"></script>
    <script src='{{ asset('admin_assets/js/jquery.dataTables.min.js') }}'></script>
    <script src="{{ asset('admin_assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('admin_assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/uppy.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/quill.min.js') }}"></script>
    <script>
      $('#dataTable-1').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [16, 32, 64, -1],
          [16, 32, 64, "All"]
        ]
      });
    </script>
    <script src="{{ asset('admin_assets/js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>

    @stack('script')
  </body>
</html>
