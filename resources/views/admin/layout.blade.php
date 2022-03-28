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

  <title>Cellphone Repair</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('Elements/css/bootstrap.css')}}" />



  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="{{asset('Elements/css/slick-theme.css')}}" />
  <!-- font awesome style -->
  <link href="{{asset('Elements/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('Elements/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('Elements/css/responsive.css')}}" rel="stylesheet" />

  @yield('css')

   

  <style>
  @media screen and (max-width: 990px) {
    
   
    .logo1 {

        font-size: 20px!important;
    }
    .pageslider {
        display:block!important;
    }
}
  
#qr-reader #qr-reader__dashboard #qr-reader__dashboard_section div #qr-reader__dashboard_section_csr div button {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
  border-radius: 5px;
}
#qr-reader #qr-reader__dashboard #qr-reader__dashboard_section div #qr-reader__dashboard_section_swaplink {
  display:none;

}


/* #qr-reader div span {
  display:none;
} */
#qr-reader__camera_selection {
  display:none;
}

#qr-reader__dashboard_section_csr span:first-child {
  display:none;

}


#qr-reader__dashboard_section_csr span:last-child button:first-child {
  display:none;

}




#qr-reader div:first-child span:first-child {
  display:none !important;
  
}

#qr-reader__status_span {
  display:none !important;
}

#qr-reader__dashboard_section_csr button {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
  border-radius: 5px;
}

#qr-reader__dashboard_section_swaplink {
  display:none !important;
}

#qr-reader {
  border:none !important;
}

  .signRow {
  background: none !important; 
  padding: 20px;
  margin-top: 40px;
  margin-bottom: 40px;
}
canvas {
  border: 2px dotted #CCCCCC;
  border-radius: 15px;
  cursor: crosshair;
}




        


.switch {
  position: relative;
  display: inline-block;
  width: 150px;
  height: 36px;
  
  
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #1376b1;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 6px;
  
}

.slider:before {
  /* position: absolute; */
  content: "";
  height: 34px;
  width: 12px;
  top: 1px;
  left: 1px;
  right: 1px;
  bottom: 1px;
  background-color: white;
  transition: 0.4s;
  border-radius: 6px;
}

input:checked + .slider {
    background-color: #1376b1;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(55px);
}

.slider:after {
  content:'new bill';
  text-transform: lowercase;
  color: white;
  display: block;
  position: absolute;
  transform: translate(-50%,-50%);
  top: 50%;
  left: 50%;
  font-size: 17px;
  font-family: Verdana, sans-serif;
}
input:checked + .slider:after {
  content:'all bills';
  text-transform: lowercase;
  

}
    </style>

</head>

<body style="background-color: #f8f9fe;!important">


<!-- header section strats -->
    <header class="header_section" >
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container " >
          <a class="navbar-brand" href="{{route('user/index')}}">
              <span>
              <img src="{{asset('Elements/images/cellphone.svg')}}" height="40px" width="40px" alt="logo">
              </span>
            <span class="logo1" style="text-transform: lowercase;!important">
            Cellphone Repair
            </span>
            
          </a>
          <div class="quote_btn-container d-none logout2">
              <a href="{{route('logout')}}">
                                <i class="fas fa-sign-out-alt" aria-hidden="true"></i> logout

              </a>
            </div>
          

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav ">

                <li class="nav-item active" style="cursor:pointer;">
                    <a class="nav-link " href="{{url('/')}}">Bills </a>
                </li>

                <li class="nav-item active " style="cursor:pointer;">
                    <a class="nav-link " href="{{url('admins/sells')}}" >Sells</a>
                </li>

                <li class="nav-item active" style="cursor:pointer;">
                    <a class="nav-link " href=" {{url('admins/user')}}">User</a>
                    
                </li>
                <li class="nav-item active" style="cursor:pointer;">
                    <a class="nav-link" href="{{url('admins/settings')}}">Settings </a>
                </li>
                
              </ul>
            </div>
            <div class="quote_btn-container">
              <a href="{{route('logout')}}">
                               <i class="fas fa-sign-out-alt" aria-hidden="true"></i> logout
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
  
  <!-- camera section -->







  
@yield('content')







  <section class="info_section layout_padding2"  style="background-color: #1376b1;!important">
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
              <i class="fab fa-facebook" aria-hidden="true"></i>
            </a>
          </div>
          <div>
            <a href="">
              <i class="fab fa-twitter" aria-hidden="true"></i>
            </a>
          </div>
          <div>
            <a href="">
              <i class="fab fa-linkedin" ></i>
            </a>
          </div>
          <div>
            <a href="">
              <i class="fab fa-instagram" ></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
  <!-- footer section -->
  <section class="footer_section"  style="background-color: #1376b1;!important">
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
</div>
  
  <!-- footer section -->


  <script type="text/javascript" src="{{asset('Elements/js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="{{asset('Elements/js/bootstrap.js')}}"></script>
  <!-- custom js -->
  <script type="text/javascript" src="{{asset('Elements/js/custom.js')}}"></script>


  <script src="{{asset('js/script.js')}}"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>



<script src="http://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script>
  function changeTab1(){
            $('#tab2').removeClass('d-none');
            $('#tab1').addClass('d-none');

            $('#navtab2').removeClass('active');
            $("#navtab1").addClass('active');
        }
        function changeTab2(){
            $('#tab1').removeClass('d-none');
            $('#tab2').addClass('d-none');

            $('#navtab1').removeClass('active')
            $("#navtab2").addClass('active');
        }
</script>

</body>



</html>