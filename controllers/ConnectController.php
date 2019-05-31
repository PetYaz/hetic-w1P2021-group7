<?php

namespace Controller;

use Model\Connect;
class ConnectController{
    public function page(){

        if(!empty($_POST['mail']) && !empty($_POST['password'])){
    
            $mail = $_POST['mail'];
            $password = $_POST['password'];

        $request = new Connect;
        $login = $request->login($mail, $password);
        }

        
        include_once 'views/connect_view.php';
    } 
}