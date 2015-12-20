<?php
App::uses('Course', 'Model');

/**
 * Course Test Case
 */
class CourseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course',
		'app.room',
		'app.year',
		'app.school',
		'app.subcategory',
		'app.category',
		'app.years_course'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Course = ClassRegistry::init('Course');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Course);

		parent::tearDown();
	}

/**
 * testIsOwnedBy method
 *
 * @return void
 */
        public function testIsOwnedTrue() {
                $testIsOwnedBy = $this->Course->isOwnedBy(14,5);
                $this->assertTrue($testIsOwnedBy);   
	}
	public function testIsOwnedByFalse() {
                $testIsOwnedBy = $this->Course->isOwnedBy(14,2);
                $this->assertFalse($testIsOwnedBy);   
	}

	

}
