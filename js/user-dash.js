function membership(){
    document.querySelector(".showcontent").classList.remove("showcontent");
    document.querySelector(".active").classList.remove("active");
    document.getElementById("membership").classList.add("showcontent");
    document.getElementById("nav_membership").classList.add("active");
}

function loan(){
    document.querySelector(".showcontent").classList.remove("showcontent");
    document.querySelector(".active").classList.remove("active");
    document.getElementById("book").classList.add("showcontent");
    document.getElementById("nav_loan").classList.add("active");
}

function history(){
    document.querySelector(".showcontent").classList.remove("showcontent");
    document.querySelector(".active").classList.remove("active");
    document.getElementById("history").classList.add("showcontent");
    document.getElementById("nav_history").classList.add("active");
}

function borrowed(){
    document.querySelector(".showcontent").classList.remove("showcontent");
    document.querySelector(".active").classList.remove("active");
    document.getElementById("borrowed").classList.add("showcontent");
    document.getElementById("nav_borrowed").classList.add("active");
}

function settings(){
    document.querySelector(".showcontent").classList.remove("showcontent");
    document.querySelector(".active").classList.remove("active");
    document.getElementById("settings").classList.add("showcontent");
    document.getElementById("nav_settings").classList.add("active");
}

function logout(){
    window.location.replace("../php/loginhtml.php");
}