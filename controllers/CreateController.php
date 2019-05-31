<?php 
namespace Controller;
use Model\CreateModel;
class CreateController{
    public function page(){
        
        $cityError = $descriptionError = $imageError = $city = $description = $image = "";
        if(!empty($_POST) && !isset($_POST['image'])){
            print_r("$user");
            $city        = $_POST['city'];
            $description = $_POST['description'];
            $image       = $_FILES['image']['name'];
            $imagePath   = '../assets/images/' . basename($image);
            $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
            $isSuccess      = true;
            $isUploadSuccess = false;
            
            if(empty($city)){
                
                $cityError = 'Ce champ est obligatoire';
                $isSuccess = false;
            }
            if(empty($description)){
                $descriptionError = 'Ce champ est obligatoire';
                $isSuccess = false;
            }
            if(empty($image)){
                $imageError = 'Ce champ est obligatoir';
                $isSuccess = false;
            }else{
                $isUploadSuccess = true;
                if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg"){
                    $imageError = "fichier autorises .jpg .png .jpeg";
                    $isUploadSuccess = false;
                }
                if(file_exists($imagePath)){
                    $imageError = "Le fichier existe deja";
                    $isUploadSuccess = false;
                }
                if($_FILES["image"]["size"] > 500000){
                    $imageError = "Le fichier ne doit pas dépasser 500KB";
                    $isUploadSuccess = false;
                }
                if($isUploadSuccess){
                    if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)){
                        $imageError = "Il y a eu une erreur lors de l'upload";
                        $isUploadSuccess = false;
                    }
                }
            }
            $verifie = new CreateModel;
            $creat = $verifie -> creat($city, $description, $image, $isSuccess, $isUploadSuccess);
        }
        include_once 'views/create_view.php';
    }
}