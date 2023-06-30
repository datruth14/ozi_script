
<?php
//call this function inside <a> and pass the required parameters
//this is used for a multiple page application
function linkTo($newLink="#",$setParam="") {
  echo "href='?S=".$newLink."".$setParam."'";
}

//Call This Function In Your App Entry Point If You Are Building a Multiple PAge Application
function MultiPageRouter() {
    //checking if linking is set
    if (isset($_GET['S'])) {
      //checking if screen exist
      if (file_exists("screens/" . $_GET['S'] . "")) {
        require "screens/" . $_GET['S'] . "";
      } else {
        echo '
              
              <div style="min-height: 100vh;" class="page-wrap d-flex flex-row align-items-center">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-12 text-center">
                          <span class="display-1 d-block">404</span>
                          <div class="mb-4 lead">The page you are looking for was not found.</div>
                          <a href="./" class="btn btn-link">Back to Home</a>
                      </div>
                  </div>
              </div>
            </div>    
        ';
      }
    } else {
      require 'components/index.php';
    }
}

