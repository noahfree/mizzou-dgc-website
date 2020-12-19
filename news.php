<!DOCTYPE HTML>
<html>
<head lang="en">
    <!--    meta for mobile view taken from: https://stackoverflow.com/questions/14304494/responsive-web-design-is-working-on-desktop-but-not-on-mobile-device-->
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>News | Mizzou Disc Golf</title>
    
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
        var news = new Array();
        var dates = new Array();
        
        news.push("At the Tapper Classic Open in Wisconsin, Noah Free wins the advanced division as Eric Downing takes 2nd place only losing to local Mitchell Crowley.");
        dates.push("September 28th, 2019");
        
        news.push("As a team, Mizzou takes down the Tapper Classic Open in Platteville, Wisconsin. With this win they successfully earn a bid to nationals in South Carolina this Spring.");
        dates.push("September 29th, 2019");
        
        news.push("Mizzou's Eric Downing takes down a strong field of 51 college athletes, including reigning National Champion Mark Anderson, at this years Missouri Collegiate Championship.");
        dates.push("October 26th, 2019");
        
        news.push("Mizzou beates several strong collegiate teams, such as Rolla & Kansas State, at the 2019 Missouri Collegiate Championship in order to remain undefeated on the season.");
        dates.push("October 27th, 2019");
        
        news.push("College Disc Golf team rankings are released. Missouri is currently ranked number 2 only behind NC State");
        dates.push("November 5th, 2019");
        
        news.push("The much anticipated College Disc Golf individual rankings are released. After two strong individual performances Mizzou's Eric Downing is ranked number 8 in the nation.");
        dates.push("November 25th, 2019");
        
        news.push("Several Mizzou players had strong performances this weekend at the Smokin Aces Tournament at Indian Camp Creek: Drew Cantrell 4th, Jared Brabant 5th, Quentin Borengasser 7th, and Noah Free 9th.");
        dates.push("July 18th, 2020");
        
        news.push("Team Mizzou is looking strong after the Auguest ratings update: Jared Brabant up 4, Quentin Borengasser up 2, Drew Cantrell up 6, and Noah Free up 11.");
        dates.push("August 13th, 2020");
        
        news.push("Many Mizzou players had strong performances at the most recent Smokin Aces tournament at Harmony Bends: Jared Brabant 2nd in MPO, Quentin Borengasser 3rd in MPO, Drew Cantrell 4th in MPO, Anthony Lamonica 2nd in MA2, Christian Polovich 3rd in MA2, and Derek Rechtien 2nd in MA3.");
        dates.push("September 13th, 2020");
        
        news.push("Shooting a 1038 second round to come back and win, Mizzou's Jared Brabant takes down the Hanna Hills Open in Laquey, Missouri.");
        dates.push("October 3rd, 2020");
        
        news.push("Several players moved up with the most recent ratings update, including Jared Brabant's rating increasing by 16 points to 994.");
        dates.push("October 14th, 2020");
        
        var length = news.length;
        var counter = (length - 1);
        $(document).ready(function(){
            $("#image").html('<img src="images/news/photo' + counter + '.jpg" alt="">');
            $("#caption").html(news[counter]);
            $("#date").html(dates[counter]);
            
            $("#rightArrow").click(function(){
                if (counter == 0){
                   counter = (length - 1);
                } else {
                   counter--;
                } 
                
                var string = '<img src="images/news/photo' + counter + '.jpg" alt="">';
                $("#image").html(string);
                $("#caption").html(news[counter]);
                $("#date").html(dates[counter]);
            });
            
            $("#leftArrow").click(function(){
                if (counter == (length - 1)){
                   counter = 0;
                } else {
                   counter++;
                } 
                
                var string = '<img src="images/news/photo' + counter + '.jpg" alt="">';
                $("#image").html(string);
                $("#caption").html(news[counter]);
                $("#date").html(dates[counter]);
            });
        });
    </script>
</head>
<body id="newsPage">
    <?php include "includes/header.php"; ?>
    <div class="newsBody">
        <div class="container">
            <div id="content4">
                <div class="navigation">
                    <img id="leftArrow" class="arrow" src="images/leftArrow.png" alt="">
                    <h1 id="date"></h1>
                    <img id="rightArrow" class="arrow" src="images/rightArrow.png" alt="">
                </div>
                <div class="wrapper">
                    <div id="image"></div>
                    <p id="caption"></p>
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