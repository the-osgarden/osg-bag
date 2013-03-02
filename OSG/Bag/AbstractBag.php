<?
namespace OSG\Bag;

abstract class AbstractBag {
	private $bag = array();

	public function addBag(AbstractBag $bag) {
		$this->bag->push($bag);
		return $this;
	}

	public function removeBag(AbstractBag $bag) {
		for ($i = 0; $i < sizeof($this->bag); $i++) {
			var_dump($bag);
			die();
		}
	}


}