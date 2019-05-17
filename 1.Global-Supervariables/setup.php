<?php
?>


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
    
<form action="result.php" method="POST">
    <input type="text" name="movie1"> <br>
    <input type="text" name="movie2"> <br>
    <input type="text" name="movie3"> <br>
    <input type="text" name="movie4"> <br>
    <input type="text" name="movie5"> <br>

    <input type="text" name="tvshow1"> <br>
    <input type="text" name="tvshow2"> <br>
    <input type="text" name="tvshow3"> <br>
    <input type="text" name="tvshow4"> <br>
    <input type="text" name="tvshow5"> <br>
    
    <button type="submit"> SUBMIT</button>
</form> 

<p>My favourity country is </p>
<form action="result.php" method="GET">
    <input type="text" name="favouritecountry"> <br>
    <input type="text" name="worstmovie"> <br>

    <button type="submit"> SUBMIT</button>
</form>

</body>
</html>

