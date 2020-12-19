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

$(document).ready(function(){
    // how to make an html element draggable taken from Professor Wergeles' lecture on User Interface Design
    $("#login").resizable({
        handles: 'se',
        minWidth: 370,
        minHeight: 400,
        maxWidth: 900,
        maxHeight: 500
    }).draggable({ 
        containment: "window" 
    });
    
    $(".ui-resizable-handle").css("width", "16px");
    
    if (cookies == null || cookies.userID == "invalid"){
        $("#signIN").css("display", "initial");
        $("#signOUT").css("display", "none");
    }
    else if (cookies.userID != "invalid" && cookies.userID != null) {
        $("#signIN").css("display", "none");
        $("#signOUT").css("display", "initial");
    }
    else {
        $("#signIN").css("display", "initial");
        $("#signOUT").css("display", "none");
    }
});

$("#signIN").click(function(){
    $("#login").css("display", "flex");    
});

$("#login img").click(function(){
    $("#login").css("display", "none"); 
});

$("#login button").click(function(){
    if ($("#username").val() != "" || $("#password").val() != ""){
           $.post('scripts/process.php', {
               action: 'login',
               username: $("#username").val(),
               password: $("#password").val()
           }, function(data, status){
               // the following bit of code is taken from the video https://www.youtube.com/watch?v=8tL5P-RtAH0 on how to get & set cookies
               cookies = document.cookie
                   .split(';')
                   .map(cookie => cookie.split('='))
                   .reduce((accumulator, [key, value]) => 
                           ({ ...accumulator, [key.trim()]: decodeURIComponent(value) }), 
               {});
               if (cookies.userID != 'invalid' && cookies.userID != null){
                    $("#signIN").css("display", "none");
                    $("#signOUT").css("display", "initial");
                    $("#login").css("display", "none");
                    $("#coursesPage .loginMessage").css("display", "none");
                    alert("Login Successful");
                    showLogin();
                }
                else {
                    alert("Username or Password Incorrect");
                    $("#username").val("");
                    $("#password").val("");
                }
           }) ;
    }
    else {
        alert("Please enter a username & password.");
    }
});

$("#signOUT").click(function(){
    $.post('scripts/process.php', { action: 'logout'}, function(data){
        $("#signOUT").css("display", "none");
        $("#signIN").css("display", "initial");
        $("#username").val("");
        $("#password").val("");
        alert("Logout Successful"); 
    }); 
});

// validate function taken from: https://stackoverflow.com/questions/5778020/check-whether-an-input-string-contains-a-number-in-javascript
function validate(){    
    var re = /^[A-Za-z]+$/;
    if(re.test($("#firstName").val()) && re.test($("#lastName").val()))
       return true;
    else
       return false;      
}

$("#signUp").click(function(){
    var firstName = $("#firstName").val();
    var lastName = $("#lastName").val();
    var email = $("#email").val();
    var birthday = $("#birthday").val();
    var today = new Date();

    if (firstName == "" || lastName == "" || email == "" || birthday == ""){
        $("#response").html("Please complete every field.");
    }
    else if ((new Date(birthday)).getTime() > today.getTime()){
        $("#response").html("Please enter a valid birthday.");
    }
    else if (validate()){
        $("#response").html("");
        $("#response").css("display", "none");
        $.post('scripts/process.php', {
           action: 'emailEntry',
           firstName: firstName,
           lastName: lastName,
           email: email,
           birthday: birthday.toString()
       }, function(data, status){
            if (status == "success"){
                $("#firstName").val(""); 
                $("#lastName").val("");
                $("#email").val("");
                $("#birthday").val("");
                
                $("#response").html("Submission successful!");
                $("#response").css("color", "#1f901f");
                $("#response").css("background-color", "#90ee90");
                $("#response").css("border", "2px solid #1f901f");
                $("#response").css("display", "initial");
                setTimeout(function(){
                    $("#response").css("display", "none");
                    return;
                }, 5000);
            }
            else {
               $("#response").html("Please enter a valid name.");
            }
       }) ;
    }
    else {
        $("#response").html("Please enter a valid name.");
    }
    
    $("#response").css("color", "#8b0000");
    $("#response").css("background-color", "#ff9fb0");
    $("#response").css("border", "2px solid #8b0000");
    $("#response").css("display", "initial"); 
});