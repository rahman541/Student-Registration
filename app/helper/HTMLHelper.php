<?php

	HTML::macro('clever_link', function($route, $text) {
	    $class = '';
	    $action = Route::currentRouteName();
	    

	    // $action = $action;
	    // var_dump($route);die();

	    // if (isset($action['as'])) {
	    if ($route == $action) {
	        $class = $action == $route ? ' class="active"' : '';
	    }

	    return '<li' . $class . '>' . link_to_route($route, $text) . '</li>';
	});