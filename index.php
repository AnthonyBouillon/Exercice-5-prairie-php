<?php

$windows="nombres d'utilisateur windowsien"."<br>";
$linux="nombres d'utilisateur linuxien";

function maFonction($linux,$windows){
return $linux . $windows;
}
echo maFonction($windows, $linux);
?>
