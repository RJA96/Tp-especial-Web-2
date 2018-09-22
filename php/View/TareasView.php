<?php
require('libs/Smarty.class.php');
/**
 *
 */
class TareasView
{

  function Mostrar($tarea){
    $smarty = new Smarty();

    //$smarty->debugging = true;
    // $smarty->display('templates/home.tpl');

   ?>






    <?php
    if ($tarea == "home"){
      // $smarty->display('templates/home.tpl');
    ?>


<?php
  }elseif ($tarea == "AllMovies"){
    $smarty->display('templates/AllMovies.tpl');
?>

<?php
  }elseif ($tarea == "Contacto") {
  $smarty->display('templates/Contacto.tpl');
?>

<?php
  }elseif ($tarea == "Login") {
  $smarty->display('templates/Login.tpl');

 ?>


<?php
  }elseif ($tarea == "Registrar") {
  $smarty->display('templates/Registrar.tpl');
?>


  <?php
}elseif ($tarea == "Sugerencias") {
  $smarty->display('templates/Sugerencias.tpl');
   ?>
  <?php
    }
   }
 }
  ?>
