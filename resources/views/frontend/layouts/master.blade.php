
   <!DOCTYPE html>
   <html lang="zxx">
   
   <head>
       <title>@yield('title')</title>
       <!--meta tags -->
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
       <script>
           addEventListener("load", function() {
               setTimeout(hideURLbar, 0);
           }, false);
   
           function hideURLbar() {
               window.scrollTo(0, 1);
           }
       </script>
       <!--//meta tags ends here-->
       <!--booststrap-->
       <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
       <!--//booststrap end-->
       <!-- font-awesome icons -->
       <link href="/frontend/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
       <!-- //font-awesome icons -->
       <!-- For Clients slider -->
       <link rel="stylesheet" href="/frontend/css/flexslider.css" type="text/css" media="all" />
       <!--flexs slider-->
       <link href="/frontend/css/JiSlider.css" rel="stylesheet">
       <!--Shoping cart-->
       <link rel="stylesheet" href="/frontend/css/shop.css" type="text/css" />
       <!--//Shoping cart-->
       <!--stylesheets-->
       <link href="/frontend/css/style.css" rel='stylesheet' type='text/css' media="all">
       <!--//stylesheets-->
       <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
       <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    @yield('css')
   </head>
   
   <body>
       @include('frontend.includes.header')
       <!-- //banner -->
       <!-- about -->
        @yield('content')
       <!--//Product-about-->
        @yield('register')
       <!--subscribe-address-->
      @include('frontend.includes.footer')
       <!-- //footer -->
       <!-- Modal 1-->
      @include('frontend.includes.modal')
       <!-- //Modal 1-->
       <!--js working-->
       <script src='/frontend/js/jquery-2.2.3.min.js'></script>
       <!--//js working-->
       <!-- cart-js -->
       
       <!-- //cart-js -->
       <!--responsiveslides banner-->
       <script src="/frontend/js/responsiveslides.min.js"></script>
       <script>
           // You can also use "$(window).load(function() {"
           $(function() {
               // Slideshow 4
               $("#slider4").responsiveSlides({
                   auto: true,
                   pager: false,
                   nav: true,
                   speed: 900,
                   namespace: "callbacks",
                   before: function() {
                       $('.events').append("<li>before event fired.</li>");
                   },
                   after: function() {
                       $('.events').append("<li>after event fired.</li>");
                   }
               });
   
           });
       </script>
       <!--// responsiveslides banner-->
       <!--slider flexisel -->
       <script src="/frontend/js/jquery.flexisel.js"></script>
       <script>
           $(window).load(function() {
               $("#flexiselDemo1").flexisel({
                   visibleItems: 3,
                   animationSpeed: 3000,
                   autoPlay: true,
                   autoPlaySpeed: 2000,
                   pauseOnHover: true,
                   enableResponsiveBreakpoints: true,
                   responsiveBreakpoints: {
                       portrait: {
                           changePoint: 480,
                           visibleItems: 1
                       },
                       landscape: {
                           changePoint: 640,
                           visibleItems: 2
                       },
                       tablet: {
                           changePoint: 768,
                           visibleItems: 2
                       }
                   }
               });
   
           });
       </script>
       <!-- //slider flexisel -->
       <!-- start-smoth-scrolling -->
       <script src="/frontend/js/move-top.js"></script>
       <script src="/frontend/js/easing.js"></script>
       <script>
           jQuery(document).ready(function($) {
               $(".scroll").click(function(event) {
                   event.preventDefault();
                   $('html,body').animate({
                       scrollTop: $(this.hash).offset().top
                   }, 900);
               });
           });
       </script>
       <!-- start-smoth-scrolling -->
       <!-- here stars scrolling icon -->
       <script>
           $(document).ready(function() {
   
               var defaults = {
                   containerID: 'toTop', // fading element id
                   containerHoverID: 'toTopHover', // fading element hover id
                   scrollSpeed: 1200,
                   easingType: 'linear'
               };
               $().UItoTop({
                   easingType: 'easeOutQuart'
               });
   
           });
       </script>
       <!-- //here ends scrolling icon -->
       <!--bootstrap working-->
       <script src="/frontend/js/bootstrap.min.js"></script>
       <!-- //bootstrap working-->

       
       @yield('scrip')
   </body>
   
   </html>