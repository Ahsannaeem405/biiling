
@extends('user.layout1')
@section('content')
  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 class="">
          MY Bill
        </h2>
        <div class="col-lg-12 grid-margin stretch-card mt-4">
                <div class="card">
                  <div class="card-body">
                    
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