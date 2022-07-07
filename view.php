<?php
//creating a new component.
//creating a new component.
/*
Components are litte pieces of your web app screens. 
it can also be the entire screen.Example is below
about_us();home_page(); or header(); footer(); sliders(); etc.
*/



//creating the home_page() base component
function home_page()
{
   //require page
   require "components/index.php";
}


//creating the doc() base component
function doc()
{
   //require page
   require "components/doc.php";


}//creating the about() base component
function about()
{
   //require page
   //require "components/about.php";
}