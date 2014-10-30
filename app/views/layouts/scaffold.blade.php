<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>{{ $title or 'Default' }}</title>

		{{-- Load Bootstrap CSS Framework --}}
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::style('css/bootstrap-theme.min.css'); }}
		{{ HTML::script('js/bootstrap.min.js'); }}

		<style>
			table form { margin-bottom: 0; }
			form ul { margin-left: 0; list-style: none; }
			.error { color: red; font-style: italic; }
			body { padding-top: 20px; }
			table tr .center{
				text-align: center;
			}
		</style>
		<style type="text/css">
			.btn_link {
			    background:none!important;
			     border:none; 
			     padding:0!important;
			    /*border is optional*/
			     border-bottom:1px solid #444; 
			     cursor: pointer;
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