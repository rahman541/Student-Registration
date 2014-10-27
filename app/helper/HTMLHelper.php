<?php

	HTML::macro(
	    'myInput',
	    function ($name, $text, $placeholder = null, $type = 'text') {
	        $label = Form::label($name, $text, array('class' => 'control-label'));
	        $input = Form::input($type, $name, null, array('placeholder'=>$placeholder));

	        $item = "
	            <div class=\"control-group\">
	                $label
	                <div class=\"controls\">
	                      $input
	                </div>
	            </div>";
	        return $item;
	    }
	);

	HTML::macro('clever_link', function($route, $text) {
	    $class = '';
	    $action = Request::route();
	    $action = $action->action;

	    if (isset($action['as'])) {
	        $class = $action['as'] == $route ? ' class="active"' : '';
	    }

	    return '<li' . $class . '>' . HTML::link_to_route($route, $text) . '</li>';
	});

	//Menu
	Menu::handler('main', array('class' => 'nav navbar-inverse'))
    ->add('/students', 'Home')
    ->add('/about', 'About')
    ->add('#', 'More', Menu::items('more')
        ->add('/blog', 'Blog'));

	Menu::handler('main')->getItemsAtDepth(0)->map(function($item){
	    if($item->hasChildren()){
      		$item->addClass('dropdown');
      		$item->getChildren()->addClass('dropdown-menu');

	      	$item->getContent()
	        ->addClass('dropdown-toggle')
	        ->dataToggle('dropdown')
	        ->nest(' <b class="caret"></b>');
	    }
  	});