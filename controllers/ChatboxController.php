<?php

namespace Controller;

use Model\ChatboxModel;


class ChatboxController{
  public function page(){
    if(!empty($_POST['message'])) {

        //VARIABLES

        $name       = $_SESSION['name'];
        $message    = htmlspecialchars($_POST['message']);

        $add = new ChatboxModel;
        $send=$add->send($name, $message);

        // $request = new ChatboxModel;
        // $pull = $request->pull($name, $message);
    }
    include_once 'views/chatbox_view.php';
  }
}