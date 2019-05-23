<?php

$output = array();
$range = 6;
for($i=1; $i<=$range; $i++)
{
   $gobbly_number = rand (1, 53);
   $output[] = "<li>$gobbly_number</li>";
}
$output = implode('',$output);
//print out the numbers
echo "
Your Lucky Lotto Numbers today are:
<br /><br />
<ul>$output</ul>";
?>

?>