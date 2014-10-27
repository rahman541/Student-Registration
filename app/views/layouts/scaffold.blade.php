<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>{{ $title or 'Default' }}</title>
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<style>
			table form { margin-bottom: 0; }
			form ul { margin-left: 0; list-style: none; }
			.error { color: red; font-style: italic; }
			body { padding-top: 20px; }
			table tr .center{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="container">
			@include('common.menu')
			@if (Session::has('message'))
				<div class="flash alert">
					<div class="alert alert-info">{{ Session::get('message') }}</div>
				</div>
			@endif
			@yield('main')
		</div>

	</body>

</html>