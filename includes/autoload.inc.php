<?php 

spl_autoload_register("load");

function load($class_name){

  $path = "classes/";
//   $pathController = "controllers/";
//   $pathModel = "models/";

  $ext  = ".php";

  $full_path = $path . $class_name . $ext;
//   $full_path_controllers = $pathController . $class_name . $ext;
//   $full_path_models = $pathModel . $class_name . $ext;

  if (!file_exists($full_path)) {
    $path = "../classes/";

    $full_path = $path . $class_name . $ext;
  }
  
//   if (!file_exists($full_path_controllers)) {
//     $pathController = "../controllers/";

//     $full_path_controllers = $pathController . $class_name . $ext;
//   }
  
//   if (!file_exists($full_path_models)) {
//     $pathModel = "../models/";

//     $full_path_models = $pathModel . $class_name . $ext;
//   }

  include_once $full_path;
//   include_once $full_path_controllers;

}
