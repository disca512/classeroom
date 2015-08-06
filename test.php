<?php
$destinataire = "0000000@sms.compagnie.com";
echo "Ce script envoie un mail à $destinataire";
mail($destinataire, "test email 1", "test oki :P");
?>
