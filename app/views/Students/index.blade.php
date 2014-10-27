@if ($students->count())
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
			@foreach ($students as $stud)
				<tr>
					<td>{{{ $stud->email }}}</td>
					<td>{{{ $stud->password }}}</td>
					<td>{{{ $stud->first_name }}}</td>
					<td>{{{ $stud->last_name }}}</td>
					<td>{{ $stud->avatar }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no students
@endif

<p>{{ link_to_route('student.create', 'Add new user') }}</p>