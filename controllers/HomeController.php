<?php

namespace Controller;

use Model\Categories;

class HomeController{
  public function page(){
      $cat = new Categories;
      $list = $cat->list();

      include_once 'views/home_view.php';
  }
}