<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- favicon  -->
  <link rel="shortcut icon" href="../../Component/assets/logo_mobile.png" type="image/x-icon">
  <title>Khám phá - Nhóm Phát Triển Ứng Dụng Web</title>
  <!-- import css file component  -->
  <link rel="stylesheet" href="../../GlobalStyle/style.css">
  <link rel="stylesheet" href="./UpdateListSong.css" />

</head>

<body>
  <div id="display-main">
    <?php require '../../Component/Navbar/Navbar.php' ?>
    <?php require_once "../../Config/configConnectDB.php" ?>
    <?php
    $id_user = $_SESSION["id_user"];
    $album_id = $_REQUEST["album_id"];
    $sql_get_album = $pdo->prepare("SELECT * FROM album WHERE album_id='$album_id' AND  artist_id = '$id_user'");
    $sql_get_album->execute();
    $album_info = $sql_get_album->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="right-container">

      <?php require '../../Component/Header/HeaderLayout.php' ?>

      <?php if (count($album_info)) { ?>
        <div class="content-container">
          <div class="content-container-left">
            <div class="avt-disk-play">
              <img src="<?php echo $album_info['thumbnail_album'] ?>" alt="Ảnh Album" />
            </div>
            <div class="media-content">
              <div class="content-top">
                <h3 class="title"><?php echo $album_info['title_album'] ?></h3>
                <div class="like">
                  <p><i class="fa-regular fa-heart"></i> 659 người yêu thích</p>
                  <p><i class="fa-solid fa-headphones-simple"></i> 659 lượt nghe</p>
                </div>

                <div class="artists">
                  <span>Tác giả: <?php echo $album_info['name_artist'] ?> </span>
                </div>
              </div>
              <form class="actions" method="post" action="./ProcessDeleteAlbum.php">
                <button class="btn-play-all" tabindex="0">
                  <input type="text" value="<?php echo $album_id ?>" hidden name="album_id">
                  <i class="fa-solid fa-trash"></i> <span> Xóa Album</span>
                </button>

              </form>
            </div>
          </div>


          <div class="content-container-right">

            <div class="zing-recommend--item zing-recommend--title">
              <div class="zing-recommend--item-left">BÀI HÁT</div>
              <div class="zing-recommend--item-center">ALBUM</div>
              <div class="zing-recommend--item-right gap-3">THỜI GIAN</div>
            </div>


            <div class="zing-recommend--list">
              <?php
              $sql_list_song = $pdo->prepare("SELECT song.song_id, album.album_id, album.title_album, song.artist_id, song.song_thumbnail, song.title_song, song.duration, song.title_artist 
                                              FROM song INNER JOIN album ON song.album_id = album.album_id 
                                              WHERE album.album_id = $album_id AND song.artist_id= $id_user");
              $sql_list_song->execute();
              $list_song = $sql_list_song->fetchAll(PDO::FETCH_ASSOC);
              // echo "<pre>";
              // var_dump($list_song);
              ?>

              <?php for ($i = 0; $i < count($list_song); $i++) { ?>
                <div class="list-song">
                  <a href="../ListSongPages/ListSongPages.php?album_id=<?php echo $list_song[$i]['album_id'] ?>&song_id=<?php echo $list_song[$i]['song_id'] ?>" class="play_song">
                    <div class="zing-recommend--item">
                      <div class="zing-recommend--item-left">
                        <div class="img-avt-infor">
                          <img src="<?php echo $list_song[$i]["song_thumbnail"] ?>" alt="Ảnh nền ảnh" />
                        </div>
                        <div class="zing-recommend--item-text">
                          <div class="name-song"><?php echo $list_song[$i]["title_song"] ?></div>
                          <div class="name-single"><?php echo $list_song[$i]["title_artist"] ?></div>
                        </div>
                      </div>
                      <div class="zing-recommend--item-center">
                        <?php echo $list_song[$i]["title_album"] ?>
                        <span></span>
                      </div>
                      <div class="zing-recommend--item-right">
                        <span><?php echo $list_song[$i]["duration"] ?></span>
                      </div>
                    </div>
                  </a>
                  <a href="./ProcessDeleteSong.php?album_id=<?php echo $list_song[$i]['album_id'] ?>&song_id=<?php echo $list_song[$i]['song_id'] ?>" class="delete_song">
                    <i class="fa-solid fa-trash list" title="Xóa bài hát"></i>
                  </a>
                </div>
              <?php } ?>



              <a href="../Profile/AddSong/AddSong.php?album_id=<?php echo $album_id ?>" title="Thêm bài hát" >
                <div class="zing-recommend--item add_song">
                  <i class="fa-solid fa-plus"></i>
                </div>
              </a>
            </div>


          </div>
        </div>
      <?php } ?>
    </div>
  </div>

</body>

</html>