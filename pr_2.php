<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="">Name: </label>
        <input type="text" name="name"><br><br>
        <label for="">Age: </label>
        <input type="number" name="age"><br><br>
        <label for="">Phone no: </label>
        <input type="number" name="phone_no"><br><br>
        <label for="">Email id: </label>
        <input type="text" name="email"><br><br>
        <label for="">Male: </label>
        <input type="radio" name="gender" value="male">
        <label for="">Female: </label>
        <input type="radio" name="gender" value="female"><br><br>
        <label for="">Address: </label>
        <textarea name="address" id=""></textarea><br><br>
        
        <input type="submit">
    </form>
    <br><br>
    <?php
        if(isset($_POST['name'])=='submit'){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $phone_no = $_POST['phone_no'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            echo "Name: " . $name . "<br>";
            echo "Age: " . $age . "<br>";
            echo "Phone No: " . $phone_no . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Gender: " . $gender . "<br>";
            echo "Address: " . $address . "<br>";
        }
    ?>
</body>
</html>