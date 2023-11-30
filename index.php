<?php 

include __DIR__.'/partials/header.php';
if(empty($_SESSION['password'])){
    header('Location: login.php');
    die();
}
?>

<div>
    <?php echo $_SESSION['password'] ?>
</div>

<?php
 include __DIR__.'/partials/footer.php';
?>


