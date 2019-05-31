<?php 
    if(isset($_SESSION['user'])) {
        header('location: index.php?page=home');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php'?>
    <title>Connexion - Penpal</title>
</head>
<body>

    <?php include_once 'views/includes/header.php'?>

    <?php
    if(isset($_GET['error'])) {
        echo'<p id="error"> Nous ne pouvons pas vous authentifier."</p>';
    }
    ?>

    <div class="text-center"> 
        <form action="index.php?page=connect" class="form-connect"method="POST">
            <h1 class="h3 mb-3 font-weight-normal">Connectez-vous</h1>
            <label for="mail" class="sr-only">Adresse mail</label>
            <input name="mail" type="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="password" class="sr-only">Mot de passe</label>
            <input name="password" type="password" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me" name="connect"> Remember me
                </label>
            </div>
            <button name="login" class="btn btn-lg btn-danger" type="submit">Connexion</button>
        </form>
        <p><a href="index.php?page=inscrire">S'inscrire</a></p>
    </div>


    <?php include_once 'views/includes/footer.php';?>

</body>
</html>