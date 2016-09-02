@extends('layouts.scaffold')

@section('script')
{{ HTML::script('DataTables-1.10.12/DataTables-1.10.12/js/jquery.dataTables.min.js') }}
{{ HTML::script('DataTables-1.10.12/DataTables-1.10.12/js/dataTables.bootstrap.min.js') }}
<script type="text/javascript">
	$(document).ready(function(){
	    $('#stud_table').DataTable({
	    	"pageLength": 5,
	    	"columnDefs": [ {
	            "searchable": false,
	            "targets": 0
	        } ],
	        "bLengthChange": false,
	    });
	});

	$('.data-delete').on('click', function(e){
	    var $form=$(this).closest('form'); 
	    e.preventDefault();
	    $('#delete-dialog').modal({ backdrop: 'static', keyboard: false })
	        .one('click', '#delete', function() {
	            $form.trigger('submit'); // submit the form
	        });
	        // .one() is NOT a typo of .on()
	});
</script>
@stop

@section('style')
{!! HTML::style('DataTables-1.10.12/DataTables-1.10.12/css/dataTables.bootstrap.min.css') !!}
@stop

@section('main')
	<h1>All Student</h1>
	@if ($students->count())
		<table class="table" id="stud_table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Email</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Postcode</th>
					<th>No. Phone</th>
					<th>Avatar</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php $i=1 ?>
				@foreach ($students as $stud)
					<tr>
						<td>{!! $i !!}</td>
						<td>
							<a href="{{URL::route('students.show', $stud->id)}}">{{{ $stud->email }}}</a>
						</td>
						<td>{!! $stud->first_name !!}</td>
						<td>{!! $stud->last_name !!}</td>
						<td>{!! $stud->postcode !!}</td>
						<td>{!! $stud->no_phone !!}</td>
						<td class="center"><img src="{{ Gravatar::src($stud->email,40) }}"></td>
						<td class="center">
							<a href="{!! URL::route('students.edit', $stud->id) !!}"><i class="glyphicon glyphicon-pencil"></i></a>
							{!! Form::open(['method' => 'DELETE',
							    'route' => ['students.update', $stud->id],
							    'id' => 'form-delete-student-' . $stud->id]) !!}
							    	{!! Form::hidden('id',$stud->id) !!}
								    <a href="" class="data-delete" data-form="student-{{ $stud->id }}">
								    	<i class="glyphicon glyphicon-remove icon-spacer"></i>
								    </a>
							{!! Form::close() !!}
						</td>
					</tr>
					<?php $i++ ?>
				@endforeach
			</tbody>
		</table>
	@else
		<p>No student exist! {{ link_to_route('students.create', 'Create new') }}</p><br/>
	@endif

	@if (Session::has('message'))
		<div class="alert {{ Session::get('alert-class', 'alert-info') }} fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{!! Session::get('message') !!}
		</div>
	@endif
	<p>{{ link_to_route('students.create', 'Add new students') }}</p>

	<div id="delete-dialog" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Confirmation</h4>
				</div>
				<div class="modal-body">
					Are you sure?
				</div>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
					<button type="button" data-dismiss="modal" class="btn">Cancel</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
@endsection