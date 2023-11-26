<?php 
/** Installation Guide (How To Use FAB Widget)
 * After Downloading this widget, 
 * move it into your project file in (assets/widgets/fab.php)
 * require it in between  the /*=== WIDGETS ==============/* Comment inside your project file in system_config.php 
 * save and call the widget redirectTo() inside any of your componets root files (components/index.php etc)  and add the required parameters as follows::
 * Sample ::: <?php redirectTo("url");?>
 * leave empty to see default values or update parameters as it suites you
 * thank you for chosing ozi...
 */

function redirectTo($link='./'){
  echo "<script>window.location.href='".$link."';</script>";
}
?>