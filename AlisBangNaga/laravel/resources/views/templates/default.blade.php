<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Petisi Mahasiswa Demi Pembangunan Negara</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>

</head>

<body>
    @include('templates.partials.navigasi')
    @include('templates.partials.info')
    @yield('konten')
    @include('templates.partials.footer')
    
    @yield('js')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000
    })
    </script>
</body>

</html>