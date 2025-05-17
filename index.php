<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include('./components/header.php');
?>

<?php 
if (isset($_SESSION['msg'])) {
?>
    <div class="alert <?= $_SESSION['msgType'] ?? 'alert-info' ?> alert-dismissible fade show" role="alert">
        <strong>
            Dear <?= isset($_SESSION['auth-user']['name']) ? $_SESSION['auth-user']['name'] : 'Guest' ?>!
        </strong> 
        <?= $_SESSION['msg']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
    unset($_SESSION['msg']);
}
?>

<?php include('./components/footer.php') ?>
