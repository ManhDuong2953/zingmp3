  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ZingMP3/Component/PlayingBar/PlayingBar.css">
  </head>

  <body>
    <div class="playing-bar">
      <div class="player_controls-main">
        <div class="player_controls-left">
          <div class="player_controls-media">
            <div class="media_left">
              <img class="media-avatar" src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_jpeg/avatars/5/d/a/9/5da92b54155ac844f9dac366057cbcde.jpg" alt="" />
            </div>
            <div class="media_center">
              <div class="media_music">Người Lạ Thoáng Qua (Lofi Version)</div>
              <div class="media_name">
                <span><a href="/nghe-si/Dinh-Tung-Huy/">Đinh Tùng Huy</a></span>
              </div>
            </div>
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
        <div class="player_controls-center">
          <div class="player_top">
            <div id="randomMusic" class="player_btn playing_random">
              <i class="fa-solid fa-shuffle"></i>
            </div>
            <div id="prevMusic" class="player_btn playing_back">
              <i class="fa-solid fa-backward-step"></i>
            </div>
            <div class="player_playing-input player_btn relative">
              <i class="fa-solid fa-play"></i>
            </div>
            <div id="nextMusic" class="player_btn playing_next">
              <i class="fa-solid fa-forward-step"></i>
            </div>
            <div id="loopMusic" class="player_btn playing_replay">
              <i class="fa-solid fa-repeat"></i>
            </div>
          </div>
          <div class="player_bottom">
            <p class="playing_time-left">1:09</p>
            <div class="playing_time-up2 progress-area">
              <div class="progress-bar" style="width: 25.2853%"></div>
              <div style="width: 0px; height: 0px">
                <audio src="http://api.mp3.zing.vn/api/streaming/audio/ZUBEFEU7/320" preload="auto" style="width: 100%; height: 100%"></audio>
              </div>
            </div>
            <p class="playing_time-right">4:36</p>
          </div>
        </div>
        <div class="player_controls-right">
          <div class="player_volume playing_volume">
            <div class="player_btn"><i class="fa-solid fa-volume-low"></i></div>
            <div class="playing_volume-input">
              <input class="transition-all" id="inputVolume" type="range" min="0" max="100" value="100" />
            </div>
          </div>
          <div class="player_device-column"></div>
          <div class="toggle-right null">
            <div class="zm-btn">
              <i class="fa-solid fa-list"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <audio id="SongPlaying" hidden controls src="../../Component/assets/y2mate.com - Grow Up  Guhancci Remix  Exclusive Team  Nhạc Nền Gậy Nghiện Hot Tik Tok Việt Nam .mp3"></audio>

    <script>
      // Khai báo để gọi các thẻ 
      const btnPlay = document.querySelector(".player_btn.relative i");
      const songPlaying = document.querySelector("#SongPlaying");
      const btnVolume = document.querySelector("#inputVolume")
      const iconVolume = document.querySelector(".playing_volume .player_btn");
      console.log(songPlaying);
      // Add a variable to track the paused state of the audio element

      // Thao tác:

      //play
      let isPaused = true;
      btnPlay.addEventListener("click", function() {
        btnPlay.classList.toggle("pause")
        if (isPaused) {
          songPlaying.play(); // If it's paused, play the audio
        } else {
          songPlaying.pause(); // If it's playing, pause the audio
        }
        isPaused = !isPaused;
      });



      //volume
      btnVolume.addEventListener("input", function(e) {
        let volume = parseFloat(e.target.value)
        btnVolume.style.background = `linear-gradient(90deg, #fff ${volume - 1}%, hsla(0, 0%, 100%, 0.3) ${volume -1}%)`
        songPlaying.volume = volume / 100;
        if (volume == 0) {

        }
      })
    </script>

  </body>

  </html>