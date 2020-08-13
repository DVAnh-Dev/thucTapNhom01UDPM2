<?php
    session_start();
    include('connect.php');
    if(empty($_SESSION['username']))
    header('location:login.php');
else
{   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rút tiền </title>
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(./img/bg10.jpg);">
    <div class="container"  >
        <form action="" method="post">
            <h4 class="heading-form">
                Automated banking system
            </h4> 
            <section class="form-group">
                <label for=""> Nhập số tiền :</label>
                <input type="number" name="money" value="">
            </section>
            <section class="form-group">
               <button class="btn" name="OK">
                   Rút tiền
               </button>
            </section>
        </form>
       
        <section class="form-group__link">
            <a href="manager.php" class="btn-link">Quay lại</a>
         </section>
         <div class="notification">
         <?php
         if(isset($_POST['OK'])){
            $money = $_POST['money'];
            if(empty($money)){
                echo " Xin vui lòng nhập số tiền cần rút !";
            }
            else{
               $session = $_SESSION['username'];
               $sqlSelect = "select * from login where username = '$session'";
               $runSelect = mysqli_query($conn, $sqlSelect);
               $rowSelect = mysqli_fetch_array($runSelect);
               if($runSelect){
                   $deduction = $rowSelect['money'];
                   if($money < $deduction){
                       $surplus = $deduction - $money;
                       $sqlUpdate = "update login set money = '$surplus' where username = '$session'" ;
                       $runUpdate = mysqli_query($conn, $sqlUpdate);
                       if($runUpdate){
                           echo "Đã rút tiền thành công !";
                       }
                       else{
                           echo "Cút ! Đéo cho  rút tiền ";
                       }
                   }
                   else {
                       echo "Số dư trong tài khoản bạn không thể thực hiện được !";
                   }
                    
               }
            }
         }
         ?>
         </div>
    </div>
        <?php } ?> 
</body>
</html>