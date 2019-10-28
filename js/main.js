function loginsignup(){
    var login = document.getElementById("login");
    if (login.style.display === "none") {
        login.style.display = "block";
    } else {
        login.style.display = "none";
    }
}

function signup(){
    var login = document.getElementById("log");
    var signup = document.getElementById("signup");
        login.style.display = "none";
        signup.style.display = "block";
}
function logon(){
    var login = document.getElementById("log");
    var signup = document.getElementById("signup");
        login.style.display = "block";
        signup.style.display = "none";
}