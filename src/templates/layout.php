<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
<meta charset="utf-8" />
<title><?= $title ?></title>
<?php require('../assets/lib/externals.php') ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
                </li>
            </ul>
        </nav>   
    </header>
    <main>
        <?= $content ?>
    </main>
<?php require('../assets/lib/externalsJS.php') ?>
</body>
</html>