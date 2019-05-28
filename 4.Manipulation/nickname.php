<?php 


if(isset($_POST["user"])){


$alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$alphabet_capitalised = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'V', 'X', 'Y', 'Z'];
$digits = [0,1,2,3,4,5,6,7,8,9];

$nigits = array_merge($alphabet, $alphabet_capitalised, $digits);

$indexs = array_rand($nigits,4);
var_dump($indexs);
$simbols = array();
for ($i=0; $i<count($indexs); ++$i){
    array_push($simbols, $nigits[$indexs[$i]]);
}
$final_string = implode($simbols);

echo $final_string."X". "- " .strrev(strtoupper(strrev($_POST["user"])))." -";
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