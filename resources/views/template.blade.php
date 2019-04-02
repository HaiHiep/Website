<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Website</title>

    <link href="{!! asset('css/linearicons.css') !!}"  rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/font-awesome.min.css') !!}"  rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/themify-icons.css') !!}"  rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/bootstrap.css') !!}"  rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/owl.carousel.css') !!}"  rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/nice-select.css') !!}"  rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/ion.rangeSlider.css') !!}"  rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/ion.rangeSlider.skinFlat.css') !!}"  rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/magnific-popup.css') !!}"  rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/main.css') !!}"  rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        .features-inner{
            margin-bottom: 100px;
        }
        .single-footer-widget{
            color: #fff;
        }
        .footer-bottom{
            color: #fff;
        }
    </style>
</head>
<body>
@include('shared.header')
@include('shared.banner')
@include('shared.feature')
@include('shared.category')
@include('shared.content')
@include('shared.deal')
@include('shared.brand')
@include('shared.relate')
@include('shared.footer')
@yield('content')
<script type="text/javascript" src="{!! asset('js/vendor/jquery-2.2.4.min.js') !!}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="{!! asset('js/vendor/jquery-2.2.4.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/vendor/bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/jquery.ajaxchimp.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/jquery.nice-select.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/jquery.sticky.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/nouislider.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/countdown.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/jquery.magnific-popup.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/owl.carousel.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/gmaps.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
</body>
</html>