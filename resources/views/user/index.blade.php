
@extends('user.layout1')
@section('content')
    <div class="container mt-3">
      <div class="heading_container heading_center">
        <h2 class="" id="toggleBtn" stat="1">


          <label class="switch d-none pageslider" >
            <input type="checkbox" id="togBtn">
            <div class="slider"></div>
        </label>
        </h2>
      </div >
  <section class="product_section layout_padding" style="background-color: #f8f9fe;!important; padding-top: 15px;" id="formsection">

      <div  class="container ">
          <div style="background-color: white; color:black; box-shadow: 2px 2px 20px grey;" class="col-sm-6 offset-md-2 col-md-8 border rounded">
            <div style="margin-top: 30px; margin-bottom: 30px;"  class="box col-sm-12">
            <form>
            <button id="barscan" type="button" class="btn btn-primary" onclick="scannerr()">click to scan barcode</button>
            <br><br>
            <p id="para">having problem while scaning barcode?</p>


                <div class="form-group" id="imeidiv" style="display:none;">
                  <label for="imei">Enter imei No:</label>
                  <input type="text" class="form-control" id="imei" placeholder="IMEI">
                </div>
                <div class="form-group ">
                  <label for="Name">Seller's Name:</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group ">
                  <label for="address">Seller's Address:</label>
                  <textarea class="form-control" id="address" placeholder="seller address"></textarea>
                </div>
                <div class="form-group ">
                  <label for="license">Drivers License #:</label>
                  <input type="text" class="form-control" id="license" placeholder="license number">
                </div>

                <div class="form-group ">
                  <label for="dob">DOB:</label>
                  <input type="date" class="form-control" id="dob">
                </div>

                <div class="form-group ">
                  <label for="sellersignature">Signature of Seller:</label>
                  <input type="text" class="form-control" id="sellersignature">
                </div>

                <div class="form-group ">
                  <label for="repsignature">Signature of representative:</label>
                  <input type="text" class="form-control" id="repsignature">
                </div>


                <!-- <div class="form-group">
                  <label for="Email1">Email</label>
                  <input type="email" class="form-control" id="Email1" placeholder="Email">
                </div>  
                <div class="form-group">
                  <label for="Inputselect">Select Number</label>
                  <select class="form-control" >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </div>  
                <div class="form-group">
                  <label for=" Email1msg">Message:</label>

                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="yesno"> Yes / No
                  </label>
                </div> -->

                <button type="submit" class="btn btn-primary">Submit Information</button>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <section class="product_section layout_padding" id="tablesection" style="display:none;">
    <div class="container">
      <div class="heading_container heading_center">
        <div class="w-100">
                <div class="card">
                    
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
                </div>
              </div>
      </div>
      
      </div>
    </div>
  </section>
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

@endsection