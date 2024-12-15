<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staring page CRYPTOVAULT</title>
    <link rel="stylesheet" href="decryptbox.css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form action="textdecrypt.php" method="post">
    <div class="main">
        <div class="logo">
            <h2 >CRYPTOVAULT</h2>
        </div> <br><br><br>
        <div class="box">
            <h3>Insert your encrypted text file here</h3>
        </div><br><br>
        <div class="inputbox">   
            <input type="file"  name="text"  class="form-control" id="msg" autocomplete="off" required>
            <br>
            <input type="password"  name="pass"  class="form-control" id="msg1" autocomplete="off" placeholder="Enter the password here" required>
            <br>
            <button class="button" name="decrypt">DECRYPT</button>
        </div>
    </div>
</body>
</html>