function myFunction(){

    var statuschk = document.getElementById("viewPassword").checked;

    if(statuschk == true){
        document.getElementById("pwd").type = "text";
        document.getElementById("confirmPwd").type = "text";
    }

    else if(statuschk == false){
        document.getElementById("pwd").type = "password";
        document.getElementById("confirmPwd").type = "password";
    }

}