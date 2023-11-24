<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#212529">
    <meta name="description" content="Ozi Script">
    <meta name="keyword" content="Build web app with ease using ozi script">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <!--Calling IOS Media Dependency -->
    <?php iosMedia()?>

    <!-- Main App Manifest Config -->
    <link rel="manifest" href="/manifest.json">
  
<!--Calling CSS Dependency -->
<!--Calling CSS Dependency -->
<!--Calling CSS Dependency -->
<!--Calling CSS Dependency -->
<!--Calling CSS Dependency -->
<?php CssDependency() ;?>
</head>
<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>

   
    <section style="display:none;" id="myDiv" class="animate-bottom">
       <!-- App Entry Point -->
       <!-- App Entry Point -->
       <!-- App Entry Point -->
       <?php ScreenRouter(); ?>
    </section>

<!-- Calling Javascript Dependency -->
<!-- Calling Javascript Dependency -->
<!-- Calling Javascript Dependency -->
<!-- Calling Javascript Dependency -->
<!-- Calling Javascript Dependency -->
<?php JavascriptDependency() ;?>
</body>
</html>