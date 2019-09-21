window.onload = getOS();

function get_section_about()
{
    if (document.getElementById("about_content").style.display = "none") {
        document.getElementById("about_content").style.display = "block";
        document.getElementById("screenshot_content").style.display = "none";
        document.getElementById("download_content").style.display = "none";
    }
    else if (document.getElementById("about_content").style.display = "block") {
        document.getElementById("about_content").style.display = "none";
    }
}

function get_section_screenshot()
{
    if (document.getElementById("screenshot_content").style.display = "none") {
        document.getElementById("about_content").style.display = "none";
        document.getElementById("screenshot_content").style.display = "block";
        document.getElementById("download_content").style.display = "none";
    }
    else if (document.getElementById("screenshot_content").style.display = "block") {
        document.getElementById("screenshot_content").style.display = "none";
    }
}

function get_section_download()
{
    if (document.getElementById("download_content").style.display = "none") {
        document.getElementById("about_content").style.display = "none";
        document.getElementById("screenshot_content").style.display = "none";
        document.getElementById("download_content").style.display = "block";
    }
    else if (document.getElementById("download_content").style.display = "block") {
        document.getElementById("download_content").style.display = "none";
    }
}