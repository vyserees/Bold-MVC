<?php

$routes = array(
	'pocetna' => array(
		'controller' => 'home',
		'method' => 'index'
		),
    'error'=>array('controller'=>'error','method'=>'index'),
    'login'=>array('controller'=>'auth','method'=>'index'),
    'logout'=>array('controller'=>'auth', 'method'=>'logOut')
	);