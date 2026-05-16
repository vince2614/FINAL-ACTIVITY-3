<!DOCTYPE html>
<html>

<body>

    <form method="post" action="">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit">
    </form>

    <?php

    if (empty($_POST["name"])) {
        echo "Name is required <br>";
    }

    if (empty($_POST["email"])) {
        echo "Email is required <br>";
    }


    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    }

    ?>

</body>

</html>
