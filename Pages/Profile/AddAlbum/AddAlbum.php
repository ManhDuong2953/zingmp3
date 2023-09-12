<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- favicon  -->
    <link rel="shortcut icon" href="../../../Component/assets/logo_mobile.png" type="image/x-icon">
    <title>Khám phá - Nhóm Phát Triển Ứng Dụng Web</title>
    <!-- import link css file component  -->
    <link rel="stylesheet" href="../../../Component/Navbar/Navbar.css">
    <link rel="stylesheet" href="../../../GlobalStyle/style.css">
    <link rel="stylesheet" href="../../../Component/Header/HeaderLayout.css">
    <link rel="stylesheet" href="./AddAlbum.css">
    <title>Document</title>
</head>

<body>
    <div id="add-album--main">
        <?php require "../../../Component/Navbar/Navbar.html" ?>
        <div class="add-album--right">
            <?php require "../../../Component/Header/HeaderLayout.html" ?>
            <div class="add-album--container">
                <h1>Tạo Album Mới</h1>
                <form action="process_album.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ten_album">Tên Album:</label>
                        <input type="text" id="ten_album" name="ten_album" required>
                    </div>

                    <div class="form-group">
                        <label for="the_loai">Thể Loại:</label>
                        <input type="text" id="the_loai" name="the_loai" required>
                    </div>

                    <div class="form-group">
                        <label for="anh_album">Ảnh Album:</label>
                        <label for="anh_album">
                            <div class="img-preview">
                                <img src="../../../Component/assets/upload_icon.png" alt="">
                            </div>
                        </label>
                        <input accept="image/*" hidden type="file" id="anh_album" name="anh_album" accept="image/*" required>
                    </div>

                    <div class="form-group">
                        <label for="ten_nghe_si">Tên Nghệ Sĩ:</label>
                        <input type="text" id="ten_nghe_si" name="ten_nghe_si" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Tạo Album">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
        const selectImageInput = document.querySelector(".img-preview");
        const displayImage = document.querySelector(".img-preview > img");

        selectImageInput.addEventListener("click", function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    displayImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                displayImage.src = "../../../Component/assets/upload_icon.png"; // Clear the image if no file is selected
            }
        });
    </script>
</body>

</html>