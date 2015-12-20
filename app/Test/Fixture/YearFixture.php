<?php
/**
 * Year Fixture
 */
class YearFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'yearname' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'school_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '9',
			'yearname' => '2042',
			'school_id' => '2'
		),
		array(
			'id' => '11',
			'yearname' => 'Secondaire 1',
			'school_id' => '1'
		),
		array(
			'id' => '12',
			'yearname' => 'secondaire 3',
			'school_id' => '1'
		),
		array(
			'id' => '13',
			'yearname' => 'Cégep session 1',
			'school_id' => '3'
		),
		array(
			'id' => '14',
			'yearname' => 'Cégep session 4',
			'school_id' => '3'
		),
	);

}
