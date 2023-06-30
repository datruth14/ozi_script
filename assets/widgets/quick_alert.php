<?php
/* This is just a sweet alert modal and a basic javascript alert
to triger alert call the alert component inside the current screen you wish to trigger the alert from.
it can also be triggered on onscreen load event or a form submit event and a success callback function;
**calling quick_alert() component
call quick_alert() and pass in the required paramiger, only one parmiter required. eg quick_alert("My Name Is Victor");

**calling quick_alert2() component
call quick_alert2() and pass in the required paramigers, only Three(3) parmiters are required. eg quick_alert2("H1","paragraph","animatedIcon"); EG
quick_alert2('Well Done','Your file has been uploaded to the server','success'); if the component is called with any given parmeters it will pop out the default values;
AnimatedIcons to call based on your needs
icon 1: "success"
icon 2: "warning"
icon 3: "info"
icon 3: "error"

animated icons are called based on a given status of  a request...
*/


//this will called in your script when you need to send an alert
function quick_alert($basic ="Basic Alert"){
    echo "<script>alert('".$basic."');</script>";
}

//this is a sweet alet component built with ozi script component
function quick_alert2($h1 ="Basic Alert",$p="",$icon="success"){
    echo 
    "<script>
    responsealert('".$h1."','".$p."','".$icon."');
    </script>";
}