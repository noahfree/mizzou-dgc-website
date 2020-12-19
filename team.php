<!DOCTYPE HTML>
<html>
<head lang="en">
    <!--    meta for mobile view taken from: https://stackoverflow.com/questions/14304494/responsive-web-design-is-working-on-desktop-but-not-on-mobile-device-->
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Team | Mizzou Disc Golf</title>
    
    <!-- External Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balthazar&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <!-- JQuery jslibs/jquery-2.1.4.min.js --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.4.custom/jquery-ui.min.css">
    <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>

</head>
<body id="teamPage">
    <?php include "includes/header.php"; ?>
    <div id="content3">
        <h1>A-Team</h1>
        <div id="teamGrid">
            <div class="profile1">
                <img src="images/team/jared_brabant.png" alt="">
                <div>
                    <h5><span>Jared Brabant</span>, Team Captain</h5>
                    <p><a href="https://www.pdga.com/player/100745" target="_blank">995 rated</a></p>
                </div>
            </div>
            <div class="profile2">
                <img src="images/team/drew_cantrell.png" alt="">
                <div>
                    <h5><span>Drew Cantrell</span>, Sophomore</h5>
                    <p><a href="https://www.pdga.com/player/80089" target="_blank">978 rated</a></p>
                </div>
            </div>
            <div class="profile3">
                <img src="images/team/quen_borengasser.png" alt="">
                <div>
                    <h5><span>Quen Borengasser</span>, Junior</h5>
                    <p><a href="https://www.pdga.com/player/113918" target="_blank">970 rated</a></p>
                </div>
            </div>
            <div class="profile4">
                <img src="images/team/noah_free.png" alt="">
                <div>
                    <h5><span>Noah Free</span>, Sophomore</h5>
                    <p><a href="https://www.pdga.com/player/99515" target="_blank">944 rated</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
    <?php include "includes/login.php"; ?>
    
    <script src="scripts/loginScript.js"></script>
    <script src="scripts/mobileNavbar.js"></script>
</body>
</html>