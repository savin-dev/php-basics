<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First page</title>
</head>
<body>
<form method="GET">
    <input type="text" name="person">
    <button>Submit</button>
</form>
<?php
    // This is a single line comment.
    $name = $_GET['person'];
    echo strlen($name." Niduwara Fonseka.");
?>
</body>
</html>
