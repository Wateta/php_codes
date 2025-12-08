<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            background-color: thistle;
            display:flex;
            justify-content:center;
            align-items: center;
            height: 100px;
        }
        form{
           background: #f5f7fa; 
           padding:20px;
           border-radius:10px;
           box-shadow:0 0 10px rgba(0,0,0,0.1);
           width:300px;
           margin-top: 500px;
        }
        input,select,button{
            width:100%;
            margin:10px 0;
            font-size:16px;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background: #0056b3;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h2>PHP calculator</h2>
        <label>Enter First Number:</label>
        <input type="number"name="num1" step="any"required>
        <input type="number" name="num2"step="any" required>
        <label>Select operator</label>
        <select name="operator">
            <option value="add">Addition(+)</option>
            <option value="subtract">Subtract(-)</option>
            <option value="multiply">Multiply(x)</option>
            <option value="divide">Division(÷)</option>
        </select>
        <button type="submit">calculate</button>
    </form>
</body>
</html>
<?php
function calculate($num1,$num2,$operator){
    if($operator=="add"){
        return $num1+$num2;
    }else if($operator=="subtract"){
            return $num1-$num2;
        }
        else if($operator=="multiply"){
            return $num1*$num2;
        }
        else if($operator=="divide"){
            if($num2!=0){
                return $num1/$num2;
            }
        }
        else {
            return "Invalid operator";
        }
    }
    //when user submits the form//
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $operator=$_POST['operator'];

        $result=calculate($num1,$num2,$operator);
      echo "<div style='text-align:center; margin-top:20px; font-size:18px;'>
            <strong>Result: </strong> $result
          </div>";
        
    }
       ?>
       </body>
       </html> 