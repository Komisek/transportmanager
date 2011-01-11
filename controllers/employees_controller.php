<?php
class EmployeesController extends AppController {

	var $name = 'Employees';



	/*function login() {
        if ($this->Session->read('Auth.User')) {
		$this->Session->setFlash('You are logged in!');
		$this->redirect('/', null, false);
	}
        }

        function logout() {
         //Leave empty for now.
        }*/



        function index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->paginate());
	}

        function engine_drivers_index() {
		$this->Employee->recursive = 0;
                $this->paginate = array(
                    'Employee' => array(
                        'conditions' => array('Employee.role_id' => 7)
                    )
                );
		$this->set('employees', $this->paginate('Employee'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid employee', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('employee', $this->Employee->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Employee->create();
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('The employee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.', true));
			}
		}
		$roles = $this->Employee->Role->find('list');
		$this->set(compact('roles'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid employee', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('The employee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Employee->read(null, $id);
		}
		$roles = $this->Employee->Role->find('list');
		$this->set(compact('roles'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for employee', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Employee->delete($id)) {
			$this->Session->setFlash(__('Employee deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Employee was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>