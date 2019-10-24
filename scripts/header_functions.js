const prev_transform = document.querySelector("#previous_content");
const next_transform = document.querySelector("#next_content");

prev_transform.addEventListener("mousedown", () => prev_transform.style.transform = "translateX(-5px)");
prev_transform.addEventListener("mouseup", () => prev_transform.style.transform = "translateX(0)");

next_transform.addEventListener("mousedown", () => next_transform.style.transform = "translateX(5px)");
next_transform.addEventListener("mouseup", () => next_transform.style.transform = "translateX(0)");

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