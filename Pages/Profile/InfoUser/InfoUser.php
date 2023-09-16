<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- cdn fontawesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- favicon  -->
  <link rel="shortcut icon" href="../../../Component/assets/logo_mobile.png" type="image/x-icon" />
  <title>Khám phá - Nhóm Phát Triển Ứng Dụng Web</title>
  <!-- import link css file component  -->
  <link rel="stylesheet" href="../../../GlobalStyle/style.css" />
  <link rel="stylesheet" href="../Profile.css" />
  <link rel="stylesheet" href="./InfoUser.css" />

  <title>Document</title>
</head>

<body>
  <div id="profile-main">
    <?php require "../../../Component/Navbar/Navbar.php" ?>
    <div class="profile-right">
      <?php require "../../../Component/Header/HeaderLayout.php" ?>
      <div class="container-profile">
        <div class="profile-header">
          <div class="img-container">
            <img src="https://avatar-nct.nixcdn.com/playlist/2018/09/07/6/0/e/e/1536301824724_500.jpg" alt="" />
          </div>
          <div class="profile-name">Dương Văn Mạnh</div>
        </div>

        <ul class="profile-navbar">
          <a href="../MyHeart/MyHeart.php">
            <li>Yêu thích</li>
          </a>
          <a href="../MyAlbum/MyAlbum.php">
            <li>Album</li>
          </a>
          <a href="../InfoUser/InfoUser.php">
            <li class="active">Cá nhân</li>
          </a>
        </ul>
      </div>
      <div class="profile-content">
        <h2 class="update-infor-title">Chỉnh sửa thông tin cá nhân</h2>
        <form>
          <div class="infor-user-content">
            <div class="infor-text">
              <div class="infor-text-detail">
                <label for="name_account">Tên tài khoản</label><input name="name_account" type="text" class="form-control name_account" placeholder="Tên tài khoản..." />
              </div>
              <div class="infor-text-detail">
                <label for="name_user">Tên người dùng</label><input name="name_user" type="text" class="form-control name_user" placeholder="Tên người dùng..." />
              </div>
              <div class="infor-text-detail">
                <label for="password">Mật khẩu</label><input name="password" type="password" class="form-control password" placeholder="Mật khẩu..." />
              </div>
            </div>
            <div class="infor-avt">
              <div class="form-group">
                <label for="anh_album">Ảnh đại diện:</label>
                <label for="anh_album">
                  <div class="img-preview">
                    <img src="../../../Component/assets/upload_icon.png" alt="">
                  </div>
                </label>
                <input accept="image/*" hidden="" type="file" id="anh_album" name="anh_album" required="">
              </div>
            </div>
          </div>
          <div class="btn-submit"><button class="btn-login" type="submit">Cập Nhật</button></div>

        </form>
      </div>
    </div>
  </div>
  <script>
    const selectImageInput = document.querySelector("#anh_album");
    const displayImage = document.querySelector(".img-preview > img");

    selectImageInput.addEventListener("change", function() {
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