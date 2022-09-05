<?php require_once VIEW . "globals.php"; ?>

<div class="card">
	<div class="card-body">
		<h4 class="card-title text-center">liste de produits</h4>
		<div class="table-responsive">
			<table id="demo-foo-addrow" class="table table-striped m-t-30 no-wrap table-hover contact-list text-center" data-page-size="10">
				<thead>
					<tr>
						<td colspan="2">
							<button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">ajouter un produit</button>
						</td>

						<!-- Modal Edit Product -->
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
						<!-- END Modal Edit Product -->

						<!-- Modal ADD product -->
						<div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">ajouter un produit</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<p class="hide alert alert-danger text-center" id="addError"></p>
										<p class="hide alert alert-success text-center" id="addSuccess"></p>
										<form method="post" class="form-horizontal form-material" id="addProductForm" enctype="multipart/form-data">
											<div class="form-group">
												<div class="row col-md-12">
													<div class="col-11">
														<input type="text" name="name" class="form-control" placeholder="nom produit">
													</div>
													<div class="col-1">
														<label style="height: 35px;" for="uploadFileAdd" id="imageLabel" class="fileupload btn btn-outline-secondary waves-effect waves-light">
															<span><i class="fas fa-image"></i></span>
															<input name="product_image" type="file" id="uploadFileAdd" class="upload" hidden>
														</label>
													</div>
												</div>
												<hr>
												<div class="row col-md-12 m-b-20">
													<div class="col-md-6">
														<label for="gamme">Gamme</label>
														<select class="form-control" name="id_gamme" id="">
															<?php foreach ($gammes as $key => $gamme) : ?>
																<option value="<?= $gamme['id_gamme'] ?>">
																	<?= $gamme['gam_libele'] ?>
																</option>
															<?php endforeach; ?>
														</select>
													</div>
													<div class="col-md-6">
														<label for="cat">Categorie</label>
														<select class="form-control" name="id_categorie" id="">
															<?php foreach ($categories as $key => $categorie) : ?>
																<option value="<?= $categorie['id_categorie'] ?>">
																	<?= $categorie['cat_libele'] ?>
																</option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
												<hr>
												<div class="row col-md-12">
													<div class="col-md-8">
														<label for="gamme">éffets sur la peau</label>
														<select class="form-control" name="id_effect" id="">
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
															<input value="100" step="10" type="number" name="grammage" class="form-control" aria-label="" aria-describedby="basic-gram">
															<div class="input-group-prepend">
																<span class="input-group-text" id="basic-gram">g</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<label for="name">Description</label>
													<textarea style="resize: none;" name="description" class="form-control" id="" cols="30" rows="2" placeholder="entrer la description"></textarea>
												</div>
												<div class="col-md-12 m-b-20">
													<label for="name">Ingrédient</label>
													<textarea style="resize: none;" name="ingredient" class="form-control" id="" cols="30" rows="2" placeholder="separer les ingrédient par une virgule(,)"></textarea>
												</div>
												<div class="col-md-12">
													<div class="form-group form-check">
														<input type="checkbox" name="important" value="1" class="form-check-input" id="important">
														<label class="form-check-label" for="important">mettre en avant</label>
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
							<!-- /.modal-dialog -->
						</div>

						<!-- Modal DELETE product -->
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
						<!-- END MODAL DELETE PRODUCT -->

						<td colspan="7">
							<div class="">
								<nav aria-label="Page navigation example">
									<ul class="pagination float-right"></ul>
								</nav>
							</div>
						</td>
					</tr>
					<tr>
						<th>N</th>
						<th>image</th>
						<th>nom</th>
						<th>desc</th>
						<th>gamme</th>
						<th>categorie</th>
						<th>effets</th>
						<th>Act</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($allProducts as $key => $product) : ?>
						<tr>
							<td><?= $key + 1 ?></td>
							<td>
								<img class="rounded-circle border border-success" src="<?= ASSETS ?>images/product/<?= $product['picture'] ?>" alt="user" width="50" height="50" />
							</td>
							<td><?= $product['name'] ?></td>
							<td class="text-center" data-toggle="tooltip" data-original-title="<?= $product['description'] . ' ' . $product['add_date'] ?>">
								<div class="badge badge-info badge-pill h1">
									<i class="fa fa-info" aria-hidden="true"></i>
								</div>
							</td>
							<td>
								<span class="label 
                            <?php
							if ($product["id_gamme"] == 1) echo "label-success";
							else if ($product["id_gamme"] == 2) echo "label-danger";
							else if ($product["id_gamme"] == 3) echo "label-warning";
							else if ($product["id_gamme"] == 4) echo "label-primary";
							else echo "label-dark";
							?>"><?= $product['gam_libele'] ?></span>
							</td>
							<td>
								<span class="label 
                            <?php
							if ($product["id_categorie"] == 1) echo "label-success";
							else if ($product["id_categorie"] == 2) echo "label-danger";
							else if ($product["id_categorie"] == 3) echo "label-warning";
							else if ($product["id_categorie"] == 4) echo "label-primary";
							else echo "label-dark";
							?>"><?= $product['cat_libele'] ?></span>
							</td>
							<td>
								<span class="label 
                            <?php
							if ($product["id_effect"] == 1) echo "label-success";
							else if ($product["id_effect"] == 2) echo "label-danger";
							else if ($product["id_effect"] == 3) echo "label-warning";
							else if ($product["id_effect"] == 4) echo "label-primary";
							else echo "label-dark";
							?>"><?= $product['eff_libele'] ?></span>
							</td>
							<td>
								<button type="button" class="btn_edit_prod btn btn-sm btn-icon btn-pure btn-outline-success delete-row-btn" data-toggle="modal" data-target="#editProdForm" data-toggle="tooltip" data-original-title="edit" data-id="<?= $product['id_product'] ?>">
									<i class="fa fa-edit" aria-hidden="true" data-id="<?= $product['id_product'] ?>"></i>
								</button>
								<button type="button" class="btn_del_prod btn btn-sm btn-icon btn-pure btn-outline-danger delete-row-btn" data-id="<?= $product['id_product'] ?>" data-image="<?= $product['picture'] ?>" data-toggle="modal" data-target="#modal-delete">
									<i class="fa fa-trash" aria-hidden="true" data-id="<?= $product['id_product'] ?>"></i>
								</button>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="<?= ASSETS ?>js/addProduct.js"></script>
<script src="<?= ASSETS ?>js/deleteProd.js"></script>
<script src="<?= ASSETS ?>js/editProd.js"></script>