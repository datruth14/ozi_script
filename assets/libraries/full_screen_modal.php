<!-- 
  Full screen pop modal is just a bootstrap modal that is configured to work dynamically.
  **call popUp  by adding this component "newPopBtn('btn btn-default','popUpId','buttonValue','buttonIcon')" to the page you want the trigger button to be and pass the required paramiters EG
  newPop('btn btn-primary','about','About Us','fas fa-rocket');***

  **pupUp Contents: Call popUp() component inside the current screen component.ozi file Eg
  path: screens/home_page.ozi/ or any of your current screen component the below script is inside home_page.ozi; 
  home_page script default "home_page();"
  home_page script after adding popUp component  "home_page();popUp();"
  Dont foget to pass in the required paramiters else the components will render the default value. 
  
-->


<?php
//us this to call a modal dialog and add the required parameters
function newPopBtn($type="btn btn-dark",$name="new",$title="TestModal",$icon="fas fa-rocket"){
 echo '<a style="text-decoration:none;" class="'.$type.'"  data-bs-toggle="modal" data-bs-target="#'.$name.'"><i class="'.$icon.'"></i> '.$title.' </a>';
}

//call newScreen() and pass required paramiters to use
function popUp($screenId="new",$hcontents="App Title",$bcontents="App Body"){
  ?>
  <!--Bootstrap Modal-->
  <div class="modal animate__animated animate__fadeIn animate__faster" id="<?php echo $screenId;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">                  
                 <i  style="font-size:25px;color:#202142;margin-right:0.5em;" class="fas fa-arrow-left modal-button-close" data-bs-dismiss="modal"></i>
                  <?php echo $hcontents;?>
  
            </div>
            <div class="modal-body">
             <?php
                //checking if component exist or echo content data
                if (function_exists($bcontents)) {
                  $screen=$bcontents; $screen();
                } else {
                    echo $bcontents;
                }
                
                ?>
            </div>
            </div>
          </div>
  </div>
  <?php
  }
  


