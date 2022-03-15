
@extends('admin.layout')
@section('content')
<section class="setting">
    <div class="container my-5">
        <div class="row ">
            <div class="col-12 text-center">
                <h2>Account Setting</h2>
            </div>
        </div >

        <div class="row mt-4">
            <div class="col-xl-8 col-lg-7 col-12">
                <h4>Personal Details</h4>
                <div class="row personal-details">
                    <div class="col-12 mt-3">
                        <label>Name</label>
                        <input type="text" class="form-control" value="Name">
                    </div>
                    <div class="col-12 mt-3">
                        <label>Email</label>
                        <input type="email" class="form-control" Value="abc@xyz.com">
                    </div>
                    <div class="col-12 mt-5 text-right">
                        <button class="btn btn-primary w-50">Save Changes</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-12 mt-4 mt-lg-0 text-center">
                <div class="change-pass p-4">
                    <h4>Change Password</h4>
                    <form action="">
                    <div class="form-group mt-4">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Old Password">
                    </div>
                    <div class="form-group mt-4">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Password">
                    </div>
                    <div class="form-group mt-4">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm New Password">
                    </div>

                    <button type="button" class="btn btn-danger mt-4">Save Password</button>
                    </form>
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



@endsection