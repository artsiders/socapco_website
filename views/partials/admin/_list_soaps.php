<?php require_once VIEW . "globals.php"; ?>

<div class="card">
	<div class="card-body">
		<h4 class="card-title text-center">les savon de ménage</h4>
		<div class="table-responsive">
			<table id="demo-foo-addrow" class="table table-striped m-t-30 no-wrap table-hover contact-list text-center" data-page-size="10">
				<thead>
					<tr>
						<td colspan="2">
							<button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">ajouter</button>
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
										<form method="post" class="form-horizontal form-material" id="editSoapForm">
											<input type="hidden" name="id" id="idProd">
											<input type="hidden" name="old_image" id="oldImage">
											<div class="form-group">
												<div class="row col-md-12">
													<div class="col-11">
														<input id="soapName" type="text" name="name" class="form-control" placeholder="nom produit">
													</div>
													<div class="col-1">
														<label style="height: 35px;" for="uploadFileEdit" id="imageLabel" class="fileupload btn btn-outline-secondary waves-effect waves-light">
															<span><i class="fas fa-image"></i></span>
															<input type="file" id="uploadFileEdit" class="upload" hidden accept=".png, .jpg, .jpeg">
														</label>
													</div>
												</div>
												<div class="row col-md-12">
													<div class="col-md-12">
														<label for="gammage">unité de mesure</label>
														<div class="input-group mb-3">
															<input id="inpGrammage" step="10" type="number" name="grammage" class="form-control" aria-label="" aria-describedby="basic-gram">
															<select name="unite" class="input-group-text" id="uniteSelect">
																<option value="g">g</option>
																<option value="ml">ml</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-md-12 m-b-20">
													<label for="name">Description</label>
													<textarea id="soapDesc" style="resize: none;" name="description" class="form-control" id="" cols="30" rows="2" placeholder="entrer la description"></textarea>
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
										<form method="post" class="form-horizontal form-material" id="addSoapForm" enctype="multipart/form-data">
											<div class="form-group">
												<div class="row col-md-12">
													<div class="col-11">
														<input type="text" name="name" class="form-control" placeholder="nom produit">
													</div>
													<div class="col-1">
														<label style="height: 35px;" for="uploadFileAdd" id="imageLabel" class="fileupload btn btn-outline-secondary waves-effect waves-light">
															<span><i class="fas fa-image"></i></span>
															<input type="file" id="uploadFileAdd" class="upload" hidden accept=".png, .jpg, .jpeg">
														</label>
													</div>
												</div>
												<div class="row col-md-12">
													<div class="col-md-12">
														<label for="gammage">unité de mesure</label>
														<div class="input-group mb-3">
															<input value="100" step="10" type="number" name="grammage" class="form-control" aria-label="" aria-describedby="basic-gram">
															<div class="input-group-prepend">
																<select name="unite" class="input-group-text" id="basic-gram">
																	<option value="g">g</option>
																	<option value="ml">ml</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<label for="name">Description</label>
													<textarea style="resize: none;" name="description" class="form-control" id="" cols="30" rows="2" placeholder="entrer la description"></textarea>
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
						<th>unite</th>
						<th>Act</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($allSoap as $key => $soap) : ?>
						<tr>
							<td><?= $key + 1 ?></td>
							<td style="padding: 5px;">
								<img class="rounded-circle border border-success" src="<?= ASSETS ?>images/product/<?= $soap['picture'] ?>" alt="user" width="50" height="50" />
							</td>
							<td><?= $soap['name'] ?></td>
							<td class="text-center" data-toggle="tooltip" data-original-title="<?= $soap['description'] . ' ' . $soap['add_date'] ?>">
								<div class="badge badge-info badge-pill h1">
									<i class="fa fa-info" aria-hidden="true"></i>
								</div>
							</td>
							<td><?= $soap['grammage'] . " " . $soap['unite'] ?></td>
							<td>
								<button type="button" class="btn_edit_soap btn btn-sm btn-icon btn-pure btn-outline-success delete-row-btn" data-toggle="modal" data-target="#editProdForm" data-toggle="tooltip" data-original-title="edit" data-id="<?= $soap['id_soap'] ?>">
									<i class="fa fa-edit" aria-hidden="true" data-id="<?= $soap['id_soap'] ?>"></i>
								</button>
								<button type="button" class="btn_del_soap btn btn-sm btn-icon btn-pure btn-outline-danger delete-row-btn" data-id="<?= $soap['id_soap'] ?>" data-image="<?= $soap['picture'] ?>" data-toggle="modal" data-target="#modal-delete">
									<i class="fa fa-trash" aria-hidden="true" data-id="<?= $soap['id_soap'] ?>"></i>
								</button>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="<?= ASSETS ?>libs/compressorjs/compressor.min.js"></script>
<script src="<?= ASSETS ?>js/addSoap.js"></script>
<script src="<?= ASSETS ?>js/deleteSoap.js"></script>
<script src="<?= ASSETS ?>js/editSoap.js"></script>