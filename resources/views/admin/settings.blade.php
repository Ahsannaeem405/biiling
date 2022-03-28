
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
            <div class="col-xl-12 col-lg-12 col-12">
                @if (session()->has('success'))
                <div class="alert alert-success">
                  {{ session()->get('success') }}
                </div>
                @endif
                 
                        @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
            </div>

            <div class="col-xl-8 col-lg-7 col-12">
                <h4>Personal Details</h4>
                  <form class="text-center px-0 px-lg-5" method="POST" action="{{url('admins/update_user')}}" id="form-0">
                    @csrf  
                                                    
                                               
                    <input type="hidden" class="form-control" id="UName" placeholder="User Name" value="{{Auth::user()->id}}" name="id">
                                                 
                <div class="row personal-details">
                    <div class="col-12 mt-3">
                        <label style="float: left;">Name</label>
                        <input type="text" class="form-control"  value="{{Auth::user()->name}}" name="name" >
                    </div>
                    <div class="col-12 mt-3">
                        <label style="float: left;">Email</label>
                        <input type="email" class="form-control"  value="{{Auth::user()->email}}" name="email">
                    </div>
                    <div class="col-12 mt-5 text-right">
                        <button class="btn btn-primary w-50">Save Changes</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-xl-4 col-lg-5 col-12 mt-4 mt-lg-0 text-center">
                <div class="change-pass p-4">
                    <h4>Change Password</h4>
                   
                        <form method="post" action="{{ url('admins/change-password')}}" enctype="multipart/form-data">
                            @csrf
                    <div class="form-group mt-4">
                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Old Password" name="current_password" required>
                    </div>
                    <div class="form-group mt-4">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Password" name="password">
                    </div>
                    <div class="form-group mt-4">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm New Password" name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-danger mt-4">Save Password</button>
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