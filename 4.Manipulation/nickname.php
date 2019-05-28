<?php 


if(isset($_POST["user"])){
    echo strrev(strtoupper(strrev($_POST["user"])));
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cool Nickname Generator</title>
</head>
<body>
    
<form action="nickname.php" method="post">
    <input type="text" name="user" placeholder="your text here">
    <button type="submit">Submit</button>
    </form>


</body>
</html>