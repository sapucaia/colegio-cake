<?php
App::uses('AppController', 'Controller');
/**
 * Fotos Controller
 *
 * @property Foto $Foto
 * @property PaginatorComponent $Paginator
 */
class FotosController extends AppController {

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
		$this->Foto->recursive = 0;
		$this->set('fotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Foto->exists($id)) {
			throw new NotFoundException(__('Foto não foi encontrada'));
		}
		$options = array('conditions' => array('Foto.' . $this->Foto->primaryKey => $id));
		$this->set('foto', $this->Foto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Foto->create();
			if ($this->Foto->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Foto não pode ser salva. Tente novamente'));
			}
		}
		$galerias = $this->Foto->Galeria->find('list');
		$this->set(compact('galerias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Foto->exists($id)) {
			throw new NotFoundException(__('Foto não foi encontrada'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Foto->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Foto não pode ser salva. Tente novamente'));
			}
		} else {
			$options = array('conditions' => array('Foto.' . $this->Foto->primaryKey => $id));
			$this->request->data = $this->Foto->find('first', $options);
		}
		$galerias = $this->Foto->Galerium->find('list');
		$this->set(compact('galerias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Foto->id = $id;
		if (!$this->Foto->exists()) {
			throw new NotFoundException(__('Foto não foi encontrada'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Foto->delete()) {
			$this->Session->setFlash(__('Foto removida com sucesso'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('A foto não pode ser removida'));
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Foto->recursive = 0;
		$this->set('fotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Foto->exists($id)) {
			throw new NotFoundException(__('Invalid foto'));
		}
		$options = array('conditions' => array('Foto.' . $this->Foto->primaryKey => $id));
		$this->set('foto', $this->Foto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Foto->create();
			if ($this->Foto->save($this->request->data)) {
				$this->Session->setFlash(__('The foto has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foto could not be saved. Please, try again.'));
			}
		}
		$galerias = $this->Foto->Galerium->find('list');
		$this->set(compact('galerias'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Foto->exists($id)) {
			throw new NotFoundException(__('Invalid foto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Foto->save($this->request->data)) {
				$this->Session->setFlash(__('The foto has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foto.' . $this->Foto->primaryKey => $id));
			$this->request->data = $this->Foto->find('first', $options);
		}
		$galerias = $this->Foto->Galerium->find('list');
		$this->set(compact('galerias'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Foto->id = $id;
		if (!$this->Foto->exists()) {
			throw new NotFoundException(__('Invalid foto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Foto->delete()) {
			$this->Session->setFlash(__('Foto deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Foto was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
