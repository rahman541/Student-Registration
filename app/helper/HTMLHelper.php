<?php

	HTML::macro('clever_link', function($route, $text) {
	    $class = '';
	    $action = Route::currentRouteName();
	    if ($route == $action) {
	        $class = $action == $route ? ' class="active"' : '';
	    }
	    return '<li' . $class . '>' . link_to_route($route, $text) . '</li>';
	});