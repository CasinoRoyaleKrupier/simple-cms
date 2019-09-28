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

    $("#button_sec_01").click(function()
    {
        $("#welcone_content").hide();

        $("#section_01").css("display", "block");
        $("#section_01").animate({opacity: 1});
        $("#section_02").css("display", "none");
        $("#section_02").animate({opacity: 0});
        $("#section_03").css("display", "none");
        $("#section_03").animate({opacity: 0});

        if ($(window).width() < 1000) {
            $("#nav_menu_buttons").css("display", "none");
        }
    });

    $("#button_sec_02").click(function()
    {
        $("#welcone_content").hide();

        $("#section_01").css("display", "none");
        $("#section_01").animate({opacity: 0});
        $("#section_02").css("display", "block");
        $("#section_02").animate({opacity: 1});
        $("#section_03").css("display", "none");
        $("#section_03").animate({opacity: 0});

        if ($(window).width() < 1000) {
            $("#nav_menu_buttons").css("display", "none");
        }
    });

    $("#button_sec_03").click(function()
    {
        $("#welcone_content").hide();

        $("#section_01").css("display", "none");
        $("#section_01").animate({opacity: 0});
        $("#section_02").css("display", "none");
        $("#section_02").animate({opacity: 0});
        $("#section_03").css("display", "block");
        $("#section_03").animate({opacity: 1});

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