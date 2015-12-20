<?php
/**
 * School Fixture
 */
class SchoolFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'adress' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'filename' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'subcategory_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
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
			'id' => '1',
			'name' => 'nice school',
			'adress' => '1634 Cool Valle',
			'filename' => null,
			'subcategory_id' => null
		),
		array(
			'id' => '2',
			'name' => 'Universal School',
			'adress' => '4242 Quelque part dans l\'univers',
			'filename' => null,
			'subcategory_id' => null
		),
		array(
			'id' => '3',
			'name' => 'Montmorency',
			'adress' => '475 Boulevard de l\'Avenir, Laval, QC',
			'filename' => null,
			'subcategory_id' => null
		),
		array(
			'id' => '5',
			'name' => 'Gamer school',
			'adress' => '1234 Wall',
			'filename' => 'uploads/11193266_880382395355241_2576140054646192747_n.jpg',
			'subcategory_id' => null
		),
		array(
			'id' => '6',
			'name' => 'petite enfance',
			'adress' => '12123',
			'filename' => 'uploads/01.jpg',
			'subcategory_id' => '10'
		),
		array(
			'id' => '7',
			'name' => 'test',
			'adress' => 'test',
			'filename' => null,
			'subcategory_id' => '15'
		),
		array(
			'id' => '8',
			'name' => 'tre',
			'adress' => 'tre',
			'filename' => null,
			'subcategory_id' => '0'
		),
		array(
			'id' => '9',
			'name' => 'qwe',
			'adress' => 'qwe',
			'filename' => null,
			'subcategory_id' => '1'
		),
		array(
			'id' => '10',
			'name' => 'testttt',
			'adress' => 'testttt',
			'filename' => null,
			'subcategory_id' => '2'
		),
		array(
			'id' => '11',
			'name' => '',
			'adress' => '',
			'filename' => null,
			'subcategory_id' => '10'
		),
	);

}
