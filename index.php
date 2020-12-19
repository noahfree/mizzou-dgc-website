<!DOCTYPE HTML>
<html>
<head lang="en">
    <!--    meta for mobile view taken from: https://stackoverflow.com/questions/14304494/responsive-web-design-is-working-on-desktop-but-not-on-mobile-device-->
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Mizzou Disc Golf</title>
    
    <!-- External Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balthazar&display=swap" rel="stylesheet">
    <!-- JQuery jslibs/jquery-2.1.4.min.js --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.4.custom/jquery-ui.min.css">
    <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    
    <script>
        var photoNum = 1;
        
        $(document).ready(function(){
            
            $("#rightArrow").click(function(){
                if (photoNum == 4){
                   photoNum = 1;
                } else {
                   photoNum++;
                } 
                
                var string = '<img src="images/home/photo' + photoNum + '.jpg" alt="">';
                $("#content1").html(string);
                string = "url(images/home/photo" + photoNum + ".jpg)";
                $(".body").css("background-image", string);
            });
            
            $("#leftArrow").click(function(){
                if (photoNum == 1){
                   photoNum = 4;
                } else {
                   photoNum--;
                } 
                
                var string = '<img src="images/home/photo' + photoNum + '.jpg" alt="">';
                $("#content1").html(string);
                string = "url(images/home/photo" + photoNum + ".jpg)";
                $(".body").css("background-image", string);
            });
        });
    </script>
</head>
<body id="homePage">
    <?php include "includes/header.php"; ?>
    <div class="body">
        <div class="blur">
            <img id="leftArrow" class="arrow" src="images/leftArrow.png" alt="">
            <div id="content1">
                <img src="images/home/photo1.jpg" alt="">
            </div>
            <img id="rightArrow" class="arrow" src="images/rightArrow.png" alt="">
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
    <?php include "includes/login.php"; ?>
    
    <script src="scripts/loginScript.js"></script>
    <script src="scripts/mobileNavbar.js"></script>
    <script>
         window.setInterval(function(){
            if (photoNum == 4){
               photoNum = 1;
            } else {
               photoNum++;
            } 

            var string = '<img src="images/home/photo' + photoNum + '.jpg" alt="">';
            $("#content1").html(string);
            string = "url(images/home/photo" + photoNum + ".jpg)";
            $(".body").css("background-image", string);
        }, 5000);
    </script>
</body>
</html>