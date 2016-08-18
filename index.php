<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/internals/loader.php');

$pagetemplate = '2col';

echo $twig -> render('head.twig');
echo $twig -> render($header,[
	'navigation'=> array(
		'val' =>main_nav(),
		'class'=>'navigation n-header'
	)
]);
echo $twig->render('@templates/'.$pagetemplate.'.twig',[
	'content'=> [
		'header'=>[
			'hval'=>'2',
			'title'=>'sample'
		],
		'list',
		'button'=>[
			'btnclass'=>'dark'
		],
		'button',
		'list',
		'markup'=>[
			'val'=>'
				<div class="custom">
					<p>some <span style="color:blue;">custom</span> 
					<span style="background:#ccc;">HTML</span> markup</p>
				</div>
			',
		],
		'function',
	],
	'promo_sidebar'=> [
		'header'=>[
			'hval'=>'3',
			'title'=>'sample'
		],
		'button'=>[
			'btnclass'=>'dark'
		],
		'button'
	],
	'this_region_doesnt_exist'=>[
		'button'
	]
]);
echo $twig->render($footer,[
	'footermenu'=> [
		'val' =>[
			'<a href="#">About Us</a>',
			'<a href="#">Admissions</a>',
			'<a href="#">Academics</a>',
			'<a href="#">Student Life</a>',
			'<a href="#">News & Events</a>'
		],
		'class'=>'navigation n-footer'
	]
]);
?>