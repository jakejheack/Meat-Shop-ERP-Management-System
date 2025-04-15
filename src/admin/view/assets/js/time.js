function showTime(){
    var date = new Date();
    var d = new Date();
    var mm = d.getMonth()+1;
    var dd = d.getDate();
    var yy = d.getFullYear();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
  
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = new Date().toLocaleDateString('en-US', {month: "short"})+"." + dd +"."+ yy +" | " + h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time.toUpperCase();
    document.getElementById("MyClockDisplay").textContent = time.toUpperCase();
    
    setTimeout(showTime, 1000);
    
}

showTime();