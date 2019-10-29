const is_exitst_element = document.querySelector('#analog_clock');

const get_second = document.querySelector('.second_indicator'),
    get_minutes = document.querySelector('.minute_indicator'),
    get_hours = document.querySelector('.hour_indicator'),
    date_now = new Date();

const setupClock = () =>
{
    let push_seconds = date_now.getSeconds(),
    push_minutes = date_now.getMinutes() * 60,
    push_hours = date_now.getHours() * 3600;

    get_second.style.animationDelay = `-${push_seconds}s`;
    get_minutes.style.animationDelay = `-${push_minutes}s`;
    get_hours.style.animationDelay = `-${push_hours}s`;
}

if( typeof(is_exitst_element) != 'undefined' && is_exitst_element != null ) {
    const face_line_0 = document.createElement("div");
    face_line_0.classList.add("face_line");
    document.getElementById("analog_clock").appendChild(face_line_0);

    const face_line_30 = document.createElement("div");
    face_line_30.classList.add("face_line");
    face_line_30.classList.add("deg_30");
    document.getElementById("analog_clock").appendChild(face_line_30);

    const face_line_60 = document.createElement("div");
    face_line_60.classList.add("face_line");
    face_line_60.classList.add("deg_60");
    document.getElementById("analog_clock").appendChild(face_line_60);

    const face_line_90 = document.createElement("div");
    face_line_90.classList.add("face_line");
    face_line_90.classList.add("deg_90");
    document.getElementById("analog_clock").appendChild(face_line_90);

    const face_line_120 = document.createElement("div");
    face_line_120.classList.add("face_line");
    face_line_120.classList.add("deg_120");
    document.getElementById("analog_clock").appendChild(face_line_120);

    const face_line_150 = document.createElement("div");
    face_line_150.classList.add("face_line");
    face_line_150.classList.add("deg_150");
    document.getElementById("analog_clock").appendChild(face_line_150);

    const clock_face_bg = document.createElement("div");
    clock_face_bg.classList.add("clock_face_bg");
    document.getElementById("analog_clock").appendChild(clock_face_bg);

    const bg_circle = document.createElement("div");
    bg_circle.classList.add("bg_circle");
    document.getElementById("analog_clock").appendChild(bg_circle);

    setupClock();
}