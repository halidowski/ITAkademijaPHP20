<?php

$trenutnaGodina = date ("Y");
$godinaRodenja = 1985;

$brojGodina = $trenutnaGodina - $godinaRodenja;

echo "Korisnik ima " . $brojGodina . " godina.";


echo "<br><br>";


$varijabla = "25";

echo "Ja imam " . $varijabla . " godina. ";
echo 'Ja imam ' . $varijabla . ' godima. ';

echo "Ja imam $varijabla godina. ";
echo 'Ja imam $varijabla godina. ';

echo "Ja imam [$varijabla] godina. ";
echo 'Ja imam [$varijabla] godina. ';

?>