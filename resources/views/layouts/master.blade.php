<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('images/icons/icon.png') }}">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/semantic-ui/dist/semantic.css') }}">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    @yield('style')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <div id="app-header">
            <div class="ui three item top fixed menu">
                <div class="item">
                    <i class="content large icon"></i>
                </div>
                <div class="item">
                    <img src="{{ asset('images/icons/icon2.png') }}">
                </div>
                <div class="item">
                    <a class="ui grey circular label">0</a>
                </div>
            </div>
        </div>
        <div class="ui sidebar inverted vertical menu" id="indexLeftSidebar">
            <div class="item">
                <div class="header">Menu</div>
                <div class="menu">
                    <a class="active item">COLLECTION</a>
                    <a class="item">LOOKBOOK</a>
                    <a class="item">ABOUT</a>
                    <a class="item">STOCKISTS</a>
                </div>
            </div>
            <div class="item">
                <div class="menu">
                    <a class="item">CUSTOME CASE</a>
                    <a class="item">LOGIN</a>
                </div>
            </div>
            <div class="item">
                <div class="ui three icon buttons">
                    <button class="ui button"><i class="facebook f inverted icon"></i></button>
                    <button class="ui button"><i class="instagram inverted icon"></i></button>
                    <button class="ui button"><i class="twitter inverted icon"></i></button>
                </div>
            </div>
        </div>
        <div id="rightSidebar" class="ui vertical menu right sidebar">
            <a class="item">
                <div class="ui icon fluid button">
                    <i class="ui grey circular label">0</i>
                </div>
            </a>
            <div class="ui vertical menu">
                <div href="" class="item">
                    <div class="ui fluid large buttons">
                        <div class="ui button">TOTAL</div>
                        <div class="ui button">0.00</div>
                    </div>
                </div>
                <div href="" class="item">
                    <div class="ui fluid large button">CHECKOUT</div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{ asset('vendor/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('vendor/semantic-ui/dist/semantic.js') }}"></script>
    <script src="{{ asset('js/myPlugin.js') }}"></script>
    <script type="text/javascript">
    $(function() {
        $('#app-header .item:first-child').on('click', '.icon', function() {
            $('#indexLeftSidebar').sidebar('toggle');
        });

        $('#app-header .grey.label').on('click', function() {
            $('#rightSidebar').sidebar('toggle');
        });
    });
    </script>
    @yield('script')
</body>
</html>