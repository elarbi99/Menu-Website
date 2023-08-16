<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="insert, keywords, here">
     <meta name="description" content="Insert description here">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Tuition Calculator</title>
</head>

<body>
<h1>Tuition Calculator</h1>
<?php
$residency = substr(filter_input(INPUT_POST, 'residency', FILTER_SANITIZE_NUMBER_INT),0,1);
$lower = substr(filter_input(INPUT_POST, 'Lower', FILTER_SANITIZE_NUMBER_INT),0,2);
$upper = substr(filter_input(INPUT_POST, 'Upper', FILTER_SANITIZE_NUMBER_INT),0,2);
$aid= substr(filter_input(INPUT_POST, 'aid', FILTER_SANITIZE_NUMBER_INT),0,1);
if ($lower == "" and $upper == "")
{
     exit("Invalid input! You must enter in at least one credit hour.");
}
    
else if ($lower == "0" and $upper == "0")
{
     exit("Invalid input! You must enter in at least one credit hour.");
}
    
if($residency==1)
{
     $residency="in-district";
     $tuition=($lower*101.5)+($upper*200)+50+60 + ( ($lower+$upper) *23);
}
else if($residency==2)
{
     $residency="out-of-district";
     $tuition=($lower*177)+($upper*265)+50+60 + ( ($lower+$upper) *23);
}
else if($residency==3)
{
     $residency="out-of-state/international students";
     $tuition=($lower*257)+($upper*350)+50+60 + ( ($lower+$upper) *23);
}
echo "<p>Total $residency tuition cost $lower 100-200 level credit hours and $upper 300-400 level credit hours is $" .number_format($tuition,2) ."</p>";
if($aid==2)
{
     echo "<p>Helpful web pages.</p>";
     echo '<a href="https://www.hfcc.edu/financial-aid">https://www.hfcc.edu/financial-aid</a><br>';
     echo '<a href="https://www.hfcc.edu/payment/scholarships">https://www.hfcc.edu/payment/scholarships</a><br>';
     echo '<a href="https://www.hfcc.edu/payment">https://www.hfcc.edu/payment</a>';
     
}
?>
</body>
</html>