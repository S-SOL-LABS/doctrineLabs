<?php
// list_bugs_array.php
require_once "bootstrap.php";

$dql = "SELECT b, e, r, p FROM Bug b JOIN b.engineer e ".
       "JOIN b.reporter r JOIN b.products p ORDER BY b.created DESC";
$query = $entityManager->createQuery($dql);
$bugs = $query->getArrayResult();

foreach ($bugs as $bug) {
	echo "<br/>--------------------------------------------------- <br/>";
    echo $bug['description'] . " - " . $bug['created']->format('d.m.Y')."\n";
    echo "    Reported by: ".$bug['reporter']['name']."\n";
    echo "    Assigned to: ".$bug['engineer']['name']."\n";
    foreach ($bug['products'] as $product) {
        echo "<br/>    Platform: ".$product['name']."<br/>";
    }
   echo "<br/>--------------------------------------------------- <br/>";
}

