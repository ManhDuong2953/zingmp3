<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/ZingMP3/Component/Header/HeaderLayout.css">
</head>

<body>
  <div class="header">
    <div class="header-content">
      <div class="header_content-left">
        <button onclick="window.history.back()">
          <i class="fa-solid fa-arrow-left icon-btn-prev"></i>
        </button>
        <button onclick="window.history.forward()">
          <i class="fa-solid fa-arrow-right icon-btn-next"></i>
        </button>
        <form class="search-form-header" action="/ZingMP3/Pages/ResultSearch/ResultSearch.php">
          <button><i class="fa-solid fa-magnifying-glass"></i></button>
          <input type="text" class="header-search" placeholder="Tìm kiếm bài hát, nghệ sĩ, lời bài hát..." />
        </form>
      </div>
      <div class="header-content-right">
        <a href="/ZingMP3/Component/Header/ProcessLogout.php" class="log_out">Đăng xuất <i class="fa-solid fa-right-from-bracket"></i></a>
        <button class="setting-btn">
          <i class="fa-solid fa-cog"></i>
        </button>


        <?php
        // Hiện thông tin người dùng 
        if (isset($_SESSION["id_user"])) {
          $id_user = $_SESSION["id_user"];
          $statement = $pdo->prepare("SELECT avatar_link FROM user WHERE id_user = '$id_user'");
          $statement->execute();
          $result = $statement->fetch(PDO::FETCH_ASSOC);
          echo "<button class='btn-user'><img src=" . $result["avatar_link"] . " alt='ảnh avt' /></button>";
        }
        ?>

      </div>
    </div>
  </div>
</body>
<script>
  const avtArea = document.querySelector('.btn-user');
  const btnLogout = document.querySelector('.log_out');
  avtArea.addEventListener('click', function(){
    btnLogout.classList.toggle("show");
  })
</script>

</html>