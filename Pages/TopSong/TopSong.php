<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./TopSong.css" />
  <link rel="stylesheet" href="../../GlobalStyle/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="topsong-main">
    <?php require "../../Component/Navbar/Navbar.php" ?>
    <?php require_once "../../Config/configConnectDB.php" ?>

    <div class="topsong-container">
      <?php require "../../Component/Header/HeaderLayout.php" ?>

      <div>
        <div class="header-container"></div>
      </div>

      <div class="content-layout">
        <div class="wrapper-layout">
          <div class="header-titlepage">
            <div class="text-titlepage">
              <h3>Top 10 thịnh hành</h3>
            </div>

            <div class="control">
              <button class="icon-play">
                <i class="fa-solid fa-play"></i>
              </button>
            </div>
          </div>
          <div class="content-selecter">
            <?php
            $sql_top_song = $pdo->prepare("SELECT * FROM song ORDER BY listen_count DESC, like_count DESC LIMIT 10;");
            $sql_top_song->execute();
            $list_top_song = $sql_top_song->fetchAll(PDO::FETCH_ASSOC);
            for ($i = 0; $i < count($list_top_song); $i++) {
            ?>
              <a href="../ListSongPages/ListSongPages.php?album_id=<?php echo $list_top_song[$i]['album_id'] ?>&song_id=<?php echo $list_top_song[$i]['song_id'] ?>" class="playListSong-item">
                <div class="playListSong-numbersong">
                  <div class="playListSong-numbersong-number">
                    <span class="playListSong-numbersong-number-span">
                      <?php echo $i + 1 ?>
                    </span>
                  </div>
                  <div class="playListSong-numbersong-dash">
                    <span class="playListSong-numbersong-dash-span">
                      <i class="fa-solid fa-minus" style="color: #a7a1a9;"></i>
                    </span>
                  </div>
                </div>
                <div class="playListSong-container">
                  <div class="playListSong-container-left">
                    <figure class="playListSong-item-img">
                      <img src="<?php echo $list_top_song[$i]['song_thumbnail'] ?>" alt="">
                      <span class="playListSong-item-img-icon">
                        <i class="fa-solid fa-play" style="color: #fff;"></i>
                      </span>
                    </figure>
                    <div class="playListSong-item-title">
                      <div class="playListSong-item-title-namesong">
                        <h4 class="title-namesong"><?php echo $list_top_song[$i]['title_song'] ?></h4>
                        <span class="playListSong-item-title-nameartist">
                          <p><?php echo $list_top_song[$i]['title_artist'] ?></p>
                          <p><i class="fa-solid fa-headphones-simple"></i><?php echo $list_top_song[$i]['listen_count'] ?> <i class="fa-solid fa-heart"></i><?php echo $list_top_song[$i]['like_count'] ?></p>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="playListSong-container-right">
                    <div class="playListSong-item-runtime"><?php echo $list_top_song[$i]['duration'] ?></div>
                  </div>

                  <div class="playListSong-item-utilities">
                    <span class="playListSong-item-utilities-icon-ellipsis">
                      <i class="fa-solid fa-ellipsis"></i>
                      <span class="icon-ellipsis-text">
                        Khác
                      </span>
                    </span>
                  </div>
                </div>
              </a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>