<?php
    include('connect.php');    
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/style.css" >
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(./img/bg10.jpg);">
    <div class="container">
        <form action="" method="post">
            <h4 class="heading-form">
                Automated banking system
            </h4>
            <section class="form-group">
                <label for=""> User Name</label>
                <input type="text" name="user-name" value="">
            </section>
            <section class="form-group">
                <label for=""> Password</label>
                <input type="password" name="password" value="">
            </section>
            <section>
                <button type="submit" class="btn" name="OK"> Login</button>
            </section>
        </form>

    </div>
    <?php
    if(isset($_POST['OK'])){
        $userName = $_POST['user-name'];
        $passWord = $_POST['password'];
        if(empty($userName)||empty($passWord)){
            echo "<script> confirm('Chưa nhập đủ thông tin !');</script>";
            die();
        }
        else{
            $sqlSelect = "select * from login where username = '$userName'";
            $runSelect = mysqli_query($conn, $sqlSelect);
            $numSelect  = mysqli_num_rows($runSelect);
            $rowSelect = mysqli_fetch_array($runSelect);
            if($numSelect == 1){
                $_SESSION['username'] = $userName;
                if($rowSelect['password'] == $passWord){
                    header('location:manager.php');
                }
                else{
                    echo "<script> confirm('Sai password!');</script>";
                }
            }
            else{
                echo "<script> confirm(' Sai tên đăng nhập !');</script>";
            }
        }
        
    }
    ?>
   
</body>
</html>
