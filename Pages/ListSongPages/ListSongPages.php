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
  <link rel="stylesheet" href="./ListSongPages.css" />

</head>

<body>
  <div id="display-main">
    <?php require '../../Component/Navbar/Navbar.php' ?>
    <?php require_once "../../Config/configConnectDB.php" ?>
    <div class="right-container">
      <?php require '../../Component/Header/HeaderLayout.php' ?>
      <div class="content-container">
        <div class="content-container-left">
          <div class="avt-disk-play">
            <img src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_jpeg/cover/4/5/4/9/45493e859cde749c75fb4377c14d0db3.jpg" alt="" />
          </div>
          <div class="media-content">
            <div class="content-top">
              <h3 class="title">Nhạc Lofi Chill Gây Nghiện</h3>
              <div class="release">Cập nhật: 09/09/2023</div>
              <div class="artists">
                <span><a class="is-ghost" href="/nghe-si/Phong-Max/">Phong Max</a>, </span><span><a class="is-ghost" href="/nghe-si/Thanh-Dat/">Thành Đạt</a>, </span><span><a class="is-ghost" href="/nghe-si/Khai-Dang/">Khải Đăng</a>, </span><span><a class="is-ghost" href="/nghe-si/Phat-Huy-T4/">Phát Huy T4</a></span>
              </div>
              <div class="like">659 người yêu thích</div>
            </div>
            <div class="actions">
              <button class="btn-play-all" tabindex="0">
                <i class="fa-solid fa-play"></i><span>Phát Album</span>
              </button>
              <div class="media_right">
                <div class="media_right-btn player_btn">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <div class="media_right-btn player_btn">
                  <i class="fa-solid fa-ellipsis"></i>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="content-container-right">
          <div class="description">
            <span>Lời tựa</span> Thả mình vào những giai điệu Lofi Chill nghe
            là nghiện
          </div>
          <div class="zing-recommend--item zing-recommend--title">
            <div class="zing-recommend--item-left">BÀI HÁT</div>
            <div class="zing-recommend--item-center">ALBUM</div>
            <div class="zing-recommend--item-right gap-3">THỜI GIAN</div>
          </div>


          <div class="zing-recommend--list">
            <div class="zing-recommend--item">
              <div class="zing-recommend--item-left">
                <div class="img-avt-infor">
                  <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/cover/7/9/4/5/7945def0b61a268a8c5deff6bdb98346.jpg" alt="" />
                </div>
                <div class="zing-recommend--item-text">
                  <div class="name-song">Đoạn tuyệt nàng đi(Lofi Version)</div>
                  <div class="name-single">Phat-Huy-T4</div>
                </div>
              </div>
              <div class="zing-recommend--item-center">
                Đoạn Tuyệt Nàng Đi (New Version) (Single)
                <span></span>
              </div>
              <div class="zing-recommend--item-right">
                <span>4:05</span>
              </div>
            </div>
            <div class="zing-recommend--item">
              <div class="zing-recommend--item-left">
                <div class="img-avt-infor">
                  <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/cover/7/9/4/5/7945def0b61a268a8c5deff6bdb98346.jpg" alt="" />
                </div>
                <div class="zing-recommend--item-text">
                  <div class="name-song">Đoạn tuyệt nàng đi(Lofi Version)</div>
                  <div class="name-single">Phat-Huy-T4</div>
                </div>
              </div>
              <div class="zing-recommend--item-center">
                Đoạn Tuyệt Nàng Đi (New Version) (Single)
                <span></span>
              </div>
              <div class="zing-recommend--item-right">
                <span>4:05</span>
              </div>
            </div>
            <div class="zing-recommend--item">
              <div class="zing-recommend--item-left">
                <div class="img-avt-infor">
                  <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/cover/7/9/4/5/7945def0b61a268a8c5deff6bdb98346.jpg" alt="" />
                </div>
                <div class="zing-recommend--item-text">
                  <div class="name-song">Đoạn tuyệt nàng đi(Lofi Version)</div>
                  <div class="name-single">Phat-Huy-T4</div>
                </div>
              </div>
              <div class="zing-recommend--item-center">
                Đoạn Tuyệt Nàng Đi (New Version) (Single)
                <span></span>
              </div>
              <div class="zing-recommend--item-right">
                <span>4:05</span>
              </div>
            </div>
            <div class="zing-recommend--item">
              <div class="zing-recommend--item-left">
                <div class="img-avt-infor">
                  <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/cover/7/9/4/5/7945def0b61a268a8c5deff6bdb98346.jpg" alt="" />
                </div>
                <div class="zing-recommend--item-text">
                  <div class="name-song">Đoạn tuyệt nàng đi(Lofi Version)</div>
                  <div class="name-single">Phat-Huy-T4</div>
                </div>
              </div>
              <div class="zing-recommend--item-center">
                Đoạn Tuyệt Nàng Đi (New Version) (Single)
                <span></span>
              </div>
              <div class="zing-recommend--item-right">
                <span>4:05</span>
              </div>
            </div>
            <div class="zing-recommend--item">
              <div class="zing-recommend--item-left">
                <div class="img-avt-infor">
                  <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/cover/7/9/4/5/7945def0b61a268a8c5deff6bdb98346.jpg" alt="" />
                </div>
                <div class="zing-recommend--item-text">
                  <div class="name-song">Đoạn tuyệt nàng đi(Lofi Version)</div>
                  <div class="name-single">Phat-Huy-T4</div>
                </div>
              </div>
              <div class="zing-recommend--item-center">
                Đoạn Tuyệt Nàng Đi (New Version) (Single)
                <span></span>
              </div>
              <div class="zing-recommend--item-right">
                <span>4:05</span>
              </div>
            </div>
            <div class="zing-recommend--item">
              <div class="zing-recommend--item-left">
                <div class="img-avt-infor">
                  <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/cover/7/9/4/5/7945def0b61a268a8c5deff6bdb98346.jpg" alt="" />
                </div>
                <div class="zing-recommend--item-text">
                  <div class="name-song">Đoạn tuyệt nàng đi(Lofi Version)</div>
                  <div class="name-single">Phat-Huy-T4</div>
                </div>
              </div>
              <div class="zing-recommend--item-center">
                Đoạn Tuyệt Nàng Đi (New Version) (Single)
                <span></span>
              </div>
              <div class="zing-recommend--item-right">
                <span>4:05</span>
              </div>
            </div>
            <div class="zing-recommend--item">
              <div class="zing-recommend--item-left">
                <div class="img-avt-infor">
                  <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/cover/7/9/4/5/7945def0b61a268a8c5deff6bdb98346.jpg" alt="" />
                </div>
                <div class="zing-recommend--item-text">
                  <div class="name-song">Đoạn tuyệt nàng đi(Lofi Version)</div>
                  <div class="name-single">Phat-Huy-T4</div>
                </div>
              </div>
              <div class="zing-recommend--item-center">
                Đoạn Tuyệt Nàng Đi (New Version) (Single)
                <span></span>
              </div>
              <div class="zing-recommend--item-right">
                <span>4:05</span>
              </div>
            </div>
            <div class="zing-recommend--item">
              <div class="zing-recommend--item-left">
                <div class="img-avt-infor">
                  <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/cover/7/9/4/5/7945def0b61a268a8c5deff6bdb98346.jpg" alt="" />
                </div>
                <div class="zing-recommend--item-text">
                  <div class="name-song">Đoạn tuyệt nàng đi(Lofi Version)</div>
                  <div class="name-single">Phat-Huy-T4</div>
                </div>
              </div>
              <div class="zing-recommend--item-center">
                Đoạn Tuyệt Nàng Đi (New Version) (Single)
                <span></span>
              </div>
              <div class="zing-recommend--item-right">
                <span>4:05</span>
              </div>
            </div>
            <div class="zing-recommend--item">
              <div class="zing-recommend--item-left">
                <div class="img-avt-infor">
                  <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/cover/7/9/4/5/7945def0b61a268a8c5deff6bdb98346.jpg" alt="" />
                </div>
                <div class="zing-recommend--item-text">
                  <div class="name-song">Đoạn tuyệt nàng đi(Lofi Version)</div>
                  <div class="name-single">Phat-Huy-T4</div>
                </div>
              </div>
              <div class="zing-recommend--item-center">
                Đoạn Tuyệt Nàng Đi (New Version) (Single)
                <span></span>
              </div>
              <div class="zing-recommend--item-right">
                <span>4:05</span>
              </div>
            </div>
            <div class="zing-recommend--item">
              <div class="zing-recommend--item-left">
                <div class="img-avt-infor">
                  <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/cover/7/9/4/5/7945def0b61a268a8c5deff6bdb98346.jpg" alt="" />
                </div>
                <div class="zing-recommend--item-text">
                  <div class="name-song">Đoạn tuyệt nàng đi(Lofi Version)</div>
                  <div class="name-single">Phat-Huy-T4</div>
                </div>
              </div>
              <div class="zing-recommend--item-center">
                Đoạn Tuyệt Nàng Đi (New Version) (Single)
                <span></span>
              </div>
              <div class="zing-recommend--item-right">
                <span>4:05</span>
              </div>
            </div>
            <div class="zing-recommend--item">
              <div class="zing-recommend--item-left">
                <div class="img-avt-infor">
                  <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/cover/7/9/4/5/7945def0b61a268a8c5deff6bdb98346.jpg" alt="" />
                </div>
                <div class="zing-recommend--item-text">
                  <div class="name-song">Đoạn tuyệt nàng đi(Lofi Version)</div>
                  <div class="name-single">Phat-Huy-T4</div>
                </div>
              </div>
              <div class="zing-recommend--item-center">
                Đoạn Tuyệt Nàng Đi (New Version) (Single)
                <span></span>
              </div>
              <div class="zing-recommend--item-right">
                <span>4:05</span>
              </div>
            </div>
          </div>


        </div>
      </div>
      <?php require "../../Component/AlbumHot/AlbumHot.php" ?>
    </div>
    <?php require '../../Component/PlayingBar/PlayingBar.php' ?>
  </div>

</body>

</html>