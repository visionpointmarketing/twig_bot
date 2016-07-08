<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/internals/loader.twig');

$header = 'h_generic';
$template = 'page';
$footer = 'f_generic';

?>
<html>
	<?php echo $twig -> render('head.tmpl'); ?>
	<body>
		<?php
		/*render header*/
		echo $twig -> render(
			'@headers/'.$header.'.html',
			array(
				'navigation'=> array(
					'val' =>array(
						'<a href="#">About Us</a>',
						'<a href="#">Admissions</a>',
						'<a href="#">Academics</a>',
						'<a href="#">Student Life</a>',
						'<a href="#">News & Events</a>'
					),
					'class'=>'navigation n-header'
				)
			)
		);
		/*render content*/
		echo $twig->render('@templates/'.$template.'.html',
			array(
				'content'=> array(
					'header'=>array(
						'hval'=>'1',
						'title'=>'sample title'
					),
					'list',
					'button'=>array(
						'btn-class'=>'dark'
					),
					'button',
					'list'
				)
			)
		);
		/*render footer*/
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
	?>
	</body>
</html>
<?php
switch($uri){
	case '/':
		//echo $twig->render('@templates/'.$template.'.html');
		break;
	default:
		//echo $twig->render('@templates/'.$template.'.html');
}
?>
