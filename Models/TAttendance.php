<?php
App::uses('AppModel', 'Model');
/**
 * TAttendance Model
 *
 * @property TStudent $TStudent
 */
class TAttendance extends AppModel {

/**
 * Display field
 *
 * @var string
 */
  public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TStudent' => array(
			'className' => 'TStudent',
			'foreignKey' => 't_student_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
