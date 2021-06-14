<?
class Animal
{
	private $id;
	private	$productName;
	private $minOutputQuantityPrdc;
	private $maxnOutputQuantityPrdc;

	function __construct($productName, $minOutputQuantityPrdc, $maxnOutputQuantityPrdc)
	{
		$this->id 		   			  = uniqid();
		$this->productName            = $productName;
		$this->minOutputQuantityPrdc  = $minOutputQuantityPrdc;
		$this->maxnOutputQuantityPrdc = $maxnOutputQuantityPrdc;
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
		$productQuantity = random_int($this->minOutputQuantityPrdc, $this->maxnOutputQuantityPrdc);
		print("We got ${productQuantity} products from " . get_class($this) . "\n");
		$product =  new class($this->productName, $productQuantity) {
			public $name;
			public $quantity;
			public function __construct($name, $productQuantity)
			{
				$this->name = $name;
				$this->quantity = $productQuantity;
			}
		};
		return $product;
	}
}