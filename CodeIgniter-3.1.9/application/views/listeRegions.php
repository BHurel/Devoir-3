<?php
foreach($Conferences as $uneConf)
{
    echo "<input type='checkbox' value='".$uneregion->nomRegion."'>".$uneConf->titre." ".$uneRegion->scroreRegion."<br>";
}
echo "<input type='button' value='+5 points' onclick='AjouterNote()'>";
?>