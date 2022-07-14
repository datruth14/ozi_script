<!-- 
  This file defines your app routing, to trigger a screen you have to add the
   "data-bs-toggle="modal" data-bs-target="#nameofpage"  to your trigger button. Eg
   <a data-bs-toggle="modal" data-bs-target="#nameofpage"> About Us </a> this will call the modal that has the targeted id eg.. copy bellow code and change the id to match your trigger button.

-->


<?php
//us this to call a modal dialog and add the required parameters
function newLink($type="btn btn-dark",$name="new",$title="TestModal",$icon="fas fa-rocket"){
 echo '<a style="text-decoration:none;" class="'.$type.'"  data-bs-toggle="modal" data-bs-target="#'.$name.'"><i class="'.$icon.'"></i> '.$title.' </a>';
}

//call newScreen() and pass required paramiters to use
function newScreen($screenId="new",$hcontents="App Title",$bcontents="App Body"){
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
  


