<?php
set_time_limit(0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
        <meta http-equiv="Content-Type" content="text/html; charset=Windows-1251">
        <title>Sample</title>
        <script>console.log("I'm here");</script>
    </head>
    <body>
            <?php
                
                include_once 'class.verifyEmail.php';

                $email = $_REQUEST["email"];

                $vmail = new verifyEmail();
                $vmail->setStreamTimeoutWait(20);

                $vmail->setEmailFrom('eobardthawne@email.com');

                if ($vmail->check($email)) {
                        echo 'Valid email address, moving ahead.';
                } elseif (verifyEmail::validate($email)) {
                        echo "Provided email is valid but don't exist.";
                } else {
                        echo "Please provide a valid email address.";
                }
            ?>
    </body>
</html>