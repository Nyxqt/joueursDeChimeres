<?php $title = "Accueil"; ?>
<?php ob_start(); ?>

<!-- MAIN CONTENT -->

test

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>