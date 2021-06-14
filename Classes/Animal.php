<?
class Animal
{
	private $id;
	private	$productName;
	// Переменная outputRange предназначена для хранения минимального и максимального количества продуктов производимых животным за 1 раз
	private $outputRange;

	function __construct($productName, $outputRange)
	{
		$this->id 		   = uniqid();
		$this->productName = $productName;
		$this->outputRange = $outputRange;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getPrdName()
	{
		return $this->productName;
	}

	public function getProduct()
	{
		$product = random_int($this->outputRange[0], $this->outputRange[1]);
		print("The animal gave ${product} products \n");
		return array('ProductName' => $this->productName, 'ProductQuantity' => $product);
	}
}