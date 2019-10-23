const to_admin_panel = document.querySelector(".to_admin_panel");
const to_logout = document.querySelector(".to_logout");
const scroll_to_sec_1 = document.querySelector(".to_sec_1");
const scroll_to_sec_2 = document.querySelector(".to_sec_2");
const scroll_to_sec_3 = document.querySelector(".to_sec_3");
const page_reload = document.querySelector(".page_reload");

to_admin_panel.addEventListener("click", () => location.href = 'administrator/site_panel.php');
to_logout.addEventListener("click", () => location.href = 'administrator/logout.php');
scroll_to_sec_1.addEventListener("click", () => scroll_to('#sec_01'));
scroll_to_sec_2.addEventListener("click", () => scroll_to('#sec_02'));
scroll_to_sec_3.addEventListener("click", () => scroll_to('#sec_03'));
page_reload.addEventListener("click", () => location.reload());


const scroll_to = (selector) =>
{
    $('html,body').animate(
    {
        scrollTop: $(selector).offset().top
    }, 1000);

    return false;
}