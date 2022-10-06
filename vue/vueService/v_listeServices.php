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
	<!-- End collapse 2 -->
	<div class="form-inline justify-content-center" id="button">
		<div class="row">
			<p>
				<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
					Ajouter service
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
	<!-- End collapse 2 -->

	<!-- Start foreach -->
	<table class="table p-0">
		<tbody>
			<table class="table table-hover table-dark">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Nom du service</th>
						<th scope="col">Supprimer</th>
						<th scope="col">Editer</th>
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
							<td>
								<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?= $ligne['id'] ?>" aria-expanded="false" aria-controls="collapseExample<?= $ligne['id'] ?>">
									Editer
								</button>
							</td>
						</tr>
						<tr class="collapse" id="collapseExample<?= $ligne['id'] ?>">
							<form action="index.php" method="get">
								<td scope="row"><?= $ligne['id']; ?></td>
								<td>
									<input type="hidden" name="ctl" value="service">
									<input type="hidden" name="action" value="formEditer">
									<input type="hidden" name="id" value="<?= $ligne['id'] ?>">
									<input type="text" name ="nom" placeholder="<?= $ligne['nom']; ?>">
								</td>
								<td>
									<a href="">Annuler</a>
								</td>
								<td>
									<button type="submit" class="btn btn-primary">Modifier</button>
								</td>
							</form>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</tbody>
	</table>
</div>