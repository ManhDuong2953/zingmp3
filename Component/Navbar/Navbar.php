<div id="navbar-main">
    <div class="logo-main">
        <img id="myImage" src="../../Component/assets/Logo.png" alt="">

        <script>
            function replaceImage() {
                var img = document.getElementById("myImage");
                img.src = "../../../Component/assets/Logo.png"; // Thay thế đường dẫn nếu hình ảnh gốc bị lỗi
            }

            document.getElementById("myImage").addEventListener("error", replaceImage);
        </script>

    </div>
    <ul class="list-menu">
        <a href="http://localhost:8081/zingmp3/Pages/Profile/MyHeart/MyHeart.php">
            <li><i class="fa-solid fa-book-open-reader"></i>
                <p>Cá nhân</p>
            </li>
        </a>
        <a href="http://localhost:8081/zingmp3/Pages/Home/HomeLayOut.php">
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