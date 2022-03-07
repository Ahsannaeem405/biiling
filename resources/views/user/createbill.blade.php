@extends('layout')
      <!-- partial:../../partials/_sidebar.html -->
@section('content')
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a href="{{route('user/index')}}"><img width="60px" height="50px" src="../assets/images/phonelogo.jpg" alt="logo" /></a>
          <!-- <a class="sidebar-brand brand-logo-mini" href="../../index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{auth()->user()->name}}</h5>
                  <!-- <span>Gold Member</span> -->
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('user/index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">My Bills</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('user/createbill') }}">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title"> + Create New Bill</span>
            </a>
          </li>
          
          
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          
            <a class="navbar-brand brand-logo-mini" href="{{route('user/index')}}"><img src="../assets/images/phonelogo.jpg" alt="logo" /></a>

          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            @auth
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" href="{{ route('user/createbill') }}">+ Create New Bill</a>
                
              </li>
              
              
              
              
              <!--  -->
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{Auth()->user()->name}}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <!-- <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a> -->
                  <!-- <div class="dropdown-divider"></div>-->
                  <form method="POST" action="{{ url('logout') }}" class="hidden">
                    
                    @csrf
                    
                  </form> 
                  <a class="dropdown-item preview-item" id="logoutuser" href="#">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a> 
                  
                  
              </li>
            </ul>
            @endauth
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">New Bill</h4>
                    <form action="{{ route('savebill') }}" class="forms-sample">

                      <div class="form-group">
                        <label for="billdate">Bill Date</label>
                        <input type="date" class="form-control" id="billdate">
                      </div>
                      <br>
                      <p class="card-description"> Seller information </p>
                      <hr>
                      <button type="button" class="btn btn-primary mr-2">scan barcode</button><br><br>
                      <div class="form-group">
                        <label for="sellername">Seller Name</label>
                        <input type="text" class="form-control" id="sellername" placeholder="seller name">
                      </div>
                      
                      <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="text" class="form-control" id="contact" placeholder="contact no">
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="write description here">
                      </div>

                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="price">
                      </div>
                      
                      
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
              
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <!-- <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span> -->
            </div>
          </footer>
          <!-- partial -->
        </div>



        <!-- barcode camera div start -->
      <div style="container">
        <canvas id="qr-canvas" width="320" height="240"></canvas>    
        <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
        <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
        <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
        <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
      </div>

        <!-- barcode camera div end -->



        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    <script>
        $(document).ready(function(){
            $("#logoutuser").click(function(){
                if (confirm('Are you sure you want to logout')) {

                    window.location.href = '/logout';

                }

            });
        });
    </script>


    <script src="js/jquery.js"></script>
    <script src="js/WebCodeCam.js"></script>

    <script src="js/qrcodelib.js"></script>
    <script src="js/DecoderWorker.js"></script>


    <script>
      $(document).ready(function(){
        
        alert('aert');
        $('#qr-canvas').WebCodeCam({
          ReadQRCode: true, 
          ReadBarecode: true, 
          width: 320,
          height: 240,

          <a href="https://www.jqueryscript.net/tags.php?/video/">video</a>Source: {
            // max Videosource resolution width
            maxWidth: 640,
            // max Videosource resolution height
            maxHeight: 480 
          },

          flipVertical: false,  
          flipHorizontal: false,  

          // if zoom = -1, auto zoom for optimal resolution else int
          zoom: -1, 

          // string, audio file location
          beep: "js/beep.mp3", 

          // functional when value autoBrightnessValue is int
          autoBrightnessValue: false, 

          brightness: 0, 
          grayScale: false, 
          contrast: 0, 
          threshold: 0, 

          // or matrix, example for sharpness ->  [0, -1, 0, -1, 5, -1, 0, -1, 0]
          sharpness: [], 

          resultFunction: function(resText, lastImageSrc) {
            // resText as decoded code, lastImageSrc as image source 
            alert(resText);
          }
        });
      });

    </script>

@endsection