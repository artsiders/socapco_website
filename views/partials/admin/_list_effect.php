<?php require_once VIEW . "globals.php"; ?>

<div class="card">
	<div class="card-body bg-light">
		<h4 class="card-title text-center">effets sur la peau</h4>
		<div class="table-responsive">
			<div class="m-t-30contact-list">
				<div>
					<div>
						<div>
							<button type="button" class="btn btn-info btn-rounded m-2" data-toggle="modal" data-target="#add-contact">ajouter</button>
						</div>

						<!-- Modal Edit effect -->
						<div id="editProdForm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">modifier</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<p class="hide alert alert-danger text-center" id="editError"></p>
										<p class="hide alert alert-success text-center" id="editSuccess"></p>
										<form method="post" class="form-horizontal form-material" id="editEffectForm">
											<input type="hidden" name="id" id="idEff">
											<div class="col-auto">
												<div class="form-group">
													<label for="inputAddress">Intitulé</label>
													<input type="text" name="eff_libele" class="form-control" id="effLibele">
												</div>
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-info waves-effect">Enregistre</button>
												<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Annuler</button>
											</div>
										</form>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
						</div>
						<!-- END Modal Edit effect -->

						<!-- Modal ADD effect -->
						<div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">ajouter une effet</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<p class="hide alert alert-danger text-center" id="addError"></p>
										<p class="hide alert alert-success text-center" id="addSuccess"></p>
										<form method="post" class="form-horizontal form-material" id="addEffectForm">
											<div class="col-auto">
												<div class="form-group">
													<label for="inputAddress">Intitulé</label>
													<input type="text" name="eff_libele" class="form-control">
												</div>
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-info waves-effect">Enregistre</button>
												<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Annuler</button>
											</div>
										</form>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>

						<!-- Modal DELETE effect -->
						<div id="modal-delete" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">voulez vous supprimer ?</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<div class=" d-flex justify-content-lg-end">
											<div class="m-2">
												<button class="btn btn-danger" id="confirDel">supprimer</button>
											</div>
											<div class="m-2">
												<button class="btn btn-outline-primary" data-dismiss="modal" aria-hidden="true">annuler</button>
											</div>
										</div>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- END MODAL DELETE effect -->
					</div>
				</div>
				<div class="album py-5">
					<div class="container">
						<div class="row">
							<?php foreach ($effects as $key => $effect) : ?>
								<div class="col-md-4">
									<div class="card shadow-sm">
										<div class="card-body pt-2">
											<h5 class="h4"><?= $effect['eff_libele'] ?></h5>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button data-id="<?= $effect['id_effect'] ?>" type="button" class="delete_effect btn btn-sm btn-outline-danger">
														<i data-id="<?= $effect['id_effect'] ?>" class="fa fa-trash"></i>
													</button>
													<button type="button" class="btn_edit_eff btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#editProdForm" data-toggle="tooltip" data-original-title="edit" data-id="<?= $effect['id_effect'] ?>">
														<i class="fa fa-edit" aria-hidden="true" data-id="<?= $effect['id_effect'] ?>"></i>
													</button>
												</div>
												<small class="text-muted">12</small>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?= ASSETS ?>js/effects.js"></script>