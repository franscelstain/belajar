<?php

class Inventories extends AppModel
{
	public $useTable = 'Inventories';
	public $primayKey = 'id';
	
	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty'
		),
		'vendor_sn' => array(
			'rule' => 'notEmpty'
		)
	);
}

?>