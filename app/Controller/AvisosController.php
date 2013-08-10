<?php
App::uses('AppController', 'Controller');
/**
 * Avisos Controller
 *
 * @property Aviso $Aviso
 * @property PaginatorComponent $Paginator
 */
class AvisosController extends AppController {

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
		$this->Aviso->recursive = 0;
		$this->set('avisos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Aviso->exists($id)) {
			throw new NotFoundException(__('Aviso não foi encontrado'));
		}
		$options = array('conditions' => array('Aviso.' . $this->Aviso->primaryKey => $id));
		$this->set('aviso', $this->Aviso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aviso->create();
			if ($this->Aviso->save($this->request->data)) {
				$this->Session->setFlash(__('Aviso salvo com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Aviso não pode ser salvo. Tente novamente'));
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
		if (!$this->Aviso->exists($id)) {
			throw new NotFoundException(__('Aviso não foi encontrado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aviso->save($this->request->data)) {
				$this->Session->setFlash(__('Aviso salvo com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O aviso não pode ser salvo. Tente novamente'));
			}
		} else {
			$options = array('conditions' => array('Aviso.' . $this->Aviso->primaryKey => $id));
			$this->request->data = $this->Aviso->find('first', $options);
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
		$this->Aviso->id = $id;
		if (!$this->Aviso->exists()) {
			throw new NotFoundException(__('Aviso não foi encontrado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Aviso->delete()) {
			$this->Session->setFlash(__('Aviso removido com sucesso'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aviso não foi removido'));
		return $this->redirect(array('action' => 'index'));
	}
}
