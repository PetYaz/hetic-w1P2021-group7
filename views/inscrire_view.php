<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?php ucfirst($page) ?>Penpal</title>
</head>
<body>

    <?php include_once 'views/includes/header.php'?>

        <div class="text-center">
            <div class="form-inscrire">
                <h1 class="h3 mb-3 font-weight-normal">Inscrivez vous!</h1> 
                <?php
                if (!isset($_SESSION['connect'])) { ?>

                
                <form method="post" action="?page=inscrire" >
                    <div class="form-group">
                        <label for="name">Pseudo</label>
                        <input type="name" name="pseudo" class="form-control" placeholder="Pseudo">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="password_confirm" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                    <p><a href="index.php?page=connect">Déjà inscrit</a></p>
                </form>
                <?php } else { ?>
                <p>Bonjour <?= $_SESSION['name']; ?></p>
                <?php } ?>
            </div>
        </div>

        <br>

        

    <?php include_once 'views/includes/footer.php'?>

</body>
</html>