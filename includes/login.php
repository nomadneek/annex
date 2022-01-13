<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $password = $_POST['password'];
    if (empty($name)) {
        echo "Name or password is empty";
    } else {
        print "<p>Username: </p>{$name}";
        print "<p>Password </p>{$password}";
    }
}
header("Location: http://annex/includes/landing-page.php");
exit();
?>