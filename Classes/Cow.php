<?
class Cow extends Animal
{
	private	$productName = 'Milk';
	private $outputRange = [8, 12];

	function __construct()
	{
		parent::__construct($this->productName, $this->outputRange);
		$this->pro = 0;
	}


	public function getProduct()
	{
		$milkQuantity = random_int($this->outputRange[0], $this->outputRange[1]);
		print("The cow gave ${milkQuantity} liters of milk today \n");
		return array('ProductName' => $this->productName, 'ProductQuantity' => $milkQuantity);
	}
}
