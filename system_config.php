<?php

/*starting a session, this allows you to store data in $_SESSION['data'] in any of your components*/
session_start();


/*this file contains the libs,plugins and components paths that are required to enable the basic functionality of this framework you can add custome libraries, plugins or components to handle some funtionalities of your app above. you are not to edit or remove any file required bellow.
*/
//Getting mailer agent
require 'assets/plugins/mail_agent/index.php';

//getting quick alert lib
require 'assets/libraries/quick_alert.php';














/*Fully required don't remove this files or comment it out. will cause an error if that happens */
/*Fully required don't remove this files or comment it out. will cause an error if that happens */
/*Fully required don't remove this files or comment it out. will cause an error if that happens */

//calling App Page Routes
require "assets/libraries/routes.php";

//006 Getting the file that is required to for building your app screen
require 'view.php';

//005 calling default app router logic
require "assets/libraries/dynamic_router.php";

//004 calling default app router logic
//require "assets/libraries/basic_router.php";

//003 Getting required file for your uert interface (UI) design
require 'ui_config.php';



//002 Getting the file that is required for handling the back end request
require 'create_bk_request.php';


//001 Getting the file required for calling back end request
require 'call_bk_request.php';
