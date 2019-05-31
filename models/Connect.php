<?php

namespace Model;

class Connect{
    public function login($mail, $password){
        if($mail){
            $password = "aq1".sha1($password."1254")."25";
        $req = Database::$pdo->prepare('SELECT * FROM user WHERE mail=?');
        $req->execute(array($mail));

        $error=1;

        while($user = $req ->fetch()) {
            print_r($user);
            if($password == $user['password']) {
                $error=0;
                $_SESSION['connect']=1;
                $_SESSION['name'] =$user['name'];
                if(isset($_POST['connect'])) {
                    setcookie('log', $user['name'], time() + 365*24*3600, '/', null, false, true);
                }
                    echo 'success';
                
            }
            if($error ==1) {
                header ('location: ../?error=1');
            }
            
        }
    }
        // if($email) {
        // $req-> execute();
        // $user = $req->fetch(); 
        // }
        // if(!$user) {
        //     echo 'Aucun utilisateur n/a été détecté';
        // } elseif (!password_verify($_POST['password'], $user['password'])) {
        //     echo 'Mot de passe incorrect';
        // } else {
        //     unset($user['password']);
        //     $_SESSION['user'] = $user;
            
        //     session_write_close();
        //     header('location: index.php');
        // }
        // if(isset($GET['logeout'])){
        //     unset($_SESSION['user']);
        //     addFlash('success','Vous avez bien été déconneté');
        // }
    }
}
