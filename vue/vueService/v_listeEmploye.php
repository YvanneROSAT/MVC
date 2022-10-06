<div class="row">
	<div class="container">
		<div class="row">
			<div class="col">
				<table class="table align-middle mb-0 bg-white">
					<thead class="bg-light">
						<tr>
							<th>ID</th>
							<th>Nom</th>
							<th>Age</th>
							<th>Ancienneté</th>
							<th>Date d'arrivé</th>
							<th>Âge à l'arrivé</th>
							<th>Supprimer</th>
							<th></th>
						</tr>
					</thead>
					<!-- titre -->
					<div class="container ti-align-center bg-success rounded-pill">
						<div class="row">
							<div class="text-center text-light">
								<h1>Liste de tous les employées</h1>
							</div>
						</div>
					</div>
					<br>

					<!-- end titre -->

					<!-- Début de la boucle foreach -->
					<?php foreach ($listeEmploye as $ligne) : ?>
						<tbody>
							<tr>
								<td>
									<?= $ligne['id']; ?>
								</td>
								<td>
									<div class="d-flex align-items-center">
										<img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
										<div class="ms-3">
											<p class="fw-bold mb-1">
												<!-- Appel du nom et prénom des employer de la boucle foreach -->
												<?= $ligne["nom"]; ?>
												<?= $ligne["prenom"]; ?>
											</p>
											<p class="text-muted mb-0">
												<!-- Création de leur adresse E-mail -->
												<?= $ligne["nom"] . ".", $ligne["prenom"] . "@gmail.com" ?>
											</p>
										</div>
									</div>
								</td>
								<td>
									<!-- Leur age -->
									<?php
									$dateNaissance = $ligne["date_naissance"];
									$aujourdhui = date("Y-m-d");
									$diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
									echo $diff->format('%y') . " " . "ans";
									?>
								</td>
								<td>
									<!-- leur ancienneté -->
									<p>
										<?php
										$dateArrivee = $ligne["date_arrivee"];
										$aujourdhui = date("Y-m-d");
										$diff = date_diff(date_create($dateArrivee), date_create($aujourdhui));
										echo $diff->format('%y') . " " . "ans";
										?>
									</p>
								</td>
								<td>
									<span class="badge-success rounded ">
										<!-- Appel de leur date d'arrivé -->
										<?= $ligne["date_arrivee"]; ?>
									</span>
								</td>
								<td>
									<p class="fw-normal mb-1">Je suis arrivé à :</p>
									<p class="text-muted mb-0">
										<!-- Appel de leur age à l'arrivé dans l'entreprise -->
										<?php
										$ageArrivee = $ligne["date_arrivee"];
										$dateNaissance = $ligne["date_naissance"];
										$diff = date_diff(date_create($ageArrivee), date_create($dateNaissance));
										echo $diff->format('%y') . " " . "ans";
										?>
									</p>
								</td>
								<!-- delete user -->
								<td>
									<button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
										<a href="index.php?ctl=emp&action=supprimer&id=<?= $ligne['id']; ?>">Supprimer</a>
									</button>
								</td>
								<!-- End delete user -->
							</tr>
						</tbody>
					<?php endforeach ?>
					<!-- Fin de la boucle foreach -->
				</table>
			</div>
		</div>
	</div>
</div>