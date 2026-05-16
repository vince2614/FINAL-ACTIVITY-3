<!DOCTYPE html>
<html>

<body>

    <form method="post" action="">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email);
    }

    ?>

</body>

</html>
