<?php
/**
 * Course Fixture
 */
class CourseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 70, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'professeur' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'name' => 'math',
			'professeur' => null,
			'user_id' => null
		),
		array(
			'id' => '2',
			'name' => 'science',
			'professeur' => null,
			'user_id' => null
		),
		array(
			'id' => '3',
			'name' => 'French',
			'professeur' => null,
			'user_id' => null
		),
		array(
			'id' => '4',
			'name' => 'BruhCourse',
			'professeur' => null,
			'user_id' => null
		),
		array(
			'id' => '5',
			'name' => 'Philosophie',
			'professeur' => null,
			'user_id' => null
		),
		array(
			'id' => '14',
			'name' => 'Histoire',
			'professeur' => null,
			'user_id' => '5'
		),
		array(
			'id' => '15',
			'name' => 'How to teach the Univers',
			'professeur' => null,
			'user_id' => '5'
		),
		array(
			'id' => '16',
			'name' => 'Programmation Objets',
			'professeur' => null,
			'user_id' => '5'
		),
		array(
			'id' => '17',
			'name' => 'danse',
			'professeur' => 'Berangaria Aubé',
			'user_id' => '5'
		),
		array(
			'id' => '18',
			'name' => 'Bunji',
			'professeur' => 'Wyatt Desnoyer',
			'user_id' => '5'
		),
	);

}
