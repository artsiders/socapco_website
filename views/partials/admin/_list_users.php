<?php
require_once MODEL . "Produit.php";

$products = new products;

try {
    $products = $products->readAll();
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}

?>

<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">liste de produits</h4>
        <div class="table-responsive">
            <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                <thead>
                    <tr>
                        <td colspan="2">
                            <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">ajouter un produit</button>
                        </td>
                        <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">ajouter un produit</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <from class="form-horizontal form-material">
                                            <div class="form-group">
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Type name">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Phone">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Designation">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Age">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Date of joining">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Salary">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <label for="uploadFile" class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>ajouter des images</span>
                                                        <input type="file" id="uploadFile" class="upload" hidden>
                                                    </label>
                                                </div>
                                            </div>
                                        </from>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
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
                        <th>categorie</th>
                        <th>name</th>
                        <th>categorie</th>
                        <th>date</th>
                        <th>name</th>
                        <th>name</th>
                        <th>Act</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $key => $product) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td>
                                <img src="<?= ASSETS ?>images/uploads/<?= $product['picture'] ?>" alt="user" width="40" class="rounded-circle" />
                            </td>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['decription'] ?></td>
                            <td>
                                <span class="label 
                            <?php
                            if ($product["id_categorie"] == 1) echo "label-success";
                            if ($product["id_categorie"] == 2) echo "label-danger";
                            if ($product["id_categorie"] == 3) echo "label-warning";
                            if ($product["id_categorie"] == 4) echo "label-primary";
                            ?>"><?= $product['libele'] ?></span>
                            </td>
                            <td><?= $product['add_date'] ?></td>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['name'] ?></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline-success delete-row-btn" data-toggle="tooltip" data-original-title="edit">
                                    <i class="ti-pencil-alt" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline-danger delete-row-btn" data-toggle="tooltip" data-original-title="supprimer">
                                    <i class="ti-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>