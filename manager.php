<?php
    session_start();
    if(empty($_SESSION['username']))
    header('location:login.php');
else
{
?>
<div class="admin">
    <?php
        include('connect.php');
        $sessionSelect = $_SESSION['username'];
        $sqlSelect  = "select * from login where username = '$sessionSelect'";
        $runSelect = mysqli_query($conn, $sqlSelect);
        $rowSelect = mysqli_fetch_array($runSelect);
        if($runSelect){
            echo "Hello: ".$rowSelect['fullname'];
            echo '<a href="exit.php" class="exist__link"> Thoát </a>';
        } 
    ?>
    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hệ thống ATM</title>
    <link rel="stylesheet" href="./assets/profile.css">
    <link rel="stylesheet" href="./fonts/fontawesome-free-5.13.0/css/all.css">
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

</head>
<body style="background-image: url(./img/bg11.jpg);">
<?php
    $session = $_SESSION['username'];
    $sqlSelectAccount = "select * from login where username = '$session'";
    $runSelectAccount = mysqli_query($conn, $sqlSelectAccount);
    $rowSelectAccount = mysqli_fetch_array($runSelectAccount);

?>
    <div class="container__form">
        <form action="" method="post">
            <h4 class="heading-form">
                Automated banking system
            </h4>
            <section class="grid">
                <section class="function">
                    <button class="btn-function" name="OK">
                    <i class="fas fa-user-secret btn-function__icon"></i>
                    </button>
                    <a href="withdrawal.php" class="btn-function__link">
                        Rút tiền
                    </a>
                    <a href="agio.php?code=<?php echo $rowSelectAccount['username']; ?>" class="btn-function__link">
                        Chuyển tiền
                    </a>
                    <a href="changesPass.php" class="btn-function__link">
                        Đổi mật khẩu
                    </a>
                </section>
                <section class="info">
                    <?php
                    if(isset($_POST['OK'])){
                        $sessionUser = $_SESSION["username"];
                        $sqlInfo = "select * from login where username = '$sessionUser'";
                        $runInfo = mysqli_query($conn, $sqlInfo);
                        $rowInfo = mysqli_fetch_array($runInfo);
                        if($runInfo){
                            echo '<header class="header__info"> ';
                            echo '<img class="header__info-banner" src="./img/'.$rowInfo['background'].'">';
                            echo ' <img class="header__info-avatar" src="./img/'.$rowInfo['avatar'].'">';
                            echo ' <div class="fullname">';
                            echo $rowInfo['fullname'];
                            echo '</div>';
                            echo ' </header>';  
                            echo '<section class="introduce"> ';
                            echo '<h3 class="introduce__heading">';
                            echo 'Giới thiệu';
                            echo '</h3>';
                            echo '<ul class="introduce__list">';
                            echo '<li class="introduce__item">';
                            echo '<i class="fas fa-graduation-cap introduce__item-icon"></i>';
                            echo ' Học tại trường'.' '.$rowInfo['study'];
                            echo '</li>';
                            echo '<li class="introduce__item">';
                            echo '<i class="fas fa-graduation-cap introduce__item-icon"></i>';
                            echo 'Đã học tại'.' '.$rowInfo['learned'];
                            echo ' </li>';
                            echo ' <li class="introduce__item introduce__item-icon">';
                            echo '<i class="fas fa-home introduce__item-icon"></i>';
                            echo 'Sống'.' '.$rowInfo['addresss'];
                            echo '</li>';
                            echo '<li class="introduce__item">';
                            echo '<i class="fas fa-map-marker-alt introduce__item-icon introduce__item-icon--align"></i>';
                            echo 'Đến từ'.' '.$rowInfo['addresss'];
                            echo ' </li>';
                            echo '<li class="introduce__item">';
                            echo '<i class="fas fa-headphones-alt introduce__item-icon"></i>';
                            echo $rowInfo['job'].' '.' tại '.$rowInfo['addressjob'];
                            echo ' </li>';
                            echo '<li class="introduce__item">';
                            echo '<i class="fas fa-piggy-bank introduce__item-icon"></i>';
                            echo 'Số tài khoản'.' ' .$rowInfo['account'];
                            echo '</li>';
                            echo ' <li class="introduce__item">';
                            echo '<i class="fas fa-search-dollar introduce__item-icon"></i>';
                            echo 'Số dư trong tài khoản'.' ' .$rowInfo['money'].' ' .'VND';
                            echo '</li>';
                            echo '</ul>';
                            echo '</section>';
                        }
                    }
                    ?>  
                </section>
            </section>
        </form>
    </div>
     <?php } ?>
</body>
</html>