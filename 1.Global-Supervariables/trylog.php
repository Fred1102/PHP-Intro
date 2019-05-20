
<?php 
require "login.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login result message</title>
</head>
<body>

<?php
if (!empty ($_POST['username']) && !empty ($_POST['password'])){

    $username = 'Fred';
    $password = 'becode'; 

if ($_POST['username'] == $username && $_POST['password'] == $password){
    echo "Congrats, you are in!";
}
else {
    echo
    "Wrong username or password";
}
}

else {
    echo
    "Please fill out something in the fields";
}

?>

</body>
</html>