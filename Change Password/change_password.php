<?php
    session_start(); 
 
    $conn = mysqli_connect("127.0.0.1", "root", "", "student_db");
    
    if(!$conn){
        
        echo "Debugging errno: ".mysqli_connect_errno();
        echo "<br>";
        echo "Debugging error: ".mysqli_connect_error();
    }
    
    if(count($_POST) > 0){
        
        // fetch old password from db table where user_name what the user enters in form
        $result = mysqli_query($conn, "SELECT * FROM user_account WHERE user_name = '".$_POST['u_name']."'"); 
        
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($_POST["currentPassword"] === $row["password"] && $_POST["newPassword"] === $_POST["confirmPassword"]){ 

              {
        //update and hash the password with new password in db 
        $hash = password_hash($_POST['newPassword'] , PASSWORD_DEFAULT);
      
        mysqli_query($conn , "UPDATE user_account SET password='".$hash."'where user_name = 
        '".$_POST['u_name']."'");
        $message = "Password changed successfully";
        echo $message;           
    }

            } 
            
            else{
                
                $message = "Password is not correct";
                echo $message; 
            }
        }else{
            echo $_POST['u_name']." does not exist";
        }
    }
    mysqli_close($conn); 
?>