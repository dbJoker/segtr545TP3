<?php
/**
 * Room Fixture
 */
class RoomFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'floor' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 100, 'unsigned' => false),
		'course_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'id' => '4',
			'number' => '42',
			'floor' => '42',
			'course_id' => '15'
		),
		array(
			'id' => '5',
			'number' => '2356',
			'floor' => '2',
			'course_id' => '1'
		),
		array(
			'id' => '6',
			'number' => '1632',
			'floor' => '1',
			'course_id' => '2'
		),
		array(
			'id' => '7',
			'number' => '7634',
			'floor' => '7',
			'course_id' => '4'
		),
		array(
			'id' => '8',
			'number' => '1265',
			'floor' => '1',
			'course_id' => '3'
		),
		array(
			'id' => '9',
			'number' => '3425',
			'floor' => '3',
			'course_id' => '5'
		),
		array(
			'id' => '10',
			'number' => '2534',
			'floor' => '2',
			'course_id' => '14'
		),
		array(
			'id' => '11',
			'number' => '3321',
			'floor' => '3',
			'course_id' => '16'
		),
	);

}
