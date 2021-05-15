<!doctype html>
<html>
    <head>
        <title>Sign Up : PCE Leave Management Portal</title>
        <link rel="stylesheet" type="text/css" href="static/css/signup.css">
        <link href="https://fonts.googleapis.com/css?family=Hind|Roboto+Condensed|Ubuntu&display=swap" rel="stylesheet">
        <!--script src="static/js/jquery.js"></script-->
        <script src="static/js/signup.js"></script>
    </head>
    
    <body>
        <div class="background"></div>
        
        
        <div class="main-body">
        <fieldset class="main-field">
            <div class="logo-out">
                <div class="pce">pce</div>
                <div class="avkash">avkash࿙</div>
            </div>
<!--            <div class="logo">pce</div>-->
                
            <div class="header">
                <h1>Sign Up</h1>
                <h3>Continue to PCE Portal</h3>
            </div>
            
            <div id="page0">
                <div class="name">
                    <div class="inputbox" style="width: 44%">
                        <input name="firstName" class="inputfield" oninput="checkName(name)">
                        <fieldset id="test" class="inputbox-outline">
                            <legend>First Name</legend>
                        </fieldset>
                        <div id="firstName-error" class="error-message"></div>
                    </div>

                    <div class="inputbox" style="width: 44%">
                        <input name="lastName" class="inputfield" oninput="checkName(name)">
                        <fieldset class="inputbox-outline">
                            <legend>Last Name</legend>
                        </fieldset>
                        <div id="lastName-error" class="error-message"></div>
                    </div>    
                </div>


                <div class="inputbox" style="width: 96%">
                    <input name="email" class="inputfield" oninput="checkEmail(name)">
                    <fieldset class="inputbox-outline">
                        <legend>Email</legend>
                    </fieldset>
                    <div id="email-error" class="error-message"></div>
                </div>
                
                <div class="not-mes" style="text-align: right; margin: 15px">
                    <div>Don't have an MES mail id?
                        <a href="#" class="ext-link">Learn more</a>
                    </div>
                </div>
            </div>
                
            <div id="page1" style="display: none;">
                <div class="country-code">+91</div>
                <div class="inputbox" style="width: 80%; float: right;">
                    <input name="phone" class="inputfield" oninput="checkPhone(name)">
                    <fieldset class="inputbox-outline">
                        <legend>Phone Number</legend>
                    </fieldset>
                    <div id="phone-error" class="error-message"></div>
                </div>
                
                <div class="not-mes" style="text-align: right; margin: 5px 15px;">
                    <a class="ext-link" onclick="sendOtp()">Send OTP</a>
                </div>
                
                <div class="name">
                    <div class="inputbox" style="width: 60%;">
                        <input name="otp" class="inputfield">
                        <fieldset class="inputbox-outline">
                            <legend>OTP</legend>
                        </fieldset>
                        <div id="otp-error" class="error-message"></div>
                    </div>

                    <div style="width: 25%; height: 60px; margin: 25px 5px;">
                        <button onclick="verifyOtp()">Verify</button>
                    </div>
                </div>
                
            </div>    
                
            <div id="page2" style="display: none;">
                <div class="inputbox" style="width: 96%">
                    <input type="password" name="password" class="inputfield" oninput="checkPassword(name)">
                    <fieldset class="inputbox-outline">
                        <legend>Password</legend>
                    </fieldset>
                    <div id="password-error" class="error-message"></div>
                </div>
            </div>

            <div id="page3" style="display: none;">
                <div class="success" style="width: 96%; padding: 10px;">
                    Account Created successfully. Kindly login to continue.
                    <a class="ext-link" style="width: 100%; padding: 10px; text-align: center;" href="signin.php">Login</a>
                </div>
            </div>
            
            <div class="name">
                <a href="#" id="goback" class="ext-link backbtn" onclick="navigateBack()">Previous</a>
                <div style="text-align: right; margin: 15px">
                    <button name="submitBtn" onclick="navigateNext()">Next</button>
                </div>
            </div>
            
        </fieldset>
            
        
            <div style="text-align: center; margin-top: 25px;">&copy; Pillai College of Engineering, New Panvel (1999-2019)
            </div>
            <div class="terms"><a href="#">Terms of using the website</a> </div>
        </div>
        
    </body>
</html>
