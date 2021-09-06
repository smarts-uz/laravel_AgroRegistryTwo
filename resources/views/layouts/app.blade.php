<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Required meta tags -->
        <!-- Meta -->
        <meta name="description" content="автоматизированная информационная система для осуществления процедур сбора, рассмотрения и согласования материалов по предоставлению земельных участков с уполномоченными органами и организациями">
        <meta name="author" content="AgroDigital">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('templates/ijara/assets/img/favicon.ico') }}">
        <title>Вход в систему | E-ijara</title>
        <!-- vendor css -->
        <link href="{{ asset('templates/ijara/lib/@fortawesome/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('templates/ijara/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('templates/ijara/lib/prismjs/themes/prism-tomorrow.css') }}" rel="stylesheet">
        <!-- template css -->
        <link rel="stylesheet" href="{{ asset('templates/ijara/assets/css/style.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        @yield('style')
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>

    <body>
        <div class="signin-panel" id="app">
            <div style="display: contents;"><img src="{{ asset('templates/ijara/assets/img/bg1.svg') }}" class="svg-bg"></div>
            <div class="signin-sidebar">
                <div class="signin-sidebar-body">
                    {{-- <a href="{{ route("home") }}" class="sidebar-logo mg-b-40">
                        <img src="{{ asset('templates/ijara/assets/img/logo.svg') }}">
                    </a> --}}
                    <div class="divider-text">Фойдаланувчи кабинети</div>

                    <div class="signin-forma mg-t-15">
                        @include('common.messages')

                        @yield('content')
                    </div><!-- signin-sidebar-body -->
                    <p class="mg-t-auto mg-b-0 tx-sm tx-color-03 text-center">Барча ҳуқуқлар ҳимояланган ⓒ 2021<br> ЎзР Қишлоқ хўжалиги вазирлиги.</p>
                </div><!-- signin-sidebar -->
            </div><!-- signin-panel -->
        </div>

        @yield('modal')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        {{-- eimzo --}}
        <script src="{{ asset('templates/ijara/assets/js/eimzo/e-imzo.js') }}"></script>
        <script src="{{ asset('templates/ijara/assets/js/eimzo/e-imzo-client.js') }}"></script>
        <script src="{{ asset('templates/ijara/assets/js/eimzo/imzo.js') }}"></script>

        <script src="{{ asset('templates/ijara/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('templates/ijara/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('templates/ijara/lib/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('templates/ijara/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('templates/ijara/assets/js/svg-inline.js') }}"></script>

        @yield('script')

        <script src="{{ asset('js/app.js') }}"></script>

    </body>

</html>
