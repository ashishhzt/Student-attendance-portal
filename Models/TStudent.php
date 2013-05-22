<?php
App::uses('AppModel', 'Model');
/**
 * TStudent Model
 *
 * @property TAttendance $TAttendance
 */
class TStudent extends AppModel {

/**
 * Display field
 *
 * @var string
 */
  public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'TAttendance' => array(
			'className' => 'TAttendance',
			'foreignKey' => 't_student_id',
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

}
