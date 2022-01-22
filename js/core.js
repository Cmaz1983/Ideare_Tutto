var navigationTrack = false;
let speed = 500;
$(document).ready(function() {
    $('#mobile-nav-open').click(function() {
        if (navigationTrack) {
            document.getElementsByClassName('global-container')[0].animate([
                { right: '50%' },
                { right: '0%' }
            ], {
                // timing options
                duration: speed,
                iterations: 1,
                easing: "ease-in-out"
            });
            document.getElementsByClassName("global-container")[0].style["right"] = "0%";
            navigationTrack = false;
        } else {
            document.getElementsByClassName('global-container')[0].animate([
                { right: '0%' },
                { right: '50%' }
            ], {
                // timing options
                duration: speed,
                iterations: 1,
                easing: "ease-in-out"
            });
            document.getElementsByClassName("global-container")[0].style["right"] = "50%";
            navigationTrack = true;
        }
    })
})