window.onload = delay_show_element();

function delay_show_element(element)
{
    let delayInMilliseconds = 500;
    setTimeout(function() {
        $(".welcome_text").fadeIn();
    }, delayInMilliseconds);
}

function scroll_to(selector) {
    $('html,body').animate({scrollTop: $(selector).offset().top}, 1000);
    return false;
}

$(document).ready( () =>
{
    $("#button_sec_01").click( () =>
    {
        if($('#nav_vertical_panel').css('display') == "block")
        {
            $("#nav_vertical_panel").slideUp();
            $("#screen_dimming").fadeOut();
        }
    });

    $("#button_sec_02").click( () =>
    {
        if($('#nav_vertical_panel').css('display') == "block")
        {
            $("#nav_vertical_panel").slideUp();
            $("#screen_dimming").fadeOut();
        }
    });

    $("#button_sec_03").click( () =>
    {
        if($('#nav_vertical_panel').css('display') == "block")
        {
            $("#nav_vertical_panel").slideUp();
            $("#screen_dimming").fadeOut();
        }
    });

    $("#show_vertical_panel").click( () =>
    {
        $("#nav_vertical_panel").slideDown();
        $("#screen_dimming").fadeIn();
    });

    $("#hide_vertical_panel").click( () =>
    {
        $("#nav_vertical_panel").slideUp();
        $("#screen_dimming").fadeOut();
    });
});