<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Flipper Bill</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('Elements/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="{{asset('Elements/css/slick-theme.css')}}" />
  <!-- font awesome style -->
  <link href="{{asset('Elements/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('Elements/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('Elements/css/responsive.css')}}" rel="stylesheet" />


</head>

<body>


<!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{route('user/index')}}">
              <span>
              <img src="{{asset('Elements/images/cellphone.svg')}}" height="40px" width="40px" alt="logo">
              </span>
            <span>
              Flipper bill
            </span>
          </a>
          

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">

                <li class="nav-item active">
                  <a class="nav-link" href="{{route('user/index')}}">new bill <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('user/createbill')}}"> My Bills</a>
                </li>
                
                
              </ul>
            </div>
            <div class="quote_btn-container">
              <a href="{{route('logout')}}">
                <i class="fa fa-user" aria-hidden="true"> logout</i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    
    <!-- end slider section -->

  <!-- camera section -->
  <div class="container pt-5" id="scandiv" style="display:none;">

    <h1 class="text-center">Scan Bar code </h1>
    <div class="row w-100 my-5 m-0">
        <video class="m-auto" id="preview" style="border: 1px solid red;border-radius: 25px;width: 100%"></video>
    </div>

  </div>
  <!-- camera section -->







  
@yield('content')







  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto">
          <h4>
            Contact Us
          </h4>
          <div class="contact_items">
            <a href="">
              <div class="img-box">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <h6>
                Location
              </h6>
            </a>
            <a href="">
              <div class="img-box">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </div>
              <h6>
                demo@gmail.com
              </h6>
            </a>
            <a href="">
              <div class="img-box">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
              <h6>
                (+12 1234456789)
              </h6>
            </a>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="info_social">
          <div>
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
          </div>
          <div>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </div>
          <div>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </div>
          <div>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- footer section -->


  <!-- jQery -->
  <script type="text/javascript" src="{{asset('Elements/js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="{{asset('Elements/js/bootstrap.js')}}"></script>
  <!-- custom js -->
  <script type="text/javascript" src="{{asset('Elements/js/custom.js')}}"></script>

  <script>
  $(document).ready(function(){

    $("p#para").click(function(){
      $("#imeidiv").css("display", "block");

    });

  });
  </script>


<script src="http://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script type="text/javascript">
  function scannerr() {

    document.getElementById("scandiv").style.display = "block";

        let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
        scanner.addListener('scan', function (content) {
          
        });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });
      }

    </script>

</body>



</html>