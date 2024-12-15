<?php
    if(isset($_POST['decrypt'])){
        //$text = $_POST['text'];
        $cipher = file_get_contents($_POST['text']);
        $ciphering = "AES-256-CBC";
        $option=0;
        $decryption_key = $_POST['pass'];
        $decryption_iv = "1234567890123456";
         $decryption = openssl_decrypt($cipher,$ciphering,$decryption_key,$option,$decryption_iv);
        $file = fopen("text.txt","w");
        fwrite($file,$decryption);
        fclose($file);
      }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staring page CRYPTOVAULT</title>
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
        <?php if(isset($decryption) ==  true){ echo "<div class='color1'><input  type='text' readonly></div>";} ?> 
        <div><a href="text1.txt" download><button class="download1">DOWNLOAD</button></a></div>
    </div>   
    </body>
</html>
