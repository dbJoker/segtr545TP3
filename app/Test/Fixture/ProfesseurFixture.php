<?php
/**
 * Professeur Fixture
 */
class ProfesseurFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Marcel Courtemanche',
			'created' => '2015-11-09 18:05:41',
			'modified' => '2015-11-09 18:05:41'
		),
		array(
			'id' => '2',
			'name' => 'Aceline Faucher',
			'created' => '2015-11-09 18:05:41',
			'modified' => '2015-11-09 18:05:41'
		),
		array(
			'id' => '3',
			'name' => 'Valiant Labonté',
			'created' => '2015-11-09 18:05:41',
			'modified' => '2015-11-09 18:05:41'
		),
		array(
			'id' => '4',
			'name' => 'Dielle Maheu',
			'created' => '2015-11-09 18:05:41',
			'modified' => '2015-11-09 18:05:41'
		),
		array(
			'id' => '5',
			'name' => 'Beltane Ratté',
			'created' => '2015-11-09 18:05:41',
			'modified' => '2015-11-09 18:05:41'
		),
		array(
			'id' => '6',
			'name' => 'Sophie Martel',
			'created' => '2015-11-09 18:05:41',
			'modified' => '2015-11-09 18:05:41'
		),
		array(
			'id' => '7',
			'name' => 'Roux Lefèbvre',
			'created' => '2015-11-09 18:05:41',
			'modified' => '2015-11-09 18:05:41'
		),
		array(
			'id' => '8',
			'name' => 'Frédérique Proulx',
			'created' => '2015-11-09 18:05:41',
			'modified' => '2015-11-09 18:05:41'
		),
		array(
			'id' => '9',
			'name' => 'Brice Dionne',
			'created' => '2015-11-09 18:05:41',
			'modified' => '2015-11-09 18:05:41'
		),
		array(
			'id' => '10',
			'name' => 'Searlas Rochon',
			'created' => '2015-11-09 18:05:41',
			'modified' => '2015-11-09 18:05:41'
		),
	);

}
