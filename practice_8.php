<!DOCTYPE html>
<html>
    <head>
        <title>Simple Calculator</title>
    </head>
    <body>
        <h2>Simple Calculator</h2>
        <form action="" method="post">
            <label for="n1">First Number:</label>
            <input type="text" name="n1" required><br><br>
            <label for="n2">Second Number:</label>
            <input type="text" name="n2" required><br><br>
            <label for="operation">Select an operation:</label>
            <select name="operation">
                <option value="+">Addition</option>
                <option value="-">Subtraction</option>
                <option value="*">Multiplication</option>
                <option value="/">Division</option>
            </select><br><br>
            <input type="submit" value="calculate"><br>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $n1=$_POST["n1"];
            $n2=$_POST["n2"];
            $operation=$_POST["operation"];

            switch($operation){
                    case"+":
                    $r=$n1+$n2;
                    echo "Result: $n1 + $n2 = $r";
                    break;
                    case"-":
                    $r=$n1-$n2;
                    echo "Result: $n1 - $n2 = $r";
                    break;
                    case"*":
                    $r=$n1*$n2;
                    echo "Result: $n1 * $n2 = $r";
                    break;
                    case"/":
                    if($n2!=0){
                    $r=$n1/$n2;
                    echo "Result: $n1 / $n2 = $r";
                    }
                    else{
                    echo"Cannot divide by zero";
                    }
                    break;
                    default:
                    echo"Invalid Operation";    
                    }
           }
     ?>
    </body>
</html>