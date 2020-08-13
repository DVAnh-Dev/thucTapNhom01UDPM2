<?php
    session_start();
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
    <title>Đổi mật khẩu</title>
    <link rel="stylesheet" href="./fonts/fontawesome-free-5.13.0/css/all.css">
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(./img/bg10.jpg);">
    <div class="container">
        <form action="" method="post">
            <form action="" method="post">
                <h4 class="heading-form">
                    Automated banking system
                </h4>
                <section class="form-group">
                    <label for=""> Old Password</label>
                    <input type="password" name="old" value="">
                </section>
                <section class="form-group">
                    <label for=""> New password</label>
                    <input type="password" name="new" value="">
                </section>
                <section class="form-group">
                    <label for=""> Confirm Password </label>
                    <input type="password" name="confirm" value="">
                </section>
                <section>
                    <button type="submit" class="btn" name="OK"> 
                        Xác nhận
                    </button>
                </section>
                <div class="notification">
            <?php
            include('connect.php');
            if(isset($_POST['OK']))
            {
                $old = $_POST['old'];
                $new = $_POST['new'];
                $confirm = $_POST['confirm'];
                if(empty($old)||empty($new)||empty($confirm)){
                    echo "Vui lòng nhập đủ thông tin !";
                    die();
                }
                else {
                    $session = $_SESSION['username'];
                    if($new == $confirm)
                    {
                        $sql = "select * from login where username = '$session'";
                        $run = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($run);
                        $passData = $row['password'];
                        if($old == $passData)
                        {
                            $sqlUpdate = "update login set password = '$new' where username = '$session'";
                            $runUpdate = mysqli_query($conn, $sqlUpdate);
                            if($runUpdate) echo "Cập nhật mật khẩu thành công";
                            else echo "Không thay đổi được mật khẩu";
                        }
                        else{
                            echo "Mật khẩu hiện tại không đúng";
                        }
                    }
                    else echo "Mật khẩu mới và nhập lại không trùng nhau ";

                }
            }
            ?>
                </div>
            </form>
        </form>
        <section class="form-group__link">
            <a href="manager.php" class="btn-link">Quay lại</a>
         </section>
    </div>
    
     <?php } ?>
</body>
</html>