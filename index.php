<html>
   <head>
      <title>Online Radio Player</title>
<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🌐</text></svg>">
      <meta charset="UTF-8"> 
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400;500;600;700&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="./style.css">


   </head>
   <body>
         <header>
            <i class="fas fa-headphones-alt"></i>        
            <h1>Online Radio Player</h1>
         </header>
      <div class="container">
         <div class="radioContainer">
         <h2>Live</h2>
         <div class="rowContainer">
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://stream-relay-geo.ntslive.net/stream?client=NTSWebApp&t=1630056578821');">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh9F9bsbG_6g1ejxOwjTw2-I8UVWH8K3WyC4CkDXrw5qug1LENtX-BB5s7sT5LsZU9aSA&usqp=CAU">
               <div>NTS 1</div>
            </a>
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://stream-relay-geo.ntslive.net/stream2?client=NTSWebApp&t=1630056617033');">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8aB3Ustu11TyFDzOLqZ8tJPrztNAl7RsvHcJkZqwnJwtESzQQSEVuJ4rqGpfDSX1wLmo&usqp=CAU">
               <div>NTS 2</div>
            </a>
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://streamer.radio.co/s5e1f4b6b9/listen');">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYKnYle5rZZZ-9S3wZWa8Al0Y0wLINQvp1Kg&usqp=CAU">
               <div>Melodic Distraction</div>
            </a>
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://worldwidefm.out.airtime.pro/worldwidefm_b');">
               <img src="https://worldwidefm.net/_nuxt/img/worldwide-logo-white.9a58155.svg">
               <div>Worldwide</div>
            </a>
         </div>
         <h2>Ambient</h2>
         <div class="rowContainer">
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://stream-mixtape-geo.ntslive.net/mixtape?client=NTSWebApp&t=1630054996784');">
               <img src="https://media3.ntslive.co.uk/resize/200x200/01f7cbe6-235f-4e33-8f2f-70152c91edf1_1542931200.jpeg">
               <div>NTS - Slow Focus</div>
            </a>
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://stream-mixtape-geo.ntslive.net/mixtape23?client=NTSWebApp&t=1630355753446');">
               <img src="https://media3.ntslive.co.uk/resize/200x200/807d8db6-049d-4eeb-8515-57c02b251e73_1622592000.png">
               <div>NTS - Field Recordings</div>
            </a>
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://uk5.internet-radio.com/proxy/ambiesphere?mp=/stream;');">
               <img src="https://static.thenounproject.com/png/3376566-200.png">
               <div>Ambiesphere</div>
            </a>
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://ice1.somafm.com/dronezone-128-mp3');">
               <img src="https://api.somafm.com/img/dronezone120.jpg">
               <div>Drone Zone</div>
            </a>
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://uk2.internet-radio.com/proxy/ambientradio?mp=/;');">
               <img src="http://puresound.site/amb155.jpg">
               <div>Ambient Radio</div>
            </a>
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('http://live.radioart.com/fAmbient_piano.mp3');">
               <img src="https://bestradio.fm/uploads/posts/2016-02/1456424980_relaxing-ambient-piano-radiotunes-min.png">
               <div>Relaxing Ambient Piano Radio</div>
            </a>
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://pianosolo.streamguys1.com/live');">
               <img src="https://mytuner.global.ssl.fastly.net/media/tvos_radios/Uc4DkVcKNn.png">
               <div>Solo Piano Radio</div>
            </a>
         </div>
         <h2>Upbeat</h2>
         <div class="rowContainer">
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://stream-mixtape-geo.ntslive.net/mixtape2?client=NTSWebApp&amp;t=1629980246499');">
               <img src="https://media3.ntslive.co.uk/resize/200x200/b667c612-1ef6-4bfd-ae87-0cec0a19629d_1626307200.jpeg">
               <div>NTS - Low Key</div>
            </a>
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://stream-mixtape-geo.ntslive.net/mixtape5?client=NTSWebApp&t=1633516704357');">
               <img src="https://media.ntslive.co.uk/resize/400x400/c3bad52d-418b-4bf6-aff5-eea3b9ff1186_1542931200.jpeg">
               <div>NTS - 4 To The Floor</div>
            </a>
         </div>
         <h2>Lo Fi</h2>
         <div class="rowContainer">
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('http://hyades.shoutca.st:8043/autodj');">
               <img src="https://cdn-profiles.tunein.com/s288329/images/logod.jpg?t=636294">
               <div>Chillhop & LoFi HipHop Radio</div>
            </a>
            <a class="radio" href="javascript:void(0)" onclick="PlayVideo('https://usa9.fastcast4u.com/proxy/jamz?mp=/1');">
               <img src="https://cdn-profiles.tunein.com/s303481/images/logod.jpg?t=151663">
               <div>Lofi 24/7</div>
            </a>
         </div>
         </div>
         <div class="player">
            <div class="player-container">            
               <div id="play" class="play_pause_button fas fa-pause" data-toggle="tooltip" title="Play/Pause" onclick="aud_play_pause()"></div>
               <div id="current" class="current hitem">Currently playing...</div>
               <video id="video" controls="" autoplay="" name="media" class="videoPlayer" onclick="this.paused ? this.load() : this.pause();" preload="none">
                  <source id="source" src="" type="audio/mpeg">
               </video>
            </div>
         </div>
      </div>
   </body>
      <script type="text/javascript">
         $('.radio').click(function(){
            var currentRadio = $(this).text();
            $('.current').html(currentRadio);
         });
         // Change source onclick
          function PlayVideo(srcVideo) {
              var video = document.getElementById('video');
              var source = document.createElement('source');
              $('#source').attr('src', srcVideo);
              video.load();
              video.play();
          };
          // Add active class to .radio
             $('.radio').click(function () {
                $('.radio').removeClass('active');
                $(this).addClass('active');
             });

             // play pause button function
              function aud_play_pause() {
                var video = document.getElementById("video");
                if (video.paused) {
                  $('.play_pause_button').removeClass('fa fa-play');
                  $('.play_pause_button').addClass('fa fa-pause');
                  video.load();
                  video.play();
                } else {
                  $('.play_pause_button').removeClass('fa fa-pause');
                  $('.play_pause_button').addClass('fa fa-play');
                  video.pause();
               }
             }
               $( '.play_pause_button' ).addClass( "fa-pause" );
               $( '.play_pause_button' ).removeClass( "fa-play" );
      </script>
</html>