<?
class Hen extends Animal
{
	private	$productName;
	private $minOutputQuantityPrdc; 
	private $maxnOutputQuantityPrdc;

	function __construct()
	{
		$this->productName = 'Eggs';
		$this->minOutputQuantityPrdc = 0;
		$this->maxnOutputQuantityPrdc = 1;
		parent::__construct($this->productName, $this->minOutputQuantityPrdc, $this->maxnOutputQuantityPrdc);
	}
}