
var bool = 0;

function openNav() {
	if(bool == 0){
    	document.getElementById("mySideNav").style.width = "140px";
    	bool = 1;
    }
    else{
    	document.getElementById("mySideNav").style.width = "0";
    	bool = 0;
    }
}
