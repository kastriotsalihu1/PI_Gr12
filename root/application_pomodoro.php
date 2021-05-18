

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="styles/app_navigation.css" />
    <link rel="stylesheet" href="styles/music_player.css" />
    <link rel="stylesheet" href="styles/app_pomodoro.css" />
    <link rel="stylesheet" href="styles/cardInformation.css" />
    <!-- <link rel="stylesheet" href="../root/Bootstrap/css/bootstrap.min.css"> -->

    <!-- Simple css to remove the watermark from the hosting website -->
    <link rel="stylesheet" href="styles/removewatermark.css" />
    <!-- Simple css to remove the watermark from the hosting website -->

    <link href="dependencies/fontawesome/css/all.css" rel="stylesheet" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>Pomodoro | Music</title>
  </head>

  <body>
    <div id="mask"></div>

    <div id="header"></div>

    <div id="container">
      <!-- side navigation menu -->
      <div id="sidebar"></div>

      <main>
        <div class="card music">
          <div class="information">
            <div class="icon">
              <i class="fa fa-info" aria-hidden="true"></i>
            </div>
            <div class="contents">
              <h2>
                This is your music player. Swipe left or right to change the
                song. Turn autoplay for the playlist to be ongoing. You can
                change the volume and skip parts of a song too.
              </h2>
            </div>
          </div>
          <div class="main">
            <p id="logo"><i class="fa fa-music"></i>Music</p>

            <!--- left part --->
            <div class="left">
              <!--- song img --->
              <img id="track_image" />
              <div class="volume">
                <p id="volume_show">90</p>
                <i
                  class="fa fa-volume-up"
                  aria-hidden="true"
                  onclick="mute_sound()"
                  id="volume_icon"
                ></i>
                <input
                  type="range"
                  min="0"
                  max="100"
                  value="90"
                  onchange="volume_change()"
                  id="volume"
                />
              </div>
            </div>
            <div>
              <button class="btn-danger">Add</button>
              <input type="text">

            </div>
            <!--- right part --->
            <div class="right">
              <div class="show_song_no">
                <p id="present">1</p>
                <p>/</p>
                <p id="total">14</p>
              </div>

              <!--- song title & artist name --->
              <p id="title">title.mp3</p>
              <p id="artist">Artist name</p>

              <!--- middle part --->
              <div class="middle">
                <button onclick="previous_song()" id="pre">
                  <i class="fa fa-step-backward" aria-hidden="true"></i>
                </button>
                <button onclick="justplay()" id="play">
                  <i class="fa fa-play" aria-hidden="true"></i>
                </button>
                <button onclick="next_song()" id="next">
                  <i class="fa fa-step-forward" aria-hidden="true"></i>
                </button>
              </div>

              <!--- song duration part --->
              <div class="duration">
                <input
                  type="range"
                  min="0"
                  max="100"
                  value="0"
                  id="duration_slider"
                  onchange="change_duration()"
                />
              </div>
              <button id="auto" onclick="autoplay_switch()">
                Auto play
                <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="card" id="pomodoro">
          <div class="information">
            <div class="icon">
              <i class="fa fa-info" aria-hidden="true"></i>
            </div>
            <div class="contents">
              <h2>
                This is a Pomodoro. Think of it as a timer, specific one that
                lasts 25 minutes. After each cycle of 25 minutes you have a 5
                minute break.
              </h2>
            </div>
          </div>
          <h2 class="cardtitle">POMODORO</h2>
          <!-- <p id="work" class="label">Work:</p>
          <p id="break" class="label">Break:</p>
          <p id="cycles" class="label">Cycles:</p> -->

          <div id="counter" class="timer">
            <p id="break" class="hidden">
              <span id="break_minutes">25</span>:<span id="break_seconds"
                >00</span
              >
            </p>
            <p id="timer">
              <span id="work_minutes">25</span>:<span id="work_seconds"
                >00</span
              >
            </p>
            <p id="cycle">0</p>
          </div>
          <div id="btn_container">
            <button id="start">Start</button>
            <button id="stop">Pause</button>
            <button id="reset">Reset</button>
          </div>
        </div>
        <div id="trees" class="card">
          <div class="information">
            <div class="icon">
              <i class="fa fa-info" aria-hidden="true"></i>
            </div>
            <div class="contents">
              <h2>
                This is your garden. You plant a tree for each 4 cycles of
                pomodoro studying!
              </h2>
            </div>
          </div>
          <h2 class="cardtitle">Garden</h2>
          <div id="canvascontainer">
            <canvas id="canvas"> </canvas>
          </div>
        </div>
      </main>
    </div>
    <form action="music.php" method="POST" enctype="multipart/form-data">
    <input type="text" placeholder="titulli" name="title">
    <input type="text" placeholder="artist" name="artist">
    <input type="file"  name="audio">
    <input type="file"  name="pic">
    <input type="submit" value="submit" name="addsong">
    </form>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/navigation.js"></script>
    <script src="scripts/load.js"></script>
    <script src="scripts/pomodoro_main.js"></script>
    <script src="scripts/trees.js"></script>
    <script src="scripts/music_player.js"></script>
    <script src="scripts/cardInformation.js"></script>
    <script src="scripts/main.js"></script>
    <script src="../root/Bootstrap/js/bootstrap.min.js"></script>




    
    
  </body>
</html>