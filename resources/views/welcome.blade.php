<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
          </head>
    <body class="antialiased">
    <video-js id="my_video_1" class="vjs-default-skin" controls preload="auto" width="940" height="568">
    <source src="https://bitmovin-a.akamaihd.net/content/sintel/hls/playlist.m3u8" type="application/x-mpegURL">
  </video-js>
  <script src="https://unpkg.com/video.js/dist/video.js"></script>
  <script src="https://unpkg.com/@videojs/http-streaming/dist/videojs-http-streaming.js"></script>
  
  <script>
    var player = videojs('my_video_1');
  </script>
    </body>
</html>
