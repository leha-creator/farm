<?
class Hen extends Animal
{
	private	$productName = 'Eggs';
	private $outputRange = [0, 1];

	function __construct()
	{
		parent::__construct($this->productName, $this->outputRange);
	}


	public function getProduct()
	{
		$numOfEggs = random_int($this->outputRange[0], $this->outputRange[1]);
		print_r("The chicken brought ${numOfEggs} eggs \n");
		return array('ProductName' => $this->productName, 'ProductQuantity' => $numOfEggs);
	}
}