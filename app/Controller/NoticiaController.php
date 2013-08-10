<?php
App::uses('AppController', 'Controller');
/**
 * Noticia Controller
 *
 * @property Noticium $Noticium
 * @property PaginatorComponent $Paginator
 */
class NoticiaController extends AppController {

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
		$this->Noticium->recursive = 0;
		$this->set('noticia', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Noticium->exists($id)) {
			throw new NotFoundException(__('Noticia não foi encontrada'));
		}
		$options = array('conditions' => array('Noticium.' . $this->Noticium->primaryKey => $id));
		$this->set('noticium', $this->Noticium->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Noticium->create();
			if ($this->Noticium->save($this->request->data)) {
				$this->Session->setFlash(__('Noticia salva com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A noticia não pode ser salva. Tente novamente'));
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
		if (!$this->Noticium->exists($id)) {
			throw new NotFoundException(__('Noticia não foi encontrada'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Noticium->save($this->request->data)) {
				$this->Session->setFlash(__('Noticia salva com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A noticia não pode ser salva. Tente novamente'));
			}
		} else {
			$options = array('conditions' => array('Noticium.' . $this->Noticium->primaryKey => $id));
			$this->request->data = $this->Noticium->find('first', $options);
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
		$this->Noticium->id = $id;
		if (!$this->Noticium->exists()) {
			throw new NotFoundException(__('Noticia não foi encontrada'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Noticium->delete()) {
			$this->Session->setFlash(__('Noticia removida com sucesso'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('A noticia não pode ser removida'));
		return $this->redirect(array('action' => 'index'));
	}
}
