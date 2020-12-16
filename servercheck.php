<!-- Partial Solution server confirmation check v3 -->
<?php $servername = explode('.', gethostname())[0]; ?>
<html>
<head>
    <title><?php echo $servername .'-'. $_SERVER['HTTP_HOST'] ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <style>
    body {
        background-image: url(https://partialsolution.ca/images/ps-logo.svg);
        background-size: cover;
        background-repeat: no-repeat;
        color: orange;
        background-color: white;
        font-family: 'Share Tech Mono', monospace;
    }
    p {
        margin-top: 24.7%;
        width: 47%;
        text-align: center;
        font-size: xx-large;
    }
    </style>
</head>
<body><p><?php echo $servername ?></p></body>
</html>
