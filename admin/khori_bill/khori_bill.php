<?php 
    include '../master/header.php';
    include "../url/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Table</title>
</head>
<body>

    <div class="header">
        <h1>Khori Bill</h1>

        <form action="" method="GET">
        <button name="add_month">ADD MONTH</button>
        </form>
    </div>

    <?php 
        if(isset($_GET['add_month'])){
            require "../config/config.php";
            $month = date("F");
            $date = date("d-m-y");
            $time = time();
            $add_month = "INSERT INTO khori_bill_month(month_name,date,time) VALUES('$month','$date','$time')";
            mysqli_query($conn,$add_month);
            header("location: $url_link/admin/khori_bill/khori_bill.php");
        }

    
    ?>

    <?php 
        require "../config/config.php";
        $view_month = "SELECT * FROM khori_bill_month";
        $result = mysqli_query($conn,$view_month);

        if(mysqli_num_rows($result) > 0){

      

    
    ?>
    <div class="category-container">
        <table class="category-table">
            <thead class="category-header">
                <tr class="category-header-row">
                    <th class="category-header-cell category-s-no">S.NO</th>
                    <th class="category-header-cell category-name">Month Name</th>
                    <th class="category-header-cell category-name">Date</th>
                    <th class="category-header-cell category-delete">DELETE</th>
                </tr>
            </thead>
            <tbody class="category-body">
                <?php 
                    $count = 1;
                    while($month = mysqli_fetch_assoc($result)){ 

                    
                
                ?>
                <tr class="category-body-row" onclick="window.location.href='view_khori_bill_member.php?viewid=<?= $month['id'];?>&month=<?= $month['month_name'];?>'" >
                    <td class="category-body-cell category-s-no"><?= $count++;?></td>
                    <td class="category-body-cell category-s-no"><?php echo $month['month_name'];?></td>
                    <td class="category-body-cell category-s-no"><?php echo $month['date'];?></td>
                    <td class="category-body-cell category-delete">
                        <a href="delete.php?id=<?= $month['id'];?>" class="category-button category-delete-button" style="text-decoration: none;">DELETE</a>
                    </td>
                </tr>

                <?php }?>
                <!-- Additional rows can go here -->
            </tbody>
        </table>
    </div>
    <?php   }?>
</body>
</html>
