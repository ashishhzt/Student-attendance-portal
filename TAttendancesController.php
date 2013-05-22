<?php
App::uses('AppController', 'Controller');
/**
 * TAttendances Controller
 *
 * @property TAttendance $TAttendance
 */
class TAttendancesController extends AppController {
/**
 * index method
 *
 * @return void
 */
  public function index() {
		$this->TAttendance->recursive = 0;
		$this->set('tAttendances', $this->paginate());
	}

/**
*page 1...
*/	
	public function present() {
		$postdata = $this->request->data;
		//var_dump($postdata);
		$year = $postdata['TAttendance']['cy']['year'];
		$month =  $postdata['TAttendance']['cm']['month'];
		$date = $postdata['TAttendance']['cd']['day'];
		$datestring = $year.'-'.$month.'-'.$date;
		//echo $datestring;
		$tAttendances = $this->TAttendance->find('all',array('conditions' => array('date' =>$datestring ,'status'=>'1')));
		//var_dump($tAttendances);
		$this-> Set('tAttendances', $tAttendances);
		//$this->TAttendance->recursive = 1;
		//$this->set('tAttendances', $this->paginate());
		$this->paginate();
	}

	
/**
*page 2  Diasplay the list of absenties...
*/	
	public function absent() {
		$postdata = $this->request->data;
		//var_dump($postdata);
		$year = $postdata['TAttendance']['cy']['year'];
		$month =  $postdata['TAttendance']['cm']['month'];
		$date = $postdata['TAttendance']['cd']['day'];
		$datestring = $year.'-'.$month.'-'.$date;
		//echo $datestring;
		$tAttendances = $this->TAttendance->find('all',array('conditions' => array('date' =>$datestring ,'status'=>'0')));
		//var_dump($tAttendances);
		$this-> Set('tAttendances', $tAttendances);
		//$this->TAttendance->recursive = 1;
		//$this->set('tAttendances', $this->paginate());
		$this->paginate();
	}

	
	
	/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TAttendance->id = $id;
		if (!$this->TAttendance->exists()) {
			throw new NotFoundException(__('Invalid t attendance'));
		}
		$this->set('tAttendance', $this->TAttendance->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TAttendance->create();
			if ($this->TAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The t attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The t attendance could not be saved. Please, try again.'));
			}
		}
		$tStudents = $this->TAttendance->TStudent->find('list');
		$this->set(compact('tStudents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TAttendance->id = $id;
		if (!$this->TAttendance->exists()) {
			throw new NotFoundException(__('Invalid t attendance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The t attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The t attendance could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TAttendance->read(null, $id);
		}
		$tStudents = $this->TAttendance->TStudent->find('list');
		$this->set(compact('tStudents'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->TAttendance->id = $id;
		if (!$this->TAttendance->exists()) {
			throw new NotFoundException(__('Invalid t attendance'));
		}
		if ($this->TAttendance->delete()) {
			$this->Session->setFlash(__('T attendance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('T attendance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
