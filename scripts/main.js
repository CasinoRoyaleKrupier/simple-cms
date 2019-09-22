$(document).ready(function()
{

    $("#about").click(function()
    {
        $("#animation").hide();

        $("#about_content").css("display", "block");
        $("#about_content").animate({opacity: 1});
        $("#screenshot_content").css("display", "none");
        $("#screenshot_content").animate({opacity: 0});
        $("#download_content").css("display", "none");
        $("#download_content").animate({opacity: 0});
    });

    $("#screenshots").click(function()
    {
        $("#animation").hide();

        $("#about_content").css("display", "none");
        $("#about_content").animate({opacity: 0});
        $("#screenshot_content").css("display", "block");
        $("#screenshot_content").animate({opacity: 1});
        $("#download_content").css("display", "none");
        $("#download_content").animate({opacity: 0});
    });

    $("#download").click(function()
    {
        $("#animation").hide();

        $("#about_content").css("display", "none");
        $("#about_content").animate({opacity: 0});
        $("#screenshot_content").css("display", "none");
        $("#screenshot_content").animate({opacity: 0});
        $("#download_content").css("display", "block");
        $("#download_content").animate({opacity: 1});
    });

    $("#nav_menu").click(function ()
    {
        if (window.innerWidth <= 1000)
        {
            $("#buttons").toggle();
        }
    });
});