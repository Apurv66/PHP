<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label>Enter mobile no : </label>
        <input type="text" name="mobile"><br><br>
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $mobile = $_POST['mobile'];
            if(empty($mobile)){
                echo "Please enter your mobile number!";
            }
            elseif(!preg_match("/[0-9]{10}/",$mobile)){
                echo "Please enter valid mobile number!";
            }
            else{
                echo "mobile number : " . $mobile;
            }
        }
    ?>
</body>
</html>