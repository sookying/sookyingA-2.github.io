function showPwd() {
    var p = document.getElementById("pwd");
    if (p.type === "password") {
        p.type = "text";
    } else {
        p.type = "password";
    }
}

function submitButtonVol() {
    if (document.forms['signupForm'].Vusername.value === "") {
        alert("Please enter username");
      return false;
    }
    else if (document.forms['signupForm'].Vpwd.value === "") {
        alert("Please enter password");
        return false;
    }
    else if (document.forms['signupForm'].Vname.value === "") {
        alert("Please enter your name");
        return false;
    }
    else if (document.forms['signupForm'].Vphone.value === "") {
        alert("Please enter your phone number");
        return false;
    }
    else{
        alert("Thank you for your partcipate ! You are now one of our CRS member.")
    }
}

function managerLogin(){
    if (document.forms['managerLoginForm'].Musername.value === "") {
        alert("Please enter your username");
      return false;
    }
    else if (document.forms['managerLoginForm'].Mpwd.value === "") {
        alert("Please enter your password");
        return false;
    }
}

function staffLogin(){
    if (document.forms['staffLoginForm'].Susername.value === "") {
        alert("Please enter your username");
      return false;
    }
    else if (document.forms['staffLoginForm'].Spwd.value === "") {
        alert("Please enter your password");
        return false;
    }
}

function volLogin(){
    if (document.forms['volLoginForm'].Vusername.value === "") {
        alert("Please enter your username");
      return false;
    }
    else if (document.forms['volLoginForm'].Vpwd.value === "") {
        alert("Please enter your password");
        return false;
    }
}







