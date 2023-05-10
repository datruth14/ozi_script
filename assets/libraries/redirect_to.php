<?php 
//with this library you will easily redirect user to a specified page 
//you diffined when calling the function
function redirectTo($link='./'){
  echo "<script>window.location.href='".$link."';</script>";
}
?>