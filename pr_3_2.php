<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="">Basic Salary: </label>
        <input type="text" name="basic">
        <input type="submit" name="submit" value="Calculate Salary">
    </form><br><br>

    <?php
        if(isset($_POST['submit'])){
            $basic = $_POST['basic'];
            $da = $basic*0.5;
            $hra = $basic*0.1;
            $medical = $basic*0.04;
            $gross_salary = $basic+$da+$hra+$medical;
            $insurance = $gross_salary*0.07;
            $pf = $gross_salary*0.05;
            $deduction = $insurance+$pf;
            $net_salary = $gross_salary-$deduction;

            echo "Basic salary = ".$basic."<br>"."<br>";
            echo "DA = ".$da."<br>"."<br>";
            echo "HRA = ".$hra."<br>"."<br>";
            echo "Medical = ".$medical."<br>"."<br>";
            echo "Insurance = ".$insurance."<br>"."<br>";
            echo "PF = ".$pf."<br>"."<br>";
            echo "Net salary = ".$net_salary."<br>"."<br>";
            echo "Gross salary = ".$gross_salary."<br>"."<br>";
            echo "Deduction = ".$deduction."<br>"."<br>";
        }
    ?>
</body>
</html>