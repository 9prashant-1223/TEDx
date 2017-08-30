<!DOCTYPE html>
<html>
<head>
	<title>dfghjkl</title>
</head>
<body>

<button onclick="startCount()">start</button>
<input type="text" name="" id="a" value="4" onclick='timedCount()'>

<button onclick="stopCount()">end</button>




<script>
var c = 12;
var t;
var timer_is_on = 0;

function timedCount() {
    document.getElementById("a").value = c;
    c = c +131;
    if(c<=30000){
    t = setTimeout(function(){ timedCount() }, 1);
    
}
else{
	c=30000;
}
}

function startCount() {
    if (!timer_is_on) {
        timer_is_on = 1;
        timedCount();
    }
}

function stopCount() {
    clearTimeout(t);
    timer_is_on = 0;
}

</script>
</body>
</html>