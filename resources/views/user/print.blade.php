<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
    body{

    }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
	<h1><center>Bill of Sale</center></h1>
	<hr>
<p>This Bill of Sale was drafted and signed on <u>{{ date('d/m/Y')}}</u> </p>
<p>The following item(s) listed below were sold to <b>Cell Phone Repair Genius LLC:</b></p>
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
    @php $f=0; @endphp
                           
                          
                            {{-- @dd($bills[2])
 --}}
                            @php $f++;
                                $imi=explode(",",$bill->imi);
                                $status=explode(",",$bill->status);
                                $service_id=explode(",",$bill->service_id);

                             @endphp 
    

   @for ($i=0; $i < count($imi); $i++)
  
   @php 
                                $mob=App\Models\Mobilecompanie::where('service_id',$service_id[$i])->first();
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
<p>Sold for the amount ${{$bill->amount}}.</p>
<hr>
<p>Seller hereby acknowledges that the above sale price represents the fair market value of said item or items.<br>
Seller is the lawful owner of the above listed items. Said items are clear of all encumbrances and owner has the right to sell these described items.<br>
Seller hereby certifies that said item has not been stolen and has come to possess said item in a lawful manner.<br> 
Seller also makes the representation that the above items are as described, in stated condition, and that all items are 100% authentic and not counterfeit.<br>
Cell Phone Repair Genius LLC will do our best to erase any personal data left on any electronic devices that we purchase; however, we will not be held responsible for any data recovered by any third party, or damages incurred from data left on the device(s). Please make sure to delete all sensitive data permanently prior to selling your device to Cell Phone Repair Genius LLC. <br>
<b>I have read, understand, and agree to these terms listed above _______________________________</b></p>
<hr>
<p>Seller’s Name:<u>{{$bill->seller_name}}</u> <br>
Seller’s Address: <u>{{$bill->seller_address}}</u> <br>
Drivers License #: <u>{{$bill->driv_licence}} </u>&nbsp; &nbsp;D.O.B:{{date('d/m/Y', strtotime($bill->date_of_birth))}} <br>
I (the seller) certify that I am the person whose picture appears on the government issued ID and hereby acknowledge the above info to be true and accurate.</p>
<hr>
Signature of Seller:<u><img src="{{$bill->sel_sign}}" style="width:20%;"></u>  Date: <u>{{ date('d/m/Y')}}</u><br>

Signature of representative:<img src="{{$bill->rep_sign}}"  style="width:20%;">  Date: <u>{{ date('d/m/Y')}}</u>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
	
	

  $(document).ready(function () {
        window.print();
        setTimeout("closePrintView()", 1000);
    });
    function closePrintView() {
          var user = "{{ Auth::user()->role }}";
          if(user==1){
            window.location.href = "{{ route('admins/index')}}";

          }
          else{
            window.location.href = "{{ route('user/index')}}";

          }
          
    }
</script>
</html>
