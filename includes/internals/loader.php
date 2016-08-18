<?php 
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('includes/views/');
	$loader-> addPath('includes/views/headers/','headers');
	$loader-> addPath('includes/views/templates/','templates');
	$loader-> addPath('includes/views/footers/','footers');
	$loader-> addPath('includes/views/components/','components');
	$loader-> addPath('includes/internals/','internals');
$twig = new Twig_Environment($loader,[
		'debug' => true,
	]);
$twig->addExtension(new Twig_Extension_Debug());

/*pull in sitewide settings*/
include_once($_SERVER['DOCUMENT_ROOT'].'/settings.php');

/*pull in php functions*/
foreach (glob($_SERVER['DOCUMENT_ROOT']."/includes/internals/**/*.php") as $filename){
	include_once($filename);
}

?>