<?
namespace OSG\Bag;

abstract class AbstractBag {

	/* 
		Tell the parent class what type I am;
	*/
	protected $bagType = null;
	/*
		bag will be an array();
	*/
	private $bag = array();

	public function __construct() {
		//$bag[] = array('BagType' => $this->bagType);
		var_dump($this->bagType);
	}


	//bags themselves only contain arrays.
	public function addBag(AbstractBag $bag) {
		$this->bag->push($bag);
		return $this;
	}

	public function removeBag(AbstractBag $bag) {
		for($i = 0; $i < $bag; $i++) {

		}
	}

	//can accept both an array and a json string as parameters
	public function addToBag($mixed = array()) {
		//echo " MIXED: " . get_class($mixed) . " " . var_dump($mixed);
		if ($mixed instanceof AbstractBag) {
			$this->addBag($mixed);
			return;
		} 

		//var_dump($mixed);

		if(getType($mixed) == "string") {
			$bag = $mixed;
			var_dump(json_encode($bag));
			var_dump(json_decode('{ "eh" : "1"}'));
			$this->bag[] = json_decode($mixed);
		} else if (sizeof($mixed) > 0) {
			$this->bag[] = $mixed;
		}


	}


	public function getBag() {
		return $this->bag;
	}

	public function getJsonBag() {
		return json_encode($this->bag);
	}

	//TODO
	public function removeFromBag() {

	}
}