<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <select name="country">
            <option>india</option>
            <option>australia</option>
            <option>uk</option>
            <option>usa</option>
        </select>
        <br><br>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $con = $_POST['country'];
            echo "country = " . $con;
        }
    ?>
</body>
</html>