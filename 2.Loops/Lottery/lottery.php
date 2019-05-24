<?php


if(!empty ($_POST['option'])){
    $input =array("hamburger","pizza","fries");
    $randomnumber = rand(0,2);
    $userchoice = $_POST['option'];
    $computerchoice = $input[$randomnumber];  
} 

if ($userchoice == $computerchoice) {
    echo "<p class=\"w-25 p-3 mx-auto text-center\">  You won! Want to play again? </p>";
}
else {
    echo "<p class=\"w-25 p-3 mx-auto text-center\"> You lost! </p>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lottery</title>
</head>
<body>

<form action="input.php" metaphone="post"class="w-25 p-3 mx-auto text-center">
<div>
<img src="img/<?php echo $userchoice?>.png" alt="hamburger"></div> 
<div>
<img src="img/<?php echo $computerchoice?>.png" alt="fries"></div> 
</form>


<form action="input.php" method="post" class="w-25 p-3 mx-auto text-center">
    <button type="submit">Try again!</button>
</form>
    
</body>
</html>