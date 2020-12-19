/* all code related to the responsive navbar learned from: https://www.youtube.com/watch?v=gXkqy0b4M5g */
$(".burger").click(function(){
    
    $(".mobile").toggleClass('mobile-active');
    
    var items = document.querySelectorAll('.mobile p');
    
    items.forEach(function(link, index){
        if (link.style.animation){
            link.style.animation = '';
        }
        else {
            link.style.animation = 'navItemFade 0.5s ease forwards ' + (index/5 + 0.5) + 's';
        }
    });
    
    $(".line1").toggleClass('burgerLine1-active');
    $(".line2").toggleClass('burgerLine2-active');
    $(".line3").toggleClass('burgerLine3-active');
});

$(document).scroll(function(){
    var items = document.querySelector('.mobile p');
    if (items.style.animation){
        $(".mobile").toggleClass('mobile-active');
    
        items = document.querySelectorAll('.mobile p');

        items.forEach(function(link){
            link.style.animation = '';
        });
        
        $(".line1").toggleClass('burgerLine1-active');
        $(".line2").toggleClass('burgerLine2-active');
        $(".line3").toggleClass('burgerLine3-active');
    }
    if (window.scrollY == 0){
        $("#layout1").css("margin-bottom", "0px");
        $("#layout2").css("position", "initial");
    }
    else {
        $("#layout1").css("margin-bottom", "65px");
        $("#layout2").css("position", "fixed");
        $("#layout2").css("top", "0");
    }
});

$(document).ready(function(){
    $(".contact").click(function(){
        // this line of code taken from: https://stackoverflow.com/questions/11715646/scroll-automatically-to-the-bottom-of-the-page
        window.scrollTo({ left: 0, top: document.body.scrollHeight, behavior: "smooth" });
    });
});

