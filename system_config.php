<?php
//setting the session time out to 1 week (604800) by default, change only if you know how it works*/
ini_set("session.gc_maxlifetime", 604800);
session_set_cookie_params(604800);
/*starting a session, this allows you to store data in $_SESSION['data'] in any of your components*/
session_start();
//echo ini_get("session.gc_maxlifetime"), "\n";


/*System required libraries,Don't romeve or edit if you dont know how it works*/
/*System required libraries,Don't romeve or edit if you dont know how it works*/
/*System required libraries,Don't romeve or edit if you dont know how it works*/
/*System required libraries,Don't romeve or edit if you dont know how it works*/

//Getting mailer agent
require 'assets/plugins/mail_agent/index.php';

/*System required libraries,Don't romeve or edit if you dont know how it works*/
/*System required libraries,Don't romeve or edit if you dont know how it works*/
/*System required libraries,Don't romeve or edit if you dont know how it works*/
/*System required libraries,Don't romeve or edit if you dont know how it works*/













/*System required libraries or plugins,Don't romeve or edit if you dont know how it works*/
/*System required libraries or plugins,Don't romeve or edit if you dont know how it works*/
/*System required libraries or plugins,Don't romeve or edit if you dont know how it works*/
/*Fully required don't remove this files or comment it out. will cause an error if that happens */
/*Fully required don't remove this files or comment it out. will cause an error if that happens */
/*Fully required don't remove this files or comment it out. will cause an error if that happens */

//007 require system_lib
require 'assets/libraries/system_lib.php';

//006 getting quick alert lib
require 'assets/libraries/quick_alert.php';

//005 Getting the file that is required to for building your app screen
require 'view.php';

//004 calling default app router logic
require "assets/libraries/router.php";

//003 Getting required file for your uert interface (UI) design
require 'ui_config.php';

//002 Getting the file that is required for handling the back end request
require 'create_bk_request.php';

//001 Getting the file required for calling back end request
require 'call_bk_request.php';

/*System required libraries or plugins,Don't romeve or edit if you dont know how it works*/
/*System required libraries or plugins,Don't romeve or edit if you dont know how it works*/
/*System required libraries or plugins,Don't romeve or edit if you dont know how it works*/
/*Fully required don't remove this files or comment it out. will cause an error if that happens */
/*Fully required don't remove this files or comment it out. will cause an error if that happens */
/*Fully required don't remove this files or comment it out. will cause an error if that happens */
