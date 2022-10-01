<?php

session_start();

include 'vue/entete.php';

include 'vue/menu.php';

if (isset($_GET['ctl'])) {
	switch ($_GET['ctl']) {

		case 'service':
			include 'controleur/ctlService.php';
			break;

		case 'emp':
			include 'controleur/ctlEmploye.php';
			break;
	}
}
include 'vue/pied.php';

?>

<!-- little text home page -->
<main class="container">
	<div class="bg-light p-5 rounded">
		<h1>La gestion de mon entreprise</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
		<a class="btn btn-lg btn-primary" href="https:yvannerosat.com/" role="button">Sniper_king &raquo;</a>
	</div>
</main>
<!-- End little page -->