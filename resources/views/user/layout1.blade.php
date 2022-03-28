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
  @media screen and (max-width: 990px) {
    .navbar-toggler{
        display:none!important;
    
    }
    .logout2 {
        display:block!important;
    }
    .logo1 {

        font-size: 20px!important;
    }
    .pageslider {
        display:block!important;
    }
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
                @if(Auth::user()->comp_logo!=null)
                 
                <img src="{{asset('upload/images/'.Auth()->user()->comp_logo)}}" height="40px" width="40px" alt="logo">
                @else
                  <img src="{{asset('Elements/images/cellphone.svg')}}" height="40px" width="40px" alt="logo">
                @endif
              </span>
              <span class="logo1" style="text-transform: lowercase;!important">
                @if(Auth::user()->comp_name!=null)
                {{Auth::user()->comp_name}}
                @else
                Cellphone Repair
                @endif
              
              </span>
            
            </a>
          <div class="quote_btn-container d-none logout2">
              <a href="{{route('logout')}}">
                
                <i class="fas fa-sign-out-alt" ></i> logout
              </a>
            </div>
          

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav d-none">

                <li class="nav-item active" style="cursor:pointer;" onclick="changeTab2()">
                    <span class="nav-link">New bill</span>
                </li>

                <li class="nav-item active" style="cursor:pointer;" onclick="changeTab1()">
                   <span class="nav-link">All bill</span>
                </li>
            
              </ul>
            </div>
            <div class="quote_btn-container">
              <a href="{{route('logout')}}">
                <i class="fas fa-sign-out-alt" aria-hidden="true"> </i>logout
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    @if (Session::get('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
     {{ Session::get('success') }}
   </div>
  @endif
  @if (Session::get('error'))
    <div class="alert alert-danger" role="alert">
      {{ Session::get('error') }}
    </div>
  @endif
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
                <i class="fas fa-map-marker" aria-hidden="true"></i>
              </div>
              <h6>
                Location
              </h6>
            </a>
            <a href="">
              <div class="img-box">
                <i class="fas fa-envelope" aria-hidden="true"></i>
              </div>
              <h6>
                demo@gmail.com
              </h6>
            </a>
            <a href="">
              <div class="img-box">
                <i class="fas fa-phone" aria-hidden="true"></i>
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


  <!-- jQery -->
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