<?php
    $fetch_user_q = "SELECT * FROM registration_tbl WHERE user = '". $_POST['userTxt'] ."'";
    $db_user;
    $db_pass;
    $db_uid;
    $db_utype;
    $db_ustatus;
    
    $q = mysqli_query($con,$fetch_user_q);
    while($row =  mysqli_fetch_array($q)){
        $db_user = $row['uname'];
        $db_pass = $row['pass'];
        $db_uid = $row['user_id'];
        $db_utype = $row['user_type'];
        $db_ustatus = $row['user_status'];
    }
    if(isset($_POST['sub'])){
        if($_POST['userTxt'] == $db_user && md5(md5($_POST['passTxt'])) == $db_pass){
            if($db_ustatus){
                $_SESSION['uname'] = $db_user;
                $_SESSION['user_type'] = $db_utype;
                $_SESSION['user_id'] = $db_uid;
                $_SESSION['logged'] = 1;
    
                if(isset($_POST['remme'])){
                    setcookie("username",$_POST['userTxt']);
                    setcookie("password",$_POST['passTxt']);
                }
                
                if($db_utype == 2){
                    header('location: dashboard.php');
                }
                else{
                      echo "This user can't login"
                }
            }
            else{
                echo "<p class=\"bg-danger text-light h6 p-2 w-75 rounded\">Account Deactivated <br> Please Contact your IT administrator</p>";
            }
        }
        else echo "Incorrect Credentials";
    }
?>