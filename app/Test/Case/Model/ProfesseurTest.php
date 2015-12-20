<?php
App::uses('Professeur', 'Model');

/**
 * Professeur Test Case
 */
class ProfesseurTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.professeur'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Professeur = ClassRegistry::init('Professeur');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Professeur);

		parent::tearDown();
	}

/**
 * testGetProfesseurNames method
 *
 * @return void
 */
        public function testGetProfesseurNamesUneLettreExistante() {
                $testProfesseurNames = $this->Professeur->getProfesseurNames("B");
                $this->assertEqual($testProfesseurNames, array("5" => "Beltane Ratté","9" => "Brice Dionne"));    
	}
        
	public function testGetProfesseurNamesDeuxLettresExistantes() {
                $testProfesseurNames = $this->Professeur->getProfesseurNames("Fr");
                $this->assertEqual($testProfesseurNames, array("8" => "Frédérique Proulx"));     
	}
        
        public function testGetProfesseurNamesUneLettreNonExistante() {
                $testProfesseurNames = $this->Professeur->getProfesseurNames("N");
                $this->assertEqual($testProfesseurNames, array());   
	}
        
         public function testGetProfesseurNamesUneLettreNull() {
                $testProfesseurNames = $this->Professeur->getProfesseurNames("");
                $this->assertFalse($testProfesseurNames);   
	}

}
