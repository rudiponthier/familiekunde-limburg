<div id="contactpagina">
	<div id="lidworden">
		<?php print render($content['field_beschrijving']); ?>
	</div>
	<div id="lokatie">
		<?php print render($content['field_lokatie']); ?>
	</div>
	<div id="contact">
		<h2><?php print $title; ?></h2>
		<?php print render($content); ?>
	</div>
</div>