<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">

    <title>7 Star | Home</title>
</head>
<body>
    <div id="app">
        <nav-header></nav-header>

        <div id="component">
            <router-view/>
        </div>

        <footer-content></footer-content>
    </div>




    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/style.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/navbar.js') }}"></script>

    <script src="{{ asset('frontend/assets/vendor/glider/glider.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>


</body>
</html>
