<!DOCTYPE html>
<html>

<body>

    <form method="post" action="">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br><br>
        Gender: 
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other">Other
        <input type="submit">
    </form>

    <?php

    if (empty($_POST["name"])) {
        echo "Name is required <br>";
    } 
    

    if (empty($_POST["email"])) {
        echo "Email is required <br>";
    } else {
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email <br>";
        }
    }


     if (empty($_POST["gender"])) {
        echo "Gender is required <br>";
    } 


    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['gender'])) {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $gender = htmlspecialchars($_POST["gender"]);
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Gender: " . $gender . "<br>";
    }

    ?>

</body>

</html>
