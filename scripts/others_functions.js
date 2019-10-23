window.addEventListener("load", () => delay_show_element() );
window.addEventListener("scroll", () => slide_panel() );

const delay_show_element = () =>
{
    setTimeout( () => $("header article").animate( {opacity: 1}, 500 ), 500);
    setTimeout( () => $("#nav_horizontal_panel").css("top", "0px"), 1000);
    setTimeout( () => {
        $(".button_left_arrow").animate( {left: 0}, 500 ),
        $(".button_right_arrow").animate( {right: 0}, 500 )
    }, 1000);
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