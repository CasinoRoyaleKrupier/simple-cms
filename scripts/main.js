$(document).ready( () =>
{

    $("#button_sec_01").click( () =>
    {
        $("#welcone_content").hide();

        $("#section_01").css("display", "block");
        $("#section_01").animate({opacity: 1});

        $("#section_02").css("display", "none");
        $("#section_02").animate({opacity: 0});

        $("#section_03").css("display", "none");
        $("#section_03").animate({opacity: 0});

        if($('#nav_vertical_panel').css('display') == "block")
        {
            $("#nav_vertical_panel").slideUp();
            $("#screen_dimming").fadeOut();
        }
    });

    $("#button_sec_02").click( () =>
    {
        $("#welcone_content").hide();

        $("#section_01").css("display", "none");
        $("#section_01").animate({opacity: 0});

        $("#section_02").css("display", "block");
        $("#section_02").animate({opacity: 1});

        $("#section_03").css("display", "none");
        $("#section_03").animate({opacity: 0});

        if($('#nav_vertical_panel').css('display') == "block")
        {
            $("#nav_vertical_panel").slideUp();
            $("#screen_dimming").fadeOut();
        }
    });

    $("#button_sec_03").click( () =>
    {
        $("#welcone_content").hide();

        $("#section_01").css("display", "none");
        $("#section_01").animate({opacity: 0});

        $("#section_02").css("display", "none");
        $("#section_02").animate({opacity: 0});

        $("#section_03").css("display", "block");
        $("#section_03").animate({opacity: 1});

        if($('#nav_vertical_panel').css('display') == "block")
        {
            $("#nav_vertical_panel").slideUp();
            $("#screen_dimming").fadeOut();
        }
    });

    $("#nav_show_menu_button").click( () =>
    {
        $("#nav_vertical_panel").slideDown();
        $("#screen_dimming").fadeIn();
    });

    $("#nav_hide_menu_button").click( () =>
    {
        $("#nav_vertical_panel").slideUp();
        $("#screen_dimming").fadeOut();
    });
});