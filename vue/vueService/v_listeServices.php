<div class="row">

	<!-- titre -->
	<div class="container ti-align-center bg-dark rounded-pill">
		<div class="row">
			<div class="text-center text-light">
				<h1>Liste de tous les services</h1>
			</div>
		</div>
	</div>
	<br>
	<hr>
	<hr>
	<!-- end titre -->

	<!-- start button collapse add service -->
	<div class="form-inline justify-content-center">
		<div class="row">
			<p>
				<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
					Ajouter un service
				</a>
			</p>
			<div class="collapse" id="collapseExample">
				<div class="card card-body">
					<form action="index.php?ctl=service&action=validAjout" method="POST">
						<div class="col-auto">
							<input type="text" class="form-control" placeholder="Nouveau service" name="nom">
							<button type="submit" class="btn btn-primary">Crée</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End collapse -->

	<!-- Start foreach -->
	<table class="table p-0">
		<tbody>
			<table class="table table-hover table-dark">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Nom du service</th>
						<th scope="col">Supprimer</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($listeService as $ligne) : ?>
						<tr>
							<th scope="row"><?= $ligne['id']; ?></th>
							<td><?= $ligne['nom']; ?></td>
							<td>
								<a href="index.php?ctl=service&action=supprimer&id=<?= $ligne['id']; ?>">Supprimer</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</tbody>
	</table>
</div>