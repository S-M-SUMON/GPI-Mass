<?php 
    session_start();
    if(isset($_POST['save_member_name'])){
        require "../config/config.php";

        $name = $_POST['add_member_name'];
        $user_id = $_POST['user_id'];
        $user_name = $_POST['user_name'];
        $user_time = $_POST['user_time'];

        // Initialize day variables
        $sat = "0";
        $sun = "0";
        $mon = "0";
        $tue = "0";
        $wed = "0";
        $thu = "0";
        $fri = "0";
        $sate = "0";
        $total = "0";
        

        // Correct SQL syntax without quotes around column names
        $sql = "INSERT INTO add_member (am_name, sat, sun, mon, tue, wed, thu, fri, sate, total, am_user_id, am_username, am_user_time)
                VALUES ('{$name}', '{$sat}', '{$sun}', '{$mon}', '{$tue}', '{$wed}', '{$thu}', '{$fri}', '{$sate}', '{$total}', '{$user_id}', '{$user_name}', '{$user_time}')";

        // Execute the query
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $_SESSION['user_id'] = $_POST['user_id'];
            $_SESSION['user_name'] = $_POST['user_name'];
            $_SESSION['user_time'] = $_POST['user_time'];
            header("location: http://localhost/mass_management/admin/view_user_details/view_user_details.php?user_id=$user_id&user_name=$user_name&user_time=$user_time");
           
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>
