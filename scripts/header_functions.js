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