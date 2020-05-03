<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/xeria/layouts/light/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 05:34:19 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Yinimini Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css" />
        
    </head>

    <body class="authentication-bg authentication-bg-pattern">
      @yield('content')



<footer class="footer footer-alt">
          2019 &copy; Xeria theme by <a href="#" class="text-muted">Coderthemes</a>
      </footer>

      <!-- Vendor js -->
      <script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>

      <!-- App js -->
      <script src="{{asset('admin/assets/js/app.min.js')}}"></script>

      <!-- Tost-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

      <script type="text/javascript">
        @if(Session::has('message'))
          var type="{{Session::get('alert-type')}}"


          switch(type){

                case 'success':
                    toastr.success("{{ Session::get('message') }}");

                    break;

                case 'error':
                  toastr.error("{{ Session::get('message') }}");

                  break;
          }

        @endif
      </script>
  </body>

<!-- Mirrored from coderthemes.com/xeria/layouts/light/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 05:34:19 GMT -->
</html>
