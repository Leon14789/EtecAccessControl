<!DOCTYPE HTML>
<html>

<head>
<title>@yield('title')</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

    <x-menu />

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Intro -->
        <section id="intro" class="wrapper style1 fullscreen fade-up">
             
            <div class="inner">
                 @yield('content')
            </div>
            
        </section>


    <x-footer />

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

</body>

</html>