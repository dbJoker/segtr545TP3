<?php
App::uses('AppModel', 'Model');
/**
 * Subcategory Model
 *
 * @property Category $Category
 * @property School $School
 */
class Subcategory extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'School' => array(
			'className' => 'School',
			'foreignKey' => 'subcategory_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
        
        public function GetSubcategoriesByCategory($category_id = null){
            return $this->find('list', array(
            'conditions' => array('category_id' => $category_id),
            'recursive' => -1
        ));
        }
        

}