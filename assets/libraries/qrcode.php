
<?php 
//calling this function in your app screen you must
//uncomment the qrcode lib inside system_config.php
//required paramiters
//param1 = the url of the qrcode will goto when scanned
//param2 = the width of the qrcod
//param3 = the height of the qrcode
//call this in you app component 
//EG::: qrcodeGen('google.com','300','300') ******************
////////Please Note That if you leave any feild empty, it will be replaced with the default value //////


function qrcodeGen($url='ozi.com.ng',$width='300',$height="300"){
 ?>

<script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>

<center><br><Br><Br>
   <div id="qrcode"></div>
</center>

<script>
const qrcode = new QRCode(document.getElementById('qrcode'), {
  text: '<?php echo $url ;?>',
  width: <?php echo $width ;?>,
  height: <?php echo $height ;?>,
  colorDark : '#000',
  colorLight : '#fff',
  correctLevel : QRCode.CorrectLevel.H
});
</script>

<?php
}
?>
