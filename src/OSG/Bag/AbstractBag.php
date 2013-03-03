<?
namespace OSG\Bag;

abstract class AbstractBag {
	
	/*
		bag will be an array by default for php ease,
		but it will be able to take in either an array or a json object.
	*/
	private $bag = array();

	public function __construct($json_string = array()) {
	
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
		if ($mixed instanceof AbstractBag) {
			$this->bag->push($mixed);
		} 

		if(getType($mixed) != "array") {
			$bag = json_decode($mixed);
			$this->bag[] = $bag;
		} else if (sizeof($mixed) > 0) {
			$this->bag[] = $mixed;
		}
	}


	public function getBag() {
		return $this->bag();
	}

	public function getJsonBag() {
		return json_encode($this->bag);
	}

	//TODO
	public function removeFromBag() {

	}
}