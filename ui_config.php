<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="navy">
  <meta name="description" content="A new ozi script app">
  <meta name="keyword" content="MyApp">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="icon" type="image/x-icon" href="assets/media/images/icons/favicon.ico">

  <!-- iOS meta tags & icons -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="myapp">
  <!--set your app logo for header title-->
  <link rel="apple-touch-icon" href="assets/media/images/icons/favicon.png">

  <!--Load fonts/ dependencies here-->
  <!--Load fonts/ dependencies here-->
  <!--Load fonts/ dependencies here-->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Load css/sass/scss dependencies here-->
  <!--Load css/sass/scss dependencies here-->
  <!--Load css/sass/scss dependencies here-->

  <!-- Animate.js-lib -->
  <link rel="stylesheet" href="assets/style/css/animate.min.css" />

  <!-- Bootstrap CSS -->
  <link href="assets/style/css/bootstrap_5.css" rel="stylesheet" >

  
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="assets/style/css/uikit.min.css" />


  <!--sweet alert-->
  <link rel="stylesheet" href="assets/style/css/sweetalert.css" />

  <!--default css-->
  <link rel="stylesheet" type="text/css" href="assets/style/main.css" />


</head>

<body style="margin:0;">


<div id="root" class="animate-bottom">
<?php
  //checking if linking is set
  if (isset($_GET['screens'])) {
    //checking if screen exist
    if (file_exists("screens/".$_GET['screens']."")) {
       require "screens/".$_GET['screens']."";
    }else{
      echo "<center><br><Br><br><h1 style='color:red;'><strong><i class='fa fa-spider'></i>Error 404</strong></h1><dp style='color:white;'>Opps Screen not found</dp></center><br><br>";
    }
  }else{
  //checking if screen exist
    if (file_exists("screens/home_page.ozi")) {
         require "screens/home_page.ozi";
    }else{
      echo "<center><br><Br><br><h1 style='color:red;'><strong>Error 404</strong></h1><dp style='color:white;'>Default Home Page.ozi is missing</dp></center><br><br>";
    }
  }
?>
</div>
  
  <!--jquery-->
  <script src="assets/style/js/jquery.js"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="assets/style/js/bootstrap_5.js"></script>

  <!--sweet alert 2-->
  <script src="assets/style/js/sweetalert.js"></script>


  <!-- UIkit JS -->
  <script src="assets/style/js/uikit.min.js"></script>
  <script src="assets/style/js/uikit-icons.min.js"></script>


  <!--Default javascript-->
  <script src="assets/style/main.js"></script>


</body>

</html>