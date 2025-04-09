<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <button name="btn" value="Button was clicked!!">Click me!</button>
    </form>

    <?php
        if(isset($_POST['btn'])){
            $btn = $_POST['btn'];
            echo $btn;
        }
    ?>
</body>
</html>