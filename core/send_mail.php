<?php
if(isset($_GET['find'])){
    //call mail html template inside your app and configure based on your needs
    require('assets/plugins/mail_agent/template/sample_mail.php');
    //calling mail agent sendMailTo() method inside your app just after you have called the mail html template....
    //sendMailTo($sender,$recipients,$subject,$mail_theme,quick_alert2("Mail Sent"));

    quick_alert2("Mail Sent");
}  
     


