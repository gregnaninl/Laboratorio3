<?php
echo "<body style='background-color:orange'>";

$arraynum = array();


for($i=1;$i<20;$i++)
{
$arraynum[]= $i;
$i++;
}

for($i=0;$i<10;$i++)
{
print("<br>".$arraynum[$i]);
}
print("<br>");

foreach( $arraynum as $aux )
{
    print($aux."  ");
}
$i=0;
print("<br>");
while($i <10)
{
    print("<br>".$arraynum[$i]);
    $i++;
}

?>