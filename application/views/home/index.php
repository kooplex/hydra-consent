<div class="jumbotron" text-align="center">
	<h1>ELTE Auth</h1>

	<p class="lead">OAuth alapú bejelentkeztető rendszer.</p>

	<?php if (isset($current_user->email)) : ?>
		<a href="<?php echo site_url(SITE_AREA) ?>" class="btn btn-large btn-success">Admin</a>
	<?php endif;?>

</div>

