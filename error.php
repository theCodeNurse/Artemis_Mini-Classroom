<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <link rel="stylesheet" type="text/css" href="style/error.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<div class="bg">
<div class="container">
    <div class="number">
        <p>404</p>

    </div>
    <div class="looks">
        <p>Looks like you got lost</p>
        <p>let's find you</p>
    </div>
    <div class="err-button">
        <button class="error" onclick="home()">Back Home</button>
    </div>
    <script>
        function home() {
            window.location.href = "dashboard.php";
        }
    </script>

</div>
</div>
</body>
</html>