
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Username</label><br>
        <input type = "text" name ="username"><br>
        <label>Password</label><br>
        <input type ="password" name = "password" required><br>
        <input type="submit", value = "Login", name="login">
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        echo "hello $username";
    }
?>