<?php

$array = [
	["tv-show" => "Naruto", "rating" => 4],
	["tv-show" => "Firefly", "rating" => 5],
	["tv-show" => "Big bang theory", "rating" => 4],
    ["tv-show" => "Family Guy", "rating" => 5],
    ["tv-show" => "Friends", "rating" => 4],
	["tv-show" => "Game of Thrones", "rating" => 5],
	["tv-show" => "The Simpsons", "rating" => 4],
    ["tv-show" => "Breaking Bad", "rating" => 5]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href= "style.css">
    
    <title>Rate your tv show</title>
</head>
<body>

 <table class = "mx-auto my-auto w-25">


 <?php foreach($array as $arr): ?>
<tr>
    <td> <a href = "<?php echo "https://www.google.com/search?q={$arr['tv-show']}"?>"> <?php echo $arr["tv-show"];?> </a> </td>
    
	<td>
    
    <?php for($i=0; $i<= $arr['rating']; $i++) {
        echo "<i class=\"far fa-sun text-warning\"></i>";
         }?>

    </td>
    

</tr>
<?php endforeach; ?>
 </table>   

</body>
</html>


