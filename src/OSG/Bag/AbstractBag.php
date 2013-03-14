<?
namespace OSG\Bag;

abstract class AbstractBag {

	public static $call_count = 0;
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
		//var_dump($this->bagType);
	}


	//bags themselves only contain arrays.
	public function addBag(AbstractBag $bag) {
		$this->bag[] =$bag;
		return $this;
	}

	public function removeBag(AbstractBag $bag) {
		for($i = 0; $i < $bag; $i++) {

		}
	}

	//can accept both an array and a json string as parameters
	public function addToBag($mixed = array()) {
		if ($mixed instanceof AbstractBag) {
			$this->bag->push($mixed);
		} 

		

		if(strcmp(getType($mixed), "array") == 0) {
			$bag = $mixed;
			$this->bag[] = $bag;
		} else if (sizeof($mixed) > 0) {
			var_dump(getType($mixed));
			$this->bag[] = $mixed;
		}
	}


	public function getBag() {
		return $this->bag;
	}

	public function getJsonBag() {
		return json_encode($this->bag);
	}

	//can accept both an array and a json string as parameters
	

	//TODO
	public function removeFromBag() {

	}
}