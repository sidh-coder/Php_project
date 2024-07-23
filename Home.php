<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>
<body>
    <p>Are you new or current user?</p>
    <a href="http://localhost/Website/new.php">
    <input type="button" value="New user" name="new">
    </a>
    <a href="http://localhost/Website/current.php">
        <input type="button" value="Current user" name="current">
    </a>

</body>

</html>

<?php
if (isset($_POST["login"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    echo "hello $username";
}
?>