<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/contato.php" ) ?>

<?php else : ?>

	<h1>Oi, eu sou Contato</h1>

<?php endif; ?>