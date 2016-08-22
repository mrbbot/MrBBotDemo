function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

$(document).ready(function() {
    var websiteContainer = $("#website-container");
    var website = $("#website");
    
    var type = "computer";
    var landscape = false;
    
    var deviceWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    
    var changeSize = function() {
        websiteContainer.addClass("hidden");
        
        sleep(100).then(() => {
            if(website.hasClass("size-computer"))
                website.removeClass("size-computer");
            else if(website.hasClass("size-tablet-portrait"))
                website.removeClass("size-tablet-portrait");
            else if(website.hasClass("size-tablet-landscape"))
                website.removeClass("size-tablet-landscape");
            else if(website.hasClass("size-mobile-portrait"))
                website.removeClass("size-mobile-portrait");
            else if(website.hasClass("size-mobile-landscape"))
                website.removeClass("size-mobile-landscape");

            if(type == "computer") {
                website.addClass("size-computer");
            } else {
                website.addClass("size-" + type + "-" + ((landscape) ? "landscape" : "portrait"));
            }

            $(window).trigger("resize");
            
            websiteContainer.removeClass("hidden");
        })
    }
    
    $("#btn-computer").click(function() {
        type = "computer";
        changeSize();
    });
    
    $("#btn-tablet").click(function() {
        type = (deviceWidth <= 1024) ? "computer" : "tablet";
        changeSize();
    });
    
    $("#btn-mobile").click(function() {
        type = (deviceWidth <= 375) ? "computer" : "mobile";
        changeSize();
    });
    
    $("#btn-rotate").click(function() {
        landscape = !landscape;
        changeSize();
    });
    
    $(window).resize(function() {
        deviceWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
        
        if(type != "computer") {
            var containerHeight = websiteContainer.height();
            var websiteHeight = website.height() + 80;
            var scale = containerHeight*1.0 / websiteHeight;

            if(scale < 1) {
                website.css("transform", "scale(" + scale + ")");
            } else {
                website.css("transform", "scale(1)");
            }
        } else {
            website.css("transform", "scale(1)");
        }
    });
    
    $(window).trigger("resize");
})