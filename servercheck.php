<?php
$ver = '5';
$servername = explode('.', gethostname())[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $servername .'-'. $_SERVER['HTTP_HOST'] ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <style>
    body {
        background-image: url(https://partialsolution.ca/images/ps-logo.svg);
        background-size: cover;
        background-repeat: no-repeat;
        font-family: 'Share Tech Mono', monospace;
    }
    body, a {
        color: orange;
        background-color: white;

    }
    p {
        text-align: center;
        width: 47%;
        margin: 0;
    }
    #sname {
        margin-top: 24.7%;
        font-size: xx-large;
    }
    </style>
</head>
<body>
    <p id="sname"><?php echo $servername; ?></p>
    <p><a href="https://github.com/ShawnPConroy/ServerNameCheck/blob/main/servercheck.php">v<?php echo $ver; ?></a></p>
</body>
</html>
