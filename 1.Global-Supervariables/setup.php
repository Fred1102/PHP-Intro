

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "stylesheet.css">
    <title>Document</title>
</head>

<body>


    
<form action="/my-handling-form-page" method="POST">
    <input type="text" name="favourite_movie">
    <button>SUBMIT</button>
</form> 

<?php
$name = $_POST['favourite_movie']; 
echo $name." is my favourite movie"; 
?>


</body>
</html>

