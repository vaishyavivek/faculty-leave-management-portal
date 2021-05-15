<!doctype html>
<html>
    <head>
        <title>Sign In : PCE Leave Management Portal</title>
        <link rel="stylesheet" type="text/css" href="static/css/signup.css">
        <link href="https://fonts.googleapis.com/css?family=Hind|Roboto+Condensed|Ubuntu&display=swap" rel="stylesheet">
        <script src="static/js/signin.js"></script>
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
                <h1>Sign In</h1>
                <h3>Continue to PCE Portal</h3>
            </div>
            

            <div id="page0" style="display: block;">
                <div class="inputbox" style="width: 96%">
                    <input name="email" class="inputfield">
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
                <div class="inputbox" style="width: 96%">
                    <input type="password" name="password" class="inputfield">
                    <fieldset class="inputbox-outline">
                        <legend>Password</legend>
                    </fieldset>
                    <div id="password-error" class="error-message"></div>
                </div>
            </div>
            
            <div id="page2" style="display: none;">
                <div class="success" style="width: 96%; padding: 10px;">
                    Login Succesful. Redirecting now...
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
