<?
class Cow extends Animal
{
	private	$productName;
	private $minOutputQuantityPrdc; 
	private $maxnOutputQuantityPrdc;

	function __construct()
	{
		$this->productName = 'Milk';
		$this->minOutputQuantityPrdc = 8;
		$this->maxnOutputQuantityPrdc = 12;
		parent::__construct($this->productName, $this->minOutputQuantityPrdc, $this->maxnOutputQuantityPrdc);
	}

}
