<?php
set_time_limit(0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
        <meta http-equiv="Content-Type" content="text/html; charset=Windows-1251">
        <title>Sample</title>
    </head>
    <body> 
        
        <?php
            $host = 'sql205.epizy.com';
            $database = 'epiz_24411785_main_db';
            $username = 'epiz_24411785';
            $password = 'UOXocMAkkdl';

            try {
                $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $email = $_REQUEST["email"];
                $phone = $_REQUEST["phone"];
                $name = $_REQUEST["name"];
                $passwd = $_REQUEST["passwd"];
                $sql = "INSERT INTO 'user_profile' values($email, $phone, $name, $passwd)";
                
                $conn->exec($sql);
                echo 'Account Created successfully, Kindly login.';
            }
            catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
            $conn = null;
        ?>
    </body>
</html>