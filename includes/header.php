<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="resources/images/fb.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Portfolio of Francis Beauchamp. Web Design, Web development, Game Programming, Software Engineer Student.">
        <meta name="keywords" content="Francis Beauchamp, Francis, Beauchamp, Web Design, Programmer, Game Programming, Software Engineering">
        <title>Francis Beauchamp, Freelance Programmer & Web Designer</title>
        <?php
        $currentFile = $_SERVER["PHP_SELF"];
        $parts = Explode('/', $currentFile);
        $currentFile = Explode('.', $parts[count($parts)-1]);
        $currentPage = $currentFile[0];
        ?>
        <!-- CSS -->
        <!-- <link rel="stylesheet" type="text/css" href="resources/reset.css"> -->
        <link rel="stylesheet" type="text/css" href="resources/style.css">
        <link rel="stylesheet" type="text/css" href="resources/nav.css">

        <!-- Javascript -->
        <script src="resources/js/jquery.js" type="text/javascript"></script>
        <?php
        if ($currentPage == 'contact') {
            echo '<script src="resources/js/jquery.lockSubmit.js" type="text/javascript"></script>';
            echo '<script src="resources/js/jquery.validate.min.js" type="text/javascript"></script>';
        }
        ?>

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

        <? $currentPage = '\''.$currentPage.'\'' ?>
    </head>
    <body id="content" onload="setActivePage(<?php echo $currentPage; ?>);">
        <nav class="nav-header">
             <a href="index.php">
                <svg class="logo fbLogo" version="1.1" class="svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="64px" height="64px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                <circle class="circle" cx="16" cy="16" r="16" fill="#00CFDE" />
                <g id="Letters">
                    <g id="B">
                        <rect x="16.972" y="7.955" fill="#FFFFFF" width="6.216" height="1.963"/>
                        <rect x="16.972" y="15.019" fill="#FFFFFF" width="6.216" height="1.963"/>
                        <rect x="22.207" y="7.955" fill="#FFFFFF" width="1.963" height="15.715"/>
                        <rect x="16.973" y="21.707" fill="#FFFFFF" width="6.216" height="1.963"/>
                    </g>
                    <g id="F">
                        <rect x="8.803" y="7.955" fill="#FFFFFF" width="7.198" height="1.963"/>
                        <rect x="8.803" y="9.58" fill="#FFFFFF" width="1.963" height="14.09"/>
                        <rect x="9.784" y="15.019" fill="#FFFFFF" width="6.216" height="1.963"/>
                    </g>
                </g>
                </svg>
             </a>
        <div class="menu-bar">
            <input type='checkbox' id='toggle'/>
            <label for='toggle' class='toggle'></label>
            <ul class="menu">
                <li><a id="index"   href="index.php"    >home</a></li>
                <li><a id="work"    href="work.php"     >work</a></li>
                <li><a id="about"   href="about.php"    >about</a></li>
                <li><a id="contact" href="contact.php"  >contact</a></li>
            </ul>
        </div>
        </nav>
        <SCRIPT>
            function setActivePage(page) {
                document.getElementById(page).className = 'active';
            }
        </SCRIPT>