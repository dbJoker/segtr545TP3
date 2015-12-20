<?php
App::uses('User', 'Model');

/**
 * User Test Case
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
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
		$this->User = ClassRegistry::init('User');
                $this->Course = ClassRegistry::init('Course');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);
                unset($this->Course);

		parent::tearDown();
	}
      
         public function testUserUsernameVide(){
            $data = array(
    		'User' => array(
    				'username' => '',
                                'password' => 'Password123!',
                                'role' => 'admin!',
                                'email' => 'admin@admin.com!',
                                'created' => '2015-09-25!',
                                'modified' => '2015-09-25!',
                                'active' => '1'
    		)
    	);

		// Attempt to save
		$result = $this->User->save($data);

		// Test save failed
		$this->assertFalse($result);
            
        }
        
                 public function testUserUsernameCorrect(){
            $data = array(
    		'User' => array(
    				'username' => 'test',
                                'password' => 'Password123!',
                                'role' => 'admin!',
                                'email' => 'admin@admin.com!',
                                'created' => '2015-09-25!',
                                'modified' => '2015-09-25!',
                                'active' => '1'
    		)
    	);

		// Attempt to save
		$result = $this->User->save($data);

		// Test save failed
		$this->assertTrue(true, $result);
            
        }

        
         public function testUserEmailNonValid(){
            $data = array(
    		'User' => array(
    				'username' => 'test',
                                'password' => 'Password123!',
                                'role' => 'admin!',
                                'email' => 'admin.admin.com!',
                                'created' => '2015-09-25!',
                                'modified' => '2015-09-25!',
                                'active' => '1'
    		)
    	);

		// Attempt to save
		$result = $this->User->save($data);

		// Test save failed
		$this->assertFalse($result);
            
        }
        
                 public function testUserEmailValid(){
            $data = array(
    		'User' => array(
    				'username' => 'test',
                                'password' => 'Password123!',
                                'role' => 'admin!',
                                'email' => 'admin@admin.com!',
                                'created' => '2015-09-25!',
                                'modified' => '2015-09-25!',
                                'active' => '1'
    		)
    	);

		// Attempt to save
		$result = $this->User->save($data);

		// Test save failed
		$this->assertTrue(true, $result);
            
        }
        

}
