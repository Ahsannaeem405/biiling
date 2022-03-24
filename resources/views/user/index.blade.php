@extends('user.layout1')
  @section('css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
@endsection
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
                    <form class="text-center px-0 px-lg-5" method="POST" action="{{route('newbill')}}" id="form-0">
                      @csrf
                      <div class="scanner text-center">

                      <div class="form-group text-left">
                          <label for="">Please Select Company:</label>
                          <select type="text" name="mobcompany" class="form-control" aria-label="Default select example" id="mobile">
                            <option selected>select your mobile</option>
                            @foreach($companies as $company)

                            <option value="{{$company->service_id}}"> {{$company->name}}  &#x26A1;</option>
                            @endforeach
                          </select>
                        </div>
                        <i class="fas fa-camera open_cam" style="font-size: 40px;"></i>
                          <section class="section section_came" style="display:none;">
                          <div class="container">
                            <div class="columns">
                              <div class="column is-four-fifths">
                                
                                <video autoplay id="video"></video>
                                <button type="button" class="button is-hidden" id="btnPlay">
                                  <span class="icon is-small">
                                    <i class="fas fa-play"></i>
                                  </span>
                                </button>
                                <button type="button" class="button" id="btnPause">
                                  <span class="icon is-small">
                                    <i class="fas fa-pause"></i>
                                  </span>
                                </button>
                                <button type="button" class="button is-success" id="btnScreenshot">
                                  <span class="icon is-small">
                                    <i class="fas fa-camera"></i>
                                  </span>
                                </button>
                                <button type="button" class="button" id="btnChangeCamera">
                                  <span class="icon">
                                    <i class="fas fa-sync-alt"></i>
                                  </span>
                                  <span>Switch camera</span>
                                </button>
                              </div>
                              <div class="column">
                               
                                <div id="screenshots"></div>
                              </div>
                            </div>
                          </div>
                        </section>

  <canvas class="is-hidden" id="canvas"></canvas>


                     
                        <!-- <i class="fa fa-barcode" aria-hidden="true" onclick="scannerr()"></i> -->
                        





                        <div id="qr-reader" style="margin: auto;"></div>









                        
                        <p class="my-2 my-md-3 text-"> <strong> Click to scan barcode</strong></p>

                        
                        <p id="para">Having problem while scaning barcode?</p>
                       
                      </div>
                      <style>
                        .loader {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
  margin: auto;

}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
                      </style>
                      <div class="loader" style="display:none;"></div>

                     

                      <div class="form-group text-left" id="imeidiv">
                        <label for="imei">Enter imei No:</label>
                        <input type="text" name="imei" class="form-control" id="imei" placeholder="IMEI">
                      </div>
                      <button class="btn btn-primary" type="button" name="barcodefield" id="barcodefield" style="">verify barcode</button>
                      <div class="form-group text-left mt-4" style="margin: auto; width: 60%;">

                        <table id="imeitable" class="table table-bordered m-auto">
                          <tr>
                            <th>Imei NO</th>
                            <th>Status</th>
                          </tr>
                         
                        </table>
                      </div>
                      <div class="form-group text-left">
                        <label for="Name">Seller's Name:</label>
                        <input type="text" class="form-control" id="Name" name="name" placeholder="Name" required>
                      </div>
                      <div class="form-group text-left">
                        <label for="address">Seller's Address:</label>
                        <textarea class="form-control" id="address" name="address" placeholder="seller address" required></textarea>
                      </div>
                      <div class="form-group text-left">
                        <label for="license">Drivers License #:</label>
                        <input type="text" class="form-control" name="license" id="license" placeholder="license number" required>
                      </div>
                      <div class="form-group text-left">
                        <label for="dob">DOB:</label>
                        <input type="date" class="form-control" name="dob" id="dob">
                      </div>
                      
                      <!-- signature start -->
                        	<!-- Content -->
                          <br>
                      <div class=" form-group text-left px-4">
                        <p>Seller hereby acknowledges that the above sale price represents the fair market value of said item or items. </p>
                        <p>Seller is the lawful owner of the above listed items. </p>
                        <p>Said items are clear of all encumbrances and owner has the right to sell these described items. </p>
                        <p>Seller hereby certifies that said item has not been stolen and has come to possess said item in a lawful manner. </p>
                        <p>Seller also makes the representation that the above items are as described, in stated condition, and that all items are 100% authentic and not counterfeit. </p>
                        <p>Cell Phone Repair Genius LLC will do our best to erase any personal data left on any electronic devices that we purchase; however, we will not be held responsible for any data recovered by any third party, or damages incurred from data left on the device(s). </p>
                        <p>Please make sure to delete all sensitive data permanently prior to selling your device to Cell Phone Repair Genius LLC. </p>
                      </div>
                      <br>
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
                       
                          <button type="button" class="btn btn-primary sig-submitBtn" id="">Add Signature</button>
                          <button type="button" class="btn btn-default sig-clearBtn" id="">Clear Signature</button>
                          <textarea class="form-control sig-dataUrl d-none" id="" name="url1" rows="5" ></textarea>
                        </div> 
                      </div>
                      <div class="form-group text-left">
                        <label for="Name">Representative's Signature:</label>
                      </div>
                      <div class="row signRow">
                        <div class="col-md-12">
                          <div class="container">
                            <canvas id="" width="" height="130px">
                              Get a better browser, bro.
                            </canvas>
                          </div>
                          <button type="button" class="btn btn-primary sig-submitBtn" id="">Add Signature</button>
                          <button type="button" class="btn btn-default sig-clearBtn" id="" >Clear Signature</button>
                          <textarea class="form-control sig-dataUrl d-none" id="" name="url2" rows="5" ></textarea>
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
                              
                              <th> Seller name </th>
                              <th> Seller address </th>
                              <th> Drivers License # </th>
                              <th> DOB </th>
                              <th> Signature of Seller: </th>
                              <th> Signature of representative </th>
                              <th> Mobile </th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $f=0; @endphp
                            @foreach($bills as $bill)
                            {{-- @dd($bills[2])
 --}}
                            @php $f++;
                                $imi=explode(",",$bill->imi);
                                $status=explode(",",$bill->status);
                                $service_id=explode(",",$bill->service_id);

                             @endphp
                             
                            <tr>
                            
                              <td> {{$bill['seller_name']}} </td>
                              <td> {{$bill['seller_address']}} </td>
                              <td> {{$bill['driv_licence']}} </td>
                              <td> {{$bill['date_of_birth']}} </td>
                              <td> <img src="{{$bill['sel_sign']}}" width="100px" height="60px"> </td>
                              <td> <img src="{{$bill['rep_sign']}}" width="100px" height="60px"> </td>
                              <td>
  
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$f}}">
    View Mobile list
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal{{$f}}">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Mobile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mobile</th>
      <th scope="col">Imi</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    
    

   @for ($i=0; $i < count($imi); $i++)
  
   @php 
                                $mob=App\Models\Mobilecompanie::find($service_id[$i]);
                                @endphp
    <tr>
      <th scope="row">1</th>
      <td>@if($mob!=null)
        {{$mob->name}}
      @endif</td>
      <td>{{$status[$i]}}</td>
      <td>{{$imi[$i]}}</td>
    </tr>
   
    @endfor
  </tbody>
</table>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div></td>
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
    alert('Barcode is scanned successfully');
    $("#qr-reader__dashboard_section_csr span:nth-child(2) button:nth-child(2)").click();
  
       


}
var html5QrcodeScanner = new Html5QrcodeScanner(
	"qr-reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);










$("#barcodefield").click(function(){
  

  var vali = $("#imei").val();
    var optselect = $('#mobile').val();
    if(optselect != 'select your mobile')
    {
        if(vali != '')
        {
          $(".loader").css("display", "block");

              
        $.ajax({
            method: 'GET',
            url: "{{route('imeidetail')}}",
            data: {imeino: vali, serviceid: optselect},
            success: function( response ){
              $(".loader").css("display", "none");
              if(response == 'low balance or wronge imei No')
              {
                var html=`<tr class="` + vali + `">
                  <td> `+ vali + `</td>
                  <td> rejected </td>
                  <td><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-x crosbtn" viewBox="0 0 16 16" iemeno="` + vali + `">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  </td>
                  </tr>`;
                $("#billbutton").attr("disabled", true);
                $('#imeitable').append(html);
                $('#imei').val('');


                
                $("<input type='hidden' value=" + vali + "/>")
                .attr("class", vali)
                .attr("name", "myfieldid[]")
                .appendTo("#form-0");

                $("<input type='hidden' value='rejected'/>")
                .attr("class", vali)
                .attr("name", "status[]")
                .appendTo("#form-0");
                $("<input type='hidden' value=" + optselect + ">")
                .attr("class", vali)
                .attr("name", "ser_idd[]")
                .appendTo("#form-0");

                

              }
              if(response == 'wronge imei number')
              {
                var html=`<tr class="` + vali + `">
                  <td> `+ vali + `</td>
                  <td> rejected </td>
                  <td><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-x crosbtn" viewBox="0 0 16 16" iemeno="` + vali + `">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  </td>
                  </tr>`;
                alert('wronge imei number');
                $("#billbutton").attr("disabled", false);
                $('#imeitable').append(html);
                $('#imei').val('');


                $("<input type='hidden' value=" + vali + " />")
                .attr("class", vali)
                .attr("name", "myfieldid[]")
                .appendTo("#form-0");
                $("<input type='hidden' value='rejected'/>")
                .attr("class", vali)
                .attr("name", "status[]")
                .appendTo("#form-0");
                $("<input type='hidden' value=" + optselect + ">")
                .attr("class", vali)
                .attr("name", "ser_idd[]")
                .appendTo("#form-0");
              }
                
                if(response == 'ok')
                {
                  var html=`<tr class="` + vali + `">
                  <td> `+ vali + `</td>
                  <td> verified </td>
                  <td><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-x crosbtn" viewBox="0 0 16 16" iemeno="` + vali + `">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  </td>
                  </tr>`;
                  $("#billbutton").removeAttr('disabled');
                  $('#imeitable').append(html);
                    $('#imei').val('');


                  $("<input type='hidden' value=" + vali + " />")
                  .attr("class", vali)
                  .attr("name", "myfieldid[]")
                  .appendTo("#form-0");
                  $("<input type='hidden' value='verified'/>")
                  .attr("class", vali)
                  .attr("name", "status[]")
                  .appendTo("#form-0");
                  $("<input type='hidden' value=" + optselect + ">")
                .attr("class", vali)
                .attr("name", "ser_idd[]")
                .appendTo("#form-0");

                  
                }
            }
        });
      } else {
        alert('Please scan barcode or enter imei number');
      }
    } else {
      alert('please ' + optselect + ' company first');
      $("#imei").val('');
    }
    

  
});


</script>



<script>
$(document).ready(function() {

  
  $("div#qr-reader__dashboard_section_csr > div button").click(function(){

    setTimeout(function() { 
      
  var length = $('#qr-reader__camera_selection  option').length;
  alert(length);
  if(length > 1)
  {
    $("#qr-reader__camera_selection option:last").attr("selected", "selected");
  }


  $("div#qr-reader__dashboard_section_csr span:last-child button:first-child").css('display', 'block').css('margin',' auto');

  // alert(length);


  }, 4000);
  });



  $(document).on('click', '.crosbtn', function () {
    var imeino = $(this).attr('iemeno');
    $( "."+imeino ).remove();

    // $(event.target).remove()
  });
  $(document).on('click', '.open_cam', function () {
  $("#qr-reader__dashboard_section_csr > div button").click();

  setTimeout(function() { 
    $("#btnChangeCamera").click();

    var x = document.getElementByClassName("section_came");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }

    
    
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