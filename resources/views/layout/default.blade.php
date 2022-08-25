<!DOCTYPE html>

<html>

<head>

    <title>Company Multi Level Form</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.css" integrity="sha512-+Zybl5OKqmaXx42ysgDdEODFRj8kLRQFy87G77NWmQxS8JMiQhDKovhffSaUuMDyaKxZOZrzouVbQMtBrUcv7w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        label {
            font-weight: 600;
        }
    </style>
</head>

<body style="background-color: #f3fdf3">
    <div class="container" id="app">
        <h2 class="text-center">Laravel Multi Step Form</h2>
        @yield('content')

    </div>



</body>



</html>