<?php 
/** HOW TO USE
 * Call the wiget component inside the screen you whish to use it eg, fab("","","","","") and pass in the required paramater, leave the feild you dont want to change empty i. "","white" if empty, it will display the default settings
 *Sample ::: <?php fab("left","black","green","bell","?s=about","alert('It Worked')");?>
 */

//creating a floating action button library 
function fab($direction="right",$bgColor="#0C5ED7",$color="white",$icon="home",$href="",$onClick=""){
$link = "href='".$href."'";
 ?>

<div class="fixed-bottom" >
 <a  <?php echo $link; ?> onclick="<?php echo $onClick; ?>"
 style="float:<?php echo $direction;?>;padding:12px;background:<?php echo $bgColor;?>;color:<?php echo $color; ?>;margin:18px;border-radius:100%;height:50px;width:50px;box-shadow:0px 0px 35px  <?php echo $bgColor;?>;"><center><i class="fas fa-<?php echo $icon;?>"></i></center></a>     
</div>

<?php
}