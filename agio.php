<?php
    include('connect.php');
    session_start();
    $layma = $_GET['code'];
    if(empty($_SESSION['username']))
    header('location:login.php');
    else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển tiền</title>
    <link rel="stylesheet" href="./fonts/fontawesome-free-5.13.0/css/all.css">
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(./img/bg10.jpg);">
    <div class="container">
        <form action="" method="post">
            <h4 class="heading-form">
                Automated banking system
            </h4>
            <section class="form-group">
                <label for=""> Tên tài khoản </label>
                <input type="text" name="account" value="">
            </section>
            <section class="form-group">
                <label for=""> Số tiền </label>
                <input type="text" name="money" value="">
            </section>
            <section class="form-group">
                <button class="btn" name="OK">
                    Chuyển tiền 
                </button>
                <?php
                if(isset($_POST['OK'])){
                    $otherAccount = $_POST['account'];
                    $money = $_POST['money'];
                    if(empty($otherAccount)||empty($money))
                    {
                        echo "Chưa đủ thông tin để chuyển tiền !";
                    }
                    else {
                        $sqlSelectAccount = "select * from login where username = '$layma'";
                        $runSelectAccount = mysqli_query($conn, $sqlSelectAccount);
                        $rowSelectAccount = mysqli_fetch_array($runSelectAccount);
                        $moneyData = $rowSelectAccount['money'];
                        if($money <= $moneyData){
                                $sqlOtherAccount = "select * from login where username = '$otherAccount'";
                                $runOtherAccount = mysqli_query($conn, $sqlOtherAccount);
                                $rowOtherAccount = mysqli_fetch_array($runOtherAccount);
                                if($runOtherAccount){
                                    $userNameData = $rowOtherAccount['username'];
                                    if($otherAccount == $userNameData)
                                    {
                                        $paySelectAccount = $moneyData - $money;
                                        $sqlUpdateSelectAccount = "update login set money = '$paySelectAccount' where username = '$layma'";
                                        $runUpdateSelectAccount = mysqli_query($conn, $sqlUpdateSelectAccount);
                                        $payOtherAccount = $rowOtherAccount['money'] + $money;
                                        $sqlUpdateOtherAccount = "update login set money = '$payOtherAccount' where username = '$otherAccount'";
                                        $runUpdateOtherAccount = mysqli_query($conn, $sqlUpdateOtherAccount);
                                            if($runOtherAccount){
                                               header('location:manager.php');
                                            }
                                            else{
                                                echo "Giao dịch thất bại";
                                            }
                                            
                                        
                                    }
                                    else{
                                        echo "Không có tài khoản như vậy";
                                    }
                                }
                        }
                        else{
                            echo "Số dư trong tài khoản không đủ thực hiện giao dịch này !";
                        }
                    }
                }
                
                ?>
        </form>
        <section class="form-group__link">
            <a href="manager.php" class="btn-link">Quay lại</a>
         </section>
    </div>
 <?php } ?>   
</body>
</html>