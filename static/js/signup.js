var passed = false;
var phpPassed = false;
var pageNo = 0;
var otp = 0;

function checkName(name) {
    var errorDiv = document.getElementById(name + "-error")
    var re = /^[a-zA-Z ]+([a-zA-Z]*)*$/g
    var value = document.getElementsByName(name)[0].value

    passed = re.test(value)
    if(value.length > 0)
        errorDiv.innerHTML = passed ? "" : "Invalid Name"
    else
        errorDiv.innerHTML = "Name can't be empty"
}

function checkEmail(name){
    var errorDiv = document.getElementById(name + "-error")
    var re = /^\w+([-+.']\w+)*@?(mes.ac.in|student.mes.ac.in)$/
    var value = document.getElementsByName(name)[0].value

    passed = re.test(value)
    if(value.length > 0)
        errorDiv.innerHTML = passed ? "" : "Invalid Email, must be on MES domain"
    else
        errorDiv.innerHTML = "Email can't be empty"
}

function submitPage1(){
    if(passed){
        document.getElementById("email-error").innerHTML = "Checking...";
        document.getElementsByName("submitBtn")[0].disabled = true;
        var value = document.getElementsByName("email")[0].value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                response = this.responseText;
                if(response.includes("moving ahead")){
                    document.getElementById("email-error").innerHTML = response;
                    phpPassed = true;
                    navigateNext();
                }
            }
        };
        xmlhttp.open("POST", "emailverify.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("email=" + value);
    }
}


function checkPhone(name){
    var errorDiv = document.getElementById(name + "-error")
    var re = /^(\+\d{1,3}[- ]?)?\d{10}$/
    var value = document.getElementsByName(name)[0].value
    
    passed = re.test(value)
    if(value.length > 0)
        errorDiv.innerHTML = (!re.test(value)) ? "Invalid Phone Number" : ""
}

function generateOtp(length) {
   var result = '';
   var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}


function sendOtp(){
    if(passed){
        document.getElementById("phone-error").innerHTML = "Sending OTP...";
        document.getElementsByName("submitBtn")[0].disabled = true;
        
        var number = document.getElementsByName("phone")[0].value;
        otp = generateOtp(7);
        //otp = "998764r";
        
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("phone-error").innerHTML = "OTP sent succesfully. Kindly click on Verify.";
            }
        }
        xmlhttp.open("POST", "phoneverify.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("phone=" + number + "&otp=" + otp);
    }
}

function verifyOtp(){
    var enteredOtp = document.getElementsByName("otp")[0].value;
    if(enteredOtp === otp){
        document.getElementById("otp-error").innerHTML = "OTP verified. Click Next to proceed.";
        phpPassed = true;
        document.getElementsByName("submitBtn")[0].disabled = false;
    }
    else
        document.getElementById("otp-error").innerHTML = "Incorrect OTP";
}



function checkPassword(name){
    var errorDiv = document.getElementById(name + "-error")
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/
    var value = document.getElementsByName(name)[0].value
    
    passed = re.test(value);
    if(value.length > 0)
        errorDiv.innerHTML = !passed ? "Password must contain at least one upper case and one numeric digit" : ""
}

function navigateNext(){
    if(passed){
        if(!phpPassed && pageNo === 0)
            submitPage1();
        else if(pageNo == 2)
            submit();
        else{
            passed = false;
            phpPassed = false;
            document.getElementById("page" + pageNo++).style.display = "none";
            document.getElementById("page" + pageNo).style.display = "block";
            document.getElementById("goback").style.visibility = "visible";
            if(pageNo == 2)
                document.getElementsByName("submitBtn")[0].innerHTML = "Submit";
        }
        
    }
}

function navigateBack(){
    document.getElementById("page" + pageNo).style.display = "none";
    document.getElementById("page" + --pageNo).style.display = "block";
    if(pageNo === 0)
        document.getElementById("goback").style.visibility = "hidden";
    
}
	
function submit(){
    var name = document.getElementsByName("firstName")[0].value + " "
    name += document.getElementsByName("lastName")[0].value
    
    var email = document.getElementsByName("email")[0].value
    
    var phone = document.getElementsByName("phone")[0].value
    
    var passwd = document.getElementsByName("password")[0].value
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            if(this.response.includes("successfully")){
                document.getElementById("page2").style.display = "none";
                document.getElementById("page3").style.display = "block";
                document.getElementById("goback").style.visibility = "hidden";
                document.getElementsByName("submitBtn")[0].style.visibility = "hidden";
            }
        }
    }
    
    xhttp.open("POST", "createAccount.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email=" + email + "&phone=" + phone + "&name=" + name + "&passwd=" + passwd);
}