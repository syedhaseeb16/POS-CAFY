@extends('admin.layout')
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<!-- Custom fonts for this template-->
<link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') }}" >
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title', 'Management | ')

@section('menu_active', '')
@section('m_active', 'active')
@section('s_active', '')
@section('i_active', '')
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
								Max Restaurant Managment
								<a class="btn btn-dark text-light float-right" href="javascript:void(0)" id="createNewMem"> Add</a>
					</div>
					<div class="card-body" style="background: rgba(0, 0, 0, 0.5);">
						<table class="table table-bordered text-white data-table" style="width:100%">
							<thead>
								<tr>
									<th>Member ID</th>
									<th>Name</th>
									<th>Position</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
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
				<h5 class="modal-title" id="modelHeading">NEW MEMBER DETAILS:</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
            <div class="modal-body">
            	<form id="memForm" name="memForm" method="POST" >
            		{{ csrf_field() }}
            		<input type="hidden" name="mem_id" id="mem_id">
            		<div class="form-group">
            			<label>Mem Name:</label>
            			<input type="text" name="mem_name" id="mem_name" class="form-control" placeholder="">
            		</div>

            		<div class="form-group">
            			<label> Position:</label>
            			<input type="text" name="position" id="position" class="form-control" placeholder="">
            		</div>

            		<div class="form-group">
            			<label> Age:</label>
            			<input type="number" name="age" id="age" class="form-control" placeholder="">
            		</div>
            		<div class="form-group">
            			<label> Salary:</label>
            			<input type="number" name="salary" id="salary" class="form-control" placeholder="">
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
			ajax: "{{ route('management.index') }}",
			columns: [
			{data: 'DT_RowIndex', name: 'DT_RowIndex'},
			{data: 'mem_name', name: 'mem_name'},
			{data: 'position', name: 'position'},
			{data: 'age', name: 'age'},
			{data: 'join', name: 'join', orderable: false, searchable: false},
			{data: 'salary', name: 'salary'},
			{data: 'action', name: 'action', orderable: false, searchable: false},
			]
		});
		$('#createNewMem').click(function () {
        // $('#saveBtn').val("create-item");
        // $('#item_id').val('');
        $('#memForm').trigger("reset");
        // $('#modelHeading').html("Create New item");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editmem', function () {
      var mem_id = $(this).data('id');

      $.get("{{ route('management.index') }}" +'/' + mem_id +'/edit', function (data) {
          $('#modelHeading').html("EDIT MEMBER DETAILS:");
          $('#saveBtn').val("edit-mem");
          $('#ajaxModel').modal('show');
          $('#mem_id').val(data.mem_id);
          $('#mem_name').val(data.mem_name);
          $('#position').val(data.position);
          $('#age').val(data.age);
          $('#salary').val(data.salary);
      })
   });

    $('#saveBtn').click(function (e) {
			e.preventDefault();
			$(this).html('Save');

			$.ajax({
				data: {
					mem_id: $("#mem_id").val(),
					mem_name: $("#mem_name").val(),
					position: $("#position").val(),
					age: $("#age").val(),
					salary: $("#salary").val()
				},
				url: "{{ route('management.store') }}",
				type: "POST",
				dataType: 'JSON',
				success: function (data) {	
              $('#itemForm').trigger("reset");
          	$('#ajaxModel').modal('hide');
              table.draw();
              $("#result").html(data).show();
              $("#dresult").html(data).hide();

          },
          error: function (data) {
          	console.log('Error:', data);
          	$('#saveBtn').html('Save Changes');
          }
      });
		});
   

   $('body').on('click', '.deletemem', function () {

        var mem_id = $(this).data("id");
        $confirm = confirm("Are You sure want to delete !");
        if($confirm == true ){
            $.ajax({
                method: "DELETE",
                url: "{{ route('management.store') }}"+'/'+mem_id,
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