
<div style="padding:15px;" class="animate__animated animate__bounceInDown">
   <center>
      <img class="animate__animated animate__bounce" src=" assets/media/images/welcome.png" style="margin-top: 2em;width:250px;height:250px;">

      <b>
         <h1 class="title" style="font-size:1.6em;color:navy;padding:0px 0px 15px 15px;">
            Congratulations, You have successfully created your app structure.</h1>
      </b>
      <p class="subtitle" style="font-size:22px;color:navy;font-style:bold;">With Ozi scripting, developing a cross-platform application is made easy.<br> Use existing components from ozi script or just create one and call it any where in your app.</p><br>


      <!--<div class="btn-group" style="justify-content:center;">


         <a class="btn btn-danger" href="?screens=doc.ozi">
            <span class="icon-text">
               <span class="icon"> <i class="fas fa-pen"> </i> </span>
               <span>Basic Route</span> 
            </span>
         </a>


         <button class="btn btn-primary" onclick="responsealert('basic alertH1','basic alert p (the next paramiter is an icon)','success')"> Try Alert </button>

         <form action="" method="post" style="margin-right:8px;">
            <button type="submit" name="send_mail" class="btn btn-info"> Send Mail </button>
         </form>

         <button class="btn btn-warning" href="#" onclick="loadHtml('doc.php')"> Dynamic Route </button>

      </div>-->
      <center>
      <div class="btn-group">
      <a onclick="appPage('./','doc.ozi','Sammy')" class="btn btn-warning btn_curved"><i class="fas fa-pen"></i> Documentation </a>
      <div  onclick="appPage('./','about.ozi','Take Me Home')" > 
               <?php newLink('btn btn-dark btn_curved ','about','About','fas fa-rocket'); ?>
      </div>

      </div>
     
   </center>
      <br><br><br>

      
   </center>
</div>
