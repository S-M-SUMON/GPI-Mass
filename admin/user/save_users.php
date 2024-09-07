<?php 
    if(isset($_POST['add_user'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $userRole = $_POST['userRole'];
 
        $time = time();
        $date = date("d-M-Y");

        if($firstName && $lastName && $username && $password && $userRole){
           require "../config/config.php";
           $user = "INSERT INTO users(user_first_name,user_last_name,username,time,date,password,role)
                    VALUES('$firstName','$lastName','$username','$time','$date','$password','$userRole')";
            mysqli_query($conn,$user);
            header("location: users.php");
        }else{
            echo "plice Inter A Value";
        }

    }

?>