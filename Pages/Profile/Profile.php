<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- favicon  -->
    <link rel="shortcut icon" href="../../Component/assets/logo_mobile.png" type="image/x-icon">
    <title>Khám phá - Nhóm Phát Triển Ứng Dụng Web</title>
    <!-- import link css file component  -->
    <link rel="stylesheet" href="../../Component/Navbar/Navbar.css">
    <link rel="stylesheet" href="../../GlobalStyle/style.css">
    <link rel="stylesheet" href="../../Component/Header/HeaderLayout.css">
    <link rel="stylesheet" href="./Profile.css">
    <link rel="stylesheet" href="./MyHeart/MyHeart.css">
    <link rel="stylesheet" href="./MyAlbum/MyAlbum.css">
    <title>Document</title>
</head>

<body>
    <div id="profile-main">
        <?php require "../../Component/Navbar/Navbar.html" ?>
        <div class="profile-right">
            <?php require "../../Component/Header/HeaderLayout.html" ?>
            <div class="container-profile">
                <div class="profile-header">
                    <div class="img-container">
                        <img src="https://avatar-nct.nixcdn.com/playlist/2018/09/07/6/0/e/e/1536301824724_500.jpg" alt="">
                    </div>
                    <div class="profile-name">
                        Dương Văn Mạnh
                    </div>
                </div>

                <ul class="profile-navbar">
                    <a href="">
                        <li class="active">Yêu thích</li>
                    </a>
                    <a href="">
                        <li>Album</li>
                    </a>
                    <a href="">
                        <li>Cá nhân</li>
                    </a>
                </ul>
            </div>
            <div class="profile-content">

                <!-- MyHeart  -->
                <?php require "./MyHeart/MyHeart.php" ?>

                <!-- MyAlbum  -->
                <?php require "./MyAlbum/MyAlbum.php"?>

            </div>
        </div>

    </div>
</body>

</html>