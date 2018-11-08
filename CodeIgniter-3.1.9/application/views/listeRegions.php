<?php
foreach($Regions as $uneRegion)
{
    echo "<input type='checkbox' value='".$uneRegion->nomRegion."'>".$uneRegion->scoreRegion."<br>";
}
echo "<input type='button' value='+5 points' onclick='AjouterNote()'>";
?>