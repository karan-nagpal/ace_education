setInterval(() => { var date = new Date();
    var hours = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    var time = hours+":"+min+":"+sec;
    document.getElementById("clock").innerHTML = "Current Time is :" + time;
        
    }, 1000);
    var date = new Date();
    var hours = date.getHours();
    if(hours >= 16){
        document.getElementById("greet").innerHTML = "Good Evening";
    }else if (hours >= 12){
        document.getElementById("greet").innerHTML = "Good Afternoon";
    }else if (hours < 12){
        document.getElementById("greet").innerHTML = "Good Morning";
    }
    