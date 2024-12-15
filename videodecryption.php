<?php
    $cipher = file_get_contents($_POST['b']);
    $video = base64_decode($cipher);
    $file = fopen("video.mp4","w");
    fwrite($file,$video);
    fclose($file);
?>
<html>
    <head>
        <link rel="stylesheet" href="textdecrypt.css">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="main">
        <div class="logo">
            <h2 >CRYPTOVAULT</h2>
        </div> 
        <div class="box">
            <h3>Decrypted Video</h3>
        </div>
        <br><br>
        <?php if(isset($file) ==  true){  echo "<div class='goth1'><table align='center' border=5 bordercolor='green'><tr><td><video width='400' height='240' controls ><source src='video.mp4' type='video/mp4'></video></td></tr></table></div>";} ?>
        <br>
        <a href="video.mp4" download><button class="download1">DOWNLOAD</button></a>
</div>            
    </body>
</html>
