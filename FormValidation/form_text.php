<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label>name</label>
        <input type="text" name="name">
        <br><br>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            echo "name = " . $name;
        }
    ?>
</body>
</html>