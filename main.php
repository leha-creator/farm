<?php

require_once 'Classes/Farm.php';
require_once 'Classes/Animal.php';
require_once 'Classes/Cow.php';
require_once 'Classes/Hen.php';

$allAnimals = [];

for ($i=0; $i < 20; $i++) { 
	$allAnimals[] = new Hen();
}

for ($i=0; $i < 10; $i++) { 
	$allAnimals[] = new Cow();
}

$farm = new Farm();

foreach ($allAnimals as $animal) {
	$farm->addAnimal($animal);
}

$farm->CollectionOfProducts();
$farm->printAllProducts();	

?>