<?php 
session_start();

if(!isset($_SESSION['user_id'])){
    header("location: http://localhost/mass_management/admin/");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <header>
        <div class="left-section">
            <h1>Bondhu Mohol Mass</h1>
        </div>
        <div class="right-section">
        <button class="logout-button"><a href="../logout.php"><?php echo $_SESSION['username'];?> Logout</a> </button>
        </div>
    </header>

    <nav class="menu">
        <ul>
            
        <?php 
            if($_SESSION['user_role'] ==1){
        ?>
            <li><a href="../user/users.php">Users</a></li>
            <li><a href="../aunty_bill/aunty_bill.php">Aunty Bill</a></li>
            <li><a href="../khori_bill/khori_bill.php">Khori Bill</a></li>
            <li><a href="../../">Go Web Site</a></li>
        <?php }?>

        <?php   
            if($_SESSION['user_role'] ==2){
        ?>
            <li><a href="../user/users.php">Users</a></li>
            <li><a href="../../">Go Web Site</a></li>

        <?php }?>
        <?php   
            if($_SESSION['user_role'] ==3){
        ?>
            <li><a href="../aunty_bill/aunty_bill.php">Aunty Bill</a></li>
            <li><a href="../../">Go Web Site</a></li>

        <?php }?>
        <?php   
            if($_SESSION['user_role'] ==4){
        ?>
            <li><a href="../khori_bill/khori_bill.php">Khori Bill</a></li>
            <li><a href="../../">Go Web Site</a></li>

        <?php }?>
        </ul>
    </nav>



</body>
</html>
