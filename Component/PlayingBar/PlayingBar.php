  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ZingMP3/Component/PlayingBar/PlayingBar.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                <i class="fa-regular fa-heart no-hearted"></i>
                <i class="fa-solid fa-heart hearted"></i>
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
              <input class="transition-all" id="inputVolume" type="range" min="0" max="100" value="30" />
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

    <!-- <script>
   
    </script> -->
      <script>
           // Khai báo để gọi các thẻ 
      const btnHeart = document.querySelector(".no-hearted")
      const btnHearted = document.querySelector(".hearted")
      const btnPlay = document.querySelector(".player_btn.relative i");
      const songPlaying = document.querySelector("#SongPlaying");
      const btnVolume = document.querySelector("#inputVolume")
      const volumeIcon = document.querySelector(".fa-volume-low");
      // Add a variable to track the paused state of the audio element

      // Thả tim
      $(document).ready(function() {
            $(".media_right-btn.player_btn").click(function() {
                $(".fa-regular.fa-heart").toggle();
                $(".fa-solid.fa-heart").toggle();
            });
        });

      // play
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
        console.log(volume);
        btnVolume.style.background = `linear-gradient(90deg, #fff ${volume - 1}%, hsla(0, 0%, 100%, 0.3) ${volume -1}%)`
        songPlaying.volume = volume / 100;
        if (volume == 0) {
          volumeIcon.classList.remove("fa-volume-low")
          volumeIcon.classList.add("fa-volume-xmark")
          volumeIcon.classList.remove("max-volume")
          // volumeIcon.onclick = () => {
          //    volumeIcon.classList.remove("fa-volume-xmark")
          //    volumeIcon.classList.add("fa-volume-low")
          //    btnVolume.value = 10;
          //    btnVolume.style.background = `linear-gradient(90deg, #fff ${volume}%, hsla(0, 0%, 100%, 0.3) ${volume}%)`
          // }
        } 
        else if(volume > 50) {
          volumeIcon.classList.add("max-volume")
          volumeIcon.classList.remove("fa-volume-xmark")
        }
        else if(volume > 0 && volume <= 50) {
          volumeIcon.classList.remove("max-volume")
          volumeIcon.classList.add("fa-volume-low")
          volumeIcon.classList.remove("fa-volume-xmark")
        }
      })





   const progressArea = document.querySelector(".progress-area");
    const progressBar = document.querySelector(".progress-bar");
    let isDragging = false;

    progressArea.addEventListener("mousedown", (event) => {
      isDragging = true;
      updateProgressBar(event);
    });

    document.addEventListener("mousemove", (event) => {
      if (isDragging) {
        requestAnimationFrame(() => {
          updateProgressBar(event);
        });
      }
    });

    document.addEventListener("mouseup", () => {
      isDragging = false;
    });

    progressArea.addEventListener("click", (event) => {
      if (!isDragging) {
        updateProgressBar(event);
      }
    });

    function updateProgressBar(event) {
      const mouseX = event.clientX - progressArea.getBoundingClientRect().left;
      const progressBarWidth = progressArea.clientWidth;
      const percentage = (mouseX / progressBarWidth) * 100;

      if (percentage >= 0 && percentage <= 100) {
        progressBar.style.width = `${percentage}%`;
      }
    }
      </script>
  </body>

  </html>