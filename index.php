<?php

session_start();

?>

<html>
<head>

    <title>Chicken</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<header>
    <div class="container">
        <div class="col-md-11"></div>
        <div class="col-md-1">$<?php echo $_SESSION['money']; ?></div>
    </div>
</header>

<div class="container">
    <?php echo $_SESSION['chickens']; ?> chickens
</div>

</body>
</html>