$(document).ready(function()
{

    $("#about").click(function()
    {
        $("#animation").hide();

        $("#about_content").show("fast");
        $("#about_content").animate({opacity: 1});
        $("#screenshot_content").hide();
        $("#screenshot_content").animate({opacity: 0});
        $("#download_content").hide();
        $("#download_content").animate({opacity: 0});
    });

    $("#screenshots").click(function()
    {
        $("#animation").hide();

        $("#about_content").hide();
        $("#about_content").animate({opacity: 0});
        $("#screenshot_content").show("fast");
        $("#screenshot_content").animate({opacity: 1});
        $("#download_content").hide();
        $("#download_content").animate({opacity: 0});
    });

    $("#download").click(function()
    {
        $("#animation").hide();

        $("#about_content").hide();
        $("#about_content").animate({opacity: 0});
        $("#screenshot_content").hide();
        $("#screenshot_content").animate({opacity: 0});
        $("#download_content").show("fast");
        $("#download_content").animate({opacity: 1});
    });
});