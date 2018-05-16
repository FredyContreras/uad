<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <style media="screen">

      /* Required for full background image */

      html,
      body,
      header,
      .view {
      height: 100%;
      }

      @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 100vh;
      }
      }

      .top-nav-collapse {
      background-color: #78909c !important;
      }

      .navbar:not(.top-nav-collapse) {
      background: transparent !important;
      }

      @media (max-width: 768px) {
      .navbar:not(.top-nav-collapse) {
        background: #78909c !important;
      }
      }
      @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #78909c !important;
      }
      }

      h1 {
      letter-spacing: 8px;
      }

      h5 {
      letter-spacing: 3px;
      }

      .hr-light {
      border-top: 3px solid #fff;
      width: 80px;
      }

    </style>
</head>

<body>

    <!-- Main navigation -->
    <header>
    <!-- Full Page Intro -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <!-- Mask & flexbox options-->
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row justify-content-md-center">
            <!--Grid column-->
            <div class="col-md-5 mb-4 white-text text-center">
              <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 animated wow fadeInDown" data-wow-delay="0.3s"><strong>Welcome</strong></h1>
              <hr class="hr-light my-4 animated wow fadeInDown" data-wow-delay="0.4s">
              <h5 class="text-uppercase mb-4 white-text animated wow fadeInDown" data-wow-delay="0.4s"><strong>Allied Global</strong></h5>


              <!-- Material form login -->
              <form>
                  <p class="h4 text-center mb-4">Sign in</p>

                  <!-- Material input email -->
                  <div class="md-form">
                      <i class="fa fa-user prefix white-text"></i>
                      <input type="text" id="user" class="form-control white-text">
                      <label for="user" class="white-text">User</label>
                  </div>

                  <!-- Material input password -->
                  <div class="md-form">
                      <i class="fa fa-lock prefix white-text"></i>
                      <input type="password" id="password" class="form-control white-text">
                      <label for="password" class="white-text">Your password</label>
                  </div>

                  <div class="text-center mt-4">
                      <button class="btn btn-default" type="submit">Login</button>
                  </div>
              </form>
              <!-- Material form login -->



            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
    </header>
    <!-- Main navigation -->


    <!--Main layout-->
    <main>

    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer>

    </footer>
    <!--Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
</body>

</html>
