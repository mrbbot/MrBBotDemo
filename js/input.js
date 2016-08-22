$(window).ready(function() {
    $("#demo-site-button").click(() => {
        var siteLink = $("#demo-site").val();
        if(siteLink != "") {
            if(!siteLink.startsWith("http://"))
                siteLink = "http://" + siteLink;
            siteLink = "?site=" + siteLink;
            window.location.href = siteLink;
        }
    });
    
    $("#demo-site").keyup((e) => {
        if (e.keyCode == 13) {
            $("#demo-site-button").trigger("click");
        }
    });
})
