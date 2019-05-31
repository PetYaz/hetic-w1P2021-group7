<?php

namespace Controller;

use Model\Inscrire;

class InscrireController{
  public function page(){
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])
    && !empty($_POST['password_confirm'])){

        //VARIABLES
        $pseudo       = $_POST['pseudo'];
        $email        = $_POST['email'];
        $password     = $_POST['password'];
        $pass_confirm = $_POST['password_confirm'];

        $add = new Inscrire;
        $send=$add->send($pseudo, $email, $password, $pass_confirm);
        
    }
    include_once 'views/inscrire_view.php';
  }
}

