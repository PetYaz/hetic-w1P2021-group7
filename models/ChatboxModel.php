<?php

namespace Model;

class ChatboxModel{
    public function send($name, $message){
        if(isset($name)) {
            if(isset($message)) {
                if(strlen($message)<=500) {
                    $req = Database::$pdo->prepare('INSERT INTO messages(name, message)VALUES(?,?)');
                    $res = $req->execute(array($name,$message));
                } else {
                    $error = "Votre message doit faire moins de 500 caractères !";
                }
            } else {
                $error = "Vous devez entrer un message !";
            }
        }
    }  
}

// // Recovery all message
// $msgs = $req->query("SELECT * FROM messages ORDER BY id DESC");

