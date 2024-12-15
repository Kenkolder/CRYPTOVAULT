<html>
    <head>
        <title>encrypted text</title>
        <link rel="stylesheet" href="textdecrypt.css">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="main">
        <div class="logo">
            <h2 >CRYPTOVAULT</h2>
        </div> <br><br><br>
        <div class="box">
            <h3>decrypted message</h3>
        </div>
        <br><br>
        <a href="img23.jpg" download><button class="download">DOWNLOAD</button></a>
</div>        
    </body>
</html>
<?php
    $cipher = file_get_contents($_POST['b']);
    $img = base64_decode($cipher);
    $file = fopen("img23.jpg","w");
    fwrite($file,$img);
    fclose($file);
    echo "<div class='goth'><img src='img23.jpg' style='width:400px;height:400px;'></div>";
?>