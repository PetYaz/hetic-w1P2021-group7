<?php 
namespace Model;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    
    include_once 'views/includes/head.php'?>
    <title>Chatboc</title>
</head>
<body>
    <?php include_once 'views/includes/header.php'?>

    <h1 class="h3 mb-3 font-weight-normal">Chattez</h1>
    <main class="chatBox">
        <div id= "msgs" class="msgs">
        <?php 
        $query = Database::$pdo->query("SELECT * FROM messages ORDER BY id DESC");
        while ($msg= $query->fetch()) {?>
        
            <b class="nameChat"><?= $msg['name'] ?></b> : <span class = "message"><?= $msg['message'] ?> <br>
            
        <?php } ?>
        </div>
        <div >
            <form  class="form-group" method ="POST" action="">
                <input class="form-control" type="text" name="message" placeholder="message">
                <button class="btn btn-lg btn-danger" type="submit" name="send">Envoyer</button>
            </form>
        </div>
    </main>
    <?php include_once 'views/includes/footer.php'?>
    
</body>
<script>

        setInterval("messages()", 4000);
        function messages() {
            $(".msgs").load("#msgs");
        }

</script>
</html>

<style>
main {
    max-height: 90vh;
}
.msgs {
    max-height: 70vh;
    overflow: scroll;
    color: black;
}

.nameChat {
    color: red;
}
</style>