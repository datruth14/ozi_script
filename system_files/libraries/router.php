<?php

function ScreenRouter()
{
  if (isset($_GET['s'])) {
    if (file_exists("screens/" . $_GET['s'] . "")) {
      require "screens/" . $_GET['s'] . "";
    } else {
      echo '
        <div style="min-height: 100vh;" class="page-wrap d-flex flex-row align-items-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">The page you are looking for was not found.</div>
                <a href="./" class="btn btn-link" hx-get="?s=homepage" hx-push-url="true" hx-target="#content">Back to Home</a>
              </div>
            </div>
          </div>
        </div>';
    }
  } else {
    homepage();
  }
}
