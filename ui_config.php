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
<body>
<!-- App Entry Point -->
<!-- App Entry Point -->
<!-- App Entry Point -->
<nav>
    <ul>
      <li><a href="#" hx-get="index.php?s=home" hx-push-url="true" hx-target="#content">Home</a></li>
      <li><a href="#" hx-get="index.php?s=about" hx-push-url="true" hx-target="#content">About</a></li>
      <li><a href="#" hx-get="index.php?s=contact" hx-push-url="true" hx-target="#content">Contact</a></li>
    </ul>
</nav>

<div id="content">
    <?php ScreenRouter(); ?>
</div>



   

<!-- Calling Javascript Dependency -->
<!-- Calling Javascript Dependency -->
<!-- Calling Javascript Dependency -->
<!-- Calling Javascript Dependency -->
<!-- Calling Javascript Dependency -->
<?php JavascriptDependency() ;?>
</body>
</html>