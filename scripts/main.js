window.addEventListener("load", () => delay_show_element() );
window.addEventListener("scroll", () => slide_panel() );

const delay_show_element = () =>
{
    setTimeout( () => $(".header_content").animate( {opacity: 1}, 500 ), 500);
    setTimeout( () => $("#nav_horizontal_panel").css("top", "0px"), 1000);
}

let prevScrollpos = window.pageYOffset;
const slide_panel = () =>
{
    if ($(window).scrollTop() > 150)
    {
        const currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) $("#slide_horizontal_panel").css("top", "0px");
        else                                  $("#slide_horizontal_panel").css("top", "-90px");

        prevScrollpos = currentScrollPos;
    }
    else $("#slide_horizontal_panel").css("top", "-90px");
}

const indicator_animation = () =>
{
    if ($(".header_content").css("left") == '0') {
        $(".header_content").animate( {transform: 'translateY(-10px)'}, 500 );
    }
}

const scroll_to = (selector) =>
{
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








const next_header_content = () =>
{
    const tab_class = ['.content_item_1', '.content_item_2', '.content_item_3'];

    for (let index = 0; index < tab_class.length; index++) {
        if ( $(".content_item_1").css("opacity") == "1" && tab_class[index] == '.content_item_1' ) {
            $(".header_content").animate( {left: "-=100%"}, 500);
            $(".content_item_1").animate( {opacity: "0"}, 500 );
            $(".content_item_2").animate( {opacity: "1"}, 500 );

        }
        else if ( $(".content_item_2").css("opacity") == "1" && tab_class[index] == '.content_item_2' ) {
            $(".header_content").animate( {left: "-=100%"}, 500);
            $(".content_item_2").animate( {opacity: "0"}, 500 );
            $(".content_item_3").animate( {opacity: "1"}, 500 );

        }
        else if ( $(".content_item_3").css("opacity") == "1" && tab_class[index] == '.content_item_3' ) {
            $(".header_content").animate( {left: "-=10%"}, 200);
            $(".header_content").animate( {left: "-200%"}, 500);
            $(".content_item_2").animate( {opacity: "0"}, 500 );
            $(".content_item_3").animate( {opacity: "1"}, 500 );
        }

    }
}

const previous_header_content = () =>
{
    const tab_class = ['.content_item_1', '.content_item_2', '.content_item_3'];

    for (let index = 0; index < tab_class.length; index++) {
        if ( $(".content_item_3").css("opacity") == "1" && tab_class[index] == '.content_item_3' ) {
            $(".header_content").animate( {left: "+=100%"}, 500);
            $(".content_item_2").animate( {opacity: "1"}, 500 );
            $(".content_item_3").animate( {opacity: "0"}, 500 );
        }
        else if ( $(".content_item_2").css("opacity") == "1" && tab_class[index] == '.content_item_2' ) {
            $(".header_content").animate( {left: "+=100%"}, 500);
            $(".content_item_1").animate( {opacity: "1"}, 500 );
            $(".content_item_2").animate( {opacity: "0"}, 500 );
        }
        else if ( $(".content_item_1").css("opacity") == "1" && tab_class[index] == '.content_item_1' ) {
            $(".header_content").animate( {left: "+=10%"}, 200);
            $(".header_content").animate( {left: "0"}, 500);
            $(".content_item_1").animate( {opacity: "1"}, 500 );
            $(".content_item_2").animate( {opacity: "0"}, 500 );
        }

    }
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