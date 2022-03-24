
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
                      <!-- <div id="navtab2" class="w-100 text-center theme-tabs active " onclick="changeTab2()" >New Bill</div> -->
                      <div id="navtab1" class="w-100 text-center theme-tabs " onclick="changeTab1()" >All Bills</div>
                    </div>
                  </div><!--mobile-menu-bar-->

                  <!--tab1 close-->

                  <div id="tab2" class=" px-2 py-4 py-md-2">
                      <div class="table-responsive mt-4">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                              <th> user name </th>
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
                            <td> {{$bill->user->name}} </td>
                            <td> {{$bill->mobileName->name}} </td>

                              <td> {{$bill['seller_name']}} </td>
                              <td> {{$bill['seller_address']}} </td>
                              <td> {{$bill['driv_licence']}} </td>
                              <td> {{$bill['date_of_birth']}} </td>
                              <td> <img src="{{$bill['sel_sign']}}" width="100px" height="60px"> </td>
                              <td> <img src="{{$bill['rep_sign']}}" width="100px" height="60px"> </td>
                            </tr>
                           @endforeach
                          </tbodyy>
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


<script src="http://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>



@endsection