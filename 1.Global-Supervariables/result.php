

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<?php
if (!empty($_POST)) {
    echo 
    "<ul><li>{$_POST["movie1"]} </li> 
	<li>{$_POST["movie2"]}</li>
	<li>{$_POST["movie3"]}</li>
	<li>{$_POST["movie4"]}</li>
    <li>{$_POST["movie5"]}</li></ul>".
"<ul><li>{$_POST["tvshow1"]} </li> 
	<li>{$_POST["tvshow2"]}</li>
	<li>{$_POST["tvshow3"]}</li>
	<li>{$_POST["tvshow4"]}</li>
    <li>{$_POST["tvshow5"]}</li></ul>";
}

else { echo
"<p>My favourite country is</p><ul><li>{$_GET["favouritecountry"]}</li></ul>".
"<ul><li>{$_GET["worstmovie"]}</li></ul>";
}
    ?>

</body>
</html>