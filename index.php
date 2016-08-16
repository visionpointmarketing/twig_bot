<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/internals/loader.twig');

$header = 'h_generic';
$template = '2col';
$footer = 'f_generic';

echo $twig -> render('head.tmpl');
echo $twig -> render('@headers/'.$header.'.html',
	array(
		'navigation'=> array(
			'val' =>main_nav(),
			'class'=>'navigation n-header'
		)
	)
);
echo $twig->render('@templates/'.$template.'.twig',
	[
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
			'list'
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
		]
	]
);
echo $twig->render('@footers/'.$footer.'.html',
	array(
		'footermenu'=> array(
			'val' =>array(
				'<a href="#">About Us</a>',
				'<a href="#">Admissions</a>',
				'<a href="#">Academics</a>',
				'<a href="#">Student Life</a>',
				'<a href="#">News & Events</a>'
			),
			'class'=>'navigation n-footer'
		)
	)
);

switch($uri){
	case '/':
		//echo $twig->render('@templates/'.$template.'.html');
		break;
	default:
		//echo $twig->render('@templates/'.$template.'.html');
}
?>