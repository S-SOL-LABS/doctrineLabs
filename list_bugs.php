<?php
// list_bugs.php
require_once "bootstrap.php";

$dql = "SELECT b, e, r FROM Bug b JOIN b.engineer e JOIN b.reporter r ORDER BY b.created DESC";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$bugs = $query->getResult();

foreach($bugs AS $bug) {
	echo "<br/>--------------------------------------------------- <br/>";
    echo $bug->getDescription()." - ".$bug->getCreated()->format('d.m.Y')."\n";
    echo "    Reported by: ".$bug->getReporter()->getName()."\n";
    echo "    Assigned to: ".$bug->getEngineer()->getName()."\n";
    echo "<br/>";
    foreach($bug->getProducts() AS $product) {
        echo "<br/>    Platform: ".$product->getName()."<br/>";
    }
   echo "<br/>--------------------------------------------------- <br/>";
}
