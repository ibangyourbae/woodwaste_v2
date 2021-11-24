<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS link -->
    <link rel="stylesheet" href="Beranda-style.css">
    <link rel="stylesheet" href="../../../../css/{{ $css }}-style.css" type="text/css">

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvjAzfLtxa6CzUWE0XuyzzKH9fFzvWUMk&callback=initMap"></script>
    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
            var propertiPeta = {
                center: new google.maps.LatLng(-6.321370, 108.323494),
                zoom: 20,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="../../../../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../../../css/trix.css">
    <script type="text/javascript" src="../../../../js/trix.js"></script>
</head>

<body>
    @include('partials.navbarTop')

    @yield('content')


    @include('partials.navbarBot')

    <script>

        document.addEventListener('trix-file-accept', function(e){
                e.preventDefault();
        });    

                                        // preview image

                                        function previewImage(){

const image = document.querySelector('#image');
const imgPreview = document.querySelector('.img-preview');

imgPreview.style.display = 'block';

const ofReader = new FileReader();
ofReader.readAsDataURL(image.files[0]);

ofReader.onload = function(oFREvent){
    imgPreview.src = oFREvent.target.result;
}; 
    </script>
        