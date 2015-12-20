<?php
App::uses('Room', 'Model');

/**
 * Room Test Case
 */
class RoomTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.room',
		'app.course',
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
		$this->Room = ClassRegistry::init('Room');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Room);

		parent::tearDown();
	}
        
        public function testRoomNumberNumeriqueFalse(){
            $data = array(
    		'Room' => array(
    				'number' => 'w',
                              'floor' => '42',
    			'course_id' => '15'
    		)
    	);

		// Attempt to save
		$result = $this->Room->save($data);

		// Test save failed
		$this->assertFalse($result);
            
        }
        
        public function testRoomNumberNumeriqueTrue(){
            $data = array(
    		'Room' => array(
    				'number' => 'w',
                              'floor' => '42',
    			'course_id' => '15'
    		)
    	);

		// Attempt to save
		$result = $this->Room->save($data);

		// Test save failed
		$this->assertTrue(true, $result);
            
        }
        

}
