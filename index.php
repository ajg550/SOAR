<html>
  <head>
    <title> Welcome!</title>
  </head>

<body>
<center>
<form action="test.php" method="post">

  What is Angie's favorite color? <br>
  <input type="text" name="answer"> <br>
  <input type="submit">

</form>
</center>

<center>
<?php 
echo '
<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Roll a Ball</title>
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="shortcut icon" href="TemplateData/favicon.ico" />
    <script src="TemplateData/UnityProgress.js"></script>
  </head>
  <body class="template">
    <p class="header"><span>Unity WebGL Player | </span>Roll a Ball</p>
    <div class="template-wrap clear">
      <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="300px" width="480px"></canvas>
      <br>
      <div class="logo"></div>
      <div class="fullscreen"><img src="TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
      <div class="title">Roll a Ball</div>
    </div>
    <p class="footer">&laquo; created with <a href="http://unity3d.com/" title="Go to unity3d.com">Unity</a> &raquo;</p>
    <script type=\'text/javascript\'>
  var Module = {
    TOTAL_MEMORY: 268435456,
    errorhandler: null,
    compatibilitycheck: null,
    dataUrl: "Release/Builds.data",
    codeUrl: "Release/Builds.js",
    memUrl: "Release/Builds.mem",
    
  };
</script>
<script src="Release/UnityLoader.js"></script>

  </body>
</html>
'
; ?>
</center>


</body>
</html>