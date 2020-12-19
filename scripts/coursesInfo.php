<?php


$infoId = empty($_GET['infoId']) ? '' : $_GET['infoId'];

$name;
$location;
$year;
$designer;
$terrain;
$holes;
$par;
$basketType;
$description;
switch($infoId) {
    case 'course0':
        $name = 'Harmony Bends';
        $location = ' in Columbia, Missouri';
        $photo = 'images/courses/photo0.png';
        $year = '2016';
        $designer = 'John Houck';
        $terrain = 'moderately hilly & moderately wooded';
        $holes = '18';
        $par = '68';
        $basketType = 'DISCatcher';
        $description = 'A top-tier quality and competition-level course with multiple tee pads and basket placements for each hole; this course plays through classic Missouri creek/woods type terrain (two creeks are used in the design, Harmony and Perche). Challenges include elevation, multiple creek crossings, huge trees and thick groves of smaller trees, and unique and massive clear fairways deep in the woods. Landing zones are utilized in the course design, multiple lines are always a possibility, and risk/reward must be weighed with every shot.';
        break;
    case 'course2':
        $name = 'Albert Oakland - Back';
        $location = ' in Columbia, Missouri';
        $photo = 'images/courses/photo2.png';
        $year = '1999';
        $designer = 'Columbia Disc Golf Club';
        $terrain = 'moderately hilly & moderately wooded';
        $holes = '18';
        $par = '54-56';
        $basketType = 'Mach 3';
        $description = 'Gradually sloped. Not terribly long or tight, but you can find trouble off the fairway - perhaps in the OB creek which meanders throughout, the pond on holes 16 and 17, the baseball fields along holes 2, 3 and 4, and the pedestrian sidewalk that permeates the course and effects scattered shots on 15/18 holes.';
        break;
    case 'course3':
        $name = 'Albert Oakland - Top';
        $location = ' in Columbia, Missouri';
        $photo = 'images/courses/photo3.png';
        $year = '1979';
        $designer = 'Roger Giles, John Connelly, Ed Headrick';
        $terrain = 'mostly flat & lightly wooded';
        $holes = '18';
        $par = '54';
        $basketType = 'Mach 3';
        $description = 'Some gentle elevation and 30+ year old trees (cedars, elm, ash, and oak primarily) - Of late, has evolved into a good mix of technical shots. Not a particularly long course; the difficulty is perfect for beginners. The classic and historical baskets coupled with annual tree growth makes the difficulty misleading, even for pros. Very heavy traffic.';
        break;
    case 'course1':
        $name = 'Indian Hills';
        $location = " in Columbia, Missouri";
        $photo = 'images/courses/photo1.png';
        $year = '2002';
        $designer = 'Alex Dedant';
        $terrain = 'moderately hilly & heavily wooded';
        $holes = '18';
        $par = '54-56';
        $basketType = 'Mach 3';
        $description = 'Plays tight to the woods; the first 7 holes have some good sized fairways, but things tighten up quickly with open fairways not seen again until #18. Challenges all players, beautiful surroundings, great place to work on tight lanes and your control/placement game, huge groves of cedars, junipers, and pines.';
        break;
    case 'course4':
        $name = 'The Dam Course';
        $location = ' in Jefferson City, Missouri';
        $photo = 'images/courses/photo4.png';
        $year = '2014';
        $designer = 'Stan Balke & Jay Hebenheimer';
        $terrain = 'very hilly & moderately wooded';
        $holes = '18';
        $par = '61';
        $basketType = 'Kingpin';
        $description = 'Mixed long open shots but need finesse to place next shot and tight technical fairways through woods. Practice basket can be seen near playground. Most holes are easily followed or have directional signs. Tee signs on every hole with bolts to mark current pin position.';
        break;
    case 'course5':
        $name = 'Joseph C. Miller';
        $location = ' in Jefferson City, Missouri';
        $photo = 'images/courses/photo5.png';
        $year = '2004';
        $designer = 'Jefferson City Disc Golf Club';
        $terrain = 'mostly flat & moderately wooded';
        $holes = '18';
        $par = '56';
        $basketType = 'Mach 5';
        $description = '**This course is also known as the Binder Park DGC.** Through the woods with some open fairways. Front 9 on 12 acres, back on 22. Slight elevation and beautiful scenery. Exclusive disc golf area.';
        break;
    case 'course6':
        $name = 'Holts Summit';
        $location = ' in Holts Summit, Missouri';
        $photo = 'images/courses/photo6.png';
        $year = '2015';
        $designer = 'Braman, Elam, Lansford';
        $terrain = 'moderately hilly & heavily wooded';
        $holes = '18';
        $par = '61';
        $basketType = 'Monkey Trap';
        $description = 'A technical wooded course. 18 holes are open for play however some holes still have some brush piles. Hole 16 on edge of pond does not have a pad yet. Tee maps on each hole were put in for the JCO. If you do not have time to play all 18, head to Hole B after #6 for a loop back to parking via B, 16, 17, and 18. Makes a nice 10-hole loop.';
        break;   
}

$name = '<h2>' . $name . $location . '</h2>';
$photo = '<img src="' . $photo . '" alt="">';
$year = '<h4>Designed in ' . $year . ' by ' . $designer . '</h4>';
$terrain = '<span class="terrain">' . $holes . " " . $basketType . ' baskets, par ' . $par . ' on ' . $terrain . ' terrain</span><br>';
$description = '<span>' . $description . '</span>';
$string = '<div id="' . $infoId . '" class="courseWrapper">' . $name . $year . '<div>' . $photo . $terrain . $description . '</div></div>';

print $string;
?>