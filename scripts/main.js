window.onload = getOS();

function systemInfo() {
    var m = navigator.cpuClass;
    return m;
}

function get_section_about()
{
    var dock2_content = document.getElementById("dock2");
    dock2_content.innerHTML = "OS type: " + getOS() + "<br>";

}

function get_section_download()
{
    var dock2_content = document.getElementById("dock2");
    dock2_content.innerHTML = "cpu";
}

function get_section_screenshot()
{
    var lorem_ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed vestibulum massa. In efficitur, erat at hendrerit tempor, lorem justo suscipit massa, ut gravida nisl felis a est. Phasellus consequat gravida orci ut tempus. Vivamus consectetur et mauris at lacinia. Sed mollis id ex ornare ultricies. Suspendisse vulputate elit mauris, a maximus quam mollis a. Donec at diam porttitor, eleifend tellus bibendum, mollis nisl. Nullam at commodo elit. Phasellus maximus porttitor ipsum eu scelerisque. Praesent convallis nec sem eget mattis. In elementum non mi at commodo. Nullam quis pellentesque ipsum. Sed semper augue semper sem euismod faucibus. Duis sed ante consectetur, venenatis ipsum eu, dapibus metus. Praesent hendrerit urna in lacus feugiat, eu rhoncus augue iaculis. Proin tortor sapien, faucibus non nunc in, ultricies consequat dui. Quisque ultrices placerat orci sed condimentum. Praesent porta vestibulum justo et auctor. Pellentesque augue justo, eleifend quis lectus vitae, eleifend iaculis velit. Quisque interdum risus dolor, vel mollis arcu porta non. Duis urna felis, euismod at accumsan et, aliquam vitae nunc. Nulla scelerisque blandit libero ac suscipit. Nunc a sollicitudin nisi. Donec tincidunt, lacus sit amet cursus semper, tellus metus imperdiet libero, vitae pretium ipsum justo vitae augue. In semper nulla sed eleifend commodo. Fusce quis euismod massa. Vivamus facilisis tristique leo sed porta. Aenean molestie vestibulum nisl, sit amet vestibulum justo imperdiet vel. Phasellus cursus leo nibh.";

    var dock2_content = document.getElementById("dock2");
    dock2_content.innerHTML = lorem_ipsum;
}
