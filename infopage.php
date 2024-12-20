<?php
session_start();
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staring page CRYPTOVAULT</title>
    <link rel="stylesheet" href="infopage.css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>

    <div class="main">
        <div class="logo">
            <h2 >CRYPTOVAULT</h2>
        </div> <br><br>
        <div class="text">
            <h2>In cryptography, encryption is the process of encoding information. This process converts the original representation<br><br>
            of the information,known as plaintext, into an alternative form known as ciphertext. Ideally, only authorized parties<br><br>
            can decipher a ciphertext back to plaintext and access the original information. Encryption does not itself prevent <br><br>
            interference but denies the intelligible content to a would-be interceptor.For technical reasons, an encryption scheme<br><br>
            usually uses a pseudo-random encryption key generated by an algorithm. It is possible to decrypt the message without <br><br>
            possessing the key but,for a well-designed encryption scheme, considerable computational resources and skills are required.<br><br>
            An authorized recipient can easily decrypt the message with the key provided by the originator to recipients but not to <br><br>
            unauthorized users.Users should always encrypt any messages they send, ideally using a form of public key encryption. It's also a <br><br>
            good idea to encrypt critical or sensitive files —anything from sets of family photos to company data like personnel records or accounting <br><br>
            history. Look for a security solution that includes strong cryptography algorithms along with an easy-to-use interface.<br><br>
            This helps ensure the regular use of encryption functions and prevents data loss even if a mobile device, hard drive or<br><br>
            storage medium falls into the wrong hands.</h2><br><br>
        </div>
        <div class="login">
            <h2>Get Started.  <a href="login.php">Login</a></h2>
        </div>
    </div>
</body>
</html>