<?php

$textarea="Bonjour, \n Au revoir \n Heu... \n";
preg_match_all("#(.*)\n#",$textarea,$lignes);
$nb_lignes=count($lignes[0]);
echo "Il y a " . $nb_lignes . " lignes dans le textarea<br />";

for($i=0;$i<$nb_lignes;$i++)
{
   echo $lignes[0][$i].'<br />';
}
?> 
