var hour = 0;
var minute = 0;
var second = 0;

function formatTime(a) {
    if(a<10)
        a = "0"+a;
    return a;
}

setInterval(function () {
    var showh = formatTime(hour);
    var showm = formatTime(minute);
    var shows = formatTime(second);
    document.getElementById("timer").innerHTML=showh+":"+showm+":"+shows;

    second++;
    if(second == 60)
    {
        second = 0;
        minute++;
    }
    if(minute == 60){
        minute = 0;
        hour++;
    }
}, 1000); // 1second

function hide() {
    var text = document.getElementById("hide").innerText;
    var button = document.getElementById("hide");
    var div = document.getElementById("timer");


    if (text == "HIDE TIME") {
        button.innerText = "SHOW TIME";
        div.style.display='none';
    }else {
        button.innerText = "HIDE TIME"
        div.style.display='block';
    }
}