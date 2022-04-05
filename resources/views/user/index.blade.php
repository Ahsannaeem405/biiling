@extends('user.layout1')
  @section('css')
  <link rel="stylesheet" href="{{asset('assets/css/bulma.min.css')}}">
  <style>
img{
  position: unset !important;
}


    </style>
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
                      


                     
                        <!-- <i class="fa fa-barcode" aria-hidden="true" onclick="scannerr()"></i> -->
                        


                  <div class="row d-flex">

                    <div class="col-md-6">
                      <div id="qr-reader" style="margin: auto;"></div>









                        
                        <p class="my-2 my-md-3 text-"> <strong> Click to scan barcode</strong></p>

                        
                        {{-- <p id="para">Having problem while scaning barcode?</p> --}}
                       
                      <hr>
                      </div>
                    
                    <div class="col-md-6 m-auto">

                        <i class="fas fa-camera open_cam scan_img2" style="font-size: 40px; color: rgb(0, 105, 217);"></i><br><br>

                        <!-- <section class="section section_came" id="section_cameye" style="display:none;"> -->
                          <!-- <div class="container">
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
                                <button type="button" class="button d-none" id="btnChangeCamera">
                                  <span class="icon">
                                    <i class="fas fa-sync-alt"></i>
                                  </span>
                                  <span>Switch camera</span>
                                </button>
                              </div>
                              <div class="column d-none" >
                               
                                <div id="screenshots"></div>
                              </div>
                            </div>
                          </div> -->
                        <!-- </section> -->

                        <!-- <canvas class="is-hidden" id="canvas"></canvas> -->
                        <input type="file" name="file" class="scan_img d-none" id="imgInp" onchange="encodeImageFileAsURL(this)">
                        <!-- <img src="https://i0.wp.com/css-tricks.com/wp-content/uploads/2015/11/drag-drop-upload-6.gif" class="" id="blah"> -->
                        <input type="hidden" name="scam_so" id="scan_img3">
                          <button  type="button" id="form" style="display: none;">Upload </button>
                          <div class="spinner-border text-success loader2" style="display: none;margin-right: auto;margin-left: auto;"></div>
                    </div>
                  </div>


                      <style>
                        
                      </style>
                      <div class="sel_imi"></div>

                     

                      <div class="form-group text-left" id="imeidiv">
                        <label for="imei">Enter IMEI No:</label>
                        <div style="display:flex;">
                        <input type="text" name="imei" class="form-control app_imi" id="imei" placeholder="IMEI" ><div class="spinner-border text-success loader" style="margin-left:-2rem;display:none;"></div></div>

                      </div>
                      <button class="btn btn-primary" type="button" name="barcodefield" id="barcodefield" style="">verify barcode</button>
                      <div class="form-group text-left mt-4" style="margin: auto; width: 60%;">

                        <table id="imeitable" class="table table-bordered m-auto">
                          <tr>
                            <th>IMEI NO</th>
                            <th>Status</th>
                            <th>Action</th>
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
                      <div class="form-group text-left">
                        <label for="address">Sold Amount:</label>
                        <input class="form-control" id="" name="amount" placeholder="Sold Amount" required>
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
                      <button type="button" class="btn btn-primary sig-pop1" id="">Add Signature</button><br>



                      

<!-- Modal start-->
<div class="modal" id="signModal1" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Seller's signature</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


<div class="wrapper">
 
  <canvas id="signature-pad1" class="signature-pad" width=400 height=200></canvas>
</div>
<div>
  
  
</div>

         
    
      </div>
      <div class="modal-footer">
      <button class="btn btn-primary" type="button" id="save1">Save changes</button>
      <button class="btn btn-secondary" type="button" id="clear1">Clear</button>
      
      </div>
    </div>
  </div>
</div>
<!-- modal end -->




<!-- Modal start-->
<div class="modal" id="signModal2" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Representative's signature</h5>
        <button type="button" class="btn-close2" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


<div class="wrapper">
 
  <canvas id="signature-pad2" class="signature-pad" width=400 height=200></canvas>
</div>
<div>
  
  
</div>

         
    
      </div>
      <div class="modal-footer">
      <button class="btn btn-primary" type="button" id="save2">Save changes</button>
      <button class="btn btn-secondary" type="button" id="clear2">Clear</button>
      </div>
    </div>
  </div>
</div>
    <textarea class="form-control d-none" id="texta1" name="url1" rows="5" ></textarea>
    <textarea class="form-control d-none" id="texta2" name="url2" rows="5" ></textarea>
      
                       
                      


                      <div class="form-group text-left">
                        <label for="Name">Representative's Signature:</label>
                      </div>
                      <button type="button" class="btn btn-primary sig-pop2" id="">Add Signature</button>

                      


<!--
<div class="modal" id="signModal2" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal  for repres signature</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


     

         
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-close" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
<!-- modal end -->

                      


                      <!--  signature end  -->
                      <button type="submit" class="btn btn-primary text-center" id="billbutton" disabled style="display: block; margin: auto; margin-top: 20px;">Submit Information</button>
                    </form>
                  </div><!--tab1 close-->
                </div>
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
    View list
  </button>
  <button type="button" class="btn btn-primary" >
   <a href="{{url('user/print/' .$bill['id'])}}" style="color: white;"> Print</a>
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
      <th scope="col">IMEI</th>
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



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                $("#billbutton").attr("disabled", false);
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).ready(function() {

  
  $("div#qr-reader__dashboard_section_csr > div button").click(function(){

    var x = document.getElementById("section_cameye");
    

    setTimeout(function() { 
      
  var length = $('#qr-reader__camera_selection  option').length;
  // alert(length);
  if(length > 1)
  {
    $("#qr-reader__camera_selection option:last").attr("selected", "selected");
  }


  $("div#qr-reader__dashboard_section_csr span:last-child button:first-child").css('display', 'block').css('margin',' auto');

  // alert(length);


  }, 4000);
  alert('dd');
  $("#qr-reader__dashboard_section_csr span:nth-child(2) button:nth-child(1)").click();
  });



  $(document).on('click', '.crosbtn', function () {
    var imeino = $(this).attr('iemeno');
    $( "."+imeino ).remove();

    // $(event.target).remove()
  });

  $(document).on('click', '#qr-reader__dashboard_section_csr span:last-child button:first-child', function () {
   var x = document.getElementById("section_cameye");
    if (x.style.display === "block") {
      x.style.display = "none";
    }
  });











  

  $('.sig-pop1').click(function(){
    $('html, body, #signModal1').css({
    overflow: 'hidden',
    height: '100%'
});

  $('#signModal1').modal('show');
  });

  $('.sig-pop2').click(function(){

    $('html, body').css({
    overflow: 'hidden',
    height: '100%'
    });

  $('#signModal2').modal('show');
  });




$('.btn-close, #save1').click(function(){
  $('#signModal1').modal('hide');
//   $('html, body, #signModal2').css({
//     overflow: 'auto',
//     height: 'auto'
// });
});

$('.btn-close2, #save2').click(function(){
  $('#signModal2').modal('hide');
//   $('html, body').css({
//     overflow: 'auto',
//     height: 'auto'
// });
});

// $('.modal-dialog').click(function() {
//    // do something here
//    alert('body is clicke');
// });
























//   $(document).on('click', '.open_cam', function () {
//   $("#qr-reader__dashboard_section_csr > div button").click();
//   $("#qr-reader__dashboard_section_csr span:nth-child(2) button:nth-child(2)").click();
  

//   setTimeout(function() { 
//     $("#btnChangeCamera").click();

//     var x = document.getElementById("section_cameye");
//     if (x.style.display === "none") {
//       x.style.display = "block";
//     } else {
//       x.style.display = "none";
//     }

    
    
//   }, 2000);

// });

  $(document).on('click', '.sig-submitBtn', function () {
     Swal.fire(
      'Signature Added',
      
    )
   });


   $(document).on('click', '.scan_img2', function () {
     $(".scan_img").click();
   });
    $(document).on('change', '.select_imi', function () {
       var value=$(this).val();
       $(".app_imi").val(value);
   });

   
   $("#form").on('click',(function(e) {
   $('.select_imi').empty();
   $('.sel_imi').empty();

   

   $(".loader2").css("display", "block");
   e.preventDefault();
   var img=$('#scan_img3').val();
   var _token = $("input[name='_token']").val();
   var op="";
   $.ajax({
   url: '{{URL::to('scan_img')}}',
   type: "POST",
   data: {_token: "{{ csrf_token() }}",'img': img},
    success: function(data)
    {
      $(".loader2").css("display", "none");
      for (var i = 0; i < data['msg'].length; i++) {
                                    op +='<option value="'+data['msg'][i]+'">'+data['msg'][i]+'</option>';
      }
       $('.sel_imi').append( '<label for="" style="float:left;">Please Select IMEI:</label>'+
                          '<select type="text" name="mobcompany" class="form-control select_imi" aria-label="Default select example" id="mobile"><option value="">Select An IMEI</option>'+op+'</select>');
    },
    error: function()
    {
      alert('something went wrong');
    },
  });
 }));
  

  

  




  
});
</script>
<script>
  



function encodeImageFileAsURL(element) {
             
              var file = element.files[0];
              var reader = new FileReader();
              reader.onloadend = function() {
                console.log('RESULT', reader.result);
                // $(".scan_img2").attr('src',reader.result);
                $("#scan_img3").val(reader.result);

                $("#form").click();
                
              }
              reader.readAsDataURL(file);

    
        }


</script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@3.0.0-beta.3/dist/signature_pad.umd.min.js"></script>



<script>


var signaturePad1 = new SignaturePad(document.getElementById('signature-pad1'), {
  backgroundColor: 'rgba(255, 255, 255, 0)',
  penColor: 'rgb(0, 0, 0)'
});
var saveButton1 = document.getElementById('save1');
var cancelButton1 = document.getElementById('clear1');
var texta1 = document.getElementById('texta1');

saveButton1.addEventListener('click', function (event) {

  var data1 = signaturePad1.toDataURL('image/png');

  texta1.setAttribute("value", data1);
// Send data to server instead...
  // window.open(data);
});

cancelButton1.addEventListener('click', function (event) {
  signaturePad1.clear();
});
</script>



<script>
var signaturePad2 = new SignaturePad(document.getElementById('signature-pad2'), {
  backgroundColor: 'rgba(255, 255, 255, 0)',
  penColor: 'rgb(0, 0, 0)'
});
var saveButton2 = document.getElementById('save2');
var cancelButton2 = document.getElementById('clear2');
var texta2 = document.getElementById('texta2');

saveButton2.addEventListener('click', function (event) {
  var canvas = document.getElementById('signature-pad2');

  var dataURL = canvas.toDataURL();
  // console.log(dataURL);

  // var data2 = signaturePad2.toDataURL('image/png');

  texta2.setAttribute("value", dataURL);
// Send data to server instead...
  // window.open(data);
});

cancelButton2.addEventListener('click', function (event) {
  signaturePad2.clear();
});
</script>



@endsection
