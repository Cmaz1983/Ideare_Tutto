var navigationTrack = false;
$(document).ready(function(){
    $('#mobile-nav-open').click(function(){
        if(navigationTrack){
            document.getElementsByClassName("global-container")[0].style["right"] = "0%";
            navigationTrack = false;
        }else{
            document.getElementsByClassName("global-container")[0].style["right"] = "50%";
            navigationTrack = true;
        }
    })    
})


