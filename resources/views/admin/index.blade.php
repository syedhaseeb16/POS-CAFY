@extends('admin.layout')
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<!-- Custom fonts for this template-->
<link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') }}" >
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('title', 'Menu | ')


@section('menu_active', 'active')
@section('m_active', '')
@section('s_active', '')
@section('i_active', '')
@section('mem_active', '')



@section('content')
<!-- body -->



<div class="container-fluid" style="" >
	<div class="container">
		<div class="row py-5">
			<!-- left side div -->
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<input type="text" class="form-control p-1 text-center font-weight-bold rounded" placeholder="SEARCH">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<input type="number" class="form-control p-1 text-center font-weight-bold rounded" id="qty" onfocus=this.value='' placeholder="QUANTITY">
						</div>
					</div>											
				</div>
				<div class="row">
					<div class="col-lg-12 rounded scroller" style="background: rgba(0, 0, 0, 0.5);">
						<div class="row my-2">
							@foreach($items as $item)
							<div class="col-sm-3">
								<div class="card mt-4 itemhover" onclick="addrow('{{ $item->item_name }}','{{ $item->item_price }}')">
									<img class="card-img-top pimg mx-auto my-3" src="images/{{ $item->item_img }}" alt="Card image cap">
									<div class="card-body p-1 text-center" style="background-color: #1D7CA7;">
										<span class="font-weight-bold text-white">{{ $item->item_name }}</span>
									</div>
								</div>
							</div>
							@endforeach		
						</div>
					</div>
				</div>
			</div>
			<!-- left side div -->

			<!-- right side div -->
			<div class="col-lg-6">
				<div class="row py-2">
					<div class="col-lg-4 pt-4 col-xs-4">
						<span class="font-weight-bold h4 text-white text-uppercase" >Bill No 50/2019</span>
					</div>
					<div class="col-lg-8 mb-2 col-xs-8 mt-xs-2">
						<form class="membership" action="" style="margin-left: auto;max-width:250px">
							<input type="text" placeholder="Membership No." name="search2">
							<button type="submit"><i class="fas fa-user-check text-white"></i></button>
						</form>

					</div>

				</div>
				<script type="text/javascript">
					function addrow(item_name,item_price) {
						$("#result").hide();
						var t = document.getElementById("table");
						var totalrows = document.getElementById("table").rows.length;
						var row = table.insertRow(totalrows);
						var c1 = row.insertCell(0);
						var c2 = row.insertCell(1);
						var c3 = row.insertCell(2);
						var c4 = row.insertCell(3);
						var c5 = row.insertCell(4);
						var qty=document.getElementById("qty").value;
						var cqty;
						var totalprice;
						if (qty=="") {
							cqty=1;
						}
						else
						{
							cqty=qty;
						}

						var p=item_price;
						totalprice=cqty*p;
						c1.innerHTML = item_name;
						c2.innerHTML = cqty;
						c3.innerHTML = item_price;
						c4.innerHTML = totalprice;
						c5.innerHTML ='<button type="button" class="btn btn bg-transparent border-0 p-0"><i class="fas fa-trash-alt text-danger "></i></button>';
						document.getElementById("qty").value = "";

						var index;
						for(var i = 1; i < t.rows.length; i++)
						{
							t.rows[i].cells[4].onclick = function()
							{
								index = this.parentElement.rowIndex;
								t.deleteRow(index);
							};
						}
					}



					function deltable() {
						var t = document.getElementById("table");
						var totalrows = document.getElementById("table").rows.length;
						document.getElementById("coupan").value = "";
						document.getElementById("stotal").value = "";
						document.getElementById("sdiscount").value = "";
						document.getElementById("dtotal").value = "";
						

						var index;
						for(var i = 1; i < t.rows.length; i++)
						{
							t.deleteRow(i);
							deltable();	
						}
					}
				</script>
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar " style="background: rgba(0, 0, 0, 0.5);">
							<table class="table table-light rounded text-white saletable  " border="1" id="table" style="background: rgba(0, 0, 0, 0.1);" >
								<thead>
									<tr>
										<th scope="col" >Item Name</th>
										<th scope="col" >Qty</th>
										<th scope="col" >Price</th>
										<th scope="col" >Ext-Price</th>
										<th scope="col" >&nbsp;</th>
									</tr>
								</thead>
								<tbody class="text-center">
									
								</tbody>
							</table>
						</div>
					</div>											
				</div>
				<form id="saleForm" name="saleForm" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="order_no" id="order_no">
					<div class="alert bg-success text-white py-0" id="result" style="display: none;" role="alert">
					</div>
					<div class="row py-3">
						<div class="col-sm-4">
							<label for="coupan" class="text-white font-weight-bold">Coupan No:</label>
							<input type="text" class="form-control text-white" id="coupan" placeholder="AX25VZ" style="background: rgba(0, 0, 0, 0.5);">
						</div>
						<div class="col-sm-8">
							<div class="form-inline float-right">
								<label for="stotal" class="text-white font-weight-bold">Sub-Total: </label>
								<input type="text" class="form-control text-white" name="stotal" id="stotal" style="background: rgba(0, 0, 0, 0.5);" readonly>
							</div>
							<div class="form-inline mt-3 float-right">
								<label for="discount" class="text-white font-weight-bold">Discount: </label>
								<input type="text" class="form-control text-white" id="sdiscount" name="sdiscount"  style="background: rgba(0, 0, 0, 0.5);" readonly>
							</div>
							<div class="form-inline mt-3 float-right">
								<label for="stotal" class="text-white font-weight-bold">Total: </label>
								<input type="text" class="form-control text-white" name="dtotal" id="dtotal"  style="background: rgba(0, 0, 0, 0.5);" readonly>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-right">
							<span class="btn btn-dark text-white" onclick="deltable();">Cancel</span>
							<a href="javascript:void(0)"  class="btn btn-dark text-white" id="saveBtn">Print</a>
							<span class="btn btn-dark text-white" onclick="getSum()">Generate</span>
						</div>
					</div>
				</form>
			</div>
			<!-- right side div -->
			<script type="text/javascript">
				// caculate total/sum value
				
				function getSum()
				{
					var table = document.getElementById("table");
					sumVal = 0;
					for(var i = 1; i < table.rows.length; i++){
						sumVal = sumVal + parseInt(table.rows[i].cells[3].innerHTML);
					}
					document.getElementById("stotal").value = sumVal;
					var coupan=document.getElementById("coupan").value;
					var discount=100;
					var total=sumVal;
					if (coupan=="123") {
						if (discount<sumVal) {
							total=sumVal-discount;
						}
						else
						{
							total=0;
						}
					}
					else
					{
						total=sumVal;
						discount=0;
					}
					document.getElementById("sdiscount").value = discount;
					document.getElementById("dtotal").value = total;
					console.log("Sum => "+sumVal);       
				}
			</script>
		</div>

	</div>

</div>
<div class="container-fluid text-center bg-dark py-3 mt-5">
	<span class="text-white"> Copyright@imnadir07@gmail.com</span>
	
</div>
@endsection
@section('footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="{{asset('https://code.jquery.com/jquery-3.3.1.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

<!-- datatable script -->
<script type="text/javascript">
	$(function () {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$('#saveBtn').click(function (e) {
			e.preventDefault();

			$.ajax({
				data: {
					stotal: $("#stotal").val(),
					sdiscount: $("#sdiscount").val(),
					dtotal: $("#dtotal").val()
				},
				url: "{{ route('sales.store') }}",
				type: "POST",
				dataType: 'JSON',
				success: function (data) {


					deltable();
					$("#result").html(data).show();
					


              // table.draw();

          },
          error: function (data) {
          	alert('Not Okay');
          	console.log('Error:', data);
          	$('#saveBtn').html('Save Changes');
          }
      });
		});
	});
</script>
<!-- datatable script -->
@endsection