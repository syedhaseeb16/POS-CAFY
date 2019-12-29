@extends('admin.layout')
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<!-- Custom fonts for this template-->
<link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') }}" >
@endsection

@section('title', 'Members | ')

@section('menu_active', '')
@section('m_active', '')
@section('s_active', '')
@section('i_active', '')
@section('mem_active', 'active')


@section('content')
<!-- body -->
<div class="container-fluid" style="" >
	<div class="container">
		<div class="row py-5">
			<div class="col-lg-12">
				<div class="card bg-transparent text-white" >
					<div class="card-header font-weight-bold" style="font-size: 20px; background: #1C9CD6;">
						<i class="fas fa-table"></i>
						Max Seats Reservations
					</div>
					<div class="card-body" style="background: rgba(0, 0, 0, 0.5);">
						<table id="example" class="table table-bordered text-white" style="width:100%">
							<thead>
								<tr>
									<th>Booking id</th>
									<th>Booking Seats</th>
									<th>Booking date</th>
								</tr>
							</thead>
							<tbody>
								@foreach($Reservation As $r)
								<tr>
									<td>{{ $r->id }}</td>
									<td>{{$r->peoples }}</td>
									<td>{{ $r->DT }}</td>
								</tr>
								@endforeach
								
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
<div class="container-fluid text-center bg-dark py-3 mt-5">
	<span class="text-white"> Copyright@imnadir07@gmail.com</span>
	
</div>
@endsection

@section('footer')
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<script src="{{asset('https://code.jquery.com/jquery-3.3.1.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js')}}"></script>

@endsection