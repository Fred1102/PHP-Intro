

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "stylesheet" href = "stylesheet.css">
    <title>Document</title>
</head>

<body>
<?php
if (!empty($_POST)) {
    echo 
"<p>My favourite movie is</p>
<ul><li>{$_POST["movie1"]} </li> 
	<li>{$_POST["movie2"]}</li>
	<li>{$_POST["movie3"]}</li>
	<li>{$_POST["movie4"]}</li>
    <li>{$_POST["movie5"]}</li></ul>".
"<p>My favourite tv show is</p>
<ul><li>{$_POST["tvshow1"]} </li> 
	<li>{$_POST["tvshow2"]}</li>
	<li>{$_POST["tvshow3"]}</li>
	<li>{$_POST["tvshow4"]}</li>
    <li>{$_POST["tvshow5"]}</li></ul>";
}

else { echo
"<p>My favourite country is</p><ul><li>{$_GET["favouritecountry"]}</li></ul>".
"<p>my worst movie is </p><ul><li>{$_GET["worstmovie"]}</li></ul>";
}
    ?>

</body>
</html>