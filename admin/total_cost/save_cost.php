<?php 
    include "../url/config.php";
    require "../config/config.php";
    if(isset($_POST['update_cost'])){
            $_id = $_GET['cost_id'];

            $bar_name = $_POST['bar_name'];
            $item = $_POST['item'];
            $amount = $_POST['amount'];


            $name = $_POST['add_member_name'];
            $user_id = $_POST['user_id'];
            $user_name = $_POST['user_name'];
            $user_time = $_POST['user_time'];

           
            $updatw_cost = "UPDATE total_cost SET bar_name= '$bar_name', item= '$item',  amount= '$amount' WHERE cost_id='$_id' ";

            $result = mysqli_query($conn,$updatw_cost);

            header("location: $url_link/admin/total_cost/total_cost.php?user_id=$user_id&user_name=$user_name&user_time=$user_time");
            
    }

?>