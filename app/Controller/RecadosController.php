<?php
App::uses('AppController', 'Controller');
/**
 * Recados Controller
 *
 * @property Recado $Recado
 * @property PaginatorComponent $Paginator
 */
class RecadosController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Js');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Recado->recursive = 0;
		$this->set('recados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Recado->exists($id)) {
			throw new NotFoundException(__('Recado não encontrado'));
		}
		$options = array('conditions' => array('Recado.' . $this->Recado->primaryKey => $id));
		$this->set('recado', $this->Recado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Recado->create();
			if ($this->Recado->save($this->request->data)) {
				$this->Session->setFlash(__('Recado salvo com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O recado não pode ser salvo. Tente novamente'));
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
		if (!$this->Recado->exists($id)) {
			throw new NotFoundException(__('Recado não encontrado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Recado->save($this->request->data)) {
				$this->Session->setFlash(__('Recado salvo com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O recado não pode ser salvo. Tente novamente'));
			}
		} else {
			$options = array('conditions' => array('Recado.' . $this->Recado->primaryKey => $id));
			$this->request->data = $this->Recado->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Recado->id = $id;
		if (!$this->Recado->exists()) {
			throw new NotFoundException(__('Recado não encontrado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Recado->delete()) {
			$this->Session->setFlash(__('Recado removido com sucesso'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O recado não foi removido'));
		return $this->redirect(array('action' => 'index'));
	}
}
