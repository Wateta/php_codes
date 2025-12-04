<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        
        <table border="0">
            <tr>
                <td>Enter RgNo</td>
                <td><input type="text"name="regno"required></td>
            </tr>
            <tr>
                <td>Enter Quiz marks</td>
                <td><input type="text"name=qmarks></td>
                 </tr>
                 <tr>
                <td>Enter Exam marks</td>
                <td><input type="text"name="emarks"></td>
            </tr>
            <tr>
                <td>Enter class</td>
                <td><input type="text"name="class"></td>
            </tr>
            <td colspan="1"><input type="submit"name="save"></iput></td>
        </table>
    </form>
    <?php
    // Making a table that will include user inputs
$reg=$_POST['regno'];
$quizmarks=$_POST['qmarks'];
$exammarks=$_POST['emarks'];
$classes=$_POST['class'];
$total=$quiz+$exam;
    ?>
<b><p>The marks entered are:</p></b>
<table border="1">
    <tr>
        <th>RegNo</th>
        <th>Quiz</th>
        <th>Exam</th>
        <th>Class</th>
        <th>Total</th>
    </tr>
    <tr>
        <td><?php echo $reg; ?></td>
        <td><?php echo $quizmarks; ?></td>
        <td><?php echo $exammarks ?></td>
        <td><?php echo $classes; ?></td>
        <td><?php echo $total; ?></td>
    </tr>
</table>
</body>
</html>