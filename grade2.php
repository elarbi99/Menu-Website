<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="insert, keywords, here">
     <meta name="description" content="Insert description here">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Grade Calculator</title>
</head>

<body>
<h1>Grade Calculator</h1>
<?php
$hw1 = substr(filter_input(INPUT_POST, 'hw1', FILTER_SANITIZE_NUMBER_INT),0,3);
$hw2 = substr(filter_input(INPUT_POST, 'hw2', FILTER_SANITIZE_NUMBER_INT),0,3);
$hw3 = substr(filter_input(INPUT_POST, 'hw3', FILTER_SANITIZE_NUMBER_INT),0,3);
$q1 = substr(filter_input(INPUT_POST, 'q1', FILTER_SANITIZE_NUMBER_INT),0,3);
$q2 = substr(filter_input(INPUT_POST, 'q2', FILTER_SANITIZE_NUMBER_INT),0,3);
$q3 = substr(filter_input(INPUT_POST, 'q3', FILTER_SANITIZE_NUMBER_INT),0,3);
$q4 = substr(filter_input(INPUT_POST, 'q4', FILTER_SANITIZE_NUMBER_INT),0,3);
$q5 = substr(filter_input(INPUT_POST, 'q5', FILTER_SANITIZE_NUMBER_INT),0,3);
$exam1 = substr(filter_input(INPUT_POST, 'exam1', FILTER_SANITIZE_NUMBER_INT),0,3);
$grade = (($hw1+$hw2+$hw3+$q1+$q2+$q3+$q4+$q5+$exam1)/425)*100;
echo "<p> Current course grade is ".round($grade,0);
if($grade>=90)
{
    echo "%, which is an A.</p>";
}
   
elseif($grade>=80 and $grade<90)
{
    echo "%, which is an B.</p>";
}
    
elseif($grade>=70 and $grade<80)
{
    echo "%, which is an C.</p>";
}
    
elseif($grade>=60 and $grade<70)
{
    echo "%, which is an D.</p>";
}
    
else{
    echo "%, which is an E.</p>";
}
    

?>
</body>
</html>