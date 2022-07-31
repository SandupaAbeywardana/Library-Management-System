function settings(){
    document.getElementById("main").style.display = "none";
    document.getElementById("settings").style.display = "inline-block";
    document.getElementById("nav_settings").style.background = "#002a70";
}

function logout(){
    window.location.replace("../php/loginhtml.php");
}