<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include __DIR__.'/partials/header.php';

$error = generatepass();
?>
<main  class="container bg-info text-center">
    <div class='m-auto '>
        <h1 class="m-auto mb-4">Password Generator</h1>
        <div class='d-flex justify-content-center'>
            <form action="<?php echo $_SERVER['PHP_SELF']?>"  method="GET">
                <input type="number" min='6' max='20' name="Passlength">
                <button class="btn" type="submit">Genera</button>
            </form>
            <?php if($error) { ?>
            <div class='alert alert-danger'>
                <?php echo 'errore' ?>
            </div>
            <?php } ?>
        </div>
    </div>
</main>
 <?php
 include __DIR__.'/partials/footer.php';
 ?>
