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

var is_exitst = document.querySelector('#analog_clock');
if( typeof(is_exitst) != 'undefined' && is_exitst != null ) setupClock();