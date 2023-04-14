<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#212529">
    <meta name="description" content="Ozi Script">
    <meta name="keyword" content="Build web app with ease using ozi script">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="manifest" href="/manifest.json">

    <!-- bootstrap_5.css -->
    <link href="assets/style/css/bootstrap_5.css" rel="stylesheet" />

    <!-- iOS meta tags & icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Ozi Script">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/media/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/media/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/media/images/icons/site.webmanifest">
    <link rel="mask-icon" href="assets/media/images/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">

    <!--Load fonts/ dependencies here-->
    <!--Load fonts/ dependencies here-->
    <!--Load fonts/ dependencies here-->

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Load css/sass/scss dependencies here-->
    <!--Load css/sass/scss dependencies here-->
    <!--Load css/sass/scss dependencies here-->

    <!-- Animate.js-lib -->
    <link rel="stylesheet" href="assets/style/css/animate.min.css" />

    <!--sweet alert-->
    <link rel="stylesheet" href="assets/style/css/sweetalert.css" />

    <!--default css-->
    <link rel="stylesheet" type="text/css" href="assets/style/main.css" />

</head>

<body id="oziApp" style="margin:0;">
   <div id="loader">
    </div>

    <section id="root">
        <?php
//checking if linking is set
if (isset($_GET['screens'])) {
	//checking if screen exist
	if (file_exists("screens/" . $_GET['screens'] . "")) {
		echo "<style>#loader{display:none;}</style>";
		require "screens/" . $_GET['screen'] . "";
	} else {
		echo "<center><br><Br><br><h1 style='color:red;'><strong><i class='fa fa-spider'></i>Error 404</strong></h1><dp style='color:white;'>Opps Screen not found</dp></center><br><br>";
	}
} else {
	require 'components/index.php';
}
?>
    </section>

    <!--jquery-->
    <script src="assets/style/js/jquery.js"></script>

    <!--jquery-->
    <script src="assets/style/js/bootstrap_5.js"></script>

    <!--sweet alert-->
    <script src="assets/style/js/sweetalert.js"></script>

    <!--Default javascript-->
    <script src="assets/style/main.js"></script>

</body>

</html>