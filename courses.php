<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- meta for mobile view taken from: https://stackoverflow.com/questions/14304494/responsive-web-design-is-working-on-desktop-but-not-on-mobile-device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Courses | Mizzou Disc Golf</title>
    
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
    
    <script>
        $(document).ready(function(){
            // the following bit of code is taken from the video https://www.youtube.com/watch?v=8tL5P-RtAH0 on how to get & set cookies
            var cookies = document.cookie
               .split(';')
               .map(cookie => cookie.split('='))
               .reduce((accumulator, [key, value]) => 
                       ({ ...accumulator, [key.trim()]: decodeURIComponent(value) }), 
            {});
            
            function showLogin(){
                if (cookies == null || cookies.userID == "invalid"){
                    $("#login").css("display", "flex");
                }
                else if (cookies.userID != "invalid" && cookies.userID != null) {
                    $("body .loginMessage").css("display", "none");
                    var courseId;
                    for (var i = 0; i < 7; i++){
                        courseId = "course" + i;
                        getInfo(courseId);
                    }
                }
                else {
                    $("#login").css("display", "flex");
                }
            }
            
            function getInfo(courseId){
                
                var xmlHttp = new XMLHttpRequest();
                
                xmlHttp.onload = function(){
                    if (xmlHttp.status == 200){
                        var id = "#" + courseId;
                        var response = xmlHttp.responseText;
                        $(id).html(response);
                    }
                };
                
                var reqURL = "scripts/coursesInfo.php?infoId=" + courseId;
                
                xmlHttp.open("GET", reqURL, true);
                xmlHttp.send();
            }
            
            $("#signOUT").click(function(){
                 window.location.reload();
                 return false;
            });

            $(document).ready(function(){
                $("body .loginMessage").css("display", "initial");
                $(".course").html("");
                showLogin();
            });
            
        });
    </script>
</head>
<body id="coursesPage">
    <?php include "includes/header.php"; ?>
    <div id="content5">
        <h1>Home Courses</h1>
        <div class="messageWrapper">
            <p class="loginMessage">Please login to view home course information.</p>
        </div>
        <div id="course0" class="course">

        </div>
        <div id="course1" class="course">

        </div>
        <div id="course2" class="course">

        </div>
        <div id="course3" class="course">

        </div>
        <div id="course4" class="course">

        </div>
        <div id="course5" class="course">

        </div>
        <div id="course6" class="course">

        </div>
    </div>
    <?php include "includes/footer.php"; ?>
    <?php include "includes/login.php"; ?>
    
    <script src="scripts/loginScript.js"></script>
    <script src="scripts/mobileNavbar.js"></script>
</body>
</html>
