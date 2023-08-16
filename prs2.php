<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="insert, keywords, here">
     <meta name="description" content="Insert description here">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Paper Rock Scissors Game</title>
</head>

<body>
<h1>Paper Rock Scissors Game</h1>
<?php
$choice = substr(filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_NUMBER_INT),0,1);
if($choice==0)
{
    echo "<p><img src=\"img/paper1.png\" alt=\"Paper\">&nbsp";
}
elseif($choice==1)
{
    echo "<p><img src=\"img/rock1.png\" alt=\"Rock\">&nbsp";
}
else if($choice==2)
{
    echo "<p><img src=\"img/scissors1.png\" alt=\"Scissors\">&nbsp";
}
$computer=rand(0,2);
if($computer==0)
{
    echo "<p><img src=\"img/paper2.png\" alt=\"Paper\">&nbsp";
}
else if($computer==1)
{
    echo "<p><img src=\"img/rock2.png\" alt=\"Rock\">&nbsp";
}
else if($computer==2)
{
    echo "<p><img src=\"img/scissors2.png\" alt=\"Scisssors\">&nbsp";
}
if($choice==$computer){
    echo "<p>It's a draw.</p>";
}
else if($choice==0 and $computer==1){
    echo "<p>You win.</p>";
}
else if($choice==0 and $computer==2){
    echo "<p>You lose.</p>";
}
else if($choice==1 and $computer==0){
    echo "<p>You lose.</p>";
}
else if($choice==1 and $computer==2){
    echo "<p>You win.</p>";
}
else if($choice==2 and $computer==0){
    echo "<p>You win.</p>";
}
else if($choice==2 and $computer==1){
    echo "<p>You lose.</p>";
}
?>
</body>
</html>