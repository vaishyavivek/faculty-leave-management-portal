var pageNo = 0;

function checkEmail() {
    document.getElementsByName("submitBtn")[0].disabled = true;
    var email = document.getElementsByName("email")[0].value;
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if(this.status == 200 && this.readyState == 4) {
            if(this.responseText.includes("Okay")) {
                document.getElementById("page0").style.display = "none";
                document.getElementById("page1").style.display = "block";
                pageNo = 1;
            }
            else
                document.getElementById("email-error").innerHTML = "The email ID doesn't have an account.";
            
            document.getElementsByName("submitBtn")[0].disabled = false;
            document.getElementsByName("submitBtn")[0].innerHTML = "Login";
        }
    }
    
    xhttp.open("POST", "initSession.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email=" + email);
}

function trySignIn() {
    document.getElementsByName("submitBtn")[0].disabled = true;
    var email = document.getElementsByName("email")[0].value;
    var passwd = document.getElementsByName("password")[0].value;
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if(this.status == 200 && this.readyState == 4) {
            if(this.responseText == "Okay") {
                document.getElementById("page1").style.display = "none";
                document.getElementById("page2").style.display = "block";
                document.getElementsByName("submitBtn")[0].style.visibility = "hidden";
                window.location.href = "index.php";
            }
            else
                document.getElementById("password-error").innerHTML = "Incorrect Password.";
            document.getElementsByName("submitBtn")[0].disabled = false;
        }
    }
    
    xhttp.open("POST", "initSession.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email=" + email + "&passwd=" + passwd);
}


function navigateNext(){
    if(pageNo == 0)
        checkEmail();
    else if(pageNo == 1)
        trySignIn();
}