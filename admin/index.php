<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<section id="loging_section">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div>
                    <h1>Admin</h1><br>
                    <label for="">User Name</label><br>
                    <input type="text" name="username"><br>

                    <label for="">Password</label><br>
                    <input type="text" name="password"><br>

                    <?php if(isset($_SESSION['error'])){ ?>
                    <p><?php echo $_SESSION['error'];?></p>
                    <?php } unset( $_SESSION['error'] ); ?>

                    <button type="submit" name="login">Login</button>
                </div>

            </form>

    </section>
    
    <?php 
        if(isset($_POST['login'])){
            $user_name = $_POST['username'];
            $user_password = $_POST['password'];
        

            require "../admin/config/config.php";
            $login_query = "SELECT user_id,user_first_name,user_last_name,username,time,password,role FROM users WHERE username='{$user_name}' AND password= '{$user_password}'";
            $login_result = mysqli_query($conn,$login_query);

            if(mysqli_num_rows($login_result) >0){

                while($row = mysqli_fetch_assoc($login_result)){

                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['user_time'] = $row['time'];
                    $_SESSION['user_role'] = $row['role'];

                    
                    $_SESSION['user_first_name'] = $row['user_first_name'];
                    $_SESSION['user_last_name'] = $row['user_last_name'];
                    $_SESSION['user_last_name'] = $row['user_last_name'];

                    $_SESSION['password'] = $row['password'];
                    

                    // header("location: http://localhost/mass_management/admin/user/users.php");
                    if($_SESSION['user_role'] == 1){
                        header("location: http://localhost/mass_management/admin/user/users.php");
                    }else if($_SESSION['user_role'] == 2){
                        header("location: http://localhost/mass_management/admin/user/users.php");
                    }else if($_SESSION['user_role'] == 3){
                        header("location: http://localhost/mass_management/admin/aunty_bill/aunty_bill.php");
                    }else if($_SESSION['user_role'] == 4){
                        header("location: http://localhost/mass_management/admin/khori_bill/khori_bill.php");
                    }

                }

            }else{
                $_SESSION['error'] = 'User and Password not Matched';
                header("location: http://localhost/mass_management/admin/index.php");
            }


        }
    
    
    ?>

</body>
</html>