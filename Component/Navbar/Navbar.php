<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ZingMP3/Component/Navbar/Navbar.css">

</head>
<body>

    <div id="navbar-main">
        <div class="logo-main">
            <img id="myImage" src="/ZingMP3/Component/assets/Logo.png" alt="">
        </div>
        <ul class="list-menu">
            <a href='<?php echo "/ZingMp3/Pages/Profile/MyHeart/MyHeart.php" ?>'>
                <li><i class="fa-solid fa-book-open-reader"></i>
                    <p>Cá nhân</p>
                </li>
            </a>
            <a href="/ZingMp3/Pages/Home/HomeLayOut.php">
                <li class="active"><i class="fa-solid fa-compact-disc"></i></i>
                    <p>Khám phá</p>
                </li>
            </a>
            <a href="">
                <li><i class="fa-solid fa-music"></i>
                    <p>Nhạc mới</p>
                </li>
            </a>
            <a href="">
                <li><i class="fa-solid fa-ranking-star"></i>
                    <p>Top 100</p>
                </li>
            </a>
        </ul>

        <div class="login-vip--container">
            <div class="login-update--vip">
                <p>Đăng nhập để khám phá playlist dành riêng cho bạn</p>
                <button>Đăng Nhập</button>
                <i class="fa-solid fa-crown"></i>
            </div>
        </div>
    </div>



</body>

</html>