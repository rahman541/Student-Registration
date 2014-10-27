@if ($student->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Email</th>
				<th>Password</th>
				<th>First_name</th>
				<th>Last_name</th>
				<th>Avatar</td>
			</tr>
		</thead>

		<tbody>
			@foreach ($student as $stud)
				<tr>
					<td>{{{ $stud->email }}}</td>
					<td>{{{ $stud->password }}}</td>
					<td>{{{ $stud->first_name }}}</td>
					<td>{{{ $stud->last_name }}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no student
@endif