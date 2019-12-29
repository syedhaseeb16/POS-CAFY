@extends('admin.layout')
@section('head')

<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<!-- Custom fonts for this template-->
<link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') }}" >



@endsection

@section('title', 'Statistics | ')

@section('menu_active', '')
@section('m_active', '')
@section('s_active', 'active')
@section('i_active', '')
@section('mem_active', '')



@section('content')
<!-- body -->
<div class="container-fluid">
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-12">
				<!-- Icon Cards-->
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white o-hidden h-100" style="background: rgba(0, 0, 0, 0.4);">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-comments"></i>
								</div>
								<div class="mr-5">26 New Complains!</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white o-hidden h-100" style="background: rgba(0, 0, 0, 0.4);">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-list"></i>
								</div>
								<div class="mr-5">11 Todays Orders!</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white o-hidden h-100" style="background: rgba(0, 0, 0, 0.4);">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-shopping-cart"></i>
								</div>
								<div class="mr-5">123 weekly Orders!</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white o-hidden h-100" style="background: rgba(0, 0, 0, 0.4);">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-life-ring"></i>
								</div>
								<div class="mr-5">1300 Monthly Orders!</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!-- Icon Cards-->
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="container">
		<div class="row py-5">
			<div class="col-lg-12">
				<div class="card bg-transparent text-white" >
					<div class="card-header font-weight-bold" style="font-size: 20px; background: #1C9CD6;">
						<i class="fas fa-table"></i>
						Max Restaurant Recent Sales
					</div>
					<div class="card-body" style="background: rgba(0, 0, 0, 0.4);">
						<table class="table table-bordered text-white data-table" style="width:100%">
							<thead>
								<tr>
									<th>#</th>
									<th>Order No</th>
									<th>Amount</th>
									<th>Discount</th>
									<th>Total_Price</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
							<tfoot>
								<tr>
									<th>#</th>
									<th>Order No</th>
									<th>Amount</th>
									<th>Discount</th>
									<th>Total_Price</th>
								</tr>
							</tfoot>
						</table>

					</div>
					<div class="card-footer small text-white" style=" background: #1C9CD6;">
						Updated yesterday at 11:59 PM
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card bg-transparent text-white" >
					<div class="card-header font-weight-bold" style="font-size: 20px; background: #1C9CD6;">
						<i class="fas fa-table"></i>
						Max Recent Complains
					</div>
					<div class="card-body scroller" style="background: rgba(0, 0, 0, 0.4);height: 250px;">
						<div class="px-5">
							@foreach($com As $c)
							<div class="comment-body">
								<div class="user-img"> <i class="fas fa-user fa-2x"></i><span class="h4"> Anonymous</span>
								</div>
								<div class="mail-contnet">
									<span class="time">{{ $c->created_at }}</span>
									<br/><span class="mail-desc">{{ $c->complains }}</span> 
								</div>
							</div>
							<br>
							@endforeach
							
							
						</div>
					</div>
					<div class="card-footer small text-white" style=" background: #1C9CD6;">
						Updated yesterday at 11:59 PM
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
<div class="container-fluid text-center bg-dark py-3 mt-5">
	<span class="text-white"> Copyright@imnadir07@gmail.com</span>
	
</div>

@endsection

@section('footer')
<!-- <script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="{{asset('https://code.jquery.com/jquery-3.3.1.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}"></script>


<!-- datatable script -->
<script type="text/javascript">
	$(function () {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		var table = $('.data-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: "{{ route('sales.index') }}",
			columns: [
			{data: 'DT_RowIndex', name: 'DT_RowIndex'},
			{data: 'order_no', name: 'order_no'},
			{data: 'amount', name: 'amount'},
			{data: 'discount', name: 'discount'},
			{data: 'total_amount', name: 'total_amount'},
			]
		});
		
    
   

   

});
</script>
<!-- datatable script -->


@endsection