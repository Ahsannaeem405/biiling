
@extends('admin.layout')
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
                      <div id="navtab2" class="w-100 text-center theme-tabs active " onclick="changeTab2()" >New User</div>
                      <div id="navtab1" class="w-100 text-center theme-tabs " onclick="changeTab1()" >All User</div>
                    </div>
                  </div><!--mobile-menu-bar-->

                  <div id="tab1" class=" mt-5 px-2 py-4 " >
                    <h4 class="text-center pb-3">Add New User</h4>
                    <form class="text-center px-0 px-lg-5">
                    <div class="form-group text-left">
                        <label for="Name">User Name:</label>
                        <input type="text" class="form-control" id="UName" placeholder="User Name">
                      </div>
                      <div class="form-group text-left">
                        <label for="Name">First Name:</label>
                        <input type="text" class="form-control" id="fName" placeholder="First Name">
                      </div>
                      <div class="form-group text-left">
                        <label for="Name">Last Name:</label>
                        <input type="text" class="form-control" id="lName" placeholder="Last Name">
                      </div>
                      <div class="form-group text-left">
                        <label for="address">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="User Email">
                      </div>
                      <div class="form-group text-left">
                        <label for="address">Password</label>
                        <input type="password" class="form-control" id="lName" placeholder="User Password">
                      </div>
                      
                      <button type="submit" class="btn btn-primary text-center">Add User</button>
                    </form>
                  </div><!--tab1 close-->

                  <div id="tab2" class=" px-2 py-4 py-md-2 d-none">
                  <h4 class="text-center py-3">All Users</h4>
                      <div class="table-responsive mt-4">
                        <table class="table table-bordered user-table">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> User name </th>
                              <th> Email</th>
                              <th>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td> 1 </td>
                              <td> Herman Beck </td>
                              <td> abc@xyz.com</td>
                              <td class="d-flex justify-content-center">
                              <button type="button" class="btn btn-outline-primary mx-3  d-flex justify-content-center align-items-center"  data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-pencil-square-o px-2" aria-hidden="true"></i>
                                <span class="d-none d-md-block">Edit</span>
                              </button>
                              <button type="button" class="btn btn-outline-danger d-flex justify-content-center align-items-center">
                                <i class="fa fa-trash-o px-2" aria-hidden="true"></i>
                                <span class="d-none d-md-block"> Delete</span>
                              </button>
                              </td>
                            </tr>
                            <tr>
                              <td> 2 </td>
                              <td> Herman Beck </td>
                              <td> abc@xyz.com</td>
                              <td class="d-flex justify-content-center">
                              <button type="button" class="btn btn-outline-primary mx-3  d-flex justify-content-center align-items-center"  data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-pencil-square-o px-2" aria-hidden="true"></i>
                                <span class="d-none d-md-block">Edit</span>
                              </button>
                              <button type="button" class="btn btn-outline-danger d-flex justify-content-center align-items-center">
                                <i class="fa fa-trash-o px-2" aria-hidden="true"></i>
                                <span class="d-none d-md-block"> Delete</span>
                              </button>
                              </td>
                            </tr>
                            <tr>
                              <td> 3 </td>
                              <td> Herman Beck </td>
                              <td> abc@xyz.com</td>
                              <td class="d-flex justify-content-center">
                              <button type="button" class="btn btn-outline-primary mx-3  d-flex justify-content-center align-items-center"  data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-pencil-square-o px-2" aria-hidden="true"></i>
                                <span class="d-none d-md-block">Edit</span>
                              </button>
                              <button type="button" class="btn btn-outline-danger d-flex justify-content-center align-items-center">
                                <i class="fa fa-trash-o px-2" aria-hidden="true"></i>
                                <span class="d-none d-md-block"> Delete</span>
                              </button>
                              </td>
                            </tr>
                            <tr>
                              <td> 1 </td>
                              <td> Herman Beck </td>
                              <td> abc@xyz.com</td>
                              <td class="d-flex justify-content-center">
                              <button type="button" class="btn btn-outline-primary mx-3  d-flex justify-content-center align-items-center"  data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-pencil-square-o px-2" aria-hidden="true"></i>
                                <span class="d-none d-md-block">Edit</span>
                              </button>
                              <button type="button" class="btn btn-outline-danger d-flex justify-content-center align-items-center">
                                <i class="fa fa-trash-o px-2" aria-hidden="true"></i>
                                <span class="d-none d-md-block"> Delete</span>
                              </button>
                              </td>
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
<!-- Modal -->
<div class="modal fade mt-5" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form class="text-center px-0 px-lg-5">
                        <h3>Edit User</h3>
                    <div class="form-group text-left">
                        <label for="Name">User Name:</label>
                        <input type="text" class="form-control" id="UName" placeholder="User Name">
                      </div>
                      <div class="form-group text-left">
                        <label for="Name">First Name:</label>
                        <input type="text" class="form-control" id="fName" placeholder="First Name">
                      </div>
                      <div class="form-group text-left">
                        <label for="Name">Last Name:</label>
                        <input type="text" class="form-control" id="lName" placeholder="Last Name">
                      </div>
                      <div class="form-group text-left">
                        <label for="address">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="User Email">
                      </div>
                      <div class="form-group text-left">
                        <label for="address">Password</label>
                        <input type="password" class="form-control" id="lName" placeholder="User Password">
                      </div>
                      
                      <button type="submit" class="btn btn-primary text-center">Save Changes</button>
            </form>
        </div>
    </div>
  </div>
</div>


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


<script src="http://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script type="text/javascript">
  function closeScannerr(){
    document.getElementById("scandiv").style.display = "none";
  }

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