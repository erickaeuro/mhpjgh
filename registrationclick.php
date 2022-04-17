<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cphone = $_POST['cphone'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if(isset($_POST['sub'])){
        echo "<div class=\"w-100 bg-warning text-center text-dark rounded p-2\">";
        if(empty($fname)|| empty($lname)|| empty($email)|| empty($cphone)|| empty($uname)|| empty($pass)|| empty($cpass)){
            echo "All fields are required";
        }else{
            if(strlen($cphone) != 11){
                echo "Contact Number must have 11 characters";    
            }else{

                $uppercase = preg_match('@[A-Z]@', $pass);
                $lowercase = preg_match('@[a-z]@', $pass);
                $number    = preg_match('@[0-9]@', $pass);
                $specialChars = preg_match('@[^\w]@', $pass); 

                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) 
                {
                  echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                }
                else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8)
                {
                  echo 'Strong password.';
                } 
                else{
                    if($pass != $cpass){
                        echo "Passwords does not match";
                    }
                    else{
                        $enc_pass = md5(md5($pass));
                        $fetch_q = "SELECT * FROM registration_tbl WHERE uname ='$uname'";
                        mysqli_query($con,$fetch_q);
                        if(mysqli_affected_rows($con) > 0){
                            echo "The username \"$uname\" is taken";
                        }
                        else{
                            $insert_q = "INSERT INTO registration_tbl (user_status, user_type, fname, lname, email, cphone, uname, pass)
                            VALUES (1,3, '".$fname."','".$lname."','".$email."','".$cphone."','".$uname."','".$enc_pass."')";
                            
                            if(mysqli_query($con,$insert_q)){
                                header("Location: login.php?registration=1");
                            }
                            else{
                                echo $con -> error;
                            }
                        }  
                    }
                }
            }
        }
        echo "</div>";
        echo "<br/>";
    }
?>