<?php
require_once "config/ConfigApp.php";
require_once "php/Controller/MoviesController.php";
require_once "php/Controller/UsuarioController.php";
require_once "php/Controller/LoginController.php";
require_once "php/Controller/SecuredController.php";

function dataBase(){
try{
  $connection = new PDO('mysql:host=localhost;dbname=db_movies;charset=utf8', 'root', '');
}catch(Exception $e){
  $db = new PDO('mysql:host=localhost;charset=utf8', 'root', '');
      $sql = file_get_contents('SQL/db_movies.sql');
      $db->exec($sql);
      }
}

dataBase();
function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];

  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}
if(isset($_GET['action'])){

    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION];
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $action = explode('#',ConfigApp::$ACTIONS[$action]);
        $controller =  new $action[0]();
        $metodo = $action[1];
        if(isset($params) &&  $params != null){
            echo $controller->$metodo($params);
        }
        else{
            echo $controller->$metodo();
        }
    }else{
      $controller =  new MoviesController();
      echo $controller->Home();
    }
}
 ?>
