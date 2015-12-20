<?php

App::uses('School', 'Model');

/**
 * School Test Case
 */
class SchoolTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.school',
        'app.subcategory',
        'app.category',
        'app.year',
        'app.course',
        'app.room',
        'app.years_course'
    );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $this->School = ClassRegistry::init('School');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->School);

        parent::tearDown();
        // Remove all form submissions
        //$this->School->query('TRUNCATE TABLE Schools;');
        // Remove Uploaded file
        //@unlink(WWW_ROOT.'uploads'.DS.'TestFile.jpg');
    }

    /**
     * testProcessImageUpload method
     *
     * @return void
     */
    public function testProcessImageUploadFormVide() {
        $data = array(
            'School' => array(
                'name' => '',
                'adress' => '',
                'filename' => '',
                'subcategory_id' => ''
            )
        );

        // Attempt to save
        $result = $this->School->save($data);

        // Test save failed
        $this->assertFalse($result);
    }

    public function testFormWithValidFile() {
        // Create a stub for the School Model class
        $stub = $this->getMockForModel('School', array('is_uploaded_file', 'move_uploaded_file'));

        // Always return TRUE for the 'is_uploaded_file' function
        $stub->expects($this->any())
                ->method('is_uploaded_file')
                ->will($this->returnValue(TRUE));
        // Copy the file instead of 'move_uploaded_file' to allow testing
        $stub->expects($this->any())
                ->method('move_uploaded_file')
                ->will($this->returnCallback('copy'));

        // Build the data to save along with a sample file 
        $data = array( 'School' => array(
            'name' => 'petite enfance',
            'adress' => '12123',
            'filename' => array(
                'name' => 'TestFile.jpg',
                'type' => 'image/jpeg',
                // modified with windows DS backslash
                'tmp_name' => ROOT.DS.APP_DIR.DS.'Test'.DS.'Case'.DS.'Model'.DS.'TestFile.jpg',
                // original from tutorial
                //'tmp_name' => ROOT.DS.APP_DIR.DS.'Test'.DS.'Case'.DS.'Model'.DS.'TestFile.jpg',
                'error' => 0,
                'size' => 845941
            ),
            'subcategory_id' => '10'
            )
        );

        // Attempt to save
        $result = $stub->save($data);

        // Test successful insert
        $this->assertArrayHasKey('School', $result);

        // Get the count in the DB
        $entryCount = $this->School->find('count', array(
            'conditions' => array(
                'School.name' => 'petite enfance',
                'School.adress' => '12123',
                'filename' => '/TestFile.jpg',
                'School.subcategory_id' => '10'
            )
        ));
        // Test DB entry
        $this->assertEqual($entryCount, 1);

        // Test uploaded file exists
        $this->assertFileExists(WWW_ROOT . DS . 'TestFile.jpg');
    }

    public function testFormWithEmptyFile() {
		$data = array('School' => array(
			'name' => 'la petite enfance',
			'adress' => '121212',
			'filename' => array(
				'name' => '',
				'type' => '',
				'tmp_name' => '',
				'error' => 4,
				'size' => 0,
			),
			'subcategory_id' => 10
		));

		// Attempt to save
		$result = $this->School->save($data);

		// Test successful insert
		$this->assertArrayHasKey('School', $result);

		// Get the count in the DB
		$result = $this->School->find('count',array(
			'conditions' => array(
			'School.name' => 'la petite enfance',
			'School.adress' => '121212',
			'School.subcategory_id' => 10,
			),
		));

		// Test DB entry
		$this->assertEqual($result, 1);
	}

    public function testFormWithInvalidFile() {
		// Create a stub for the School Model class
		$stub = $this->getMockForModel('School', array('is_uploaded_file','move_uploaded_file'));

		// Always return TRUE for the 'is_uploaded_file' function
		$stub->expects($this->any())
			->method('is_uploaded_file')
			->will($this->returnValue(TRUE));
		// Copy the file instead of 'move_uploaded_file' to allow testing
		$stub->expects($this->any())
			->method('move_uploaded_file')
			->will($this->returnCallback('copy'));

		// Build the data to save along with a sample file
		$data = array('School' => array(
			'name' => 'la petite enfance',
			'adress' => '125451254',
			'filename' => array(
				'name' => 'TestFile.txt',
				'type' => 'text/plain',	
				// original from tutorial
			 'tmp_name' => ROOT.DS.APP_DIR.DS.'Test'.DS.'Case'.DS.'Model'.DS.'TestFile.txt',
				'error' => 0,
				'size' => 19,
				),
			'subcategory_id' => 10
		));
		
		// Attempt to save
		$result = $stub->save($data);

		// Test failure
		$this->assertFalse($result);

		// Test uploaded file does not exists
		$this->assertFileNotExists(WWW_ROOT.'uploads'.DS.'TestFile.txt');
	}


}
