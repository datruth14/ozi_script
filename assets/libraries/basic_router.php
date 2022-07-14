<?php
  //checking if linking is set
  if (isset($_GET['screens'])) {
    //checking if screen exist
    if (file_exists("screens/".$_GET['screens']."")) {
       require "screens/".$_GET['screens']."";
    }else{
      echo "<center><br><Br><br><h1 style='color:red;'><strong><i class='fa fa-spider'></i>Error 404</strong></h1><dp style='color:white;'>Opps Screen not found</dp></center><br><br>";
    }
  }else{
  //checking if screen exist
    if (file_exists("screens/home_page.ozi")) {
         require "screens/home_page.ozi";
    }else{
      echo "<center><br><Br><br><h1 style='color:red;'><strong>Error 404</strong></h1><dp style='color:white;'>Default Home Page.ozi is missing</dp></center><br><br>";
    }
  }


?>