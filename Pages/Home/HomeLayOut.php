<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN SLICK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!-- cdn fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- favicon  -->
    <link rel="shortcut icon" href="../../Component/assets/logo_mobile.png" type="image/x-icon">
    <title>Khám phá - Nhóm Phát Triển Ứng Dụng Web</title>
    
    <!-- import css file component  -->
    <link rel="stylesheet" href="../../GlobalStyle/style.css">
    <link rel="stylesheet" href="../../Component/Navbar/Navbar.css">
    <link rel="stylesheet" href="./HomeLayout.css">
    <link rel="stylesheet" href="../../Component/Header/HeaderLayout.css">
    <link rel="stylesheet" href="../../Component/PlayingBar/PlayingBar.css">
    <link rel="stylesheet" href="../../Component/Slider/Slider.css">
    <link rel="stylesheet" href="../../Component/SongTrending/SongTrending.css">
    <link rel="stylesheet" href="../../Component/AuthorTrending/AuthorTrending.css">
    <link rel="stylesheet" href="../../Component/AlbumHot/AlbumHot.css">
    <link rel="stylesheet" href="../../Component/CounterParty/CounterParty.css">
    
</head>

<body>
    <div id="home-main">
        <!-- NavBar  -->
        <?php require '../../Component/Navbar/Navbar.php' ?>
        <div class="home-right">

            <!-- Header  -->
            <?php require "../../Component/Header/HeaderLayout.php" ?>

            <!-- Slider  -->
            <?php require "../../Component/Slider/Slider.php" ?>

            <!-- Thịnh hành -->
            <?php require "../../Component/SongTrending/SongTrending.php" ?>

            <!-- Nghệ sỹ thịnh hành  -->
            <?php require "../../Component/AuthorTrending/AuthorTrending.php" ?>

            <!-- Album hot  -->
            <?php require "../../Component/AlbumHot/AlbumHot.php" ?>


            <!-- Đối tác  -->
            <?php require "../../Component/CounterParty/CounterParty.php" ?>
        </div>
    </div>
    <!-- PlayingBar -->
    <?php require "../../Component/PlayingBar/PlayingBar.php" ?>
</body>

</html>