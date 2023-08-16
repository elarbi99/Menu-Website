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

     <h1>Grade Calculator</h1>
     <form action="grade2.php" method= "post">
     <table>
        <tr>
            <td>Homework #1</td>
            <td><input type="number" name="hw1" min="0" max="77" value="0"></td>
        </tr>
        <tr>
            <td>Homework #2</td>
            <td><input type="number" name="hw2" min="0" max="77" value="0"></td>
        </tr>
        <tr>
            <td>Homework #3</td>
            <td><input type="number" name="hw3" min="0" max="85" value="0"></td>
        </tr>
        <tr>
            <td>Course Syallabus Quiz</td>
            <td><input type="number" name="q1" min="0" max="20" value="0"></td>
        </tr>
        <tr>
            <td>Client/Server Quiz</td>
            <td><input type="number" name="q2" min="0" max="20" value="0"></td>
        </tr>
        <tr>
            <td>HTML Quiz</td>
            <td><input type="number" name="q3" min="0" max="20" value="0"></td>
        </tr>
        <tr>
            <td>CSS Quiz</td>
            <td><input type="number" name="q4" min="0" max="20" value="0"></td>
        </tr>
        <tr>
            <td>Internet/Web Quiz</td>
            <td><input type="number" name="q5" min="0" max="20" value="0"></td>
        </tr>
        <tr>
            <td>Exam #1</td>
            <td><input type="number" name="exam1" min="0" max="115" value="0"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit" class="centercell"></td>
        </tr>
     </table>
    </form>
</body>
</html>