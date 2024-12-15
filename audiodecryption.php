<?php
    $cipher = file_get_contents($_POST['b']);
    $audio = base64_decode($cipher);
    $file = fopen("audio.mp3","w");
    fwrite($file,$audio);
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
        </div> <br>
        <div class="box">
            <h3>Decrypted Audio</h3>
        </div><br>
        <?php if(isset($file) ==  true){ echo "<audio controls><source src='audio.mp3'></audio>";} ?>
        <div><a href="audio.mp3" download><button class="download1">DOWNLOAD</button></a></div>
    </div>       
    </body>
</html>
