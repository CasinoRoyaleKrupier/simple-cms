const next_header_content = () =>
{
    if ( $(".header_item_1").css("display") == "block" ) {
        $(".header_item_1").hide( "slide", {direction: "left" }, 1000 );
        $(".header_item_2").show( "slide", {direction: "right" }, 1000 );
    }
    else if ( $(".header_item_2").css("display") == "block" ) {
        $(".header_item_2").hide( "slide", {direction: "left" }, 1000 );
        $(".header_item_3").show( "slide", {direction: "right" }, 1000 );
    }
    else if ( $(".header_item_3").css("display") == "block" ) {
        $(".header_item_3").hide( "slide", {direction: "left" }, 1000 );
        $(".header_item_1").show( "slide", {direction: "right" }, 1000 );
    }
}

const previous_header_content = () =>
{
    if ( $(".header_item_1").css("display") == "block" ) {
        $(".header_item_1").hide( "slide", {direction: "right" }, 1000 );
        $(".header_item_3").show( "slide", {direction: "left" }, 1000 );
    }
    else if ( $(".header_item_2").css("display") == "block" ) {
        $(".header_item_2").hide( "slide", {direction: "right" }, 1000 );
        $(".header_item_1").show( "slide", {direction: "left" }, 1000 );
    }
    else if ( $(".header_item_3").css("display") == "block" ) {
        $(".header_item_3").hide( "slide", {direction: "right" }, 1000 );
        $(".header_item_2").show( "slide", {direction: "left" }, 1000 );
    }
}