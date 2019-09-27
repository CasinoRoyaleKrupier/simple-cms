// window.onload = check_width_nav_menu();

// function check_width_nav_menu()
// {
//     for (i = 0; i < 2; i++)
//     {
//         var body_width = $(window).width();
//         if (body_width > 1000 && $('#nav_menu_buttons').css('display') == 'none')
//         {
//             $("#nav_menu_buttons").css("display", "block");
//         }
//         i--;
//     }
// }

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

        if ($(window).width() < 1000) {
            $("#nav_menu_buttons").css("display", "none");
        }
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

        if ($(window).width() < 1000) {
            $("#nav_menu_buttons").css("display", "none");
        }
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

        if ($(window).width() < 1000) {
            $("#nav_menu_buttons").css("display", "none");
        }
    });

    $("#nav_list_menu_button").click(function ()
    {
        if (window.innerWidth <= 1000)
        {
            $("#nav_menu_buttons").slideToggle();
        }
    });

    $("#bug_tracer").click(function()
    {
        location.href = "https://github.com/CasinoRoyaleKrupier/systeminfo/issues";
    })
});