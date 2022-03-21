
<!DOCTYPE HTML>
<html>

<head>
    <title>Login BookStore</title>
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
    <link href="backend/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="backend/css/style.css" rel='stylesheet' type='text/css' />
    <link href="backend/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="backend/js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="backend/js/bootstrap.min.js"></script>
</head>

<body id="login">
    <div class="login-logo">
        <a href="index.html"><img src="/backend/images/logo.png" alt="" /></a>
    </div>
    <h2 class="form-heading">login</h2>
    @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    <div class="app-cam">
        <form action="{{url('/login')}}" method="POST">
            @csrf
            <input type="text" name=email class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
            <input type="password" name=password value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
            <div class="submit"><input  type="submit" onclick="myFunction()" value="Login"></div>
            <div class="login-social-link">
                <a href="index.html" class="facebook">
              Facebook
          </a>
                <a href="index.html" class="twitter">
              Twitter
          </a>
            </div>
            <ul class="new">
                <li class="new_left">
                    <p><a href="#">Forgot Password ?</a></p>
                </li>
                <li class="new_right">
                    <p class="sign">New here ?<a href="register.html"> Sign Up</a></p>
                </li>
                <div class="clearfix"></div>
            </ul>
        </form>
    </div>
    <div class="copy_layout login">
        {{-- <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p> --}}
    </div>
</body>

</html>