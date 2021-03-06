<!DOCTYPE html>
<html lang="{{getLocale()}}" dir="{{getLocale() == "ar" ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('app.title')}}</title>


    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="{{asset('global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @if(getLocale() == "en")
        <link href="{{asset('layout_1/LTR/material/full/assets/css/bootstrap.min.css')}}" rel="stylesheet"
              type="text/css">
        <link href="{{asset('layout_1/LTR/material/full/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet"
              type="text/css">
        <link href="{{asset('layout_1/LTR/material/full/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('layout_1/LTR/material/full/assets/css/components.min.css')}}" rel="stylesheet"
              type="text/css">
        <link href="{{asset('layout_1/LTR/material/full/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    @elseif (getLocale() == "ar")
        <link href="{{asset('layout_1/RTL/material/full/assets/css/bootstrap.min.css')}}" rel="stylesheet"
              type="text/css">
        <link href="{{asset('layout_1/RTL/material/full/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet"
              type="text/css">
        <link href="{{asset('layout_1/RTL/material/full/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('layout_1/RTL/material/full/assets/css/components.min.css')}}" rel="stylesheet"
              type="text/css">
        <link href="{{asset('layout_1/RTL/material/full/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    @endif
<!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/ui/ripple.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    {{--<script src="{{asset('global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>--}}
    {{--<script src="{{asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>--}}
    {{--<script src="{{asset('global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>--}}
    {{--<script src="{{asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>--}}
    {{--<script src="{{asset('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>--}}
    {{--<script src="{{asset('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>--}}

    <script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('js/ckeditor.js')}}"></script>

    @if(getLocale() == "en")
        <script src="{{asset('layout_1/LTR/material/full/assets/js/app.js')}}"></script>
    @elseif (getLocale() == "ar")
        <script src="{{asset('layout_1/RTL/material/full/assets/js/app.js')}}"></script>
    @endif

    {{--<script defer src="{{asset('global_assets/js/demo_pages/dashboard.js')}}"></script>--}}
<!-- /theme JS files -->

    <!-- JS File -->
    {{--<script defer src="{{ asset('js/app.js') }}"></script>--}}

<!-- Lang Translation -->
    <script src="{{asset('messages.js')}}"></script>

    <style>
        @font-face {
            font-family: 'JF Flat';
            src: url('{{asset('fonts/JF-Flat-regular.eot')}}');
            src: url('{{asset('fonts/JF Flat Regular.otf')}}') format('otf'),
            url('{{asset('fonts/JF-Flat-regular.ttf')}}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: "JF Flat", Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 13px;
            line-height: 1.5384616;
            color: #333333;
            background-image: '{{asset('images/gplay.png')}}';
        }
    </style>
    @yield('style')
    @stack('style')

</head>
<body>
<div id="app"></div>
@yield('navbar')

<!-- Page content -->
<div class="page-content">

@yield('sidebar')

<!-- Main content -->
    <div class="content-wrapper">

    @yield('header')
    @yield('content')

    <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    {{trans('app.footer')}}
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
				 	{{trans('app.all right')}}    &copy; <script> document.write(new Date().getFullYear());</script>.
					</span>

                <ul class="navbar-nav ml-lg-auto">

                    @yield('footer items')
                </ul>
            </div>
        </div>
        <!-- /footer -->
    </div>
    <!-- /main content -->

</div>
<!-- /page content -->
<script type="text/javascript">
    let APP_URL = '{!! json_encode(url('/')) !!}'
</script>

<script src="{{ asset('global_assets/js/plugins/notifications/jgrowl.min.js') }}"></script>
<script src="{{ asset('global_assets/js/plugins/notifications/noty.min.js') }}"></script>
@if(Session::has('message'))
    <script>
        new Noty({
            theme: ' alert alert-{{ Session::get('class', 'success') }} alert-styled-left p-0 bg-white',
            text: '{!!  Session::get('message')  !!} ',
            type: '{{ Session::get('class', 'success') }}',
            progressBar: false,
            timeout: 1000,
            closeWith: ['button']
        }).show();
    </script>

    @php(Session::forget(['message' , 'class']))
@endif
@yield('script')
@stack('script')
</body>
</html>
