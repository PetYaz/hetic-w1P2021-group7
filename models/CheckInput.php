<?php
  
namespace Model;

class CheckInput{
    public function check($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }  
}