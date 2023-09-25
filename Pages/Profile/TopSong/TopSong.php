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
              <h3>Top 100 thịnh hành</h3>
            </div>

            <div class="control">
              <button class="icon-play">
                <i class="fa-solid fa-play"></i>
              </button>
            </div>
          </div>
          <div class="content-selecter">
            <div class="playListSong-item" data-index="0">
              <div class="playListSong-numbersong">
                <div class="playListSong-numbersong-number">
                  <span class="playListSong-numbersong-number-span" style="-webkit-text-stroke-color: #4a90e2;">
                    1
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
                    <img src="https://i1.sndcdn.com/artworks-000217888294-kfmj6g-t500x500.jpg" alt="">
                    <span class="playListSong-item-img-icon">
                      <i class="fa-solid fa-play" style="color: #fff;"></i>
                    </span>
                  </figure>
                  <div class="playListSong-item-title">
                    <div class="playListSong-item-title-namesong">
                      <h4 class="title-namesong">À Lôi</h4>
                      <span class="playListSong-item-title-nameartist">
                        <a href="">Double2T x Masew</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="playListSong-container-right">
                  <div class="playListSong-item-runtime">3:13</div>
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
            </div>
            <div class="playListSong-item" data-index="1">
              <div class="playListSong-numbersong">
                <div class="playListSong-numbersong-number">
                  <span class="playListSong-numbersong-number-span" style="-webkit-text-stroke-color:#50e3c2">
                    2
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
                    <img src="https://i1.sndcdn.com/artworks-000217888294-kfmj6g-t500x500.jpg" alt="">
                    <span class="playListSong-item-img-icon">
                      <i class="fa-solid fa-play" style="color: #fff;"></i>
                    </span>
                  </figure>
                  <div class="playListSong-item-title">
                    <div class="playListSong-item-title-namesong">
                      <h4 class="title-namesong">À Lôi</h4>
                      <span class="playListSong-item-title-nameartist">
                        <a href="">Double2T x Masew</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="playListSong-container-right">
                  <div class="playListSong-item-runtime">3:13</div>
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
            </div>
            <div class="playListSong-item" data-index="2">
              <div class="playListSong-numbersong">
                <div class="playListSong-numbersong-number">
                  <span class="playListSong-numbersong-number-span" style="-webkit-text-stroke-color: #e35050;">
                    3
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
                    <img src="https://i1.sndcdn.com/artworks-000217888294-kfmj6g-t500x500.jpg" alt="">
                    <span class="playListSong-item-img-icon">
                      <i class="fa-solid fa-play" style="color: #fff;"></i>
                    </span>
                  </figure>
                  <div class="playListSong-item-title">
                    <div class="playListSong-item-title-namesong">
                      <h4 class="title-namesong">À Lôi</h4>
                      <span class="playListSong-item-title-nameartist">
                        <a href="">Double2T x Masew</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="playListSong-container-right">
                  <div class="playListSong-item-runtime">3:13</div>
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
            </div>
            <div class="playListSong-item" data-index="3">
              <div class="playListSong-numbersong">
                <div class="playListSong-numbersong-number">
                  <span class="playListSong-numbersong-number-span">
                    4
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
                    <img src="https://i1.sndcdn.com/artworks-000217888294-kfmj6g-t500x500.jpg" alt="">
                    <span class="playListSong-item-img-icon">
                      <i class="fa-solid fa-play" style="color: #fff;"></i>
                    </span>
                  </figure>
                  <div class="playListSong-item-title">
                    <div class="playListSong-item-title-namesong">
                      <h4 class="title-namesong">À Lôi</h4>
                      <span class="playListSong-item-title-nameartist">
                        <a href="">Double2T x Masew</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="playListSong-container-right">
                  <div class="playListSong-item-runtime">3:13</div>
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
            </div>
            <div class="playListSong-item" data-index="4">
              <div class="playListSong-numbersong">
                <div class="playListSong-numbersong-number">
                  <span class="playListSong-numbersong-number-span">
                    5
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
                    <img src="https://i1.sndcdn.com/artworks-000217888294-kfmj6g-t500x500.jpg" alt="">
                    <span class="playListSong-item-img-icon">
                      <i class="fa-solid fa-play" style="color: #fff;"></i>
                    </span>
                  </figure>
                  <div class="playListSong-item-title">
                    <div class="playListSong-item-title-namesong">
                      <h4 class="title-namesong">À Lôi</h4>
                      <span class="playListSong-item-title-nameartist">
                        <a href="">Double2T x Masew</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="playListSong-container-right">
                  <div class="playListSong-item-runtime">3:13</div>
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
            </div>
            <div class="playListSong-item" data-index="5">
              <div class="playListSong-numbersong">
                <div class="playListSong-numbersong-number">
                  <span class="playListSong-numbersong-number-span">
                    6
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
                    <img src="https://i1.sndcdn.com/artworks-000217888294-kfmj6g-t500x500.jpg" alt="">
                    <span class="playListSong-item-img-icon">
                      <i class="fa-solid fa-play" style="color: #fff;"></i>
                    </span>
                  </figure>
                  <div class="playListSong-item-title">
                    <div class="playListSong-item-title-namesong">
                      <h4 class="title-namesong">À Lôi</h4>
                      <span class="playListSong-item-title-nameartist">
                        <a href="">Double2T x Masew</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="playListSong-container-right">
                  <div class="playListSong-item-runtime">3:13</div>
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
            </div>
            <div class="playListSong-item" data-index="6">
              <div class="playListSong-numbersong">
                <div class="playListSong-numbersong-number">
                  <span class="playListSong-numbersong-number-span">
                    7
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
                    <img src="https://i1.sndcdn.com/artworks-000217888294-kfmj6g-t500x500.jpg" alt="">
                    <span class="playListSong-item-img-icon">
                      <i class="fa-solid fa-play" style="color: #fff;"></i>
                    </span>
                  </figure>
                  <div class="playListSong-item-title">
                    <div class="playListSong-item-title-namesong">
                      <h4 class="title-namesong">À Lôi</h4>
                      <span class="playListSong-item-title-nameartist">
                        <a href="">Double2T x Masew</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="playListSong-container-right">
                  <div class="playListSong-item-runtime">3:13</div>
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
            </div>
            <div class="playListSong-item" data-index="7">
              <div class="playListSong-numbersong">
                <div class="playListSong-numbersong-number">
                  <span class="playListSong-numbersong-number-span">
                    8
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
                    <img src="https://i1.sndcdn.com/artworks-000217888294-kfmj6g-t500x500.jpg" alt="">
                    <span class="playListSong-item-img-icon">
                      <i class="fa-solid fa-play" style="color: #fff;"></i>
                    </span>
                  </figure>
                  <div class="playListSong-item-title">
                    <div class="playListSong-item-title-namesong">
                      <h4 class="title-namesong">À Lôi</h4>
                      <span class="playListSong-item-title-nameartist">
                        <a href="">Double2T x Masew</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="playListSong-container-right">
                  <div class="playListSong-item-runtime">3:13</div>
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
            </div>
            <div class="playListSong-item" data-index="8">
              <div class="playListSong-numbersong">
                <div class="playListSong-numbersong-number">
                  <span class="playListSong-numbersong-number-span">
                    9
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
                    <img src="https://i1.sndcdn.com/artworks-000217888294-kfmj6g-t500x500.jpg" alt="">
                    <span class="playListSong-item-img-icon">
                      <i class="fa-solid fa-play" style="color: #fff;"></i>
                    </span>
                  </figure>
                  <div class="playListSong-item-title">
                    <div class="playListSong-item-title-namesong">
                      <h4 class="title-namesong">À Lôi</h4>
                      <span class="playListSong-item-title-nameartist">
                        <a href="">Double2T x Masew</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="playListSong-container-right">
                  <div class="playListSong-item-runtime">3:13</div>
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
            </div>
            <div class="playListSong-item" data-index="9">
              <div class="playListSong-numbersong">
                <div class="playListSong-numbersong-number">
                  <span class="playListSong-numbersong-number-span">
                    10
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
                    <img src="https://i1.sndcdn.com/artworks-000217888294-kfmj6g-t500x500.jpg" alt="">
                    <span class="playListSong-item-img-icon">
                      <i class="fa-solid fa-play" style="color: #fff;"></i>
                    </span>
                  </figure>
                  <div class="playListSong-item-title">
                    <div class="playListSong-item-title-namesong">
                      <h4 class="title-namesong">À Lôi</h4>
                      <span class="playListSong-item-title-nameartist">
                        <a href="">Double2T x Masew</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="playListSong-container-right">
                  <div class="playListSong-item-runtime">3:13</div>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>