<?php
/**
 * YearsCourse Fixture
 */
class YearsCourseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'year_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'course_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
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
			'year_id' => '11',
			'course_id' => '1',
			'id' => '52'
		),
		array(
			'year_id' => '11',
			'course_id' => '2',
			'id' => '53'
		),
		array(
			'year_id' => '11',
			'course_id' => '3',
			'id' => '54'
		),
		array(
			'year_id' => '12',
			'course_id' => '1',
			'id' => '55'
		),
		array(
			'year_id' => '12',
			'course_id' => '2',
			'id' => '56'
		),
		array(
			'year_id' => '12',
			'course_id' => '3',
			'id' => '57'
		),
		array(
			'year_id' => '13',
			'course_id' => '1',
			'id' => '58'
		),
		array(
			'year_id' => '13',
			'course_id' => '3',
			'id' => '60'
		),
		array(
			'year_id' => '13',
			'course_id' => '5',
			'id' => '61'
		),
		array(
			'year_id' => '14',
			'course_id' => '3',
			'id' => '62'
		),
	);

}
