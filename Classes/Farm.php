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
		if (is_subclass_of($animal, 'Animal')) {
			$this->animals[] = $animal;
		} else {
			throw new Exception('Only animals can enter the farm');
		}
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
			$this->products[$product->name] += $product->quantity;
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