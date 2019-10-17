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
    setTimeout( () =>
    {
        $(".welcome_text").fadeIn();

        setTimeout( () => {
            $("#nav_horizontal_panel").css("top", "0px");
        }, 500);

    }, delayInMilliseconds);
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

ScrollReveal().reveal('.separator_title', {
    distance: '50px',
    delay: 700,
    useDelay: 'onload',
    reset: true
});
ScrollReveal().reveal('section', {
    distance: '50px',
    delay: 500,
    useDelay: 'onload',
    reset: true
});

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