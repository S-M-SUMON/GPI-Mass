<?php
    include "../master/header.php";

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="weekly_form_section">
        <?php 


            require "../config/config.php";
            $id = $_GET['edit_id'];

            $sql = "SELECT * FROM add_member WHERE am_id='{$id}'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){

                
        ?>
        
        <form class="weekly_form" action="update_edit_view_amount.php" method="POST">

            <input type="hidden" name="am_id"   value="<?php echo $row['am_id'];?>" class="form-input">

            <input type="hidden" name="user_id"   value="<?php echo  $_GET['user_id'];?>" class="form-input">
            <input type="hidden" name="user_name"   value="<?php echo  $_GET['user_name'];?>" class="form-input">
            <input type="hidden" name="user_time"   value="<?php echo  $_GET['user_time'];?>" class="form-input">

                    
            <input type="text" name="name"   value="<?php echo $row['am_name'];?>" class="form-input" readonly>
            <input type="hidden" name="sat"  value="<?php echo $row['sat'];?>" class="form-input">
            <input type="hidden" name="sun"  value="<?php echo $row['sun'];?>" class="form-input">
            <input type="hidden" name="mon"  value="<?php echo $row['mon'];?>" class="form-input">
            <input type="hidden" name="tue"  value="<?php echo $row['tue'];?>" class="form-input">
            <input type="hidden" name="wed"  value="<?php echo $row['wed'];?>" class="form-input">
            <input type="hidden" name="thu"  value="<?php echo $row['thu'];?>" class="form-input">
            <input type="hidden" name="fri"  value="<?php echo $row['fri'];?>" class="form-input">
            <input type="hidden" name="sate" value="<?php echo $row['sate'];?>" class="form-input">

            <input type="number" name="amount" value="<?php echo $row['amount'];?>" class="form-input">

            <button type="submit" name="update_edit_member">Save</button>
        </form>
        <?php 
                }
            }
        ?>
       
    </section>
    
</body>
</html>