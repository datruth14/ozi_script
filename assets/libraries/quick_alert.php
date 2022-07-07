<?php

//this will callend in your script when you need to send an alert
function quick_alert($basic ="Basic Alert"){
    echo "<script>alert('".$basic."');</script>";
}

//this is a sweet alet component buit with ozi script componet
function quick_alert2($h1 ="Basic Alert",$p="",$icon="success"){
    echo "<script>responsealert('".$h1."','".$p."','".$icon."');</script>";
    
}