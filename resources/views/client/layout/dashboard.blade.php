<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/stylesss.css') }}" />
    @yield('css')
</head>

<body>
    <!-- header section starts  -->
    @include('client.partial.header')
    <!-- header section ends -->

    <!-- home section starts  -->
    @yield('content')
    <!-- home section ends -->

    <!-- footer section starts  -->
    @include('client.partial.footer')
    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="{{ asset('js/scriptsss.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('js')
</body>

</html>
