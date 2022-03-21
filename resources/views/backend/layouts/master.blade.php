<!DOCTYPE HTML>
<html>

<head>
    @yield('link-js')
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="/backend/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="/backend/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="/backend/css/lines.css" rel='stylesheet' type='text/css' />
    <link href="/backend/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="/backend/js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Nav CSS -->
    <link href="/backend/css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/backend/js/metisMenu.min.js"></script>
    <script src="/backend/js/custom.js"></script>
    <!-- Graph JavaScript -->
    <script src="/backend/js/d3.v3.js"></script>
    <script src="/backend/js/rickshaw.js"></script>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        @include('backend.includes.navbar')
        
        @include('backend.includes.menu')

        </nav>
        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
    </div>
  
    <script src="/backend/js/bootstrap.min.js"></script>
    
    @yield('scrip')
</body>

</html>