<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
<div class="container">
  <div class="card">
<div class="card-header">
Invoice
<strong>{{$data['tgl']}}</strong> 
  <span class="float-right"> <strong>Order Id:</strong> {{$data['id']}}</span>

</div>
<div class="card-body">
<div class="row mb-4">
<div class="col-sm-6">
<h6 class="mb-3">Ordering:</h6>
<div>
<strong>{{$data['nama']}}</strong>
</div>
<!-- <div>Madalinskiego 8</div> -->
<!-- <div>71-101 Szczecin, Poland</div> -->
<div>Email: {{$data['email']}}</div>
<div>Phone: {{$data['tlp']}}</div>
</div>

<div class="col-sm-6">
<h6 class="mb-3">Payment:</h6>
<div>
<strong>{{$data['namarek']}}</strong>
</div>
<div><strong>{{$data['norek']}}</strong></div>
<!-- <div>43-190 Mikolow, Poland</div>
<div>Email: marek@daniel.com</div>
<div>Phone: +48 123 456 789</div> -->
</div>



</div>

<div class="table-responsive-sm">
<table class="table table-striped">
<thead>
<tr>
<th class="center">#</th>
<th>Item</th>
<th>Description</th>

<th class="right">Unit Cost</th>
  <th class="center">Qty</th>
<th class="right">Total</th>
</tr>
</thead>
<tbody>
@foreach ($result as $val)
    <tr>
		<td class="center">{{$loop->iteration}}</td>
		<td class="left strong">{{$val['item']}}</td>
		<td class="left">{{$val['desc']}}</td>

		<td class="right">{{$val['unitcost']}}</td>
		  <td class="center">{{$val['qty']}}</td>
		<td class="right">{{$val['total']}}</td>
	</tr>
@endforeach

<!-- <tr>
<td class="center">3</td>
<td class="left">Hosting</td>
<td class="left">1 year subcription</td>

<td class="right">$499,00</td>
  <td class="center">1</td>
<td class="right">$499,00</td>
</tr>
<tr>
<td class="center">4</td>
<td class="left">Platinum Support</td>
<td class="left">1 year subcription 24/7</td>

<td class="right">$3.999,00</td>
  <td class="center">1</td>
<td class="right">$3.999,00</td>
</tr> -->
</tbody>
</table>
</div>
<div class="row">
<div class="col-lg-4 col-sm-5">

</div>

<div class="col-lg-4 col-sm-5 ml-auto">
<table class="table table-clear">
<tbody>
<tr>
<td class="left">
<strong>Subtotal</strong>
</td>
<td class="right">{{$data['subtotal']}}</td>
</tr>
<tr>
<td class="left">
<strong>Discount (0%)</strong>
</td>
<td class="right">{{$data['discount']}}</td>
</tr>
<!-- <tr>
<td class="left">
 <strong>VAT (10%)</strong>
</td>
<td class="right">$679,76</td>
</tr> -->
<tr>
<td class="left">
<strong>Total</strong>
</td>
<td class="right">
<strong>{{$data['total']}}</strong>
</td>
</tr>
</tbody>
</table>

</div>

</div>

</div>
</div>
</div>