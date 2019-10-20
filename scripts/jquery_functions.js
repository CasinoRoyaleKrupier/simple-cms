$(document).ready( () =>
{
    $("#button_sec_01").click( () =>
    {
        scroll_to('#sec_01');

        if($('#nav_vertical_panel').css('display') == "block")
        {
            $("#nav_vertical_panel").slideUp();
            $("#screen_dimming").fadeOut();
        }
    });

    $("#button_sec_02").click( () =>
    {
        scroll_to('#sec_02');

        if($('#nav_vertical_panel').css('display') == "block")
        {
            $("#nav_vertical_panel").slideUp();
            $("#screen_dimming").fadeOut();
        }
    });

    $("#button_sec_03").click( () =>
    {
        scroll_to('#sec_03');

        if($('#nav_vertical_panel').css('display') == "block")
        {
            $("#nav_vertical_panel").slideUp();
            $("#screen_dimming").fadeOut();
        }
    });

    $(".show_vertical_panel").click( () =>
    {
        $("#nav_vertical_panel").slideDown();
        $("#screen_dimming").fadeIn();
    });

    $("#hide_vertical_panel").click( () =>
    {
        $("#nav_vertical_panel").slideUp();
        $("#screen_dimming").fadeOut();
    });

    $("#next_content").click( () =>
    {
        next_header_content();
    });

    $("#previous_content").click( () =>
    {
        previous_header_content();
    });

    $("body").keydown( (key) =>
    {
        if(key.keyCode == 37) previous_header_content(); // Left arrow key
        else if(key.keyCode == 39) next_header_content();// Right arrow key
    });
});