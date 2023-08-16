<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="insert, keywords, here">
     <meta name="description" content="Insert description here">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>PHP Example #1</title>
</head>

<body>
    <?php
        $num1= mt_rand(1,12);
        $num2= mt_rand(1,12);
        $total=$num1 * $num2;
        echo "<p>Random times table example: " . $num1 . "*" . $num2 . "=" .$total . "</p>";
    ?>
</body>
</html>