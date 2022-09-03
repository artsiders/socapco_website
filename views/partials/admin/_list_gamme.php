<?php require_once VIEW . "globals.php"; ?>

<div class="card">
	<div class="card-body bg-light">
		<h4 class="card-title text-center">gammes de produit</h4>
		<div class="table-responsive">
			<div class="m-t-30contact-list">
				<div>
					<div>
						<div>
							<button type="button" class="btn btn-info btn-rounded m-2" data-toggle="modal" data-target="#add-contact">ajouter une gamme</button>
						</div>

						<!-- Modal Edit gamme -->
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
										<form method="post" class="form-horizontal form-material" id="editProductForm">
											<input type="hidden" name="id" id="idProd">
											<input type="hidden" name="old_image" id="oldImage">
											<div class="form-group">
												<div class="row col-md-12">
													<div class="col-11">
														<input id="prodName" type="text" name="name" class="form-control" placeholder="nom produit">
													</div>
													<div class="col-1">
														<label style="height: 35px;" for="uploadFileEdit" id="imageLabel" class="fileupload btn btn-outline-secondary waves-effect waves-light">
															<span><i class="fas fa-image"></i></span>
															<input name="image" type="file" id="uploadFileEdit" class="upload" hidden>
														</label>
													</div>
												</div>
												<div class="row col-md-12 m-b-20">
													<div class="col-md-6">
														<label for="gamme">Gamme</label>
														<select class="form-control" name="id_gamme" id="seletGamme">
															<?php foreach ($gammes as $key => $gamme) : ?>
																<option value="<?= $gamme['id_gamme'] ?>">
																	<?= $gamme['gam_libele'] ?>
																</option>
															<?php endforeach; ?>
														</select>
													</div>
													<div class="col-md-6">
														<label for="cat">Categorie</label>
														<select class="form-control" name="id_categorie" id="selectCat">
															<?php foreach ($categories as $key => $categorie) : ?>
																<option value="<?= $categorie['id_categorie'] ?>">
																	<?= $categorie['cat_libele'] ?>
																</option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
												<div class="row col-md-12">
													<div class="col-md-8">
														<label for="gamme">éffets sur la peau</label>
														<select class="form-control" name="id_effect" id="selectEff">
															<?php foreach ($effects as $key => $effect) : ?>
																<option value="<?= $effect['id_effect'] ?>">
																	<?= $effect['eff_libele'] ?>
																</option>
															<?php endforeach; ?>
														</select>
													</div>
													<div class="col-md-4">
														<label for="gammage">gammage</label>
														<div class="input-group mb-3">
															<input id="inpGrammage" step="10" type="number" name="grammage" class="form-control" aria-label="" aria-describedby="basic-gram">
															<div class="input-group-prepend">
																<span class="input-group-text" id="basic-gram">g</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 m-b-20">
													<label for="name">Description</label>
													<textarea id="prodDesc" style="resize: none;" name="description" class="form-control" id="" cols="30" rows="2" placeholder="entrer la description"></textarea>
												</div>
												<div class="col-md-12 m-b-20">
													<label for="name">Ingrédient</label>
													<textarea id="ProdIngre" style="resize: none;" name="ingredient" class="form-control" id="" cols="30" rows="2" placeholder="separer les ingrédient par une virgule(,)"></textarea>
												</div>
												<div class="col-md-12">
													<div class="form-group form-check">
														<input type="checkbox" name="important" value="1" class="form-check-input" id="editImportant">
														<label class="form-check-label" for="editImportant">mettre en avant</label>
													</div>
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
						<!-- END Modal Edit gamme -->

						<!-- Modal ADD gamme -->
						<div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">ajouter une gamme</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<p class="hide alert alert-danger text-center" id="addError"></p>
										<p class="hide alert alert-success text-center" id="addSuccess"></p>
										<form method="post" class="form-horizontal form-material" id="addGammeForm" enctype="multipart/form-data">
											<div class="col-auto">
												<div class="form-group">
													<label for="inputAddress">Intitulé</label>
													<input type="text" name="gam_libele" class="form-control">
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

						<!-- Modal DELETE gamme -->
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
						<!-- END MODAL DELETE gamme -->
					</div>
				</div>
				<div class="album py-5">
					<div class="container">
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
							<?php foreach ($gammes as $key => $gamme) : ?>
								<div class="col">
									<div class="card shadow-sm">
										<div class="card-body pt-2">
											<h5 class="h4"><?= $gamme['gam_libele'] ?></h5>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-danger">delete</button>
													<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
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

<script src="<?= ASSETS ?>js/gammes.js"></script>