<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Queer Theme</title>
		<?php wp_head(); ?>
	</head>
	
	<?php 
		if( is_front_page() ):
			$quaint_classes = array( 'quaint-class', 'my-class' );
		else:
			$quaint_classes = array( 'no-quaint-class' );
		endif;
	?>
	
	<body <?php body_class( $quaint_classes ); ?>>