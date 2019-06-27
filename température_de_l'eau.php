
<?php
$T_température = ($_POST);
 echo "Entrez la température de l'eau:";
  if ($T_température <= 0) {
 echo "c'est de la glace";
} elseif ($T_température < 100) {
 echo "c'est du liquide";
} else {
 echo "c'est de la vapeur";
}
?>
