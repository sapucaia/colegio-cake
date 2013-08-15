<?php
App::uses('AppController', 'Controller');
/**
 * Galeria Controller
 *
 * @property Galerium $Galerium
 * @property PaginatorComponent $Paginator
 */
class GaleriaController extends AppController {

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
		$this->Galerium->recursive = 0;
		$this->set('galeria', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Galerium->exists($id)) {
			throw new NotFoundException(__('Galeria não foi encontrado'));
		}
		$options = array('conditions' => array('Galerium.' . $this->Galerium->primaryKey => $id));
		$this->set('galerium', $this->Galerium->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Galerium->create();
			if ($this->Galerium->save($this->request->data)) {
				$this->Session->setFlash(__('Galeria salva com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Galeria não pode ser salva. Tente novamente'));
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
		if (!$this->Galerium->exists($id)) {
			throw new NotFoundException(__('Galeria não foi encontrado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Galerium->save($this->request->data)) {
				$this->Session->setFlash(__('Galeria salva com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Galeria não pode ser salva. Tente novamente'));
			}
		} else {
			$options = array('conditions' => array('Galerium.' . $this->Galerium->primaryKey => $id));
			$this->request->data = $this->Galerium->find('first', $options);
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
		$this->Galerium->id = $id;
		if (!$this->Galerium->exists()) {
			throw new NotFoundException(__('Galeria não foi encontrado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Galerium->delete()) {
			$this->Session->setFlash(__('Galeria removida com sucesso'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Galeria não foi removida'));
		return $this->redirect(array('action' => 'index'));
	}
}
