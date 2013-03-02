<?
namespace OSG\Bag;

abstract class AbstractBag {
	
	/*
		bag will be an array by default for php ease,
		but it will be able to take in either an array or a json object.
	*/
	private $bag = array();

	public function __construct($json_string = array()) {
		if()
	}

	public function addBag(AbstractBag $bag) {
		$this->bag->push($bag);
		return $this;
	}

	public function removeBag(AbstractBag $bag) {
		for ($i = 0; $i < sizeof($this->bag); $i++) {
			
		}
	}


}