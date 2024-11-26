<?php

require_once 'Personne.php';

$moi = new Personne('Dcb', 'Denis', '41 bis', '28-03-1994');
echo $moi->getInfosPersonne() . '<br>';
echo "Modification de l'addresse.. <br><br>";
$moi->setAdress("1050 rue de l'épée");
echo 'Nouvelle adresse : <br>';
echo $moi->getInfosPersonne() . '<br><br>';



?>