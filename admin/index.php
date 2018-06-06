<?php
/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 29/5/18
 * Time: 11:21 PM
 */
$userName = htmlspecialchars($_POST['userName']);
$firstName = htmlspecialchars($_POST['firstName']);
$lastName = htmlspecialchars($_POST['lastName']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
if(strlen($password) < 4){
    echo "your password should be 6 charactors long";
}
echo "<br />";
if(strlen($password) == ""){
    echo "please enter password";
}

echo "<br />";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email address".$email." is not valid";
}
?>
<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link href="form.css" rel="stylesheet">
</head>
<body>
<section>

    <form action="" method="post">

        <div>
            <label for="userName">User Name:</label>
            <input type="text" id="userName" name="userName" placeholder="User Name">
        </div>

        <div>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" placeholder="First Name">
        </div>

     <div>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" placeholder="Last name">
        </div>

        <div>
            <label for="email">Last Name:</label>
            <input type="text" id="email" name="email" placeholder="info@lokang.com">
        </div>

        <div>
            <label for="password">password:</label>
            <input type="password" id="password" name="password" placeholder="password">
        </div>

        <div>
            <input name="submit" type="submit">
        </div>

    </form>
<?php echo $userName.$firstName.$lastName.$password; ?>
</section>
</body>
</html>