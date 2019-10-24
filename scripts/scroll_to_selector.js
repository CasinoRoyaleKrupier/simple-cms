const to_admin_panel = document.querySelectorAll(".to_admin_panel");
const to_logout = document.querySelectorAll(".to_logout");
const scroll_to_sec_1 = document.querySelectorAll(".to_sec_1");
const scroll_to_sec_2 = document.querySelectorAll(".to_sec_2");
const scroll_to_sec_3 = document.querySelectorAll(".to_sec_3");
const page_reload = document.querySelectorAll(".page_reload");

to_admin_panel.forEach( (tag_element) => { tag_element.addEventListener("click", () => location.href = 'administrator/site_panel.php'); });
to_logout.forEach( (tag_element) => { tag_element.addEventListener("click", () => location.href = 'administrator/logout.php'); });
scroll_to_sec_1.forEach( (tag_element) => { tag_element.addEventListener("click", () => scroll_to('#sec_01')); });
scroll_to_sec_3.forEach( (tag_element) => { tag_element.addEventListener("click", () => scroll_to('#sec_02')); });
scroll_to_sec_3.forEach( (tag_element) => { tag_element.addEventListener("click", () => scroll_to('#sec_03')); });
page_reload.forEach( (tag_element) => { tag_element.addEventListener("click", () => location.reload()) });

const scroll_to = (selector) =>
{
    $('html,body').animate(
    {
        scrollTop: $(selector).offset().top
    }, 1000);

    return false;
}