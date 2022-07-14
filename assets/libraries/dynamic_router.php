<!--defing the dynamic router component
**Uncomment  basic_router.php from system_config.php to use dynamic_router.php**
Link from components to components with appPage() without page reloading and pass in required paramiters Eg
appPage('./','component_screen','passInparameters') EG2
<a onclick="appPage('./','about.ozi','john')"> About </a>
-->

<script>
/**Dynamic Roucting for SPA */
/**Dynamic Roucting for SPA */
/**Dynamic Roucting for SPA */
function appPage(mainlink, appParamsOne,appParamsTwo) {
  $("#main").load(mainlink, {
    screens: appParamsOne,
    pid:appParamsTwo
  });
  //hide default screen when a link is clicked
  document.getElementById("root").style.display = "none";
}
/**Dynamic Roucting for SPA */
/**Dynamic Roucting for SPA */
/**Dynamic Roucting for SPA */
</script>



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
