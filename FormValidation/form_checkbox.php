<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label>favorite food:</label><br>
        <label>pizza</label>
        <input type="checkbox" name="food[]" value="pizza"><br>
        <label>burger</label>
        <input type="checkbox" name="food[]" value="burger"><br>
        <label>noodles</label>
        <input type="checkbox" name="food[]" value="noodles"><br>
        <label>fries</label>
        <input type="checkbox" name="food[]" value="fries">
        <br><br>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $food = $_POST['food'];

            print_r($food); 
        }
    ?>
</body>
</html>