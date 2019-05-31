<?php 
session_unset();
session_destroy();
setcookie('log', '', time() -3444, null, false, true);
header('location: index.php?page=connect');
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?php ucfirst($page) ?>Penpal</title>
</head>
<body>

    <?php include_once 'views/includes/header.php'?>

    <button class="btn btn-danger" href="index.php?page=home">Retour à la home</button>

        

    <?php include_once 'views/includes/footer.php'?>

</body>
</html> -->

