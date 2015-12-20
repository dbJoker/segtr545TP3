<?php
App::uses('Subcategory', 'Model');

/**
 * Subcategory Test Case
 */
class SubcategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subcategory',
		'app.category',
		'app.school',
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
		$this->Subcategory = ClassRegistry::init('Subcategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subcategory);

		parent::tearDown();
	}
        
        public function testGetSubcategoriesByCategory() {
        $result = $this->Subcategory->getSubcategoriesByCategory(1);
        $expected = array(
            (int) 1 => 'aucune',
            (int) 2 => 'art-plastique',
            (int) 3 => 'musique'
        );
        $this->assertEquals($expected, $result);

    }

}
