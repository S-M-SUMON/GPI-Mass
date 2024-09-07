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
        <h1>All Member Amount</h1>


       
        

    </div>  

    <div id="table-container">
        <?php 


            $user_id = $_GET['user_id'];
            $user_name = $_GET['user_name'];
            $user_time = $_GET['user_time'];
            
            

            $sql = "SELECT * FROM add_member 
            WHERE am_user_id='{$user_id}' AND am_username='{$user_name}' AND am_user_time='{$user_time}'";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) >0 ){
                
            

                
        ?>
        <table id="user-table">
            <thead id="table-header" class="table-header">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody id="table-body" class="table-body">
                <?php 
                    $total = 0;
                    $count = 1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
               <tr>
                    <td><?php echo $count ;?></td>
                    <td><?php echo $row['am_name'];?></td>
                    <td><?php echo $row['amount'];?></td>
                    
                    
               </tr>
               
               <?php $total = $total+$row['amount']; $count ++; }?>

                <tfoot>
                        <tr style="background-color:green; color:white;">
                            <td colspan="1"  style="padding: 20px;"></td>
                            <td colspan="1">Total :</td>
                            <td colspan="1"><?php echo $total;?></td>
                        </tr>
                </tfoot>
            </tbody>
        </table>
        <?php }?>
    </div>
</body>
</html>