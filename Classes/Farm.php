<?
class Farm
{
	private $animals;
	private $products;

	function __construct()
	{
		$this->animals = [];
		$this->products = [];
	}

	public function addAnimal($animal)
	{
		$this->animals[] = $animal;
	}

	public function getAnimalIds()
	{
		$animalIds = [];
		foreach ($this->animals as $animal) {
			$animalIds[] = $animal->getId();
		}
		return $animalIds;
	}

	public function CollectionOfProducts()
	{
		foreach ($this->animals as $animal) {
			$product = $animal->getProduct();
			$this->products[$product['ProductName']] += $product['ProductQuantity'];
		}
		return $this->products;
	}

	public function printAllProducts()
	{
		print("Total:\n");
		foreach ($this->products as $key => $value) {
			print($key . " : " . $value . "\n");
		}
	}
}