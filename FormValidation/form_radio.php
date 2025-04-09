<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label>gender:</label>
        <br>
        <label>male</label>
        <input type="radio" name="gender" value="male">
        <br>
        <label>female</label>
        <input type="radio" name="gender" value="female">
        <br><br>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $gender = $_POST['gender'];
            echo "gender = " . $gender;
        }
    ?>
</body>
</html>