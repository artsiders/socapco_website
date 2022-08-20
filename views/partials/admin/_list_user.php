<?php require_once VIEW . "globals.php"; ?>

<script defer>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">liste de produits</h4>
        <div class="table-responsive">
            <table id="demo-foo-addrow" class="table table-striped m-t-30 no-wrap table-hover contact-list text-center" data-page-size="10">
                <thead>
                    <tr>
                        <td colspan="2">
                            <a href="./admin&page=add_user">
                                <button class="btn btn-info btn-rounded">ajouter un utilisateur</button>
                            </a>
                        </td>
                        <td colspan="7">
                            <div class="">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination float-right"></ul>
                                </nav>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>status</th>
                        <th>image</th>
                        <th>login</th>
                        <th>email</th>
                        <th>date</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allusers as $key => $user) : ?>
                        <tr>
                            <td>
                                <span class="label 
                            <?php
                            if ($user["is_admin"] == 1) echo "label-success";
                            else echo "label-info";
                            ?>">
                                    <?php
                                    if ($user["is_admin"] == 1) echo "admin";
                                    else echo "user";
                                    ?></span>
                            </td>
                            <td><img height="30px" width="30px" src="<?= ASSETS ?>images/uploads/<?= $user["picture"] ?>" alt=""></td>
                            <td><?= $user['login'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td class="text-center" data-toggle="tooltip" data-original-title="<?= $user['join_date'] ?>">
                                <div class="">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn_edit_user btn btn-sm btn-icon btn-pure btn-outline-success delete-row-btn" data-toggle="modal" data-target="#editProdForm" data-toggle="tooltip" data-original-title="edit" data-id="<?= $product['id_user'] ?>">
                                    <i class="fa fa-edit" aria-hidden="true" data-id="<?= $user['id_user'] ?>"></i>
                                </button>
                                <button type="button" class="btn_del_user btn btn-sm btn-icon btn-pure btn-outline-danger delete-row-btn" data-toggle="tooltip" data-original-title="supprimer" data-id="<?= $product['id_user'] ?>">
                                    <i class="fa fa-trash" aria-hidden="true" data-id="<?= $user['id_user'] ?>"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="<?= ASSETS ?>js/deleteUser.js"></script>
<script src="<?= ASSETS ?>js/editProd.js"></script>