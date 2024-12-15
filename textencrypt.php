<?php
    if(isset($_POST['encrypt'])){

        $simple_string = $_POST['text'];
        $ciphering = "AES-256-CBC";
        $option = 0; //it holds the bitwise disjunction fo the flags
        $encryption_iv = '1234567890123456'; 
        $encryption_key= $_POST['pass'];
        $encryption = openssl_encrypt($simple_string,$ciphering,$encryption_key,$option,$encryption_iv);
        $file = fopen("text.txt","r");
        fwrite($file,$encryption);
        fclose($file); 
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staring page CRYPTOVAULT</title>
    <link rel="stylesheet" href="textencrypt.css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
    <body>
    <div class="main">
        <div class="logo">
            <h2 >CRYPTOVAULT</h2>
        </div> <br><br><br>
        <div class="box">
            <h3>Here,s Your Encrypted Text!!</h3>
        </div>
        <?php if(isset($encryption) ==  true){echo "<div class='color1'><input  type='text'></div>";}?>
        <br><br>
        <a href="text.txt" download><button class="download">DOWNLOAD</button></a>
</div>   
    </body>
</html>



    



