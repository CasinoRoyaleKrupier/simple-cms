window.addEventListener("load", () =>
{
    delay_show_element()
});
window.onscroll = () =>
{
    slide_panel()
};

function delay_show_element()
{
    let delayInMilliseconds = 500;
    setTimeout(function() {
        $(".welcome_text").fadeIn();
    }, delayInMilliseconds);

    setTimeout(function() {
        $("#nav_horizontal_panel").animate(
            {
                opacity: 1
            }
        );
    }, 1000);
}

function slide_panel()
{
    if ($(window).scrollTop() > 150) {
        $("#slide_horizontal_panel").css("top", "0px");
    }
    else
    {
        $("#slide_horizontal_panel").css("top", "-80px");
    }
}

function scroll_to(selector) {
    $('html,body').animate(
        {
            scrollTop: $(selector).offset().top
        }, 1000);

    return false;
}

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
});