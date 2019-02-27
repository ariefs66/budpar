<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
<body style='    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;'>
<div style="width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    max-width: 1140px;
    box-sizing: border-box;">
  <div style='position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;'>
		<div style='padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0.03);
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);'>
		Invoice
		<strong>{{$data['tgl']}}</strong> 
		  <span style='float: right !important;'> <strong>Order Id:</strong> {{$data['id']}}</span>

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
</body>
