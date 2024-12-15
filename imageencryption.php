<?php
    $img = file_get_contents($_POST['a']);
    $data = base64_encode($img);
    $file = fopen("img.txt","r");
    fwrite ($file,$data);
    fclose($file);
    echo "<br>";
 ?>
<html>
    <head>
        <title>encrypted text</title>
        <link rel="stylesheet" href="textencrypt.css">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="main">
        <div class="logo">
            <h2 >CRYPTOVAULT</h2>
        </div> <br>
        <div class="box">
            <h3>Here,s Your Encrypted Image!!</h3>
        </div>
        <br><br>
        <?php if(isset($data) == true){echo "<div class='color1'><input type='text' value='$data' readonly></div>";}?>
        <a href="img.txt" download><button class="download">download</button></a>
</div>    

    </body>
</html>