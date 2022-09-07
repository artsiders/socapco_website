<?php
if (isset($_SESSION['socapco_alert']) && !empty($_SESSION['socapco_alert']))
    $alert = $_SESSION['socapco_alert'];
else $alert = array();

?>
<?php if (!empty($alert)) : ?>
    <div class="alert alert-<?= $alert['type'] ?>">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        <h3 class="text-<?= $alert['type'] ?>">
            <?php if ($alert['type'] == "success") echo "<i class='fa fa-check-circle'></i> succès"; ?>
            <?php if ($alert['type'] == "error") echo "<i class='fa fa-bug'></i> erreur"; ?>
            <?php if ($alert['type'] == "warning") echo "<i class='fas fa-triangle-exclamation'></i> avertissement"; ?>
        </h3>
        <p>
            <?= $alert['message'] ?>
        </p>
    </div>
<?php endif; ?>
<?php $_SESSION['socapco_alert'] = array(); ?>