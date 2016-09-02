<?php

	Form::macro('countrySelect', function($name, $selected = 0, $options = []){
	    $countries = [0 => 'Select Country'] + Country::remember(60)->get()->lists('name', 'id');
	    return Form::select($name, $countries, $selected, $options);
	});

	//test macro
	Form::macro('passwd', function($name, $label, $value){
		echo "";
	});