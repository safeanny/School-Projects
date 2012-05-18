<?php
    /* Written by: Sean Feanny
         ID: 052-980-067
    */
?>
<?php
    include_once('safeanny_a3_library.php');
    if(empty($_POST)){
        myheader("Login");
        login_form();
        loginfooter();
    }
    else{  
        $uname = $_POST[username];
        $pword = $_POST[password];
        
        $res = ServerConnectLogin($uname);
        $row = mysql_fetch_assoc($res);
        // check if username was found in the database
        if($row){
            $encrypted_pwd = $row[password];
            $user_role = $row[role];
            // check to see if encryptped password stored in the database matches the encrypted password entered by the user
            if($encrypted_pwd == crypt($pword, $encrypted_pwd)){
                // start the session and set the inital session variables
                session_start();
                // valid_login will be used as the check on the other webpages to see if user is logged in
                $_SESSION['valid_login'] = true;            
                $_SESSION['username'] = $uname;
                $_SESSION['user_role'] = $user_role;
                header('Location: safeanny_a3_view.php');
            }
            // if passwords do not the match login form is displayed (without reasons for login failure)
            else{
                myheader("Login");
                login_form();
                loginfooter();
            }
        }
        // if the username given does not match any in the database the login form is displayed (without reasons for login failure)
        else{
            myheader("Login");
            login_form();
            loginfooter(); 
        }
    }
?>