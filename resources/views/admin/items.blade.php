

@extends('admin.layout')
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<!-- Custom fonts for this template-->
<link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') }}" >

<!-- <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet"> -->

<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('title', 'Items | ')

@section('menu_active', '')
@section('m_active', '')
@section('s_active', '')
@section('i_active', 'active')
@section('mem_active', '')




@section('content')
<!-- body -->
<div class="container-fluid" style="" >
	<div class="container">
    <div class="alert bg-success text-white text-center mt-5" id="result"  role="alert" style="display: none;"></div>
         <div class="alert bg-danger text-white text-center mt-5" id="dresult"  role="alert" style="display: none;"></div>
		<div class="row pb-5">
			<div class="col-lg-12">
				
				<div class="card bg-transparent text-white" >
					<div class="card-header font-weight-bold" style="font-size: 20px; background: #1C9CD6;">
						<i class="fas fa-table"></i>
						Max Menu Items
						<a class="btn btn-dark text-light float-right" href="javascript:void(0)" id="createNewItem"> Add New Items</a>
						<!-- <button class="btn btn-dark text-light float-right" type="button" data-toggle="modal" data-target="#exampleModalCenter">Add New Items</button> -->
					</div>
					<div class="card-body" style="background: rgba(0, 0, 0, 0.5);">
						<table class="table table-bordered text-white data-table" style="width:100%">
							<thead>
								<tr>
									<th>Item ID</th>
									<th>Item Name</th>
									<th>Available Stock</th>
									<th>Price</th>
									<th width="150px">Action</th>
								</tr>
							</thead>
							<tbody >
								
							</tbody>
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

<!-- ajex modal -->
<div class="modal fade" id="ajaxModel" aria-hidden="true" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header bg-dark text-white">
				<h5 class="modal-title" id="modelHeading">NEW ITEM DETAILS:</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
            <div class="modal-body">
            	<form id="itemForm" name="itemForm" method="POST" enctype="multipart/form-data" name="add_product">
            		{{ csrf_field() }}
            		<input type="hidden" name="item_id" id="item_id">
            		<div class="form-group">
            			<label>Item Name:</label>
            			<input type="text" name="item_name" id="item_name" class="form-control" placeholder="">
            		</div>

            		<div class="form-group">
            			<label> Quantity:</label>
            			<input type="number" name="item_qty" id="item_qty" class="form-control" placeholder="">
            		</div>

            		<div class="form-group">
            			<label> Price:</label>
            			<input type="number" name="item_price" id="item_price" class="form-control" placeholder="">
            		</div>
            		<div class="form-group ">
            			<label> Upload Product Image:</label>
            			<input type="file" name="item_img" id="file">
            		</div>


            	</div>
            	<div class="modal-footer">
            		<button type="submit" class="btn btn-success" id="saveBtn">Save</button>
            		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            	</div>
            </form>
        </div>
    </div>
</div>


<!-- ajex modal end -->

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
			ajax: "{{ route('items.index') }}",
			columns: [
			{data: 'DT_RowIndex', name: 'DT_RowIndex'},
			{data: 'item_name', name: 'item_name'},
			{data: 'item_qty', name: 'item_qty'},
			{data: 'item_price', name: 'item_price'},
			{data: 'action', name: 'action', orderable: false, searchable: false},
			]
		});
		$('#createNewItem').click(function () {
        $('#itemForm').trigger("reset");
        // $('#modelHeading').html("Create New item");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.edititem', function () {
      var item_id = $(this).data('id');

      $.get("{{ route('items.index') }}" +'/' + item_id +'/edit', function (data) {
          $('#modelHeading').html("EDIT ITEM DETAILS:");
          $('#saveBtn').val("edit-item");
          $('#ajaxModel').modal('show');
          $('#item_id').val(data.item_id);
          $('#item_name').val(data.item_name);
          $('#item_qty').val(data.item_qty);
          $('#item_price').val(data.item_price);
          $('#item_img').val(data.item_img);
      })
   });
   $('#saveBtn').click(function (e) {

   	e.preventDefault();

   	$(this).html('Save');
   	var form = $('#itemForm')[0];
   	var formData = new FormData(form);

   	$.ajax({
   		data: formData,
   		url: "{{ route('items.store') }}",
   		method: "POST",
   		dataType: 'JSON',
   		contentType:false,
          // cache:false,
          processData:false,
          
          success: function (data) {

          	$('#itemForm').trigger("reset");
          	$('#ajaxModel').modal('hide');
              table.draw();
              $("#dresult").html(data).hide();
                    $("#result").html(data).show();
              

          },
          error: function (data) {
          	console.log('Error:', data);
          	$('#saveBtn').html('Save Changes');
          }
      });
   });

   $('body').on('click', '.deleteitem', function () {

        var item_id = $(this).data("id");
        $confirm = confirm("Are You sure want to delete !");
        if($confirm == true ){
            $.ajax({
                method: "DELETE",
                url: "{{ route('items.store') }}"+'/'+item_id,
                success: function (data) {
                    table.draw();
                    $("#dresult").html(data).show();
                    $("#result").html(data).hide();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
    });

});
</script>
<!-- datatable script -->

@endsection