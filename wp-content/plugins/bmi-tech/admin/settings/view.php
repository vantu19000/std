<?php


class BMIViewSettings extends BMIView {

	protected $items;

	public function __construct() {
		$this->display();
	}

	public function display($tpl = null)
    {
	    $this->items = $this->loadModel();
        return parent::display($tpl); // TODO: Change the autogenerated stub
    }

    public function getData(){

    }


}

$new = new BMIViewSettings();
//$new->display();

?>
