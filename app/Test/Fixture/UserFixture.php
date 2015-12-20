<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => null),
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
			'id' => '5',
			'username' => 'admin',
			'password' => '$2a$10$tQ5zwccPukhDaOENMxl4A.v7h7xVOsvno99AF0SmjseadBVo8cgoO',
			'role' => 'admin',
			'email' => 'admin@admin.com',
			'created' => '2015-09-25',
			'modified' => '2015-09-25',
			'active' => 1
		),
		array(
			'id' => '7',
			'username' => 'test3',
			'password' => '$2a$10$gzQwCpq1tfgiXzvtQS9vV.0gUIrG708q17it6CqVwqahhHWrTjAFm',
			'role' => 'visiteur',
			'email' => 'test@test.com',
			'created' => '2015-10-03',
			'modified' => '2015-10-03',
			'active' => 0
		),
		array(
			'id' => '12',
			'username' => 'prof',
			'password' => '$2a$10$XMLApLSOug6HCVrjGxw0juR3enRMh8ESefxKGIKDgiPZrZNtVbfMq',
			'role' => 'super-utilisateurs',
			'email' => 'prof@prof.com',
			'created' => '2015-10-04',
			'modified' => '2015-10-04',
			'active' => 0
		),
		array(
			'id' => '13',
			'username' => 'prof2',
			'password' => '$2a$10$zBDw7WnDEP/XBGDtT19cLeUaHqROKU.OIIhWxUtPFDI60ZvEdqWc2',
			'role' => 'super-utilisateurs',
			'email' => 'prof@prof.com',
			'created' => '2015-10-06',
			'modified' => '2015-10-06',
			'active' => 0
		),
		array(
			'id' => '24',
			'username' => 'test42',
			'password' => '$2a$10$TvllkZiwtNBE42c4xorXxOb5air16MfilQ/2jJJ8JjGGt8T7hed9G',
			'role' => 'super-utilisateurs',
			'email' => 'coursphptp2@gmail.com',
			'created' => '2015-11-12',
			'modified' => '2015-11-12',
			'active' => 1
		),
		array(
			'id' => '25',
			'username' => 'test424',
			'password' => '$2a$10$FwLkS3KjmQrErnpS54aq8uRXlUj3NRijf0qrLPtip6GW2JLiiNpxS',
			'role' => 'super-utilisateurs',
			'email' => 'coursphptp2@gmail.com',
			'created' => '2015-11-12',
			'modified' => '2015-11-12',
			'active' => 1
		),
		array(
			'id' => '26',
			'username' => 'test12',
			'password' => '$2a$10$RFQoHJuLMCw9021H7n/4au93AO7cLrxtaNL2WnV4P4lccUI.Qcr3q',
			'role' => 'visiteur',
			'email' => 'coursphptp2@gmail.com',
			'created' => '2015-11-12',
			'modified' => '2015-11-12',
			'active' => 0
		),
	);

}
