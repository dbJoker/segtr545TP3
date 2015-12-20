<?php
/**
 * Subcategory Fixture
 */
class SubcategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'category_id' => '1',
			'name' => 'aucune'
		),
		array(
			'id' => '2',
			'category_id' => '1',
			'name' => 'art-plastique'
		),
		array(
			'id' => '3',
			'category_id' => '1',
			'name' => 'musique'
		),
		array(
			'id' => '4',
			'category_id' => '2',
			'name' => 'aucune'
		),
		array(
			'id' => '5',
			'category_id' => '2',
			'name' => 'sport'
		),
		array(
			'id' => '6',
			'category_id' => '2',
			'name' => 'art-dramatique'
		),
		array(
			'id' => '7',
			'category_id' => '2',
			'name' => 'guitare'
		),
		array(
			'id' => '8',
			'category_id' => '2',
			'name' => 'peinture'
		),
		array(
			'id' => '9',
			'category_id' => '3',
			'name' => 'art'
		),
		array(
			'id' => '10',
			'category_id' => '3',
			'name' => 'technologie'
		),
	);

}
