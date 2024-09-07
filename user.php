<?php 
    include './master/header.php';
    include "./admin/config/config.php";
    $view_users = "SELECT * FROM users  WHERE role ='2' ORDER BY user_id DESC ";
    $result = mysqli_query($conn,$view_users);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
</head>
<body>
    <div class="header">
        <h1>All Users</h1>
        <h1></h1>
        
    </div>

    <div id="table-container">

        <table id="user-table">
            <thead id="table-header" class="table-header">
                <tr>
                    <th>S.No</th>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Date</th>
                    <th>View Manager</th>
                    <th>View Amount</th>
                    <th>Total Cost</th>
                    <th>pabo / dibo</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody id="table-body" class="table-body">
                <?php 
                    $count = 1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td style="padding: 20px;"><?= $count?></td>
                    <td><?= $row['user_first_name']." ".$row['user_last_name']?></td>
                    <td><?= $row['username']?></td>
                    <td>
                    
                    </td>


                    <td><?= $row['date']?></td>
                    <td><a style="background-color:#339933;"href="view_user_details.php?user_id=<?php echo $row['user_id'];?>&user_name=<?php echo $row['username'];?>&user_time=<?php echo $row['time'];?>" class="edit_a">View Manager</a></td>
                    <td><a style="background-color:#8a2be2;"href="view_amount.php?user_id=<?php echo $row['user_id'];?>&user_name=<?php echo $row['username'];?>&user_time=<?php echo $row['time'];?>" class="edit_a">View Amount</a></td>
                    
                    <td><a style="background-color:#ff33cc;"href="./total_cost.php?user_id=<?php echo $row['user_id'];?>&user_name=<?php echo $row['username'];?>&user_time=<?php echo $row['time'];?>" class="edit_a">Total Cost</a></td>
                    
                    <td><a style="background-color:red;"href="./pabo_dibo.php?user_id=<?php echo $row['user_id'];?>&user_name=<?php echo $row['username'];?>&user_time=<?php echo $row['time'];?>" class="edit_a"" class="edit_a">pabo / dibo</a></td>
                </tr>
                <?php
                    $count ++;
                    } 
                ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>
