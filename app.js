window.onload = function(){ $("#loading").fadeOut(); };

function MobNavbar() {
        var x = document.getElementById("navbar");
        if (x.className === "navbar-item-right") {
            x.className += " responsive";
        } else {
            x.className = "navbar-item-right";
        }
    }