<?php
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('includes/views/');
	$loader-> addPath('includes/views/headers/','headers');
	$loader-> addPath('includes/views/templates/','templates');
	$loader-> addPath('includes/views/footers/','footers');
$twig = new Twig_Environment($loader);

$header = 'h_generic';
$template = 'page';
$footer = 'f_generic';

?>
<html>
	<head>
		<title>Client Name</title>
	</head>
	<body>
		<?php
		/*render header*/
		echo $twig -> render(
			'@headers/'.$header.'.html',
			array(
				'title' => 'Hello header!'
			)
		);
		/*render content*/
		echo $twig->render(
		    '@templates/'.$template.'.html',
		    array(
		        'h1' => 'Hello content!',
		        'h2' => 'Hello content!',
		        'h3' => 'Hello content!',
		        'h4' => 'Hello content!',
		        'h5' => 'Hello content!',
		        'h6' => 'Hello content!'
		    )
		);
		/*render footer*/
		echo $twig->render(
		    '@footers/'.$footer.'.html',
		    array(
		        'title' => 'Hello footer!'
		    )
		);
	?>
	</body>
</html>