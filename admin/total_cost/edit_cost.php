<?php 
    include "../master/header.php";



    $user_id = $_GET['user_id'];
    $user_name = $_GET['user_name'];
    $user_time = $_GET['user_time'];

?>       

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


        <?php 

            require "../config/config.php";
            $id = $_GET['cost_id'];

            $sql = "SELECT * FROM total_cost WHERE cost_id='$id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
     
        ?>

    <div class="form-container">
        <h2 class="add_user_title">Edit Cost</h2>
        <form class="weekly_form" action="save_cost.php?cost_id=<?= $id?>" method="POST">
                

                <input type="hidden" name="user_id"   value="<?php echo  $_GET['user_id'];?>" class="form-input">
                <input type="hidden" name="user_name"   value="<?php echo  $_GET['user_name'];?>" class="form-input">
                <input type="hidden" name="user_time"   value="<?php echo  $_GET['user_time'];?>" class="form-input">

                <input type="text" name="bar_name"  value="<?php echo $row['bar_name'];?>" class="form-input">
                <input type="text" name="item"  value="<?php echo $row['item'];?>" class="form-input">
                <input type="number" name="amount" value="<?php echo $row['amount'];?>" class="form-input">

                <button class="cost_button" type="submit" name="update_cost"> Save</button>
        </form>
    </div>
    <?php }}?>
    
</body>
</html>
