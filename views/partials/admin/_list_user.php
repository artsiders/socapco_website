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
            <table id="demo-foo-addrow" class="table table-striped m-t-30 no-wrap table-hover contact-list text-center"
                data-page-size="10">
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
                        <th>N</th>
                        <th>login</th>
                        <th>email</th>
                        <th>date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allusers as $key => $user) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td> 
                        <td><?= $user['login'] ?></td> 
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['join_date'] ?></td>
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