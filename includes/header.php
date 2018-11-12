<?php require_once("includes/config.php");

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Video Tube</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="assets/js/commonActions.js"></script>
    </head>

    <body>
        <div id="pageContainer">
            <div id="mastHeadContainer">
                <button class="navShowHide">
                    <img src="assets/images/icons/menu.png" alt="Menu Icon" title="Menu Icon">
                </button>
                <a href="index.php" class="logoContainer">
                    <img src="assets/images/icons/videoTubeLogo.png" alt="Video Tube Logo" title="Video Tube Logo">
                </a>

                <div class="searchBarContainer">
                    <form action="search.php" method="GET">
                        <input type="text" class="searchBar" name="term" placeholder="Search">
                        <button class="searchButton">
                            <img src="assets/images/icons/search.png" alt="Search Icon" title="Search Icon">
                        </button>
                    </form>
                </div>

                <div class="rightIcons">
                    <a href="upload.php">
                        <img src="assets/images/icons/upload.png" alt="Upload Icon" title="Upload Icon" class="upload">
                    </a>
                    <a href="#">
                        <img src="assets/images/profilePictures/default.png" alt="Upload Icon" title="Upload Icon" class="upload">
                    </a>
                </div>
            </div>
            <div id="sideNavContainer" style="display: none;">

            </div>
            <div id="mainSectionContainer">
                <div id="mainContentContainer">