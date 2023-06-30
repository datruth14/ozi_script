<?php 
/*
usage of this modal, requires you to call the trigger and the modal inside the page/ component you want to use it
//And also call in the required contents, which has to be a component file but not the same name as the primary component which has the modal trigger code.
//Eg inside you component  insert or call modal_trigger() and pass in any name as a string in the first paramiter
//And in the next line call modal() and pass in the name of the modal as the second parmiter which most match the trigger name
//EG <button <?php modal_trigger("profile_page") ;?> > modal_trigger </button> this will be the trigger button which can also be assigned to a div or any html tag
//and now call the modal() after the trigger button eg <?php modal("profile_page","name_of_component.php"); ?>
//pleass not that you cant call the perant component as the peremiter component, else will result to an error 
*/


/*call this function inside <a> tag , <h> tag or any html tag to make it trigger the modal screen you want to display content into */
//this is used for Single page application or you can use both in on
function modal_trigger($trigger="exampleModal"){
    ?>
      data-bs-toggle="modal" data-bs-target="#<?php echo $trigger; ?>"
    <?php
  }
  
  
  
  function modal($target="exampleModal", $body_contents="sample.php", $title="My Modal",$animate="animate__fadeInLeft") {
        ?>
        <!-- Modal-->
        <div class="modal animate__animated  <?php echo $animate; ?>" id="<?php echo $target; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
              <div class="modal-header">
                <h3><?php echo $title ; ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="color:black;">
                    <?php require("components/".$body_contents) ;?>
              </div>
            </div>
          </div>
        </div>
    <?php
  }