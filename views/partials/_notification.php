<?php
if (isset($_SESSION['socapco_alert']) && !empty($_SESSION['socapco_alert']))
    $alert = $_SESSION['socapco_alert'];
else $alert = array();

?>

<style>
    @keyframes notification {
        0% {
            opacity: 1;
            transform: translateY(0);
        }

        100% {
            opacity: 0;
            bottom: -200px;
            pointer-events: none;
        }
    }

    .notification_box {
        position: fixed;
        z-index: 2;
        right: 0;
        bottom: 5px;
        width: 300px;
        margin: 20px;
        animation: notification 1s linear 8s forwards;
        box-shadow: 0 0 10px #878787;
    }
</style>
<?php if (!empty($alert)) : ?>
    <?php
    if ($alert['type'] == "error") $color = "danger";
    else $color = $alert['type'];
    ?>
    <div class="notification_box alert alert-<?= $color ?>">
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