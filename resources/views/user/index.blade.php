
@extends('user.layout1')
@section('content')
  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 class="">
          New Bill
        </h2>
      </div>
      <div  class="container ">
          <div style="margin-top: 100px; background-color: #1376b1; box-shadow: 2px 2px 20px grey;" class="col-sm-6 offset-md-2 col-md-8 border rounded">
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

@endsection