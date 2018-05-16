<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UAD</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- fontello -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- animete -->
    <link href="{{asset('css/fontello.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body class="login">
    <div id="app"></div>
    <div class="d-inline-block position-absolute h-100 w-100">
        <div class="animated fadeInUp login-content" >
            <div class="login-icon">
                <span class="icon-user"></span>
            </div>
            <form action="{{route('loginValidate')}}">
                <div class="md-form form-group">
                    <input type="text" id="login-user" class="form-control">
                    <label for="login-user" >User</label>
                </div>
                <div class="md-form form-group">
                    <input type="password" class="form-control" id="inputPassword4MD">
                    <label for="inputPassword4MD">Password</label>
                </div>
                <br>
                <button type="submit" class="btn btn-dark-green">Sign In</button>
            </form>
        </div>
    </div>

</body>
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>
