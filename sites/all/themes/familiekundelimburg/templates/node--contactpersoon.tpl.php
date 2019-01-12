<div id="contactpersoon">
	<div class="contactpersoonafbeelding">
		<?php print render($content['field_afbeelding']); ?>
	</div>
	<div class="contactpersoongegevens">
		<h2><?php print $title; ?></h2>
		<?php print render($content['field_functie']); ?>
		<?php print render($content['body']); ?>
		<?php print render($content['field_telefoon']); ?>
		<?php print render($content['field_gsm']); ?>
		<?php print render($content['field_e_mail']); ?>
	</div>
</div>