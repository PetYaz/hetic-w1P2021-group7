<?php

namespace Model;

class CreateModel{
    public function creat($city, $description, $image, $isSuccess, $isUploadSuccess){
        if($isSuccess && $isUploadSuccess){
        $creating = Database::$pdo->prepare('INSERT INTO categories (name_id,city,description,image) value(1,?,?,?)');
        $creating = $creating->execute(array($city,$description));
        }
    }
}