<?php
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    if(isset($email)){
        $host = 'localhost';
        $database = 'main_db';
        $username = 'avkash';
        $password = 'password';
        
        if(!isset($passwd)){
            
            try {
                $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
                    // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "Select * from `user_profile` where email='" . $email . "'";
                $stmt = $conn->query($sql);
                $user = $stmt->fetch();

                if(isset($user)) {
                    echo "Okay";
                }
                else{
                    echo "Not Found";
                }
            }
            catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
            }
            
            $conn = null;
            
        }
        else if(isset($passwd)){
            
            try {
                $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
                    // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "Select * from `user_profile` where email='$email'";
                $stmt = $conn->query($sql);
                $user = $stmt->fetch();

                if($user['password'] == $passwd) {
                    session_start();
                    $_SESSION["email"] = $email;
                    $_SESSION["name"] = $user['name'];
                    echo "Okay";
                }
                else {
                    echo "Incorrect Password";
                }
            }
            catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
            }
            
            $conn = null;
        }
    }
