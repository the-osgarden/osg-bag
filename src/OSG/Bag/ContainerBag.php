<?
namespace OSG\Bag;

class ContainerBag extends AbstractBag {
	private $parameterBag = null;
	private $dataBag = null;
	private $interfaceBag = null;

	public function addBag($key, $bag) {
		$$key = $bag;
	}

	public function getBag($key) {
		return $$key;
	}
}