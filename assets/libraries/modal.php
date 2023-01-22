<?php
//pleas note that each of your modal should include a db file if need be
//creating modal trigger button
//creating modal trigger button

/*
usage of this modal, requires you to call the trigger and the modal inside the page/ component you want to use it
//And also call in the required contents, whivh has to be a component file but not the index.php component.
//Eg inside you component  insert or call modal_trigger() and pass in any name as a string in the first paramiter
//And in the next line call modal() and pass in the name of the modal as the second parmiter which most match the trigge name
//EG <button <?php modal_trigger("profile_page") ;?> > modal_trigger </button> this will be the trigger button which can also be assigned to a div or any html tag
//and now call the modal() after the trigger button eg <?php modal("profile_page","name_of_component.php"); ?>
//pleass not that you cant call the perant component as the peremiter component, else will result to an error 
*/



function modal_trigger($trigger="exampleModal"){
?>
  data-bs-toggle="modal" data-bs-target="#<?php echo $trigger; ?>"
<?php
}

function modal($target="exampleModal", $body_contents="sample.php", $title="My Modal") {
?>

<!-- Modal -->
<div class="modal fade" id="<?php echo $target; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header" style="color:white;">
         <h3 style="color:white;"><?php echo $title ; ?></h3>
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