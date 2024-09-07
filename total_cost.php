<?php 
    include './master/header.php';
    include "./admin/config/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1>Total Cost</h1>
        


    </div>

    <div id="table-container">
    <?php 

    if(isset($_POST['add_cost'])){

      
        ?>
       <div>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" class="total_cost">

                <label for=""></label>
                <input type="text" placeholder="Day Name" name="day_name">
                <input type="text" placeholder="item" name="item">
                <input type="text" placeholder="amount" name="amount">
                <button type="submit" name="save">Save</button>
            </form>
        </div> 

    <?php } ?>
    <?php
    
        if(isset($_POST['save'])){
            include "../config/config.php";

            $user_id = $_GET['user_id'];
            $user_name = $_GET['user_name'];
            $user_time = $_GET['user_time'];

            $day_name = $_POST['day_name'];
            $item = $_POST['item'];
            $day_amount = $_POST['amount'];
            $date = date("d M Y");

            $sql = "INSERT INTO total_cost(bar_name,item,date,amount,user_id,user_name,user_time)
                    VALUES ('$day_name','$item','$date','$day_amount','$user_id','$user_name','$user_time') ";

            mysqli_query($conn,$sql);

            
        }
        

    ?>

        <?php 
            $user_id = $_GET['user_id'];
            $user_name = $_GET['user_name'];
            $user_time = $_GET['user_time'];
            
            $view_cost = "SELECT * FROM total_cost WHERE user_id='$user_id' AND user_name='$user_name' AND user_time='$user_time'";
            $result = mysqli_query($conn,$view_cost);

            if(mysqli_num_rows($result) > 0){

        ?>
        <table id="user-table">
                <thead id="table-header" class="table-header">
                    <tr>
                        <th>S.No</th>
                        <th>Day Name</th>
                        <th>Item</th>
                        <th>date</th>
                        <th>amount</th>

                    </tr>
                </thead>
                <tbody id="table-body" class="table-body">
                    <?php 
                        $count = 1;
                        $total = 0;
                        while($row = mysqli_fetch_assoc($result)){  
                    
                    ?>
                    <tr>
                        <td><?= $count;?></td>
                        <td><?= $row['bar_name'];?></td>
                        <td><?= $row['item'];?></td>
                        <td><?= $row['date'];?></td>
                        <td><?= $row['amount'];?></td>
                    </tr>
                    <?php $total = $total+$row['amount']; $count ++; }?>
                    


                    <tfoot>
                        <tr style="background-color:green; color:white;">
                            <td colspan="3"  style="padding: 20px;"></td>
                            <td colspan="1">Total :</td>
                            <td colspan="1"><?= $total?></td>
                        </tr>
                </tfoot>

                <?php $count ++; }?>
                </tbody>
            </table>
           
    </div>

</body>
</html>