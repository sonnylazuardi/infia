<?php

Form::macro('link_menu', function($route, $text) {
	if(Request::is($route) || Request::is($route."/*")) {
		$active = 'class="active"';
	} else {
		$active = '';
	}
	return '<a '.$active.' href="'.url($route).'">'.$text.'</a>';
});

Form::macro('list_menu', function($route, $text) {
	if(Request::is($route) || Request::is($route."/*")) {
		$active = 'class="active"';
	} else {
		$active = '';
	}
	return '<li '.$active.'><a href="'.url($route).'">'.$text.'</a></li>';
});
