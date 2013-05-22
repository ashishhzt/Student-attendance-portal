<?php
App::uses('AppController', 'Controller');
/**
 * TStudents Controller
 *
 * @property TStudent $TStudent
 */
class TStudentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
  public function index() {
		$this->TStudent->recursive = 0;
		$this->set('tStudents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TStudent->id = $id;
		if (!$this->TStudent->exists()) {
			throw new NotFoundException(__('Invalid t student'));
		}
		$this->set('tStudent', $this->TStudent->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TStudent->create();
			if ($this->TStudent->save($this->request->data)) {
				$this->Session->setFlash(__('The t student has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The t student could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TStudent->id = $id;
		if (!$this->TStudent->exists()) {
			throw new NotFoundException(__('Invalid t student'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TStudent->save($this->request->data)) {
				$this->Session->setFlash(__('The t student has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The t student could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TStudent->read(null, $id);
		}
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
		$this->TStudent->id = $id;
		if (!$this->TStudent->exists()) {
			throw new NotFoundException(__('Invalid t student'));
		}
		if ($this->TStudent->delete()) {
			$this->Session->setFlash(__('T student deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('T student was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
