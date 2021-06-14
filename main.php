<?php

require_once 'Classes/Farm.php';
require_once 'Classes/Animal.php';
require_once 'Classes/Cow.php';
require_once 'Classes/Hen.php';

$farm = new Farm();
for ($i=0; $i < 20; $i++) { 
	$farm->addAnimal(new Hen());
}

for ($i=0; $i < 10; $i++) { 
	$farm->addAnimal(new Cow());
}

$farm->CollectionOfProducts();
$farm->printAllProducts();	

?>