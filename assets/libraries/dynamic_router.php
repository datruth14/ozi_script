
<?php
   //checking if linking is set
   if (isset($_POST['screens'])) {
    //checking if screen exist
    if (file_exists("screens/".$_POST['screens']."")) {
       require "screens/".$_POST['screens']."";
    }else{
      echo "<center><br><Br><br><h1 style='color:red;'><strong><i class='fa fa-spider'></i>Error 404</strong></h1><dp style='color:white;'>Opps Screen not found</dp></center><br><br>";
    }
  }else{
    echo "<div id='root'>";
    require 'components/index.php';
    echo "</div>";
  }
?>
