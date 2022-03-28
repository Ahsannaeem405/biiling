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
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session()->has('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div>
            @endif
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
                    
                    <form class="text-center px-0 px-lg-5" method="POST" action="{{url('admins/add_user')}}" >
                    @csrf 
                  
                      <div class="form-group text-left">
                        <label for="Name">Name*:</label>
                        <input type="text" class="form-control" id="fName" placeholder="First Name" name="name">
                      </div>
                     
                      <div class="form-group text-left">
                        <label for="address">Email*</label>
                        <input type="email" class="form-control" id="email" placeholder="User Email" name="email">
                      </div>
                      <div class="form-group text-left">
                        <label for="address">Password*</label>
                        <input type="password" class="form-control" id="lName" placeholder="Password" name="password">
                      </div>
                       <div class="form-group text-left">
                        <label for="address">Confirm Password *</label>
                        <input type="password" class="form-control" id="lName" placeholder="Confirm Password" name="password_confirmation">
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
                            @php $f=0; @endphp
                          @foreach($users as $user)
                          @php $f++; @endphp
                          <tr>
                              <td> {{$user->id}} </td>
                              <td> {{$user->name}}  </td>
                              <td> {{$user->email}} </td>
                              <td class="d-flex justify-content-center">
                              <button type="button" class="btn btn-outline-primary mx-3  d-flex justify-content-center align-items-center"  data-toggle="modal" data-target="#exampleModal{{$f}}">
                                <i class="fas fa-edit" aria-hidden="true"></i>
                                <span class="d-none d-md-block">Edit</span>
                              </button>
                              
                              <button type="button" class="btn btn-outline-danger d-flex justify-content-center align-items-center">
                                
                                <a href="{{url('admins/delete/' .$user->id)}}" title="delete" class="delete" onclick="return confirm('Are you sure you want to delete this item')"><i class="fas fa-trash" ></i></a>
                              </button>
                              </td>
                            </tr>
                            <div class="modal fade mt-5" id="exampleModal{{$f}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5>Edit User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      
                                      <form class="text-center px-0 px-lg-5" method="POST" action="{{url('admins/update_user')}}" id="form-0">
                                        @csrf  
                                                    
                                                <div class="form-group text-left">
                                                    <label for="Name">User Name:</label>
                                                    <input type="text" class="form-control" id="UName" placeholder="User Name" value="{{$user->name}}" name="name">
                                                    <input type="hidden" class="form-control" id="UName" placeholder="User Name" value="{{$user->id}}" name="id">
                                                  </div>
                                                
                                                  <div class="form-group text-left">
                                                    <label for="address">Email</label>
                                                    <input type="email" class="form-control" id="email" placeholder="User Email" value="{{$user->email}}" name="email">
                                                  </div>
                                                 
                                                  
                                                  <button type="submit" class="btn btn-primary text-center">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                              </div>
                            </div>
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
<!-- Modal -->



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

@endsection