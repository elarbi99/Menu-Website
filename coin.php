<!DOCTYPE html>
<html>
<head>
    <title>Coin Flipper</title>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
    
</head>

<body>

<?php
$heads=0;
$tails=0;
for ($x=1;$x<=20;$x++)
{
    $flip=rand(0,1);
    if($flip==0)
    {
        echo "<p>Flip #$x:Heads <img src=\"img/heads.png\"alt=\"image of coin head\"</p>";
        $heads++;
    }
    else
    {
        echo "<p>Flip #$x:Tails <img src=\"img/tails.png\"alt=\"image of coin tail\"</p>";
        $tails++;
    }
}
echo "<p>Number of coins flipped heads $heads (" . ($heads / 20) * 100 . "%)</p>";
echo "<p>Number of coins flipped tails $tails (" . ($tails / 20) * 100 . "%)</p>";
?>
</body>
</table>