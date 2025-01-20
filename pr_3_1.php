<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculator</h1>
    <form action="#" method="post">
        <label for="">Enter first number: </label>
        <input type="text" name="num1"><br><br>
        <label for="">Enter second number: </label>
        <input type="text" name="num2"><br><br>
        <label for="">+</label>
        <input type="radio" name="operator" value="+"><br><br>
        <label for="">-</label>
        <input type="radio" name="operator" value="-"><br><br>
        <label for="">*</label>
        <input type="radio" name="operator" value="*"><br><br>
        <label for="">/</label>
        <input type="radio" name="operator" value="/"><br><br>
        
        <input type="submit" name="submit">
    </form><br><br>

    <?php
        if(isset($_POST['num1'])=='submit'){
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $operator = $_POST['operator'];
            switch($operator){
                case '+':
                    echo $n1." + ".$n2." = ".$n1+$n2;
                    break;
                case '-':
                    echo $n1." - ".$n2." = ".$n1-$n2;
                    break;
                case '*':
                    echo $n1." * ".$n2." = ".$n1*$n2;
                    break;
                case '/':
                    echo $n1." / ".$n2." = ".$n1/$n2;
                    break;
            }
        }
    ?>
</body>
</html>