

var count = 0;
function openNav() {
	if(count == 0){
    document.getElementById("mySideNav").style.width = "30px";
	count = 30;
}
else{
document.getElementById("mySideNav").style.width = "0";
count = 0;
}
}

function closeNav() {
    document.getElementById("mySideNav").style.width = "0";
}
