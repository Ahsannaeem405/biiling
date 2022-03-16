
@extends('user.layout1')
@section('content')
    <div class="container mt-3">
      <div class="heading_container heading_center">
        <!-- <h2 class="" id="toggleBtn" stat="1">
          <label class="switch d-none pageslider" >
            <input type="checkbox" id="togBtn">
            <div class="slider"></div>
        </label>
        </h2> -->
      </div >

      <section class="theme-navtab">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-md-11 co-12 my-2 my-md-3 my-lg-4">
              <div class="theme-card">
                  <div class="mobile-menu-bar">
                    <div class="w-100 d-flex justify-content-between">
                      <div id="navtab2" class="w-100 text-center theme-tabs active " onclick="changeTab2()" >New Bill</div>
                      <div id="navtab1" class="w-100 text-center theme-tabs " onclick="changeTab1()" >All Bills</div>
                    </div>
                  </div><!--mobile-menu-bar-->

                  <div id="tab1" class=" mt-5 px-2 py-4 " >
                    <h4 class="text-center pb-3">Add New Bill</h4>
                    <form class="text-center px-0 px-lg-5">
                      <div class="scanner text-center">
                        <i class="fa fa-barcode" aria-hidden="true" onclick="scannerr()"></i>
                        <p class="my-2 my-md-3 text-"> <strong> Click to scan barcode</strong></p>
                        <p id="para">Having problem while scaning barcode?</p>
                      </div>

                      <div class="form-group text-left" id="imeidiv" style="display:none;">
                        <label for="imei">Enter imei No:</label>
                        <input type="text" class="form-control" id="imei" onblur="getrespons()" placeholder="IMEI">
                      </div>
                      
                      <div class="form-group text-left">
                        <label for="Name">Seller's Name:</label>
                        <input type="text" class="form-control" id="Name" placeholder="Name">
                      </div>
                      <div class="form-group text-left">
                        <label for="address">Seller's Address:</label>
                        <textarea class="form-control" id="address" placeholder="seller address"></textarea>
                      </div>
                      <div class="form-group text-left">
                        <label for="license">Drivers License #:</label>
                        <input type="text" class="form-control" id="license" placeholder="license number">
                      </div>
                      <div class="form-group text-left">
                        <label for="dob">DOB:</label>
                        <input type="date" class="form-control" id="dob">
                      </div>
                      <div class="form-group text-left">
                        <label for="sellersignature">Signature of Seller:</label>
                        <input type="text" class="form-control" id="sellersignature">
                      </div>
                      <div class="form-group text-left">
                        <label for="repsignature">Signature of representative:</label>
                        <input type="text" class="form-control" id="repsignature">
                      </div>
                      <button type="submit" class="btn btn-primary text-center">Submit Information</button>
                    </form>
                  </div><!--tab1 close-->

                  <div id="tab2" class=" px-2 py-4 py-md-2 d-none">
                  <h4 class="text-center py-3">All Bills</h4>
                      <div class="table-responsive mt-4">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> Seller name </th>
                              <th> Seller address </th>
                              <th> Drivers License # </th>
                              <th> DOB </th>
                              <th> Signature of Seller: </th>
                              <th> Signature of representative </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td> 1 </td>
                              <td> Herman Beck </td>
                              <td> london </td>
                              <td> li93475-45 </td>
                              <td> May 15, 2015 </td>
                              <td> May 15, 2015 </td>
                              <td> May 15, 2015 </td>
                            </tr>
                            <tr>
                              <td> 2 </td>
                              <td> Messsy Adam </td>
                              <td> new york </td>
                              <td> mti843-468-34 </td>
                              <td> July 1, 2015 </td>
                              <td> July 1, 2015 </td>
                              <td> July 1, 2015 </td>
                            </tr>
                            <tr>
                              <td> 3 </td>
                              <td> John Richards </td>
                              <td> austria state of the art countery </td>
                              <td> tl-0142-387-34 </td>
                              <td> Apr 12, 2015 </td>
                              <td> Apr 12, 2015 </td>
                              <td> Apr 12, 2015 </td>
                            </tr>
                            <tr>
                              <td> 1 </td>
                              <td> Herman Beck </td>
                              <td> london </td>
                              <td> li93475-45 </td>
                              <td> May 15, 2015 </td>
                              <td> May 15, 2015 </td>
                              <td> May 15, 2015 </td>
                            </tr>
                            <tr>
                              <td> 2 </td>
                              <td> Messsy Adam </td>
                              <td> new york </td>
                              <td> mti843-468-34 </td>
                              <td> July 1, 2015 </td>
                              <td> July 1, 2015 </td>
                              <td> July 1, 2015 </td>
                            </tr>
                            <tr>
                              <td> 3 </td>
                              <td> John Richards </td>
                              <td> austria state of the art countery </td>
                              <td> tl-0142-387-34 </td>
                              <td> Apr 12, 2015 </td>
                              <td> Apr 12, 2015 </td>
                              <td> Apr 12, 2015 </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div><!--tab2 -close-->
              </div><!--Theme-card-->
            </div>
          </div>
        </div>
      </section>


      <!-- my theme-card end -->

<div class="container-fluid p-5" id="scandiv" style="display:none;">
    <div class="close-scanner">
      <i class="fa fa-times" aria-hidden="true" onclick="closeScannerr()"></i>
    </div>
    <h1 class="text-center">Scan Bar code </h1>
    <div class="row w-100 my-5 m-0">
        <video class="m-auto" id="preview"></video>
    </div>
</div>
</div>
  <script>
  $(document).ready(function(){

    $("p#para").click(function(){
      $("#imeidiv").css("display", "block");

    });




    $("#toggleBtn").click(function(){


      if($(this).attr("stat") == "1")
      {
        $("#tablesection").css("display", "block");
        $("#formsection").css("display", "none");
        $(this).attr("stat","2");

      } 
      else{
        alert('kdjf');
      }

    });




  });
  </script>


<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script type="text/javascript">
  function closeScannerr(){
    document.getElementById("scandiv").style.display = "none";
  }

  function scannerr() {

    document.getElementById("scandiv").style.display = "block";

        let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
        scanner.addListener('scan', function (content) {
          alert(content);
          
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
<script>

</script>

@endsection