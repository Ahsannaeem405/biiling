
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




<!--  -->





                  <div id="tab1" class=" mt-5 px-2 py-4 " >
                    <h4 class="text-center pb-3">Add New Bill</h4>
                    <form class="text-center px-0 px-lg-5" action="{{route('newbill')}}">
                      <div class="scanner text-center">

                      <div class="form-group text-left">
                          <label for="">Please Select Company:</label>
                          <select type="text" name="mobcompany" class="form-control" aria-label="Default select example" id="mobile">
                            <option selected>select your mobile</option>
                            <option value="19"> LG  &#x26A1;</option>
                            <option value="24"> ZTE &#x26A1;</option>
                            <option value="5"> SONY &#x26A1;</option>
                            <option value="23"> ACER &#x26A1;</option>
                            <option value="34"> ASUS &#x26A1;</option>
                            <option value="39"> OPPO &#x26A1;</option>
                            <option value="45"> ITEL &#x26A1;</option>
                            <option value="2"> NOKIA &#x26A1;</option>
                            <option value="44"> SONIM &#x26A1;</option>
                            <option value="45"> TECNO &#x26A1;</option>
                            <option value="15"> HUAWEI &#x26A1;</option>
                            <option value="22"> LENOVO &#x26A1;</option>
                            <option value="1"> SAMSUNG &#x26A1;</option>
                            <option value="17"> ALCATEL &#x26A1;</option>
                            <option value="36"> ONEPLUS &#x26A1;</option>
                            <option value="43"> KYOCERA &#x26A1;</option>
                            <option value="45"> INFINIX &#x26A1;</option>
                            <option value="13"> MOTOROLA &#x26A1;</option>
                            <option value="14"> BLACKBERRY &#x26A1;</option>
                            <option value="42"> GOOGLEPIXEL &#x26A1;</option>
                            
                          </select>
                        </div>

                      <button type="button" name="barcodefield" id="barcodefield" style="display:none;">barcode</button>
                        <!-- <i class="fa fa-barcode" aria-hidden="true" onclick="scannerr()"></i> -->
                        





                        <div id="qr-reader" style="margin: auto;"></div>









                        
                        <p class="my-2 my-md-3 text-"> <strong> Click to scan barcode</strong></p>

                        
                        <p id="para">Having problem while scaning barcode?</p>
                      </div>

                      <div class="form-group text-left" id="imeidiv" style="display:none;">
                        <label for="imei">Enter imei No:</label>
                        <input type="text" name="imei" class="form-control" id="imei" placeholder="IMEI">
                      </div>
                      
                      <div class="form-group text-left">
                        <label for="Name">Seller's Name:</label>
                        <input type="text" class="form-control" id="Name" name="name" placeholder="Name">
                      </div>
                      <div class="form-group text-left">
                        <label for="address">Seller's Address:</label>
                        <textarea class="form-control" id="address" name="address" placeholder="seller address"></textarea>
                      </div>
                      <div class="form-group text-left">
                        <label for="license">Drivers License #:</label>
                        <input type="text" class="form-control" name="license" id="license" placeholder="license number">
                      </div>
                      <div class="form-group text-left">
                        <label for="dob">DOB:</label>
                        <input type="date" class="form-control" name="dob" id="dob">
                      </div>
                      
                      <!-- signature start -->
                        	<!-- Content -->
                      <div class=" form-group text-left">
                        <label for="Name">Seller's Signature:</label>
                      </div>

                      <div class="row signRow">
                        <div class="col-md-12">
                          <div class="container">
                          <canvas id=""  height="130px">
                            Get a better browser, bro.
                          </canvas>
                          </div>
                       
                          <button type="button" class="btn btn-primary sig-submitBtn" id="">Submit Signature</button>
                          <button type="button" class="btn btn-default sig-clearBtn" id="">Clear Signature</button>
                          <textarea class="form-control sig-dataUrl d-none" id="" name="url1" rows="5"></textarea>
                        </div> 
                      </div>
                      <div class="form-group text-left">
                        <label for="Name">Seller's Signature:</label>
                      </div>
                      <div class="row signRow">
                        <div class="col-md-12">
                          <div class="container">
                            <canvas id="" width="" height="130px">
                              Get a better browser, bro.
                            </canvas>
                          </div>
                          <button type="button" class="btn btn-primary sig-submitBtn" id="">Submit Signature</button>
                          <button type="button" class="btn btn-default sig-clearBtn" id="">Clear Signature</button>
                          <textarea class="form-control sig-dataUrl d-none" id="" name="url2" rows="5"></textarea>
                        </div> 
                      </div>
                      


                      <!--  signature end  -->
                      <button type="submit" class="btn btn-primary text-center" id="billbutton" disabled >Submit Information</button>
                    </form>
                  </div><!--tab1 close-->

                  <div id="tab2" class=" px-2 py-4 py-md-2 d-none">
                  <h4 class="text-center py-3">All Bills</h4>
                      <div class="table-responsive mt-4">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> Mobile </th>
                              <th> Seller name </th>
                              <th> Seller address </th>
                              <th> Drivers License # </th>
                              <th> DOB </th>
                              <th> Signature of Seller: </th>
                              <th> Signature of representative </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($bills as $bill)
                            <tr>
                            
                              <td> mobile name </td>
                              <td> {{$bill['seller_name']}} </td>
                              <td> {{$bill['seller_address']}} </td>
                              <td> {{$bill['driv_licence']}} </td>
                              <td> {{$bill['date_of_birth']}} </td>
                              <td> <img src="{{$bill['sel_sign']}}" width="100px" height="60px"> </td>
                              <td> <img src="{{$bill['rep_sign']}}" width="100px" height="60px"> </td>
                            </tr>
                           @endforeach
                            
                            
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




<script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>

<script>

  function onScanSuccess(decodedText, decodedResult) {
    console.log(`Code scanned = ${decodedText}`, decodedResult);

    document.getElementById("imei").value = '';
    document.getElementById("imei").value = decodedText;
    $('#barcodefield').click();
}
var html5QrcodeScanner = new Html5QrcodeScanner(
	"qr-reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);









$("#barcodefield").click(function(){
  alert('barcode is scan successfully');
  var vali = $("#imei").val();
    var optselect = $('#mobile').val();
    if(optselect != 'select your mobile')
    {
      
      $.ajax({
          method: 'GET',
          url: "{{route('imeidetail')}}",
          data: {imeino: vali, serviceid: optselect},
          success: function( response ){
            if(response == 'low balance')
            {
              alert('low balance');
              $("#billbutton").attr("disabled", true);

            }
            if(response == 'wronge imei number')
            {
              alert('wronge imei number');
              $("#billbutton").attr("disabled", true);
            }
              
              if(response == 'ok')
              {
                $("#billbutton").removeAttr('disabled');
              }
          }
      });
    } else {
      alert('please ' + optselect + ' company first');
      $("#imei").val('');
    }
    

  
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
        scanner.addListener('scan',function(c){
            alert(c);
            document.getElementById('aadhar').value=c;
        });
      }

        
</script>





<script>
$(document).ready(function() {
  $("#imei").blur(function(){
    
    var vali = $("#imei").val();
    var optselect = $('#mobile').val();
    if(optselect != 'select your mobile')
    {
      
      $.ajax({
          method: 'GET',
          url: "{{route('imeidetail')}}",
          data: {imeino: vali, serviceid: optselect},
          success: function( response ){
            if(response == 'low balance')
            {
              alert('low balance');
              $("#billbutton").attr("disabled", true);

            }
            if(response == 'wronge imei number')
            {
              alert('wromge imei number');
              $("#billbutton").attr("disabled", true);
            }
              
              if(response == 'ok')
              {
                $("#billbutton").removeAttr('disabled');
              }
          }
      });
    } else {
      alert('please ' + optselect + ' company first');
      $("#imei").val('');
    }

  });










  $("#qr-reader__dashboard_section_csr").click(function(){
    setTimeout(function() { 
      
  var length = $('#qr-reader__camera_selection  option').length;
  if(length > 1)
  {
    $("#qr-reader__camera_selection option:last").attr("selected", "selected");
  }
  // alert(length);

  var vali = $("#imei").val(length) ;

  }, 2000);
  });




});
</script>
<script>
  (function($) {
  
  $('.signRow').each(function(){
    
    
    // make dynamic pad id  
    $(this).find('canvas').attr('id', 'signPad' + $(this).index());
    var padId = $(this).find('canvas').attr('id');

    // make dynamic submit BTN id  
    $(this).find('.sig-submitBtn').attr('id', 'sig-submitBtn' + $(this).index());
    var padSubmitId = $(this).find('.sig-submitBtn').attr('id');

    // make dynamic clear BTN id  
    $(this).find('.sig-clearBtn').attr('id', 'sig-clearBtn' + $(this).index());
    var padClearId = $(this).find('.sig-clearBtn').attr('id');

    // make dynamic data url id  
    $(this).find('.sig-dataUrl').attr('id', 'sig-dataUrl' + $(this).index());
    var padDataUrlId = $(this).find('.sig-dataUrl').attr('id');

    // make dynamic img id  
    $(this).find('.sig-image').attr('id', 'sig-image' + $(this).index());
    var padImageId = $(this).find('.sig-image').attr('id');
    

    window.requestAnimFrame = (function (callback) {
      return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimaitonFrame ||
        function (callback) {
          window.setTimeout(callback, 1000 / 60);
        };
    })();


    var canvas = document.getElementById(padId);
    var ctx = canvas.getContext("2d");
    ctx.strokeStyle = "#222222";
    ctx.lineWidth = 4;

    var drawing = false;
    var mousePos = {
      x: 0,
      y: 0
    };
    var lastPos = mousePos;

    canvas.addEventListener("mousedown", function (e) {
      drawing = true;
      lastPos = getMousePos(canvas, e);
    }, false);

    canvas.addEventListener("mouseup", function (e) {
      drawing = false;
    }, false);

    canvas.addEventListener("mousemove", function (e) {
      mousePos = getMousePos(canvas, e);
    }, false);

    // Add touch event support for mobile
    canvas.addEventListener("touchstart", function (e) {

    }, false);

    canvas.addEventListener("touchmove", function (e) {
      var touch = e.touches[0];
      var me = new MouseEvent("mousemove", {
        clientX: touch.clientX,
        clientY: touch.clientY
      });
      canvas.dispatchEvent(me);
    }, false);

    canvas.addEventListener("touchstart", function (e) {
      mousePos = getTouchPos(canvas, e);
      var touch = e.touches[0];
      var me = new MouseEvent("mousedown", {
        clientX: touch.clientX,
        clientY: touch.clientY
      });
      canvas.dispatchEvent(me);
    }, false);

    canvas.addEventListener("touchend", function (e) {
      var me = new MouseEvent("mouseup", {});
      canvas.dispatchEvent(me);
    }, false);

    function getMousePos(canvasDom, mouseEvent) {
      var rect = canvasDom.getBoundingClientRect();
      return {
        x: mouseEvent.clientX - rect.left,
        y: mouseEvent.clientY - rect.top
      }
    }

    function getTouchPos(canvasDom, touchEvent) {
      var rect = canvasDom.getBoundingClientRect();
      return {
        x: touchEvent.touches[0].clientX - rect.left,
        y: touchEvent.touches[0].clientY - rect.top
      }
    }

    function renderCanvas() {
      if (drawing) {
        ctx.moveTo(lastPos.x, lastPos.y);
        ctx.lineTo(mousePos.x, mousePos.y);
        ctx.stroke();
        lastPos = mousePos;
      }
    }

    // Prevent scrolling when touching the canvas
    document.body.addEventListener("touchstart", function (e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);
    document.body.addEventListener("touchend", function (e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);
    document.body.addEventListener("touchmove", function (e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);

    (function drawLoop() {
      requestAnimFrame(drawLoop);
      renderCanvas();
    })();

    function clearCanvas() {
      canvas.width = canvas.width;
    }

    // Set up the UI
    var sigText = document.getElementById(padDataUrlId);
    var sigImage = document.getElementById(padImageId);
    var clearBtn = document.getElementById(padClearId);
    var submitBtn = document.getElementById(padSubmitId);

    clearBtn.addEventListener("click", function (e) {
      clearCanvas();
      // sigText.innerHTML = "Data URL for your signature will go here!";
      sigImage.setAttribute("src", "");
    }, false);

    submitBtn.addEventListener("click", function (e) {
      var dataUrl = canvas.toDataURL();
      sigText.innerHTML = dataUrl;
      sigImage.setAttribute("src", dataUrl);
    }, false);
    
  }); // each function  end
  
})(jQuery);

</script>
@endsection