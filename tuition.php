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
     <form action="tuition2.php" method= "post">
     <p>Residency<br>
     <select name="residency">
     <option value="1">In district student
     <option value="2">Out of district student
     <option value="3">Out of state/International Student
     ></select></p>
     <p>Level 100 & 200 Credit Hours<br>
     <input type="number" name="Lower" min="0" max="25" value="0"></p>
     <p>Level 300 & 400 Credit Hours<br>
     <input type="number" name="Upper" min="0" max="25" value="0"></p>
     <p>Would you like Information about finacial aid?<br>
     <select name="aid">
     <option value="1">No
     <option value="2">Yes
     </select></p>
     <br>
     <input type="submit" value="Submit"></p>
    </form>
</body>
</html>