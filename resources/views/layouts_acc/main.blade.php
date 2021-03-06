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
    <link rel="stylesheet" href="../css/{{ $css }}-style.css" type="text/css"> 

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
</head>

<body>
    @include('partials.navbarTop')

    @yield('content')

