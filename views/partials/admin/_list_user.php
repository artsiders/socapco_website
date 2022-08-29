<?php require_once VIEW . "globals.php"; ?>

<script defer>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<div class="card">
    <!-- Modal Edit Product -->
    <div id="editUserModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">modifier</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="logo text-center">
                        <span class="db">
                            <label class="picture_label" for="profile">
                                <img style="border-radius: 50%;" width="120px" height="120px" id="userPicture" src="<?= ASSETS ?>images/uploads/" alt="logo" />
                            </label>
                        </span>
                        <h5 class="font-medium"><label for="profile">changer la photo</label></h5>
                    </div>
                    <p class="hide alert alert-danger text-center" id="editError"></p>
                    <p class="hide alert alert-success text-center" id="editSuccess"></p>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <p class="hide alert alert-danger text-center" id="error"></p>
                            <p class="hide alert alert-success text-center" id="success"></p>
                            <form class="form-horizontal m-t-20" method="post" action="" id="editUserForm" enctype="multipart/form-data">

                                <input type="file" name="picture" id="profile" hidden>
                                <input type="text" name="id" id="idUser" hidden>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" id="userName" name="login" class="form-control form-control-lg" placeholder="non d'utilisateur" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input type="text" id="userEmail" name="email" class="form-control form-control-lg" placeholder="email" aria-label="Username" aria-describedby="basic-addon2">
                                </div>

                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit ">valider le
                                            compte</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <!-- END Modal Edit Product -->
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
                        <?php if ($_SESSION['socapco_admin']["is_admin"] == 1) : ?>
                            <th>action</th>
                        <?php endif; ?>
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
                            <?php if ($_SESSION['socapco_admin']["is_admin"] == 1) : ?>
                                <td>
                                    <button type="button" class="btn_edit_user btn btn-sm btn-icon btn-pure btn-outline-success delete-row-btn" data-toggle="modal" data-target="#editUserModal" data-toggle="tooltip" data-original-title="edit" data-id="<?= $user['id_user'] ?>">
                                        <i class="fa fa-edit" aria-hidden="true" data-id="<?= $user['id_user'] ?>"></i>
                                    </button>
                                    <button <?php if ($user['is_admin'] == 1) echo "disabled"; ?> type="button" class="btn_del_user btn btn-sm btn-icon btn-pure btn-outline-danger delete-row-btn" data-toggle="tooltip" data-original-title="supprimer" data-id="<?= $user['id_user'] ?>">
                                        <i class="fa fa-trash" aria-hidden="true" data-id="<?= $user['id_user'] ?>"></i>
                                    </button>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="<?= ASSETS ?>js/deleteUser.js"></script>
<script src="<?= ASSETS ?>js/editUser.js"></script>