<?php
App::uses('AppController', 'Controller');
/**
 * Emails Controller
 *
 * @property Email $Email
 * @property PaginatorComponent $Paginator
 */
class EmailsController extends AppController {

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
		$this->Email->recursive = 0;
		$this->set('emails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Email->exists($id)) {
			throw new NotFoundException(__('Email não foi encontrado'));
		}
		$options = array('conditions' => array('Email.' . $this->Email->primaryKey => $id));
		$this->set('email', $this->Email->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Email->create();
			if ($this->Email->save($this->request->data)) {
				$this->Session->setFlash(__('Email salvo com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Email não pode ser salvo. Tente novamente'));
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
		if (!$this->Email->exists($id)) {
			throw new NotFoundException(__('Email não foi encontrado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Email->save($this->request->data)) {
				$this->Session->setFlash(__('Email salvo com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Email não pode ser salvo. Tente novamente'));
			}
		} else {
			$options = array('conditions' => array('Email.' . $this->Email->primaryKey => $id));
			$this->request->data = $this->Email->find('first', $options);
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
		$this->Email->id = $id;
		if (!$this->Email->exists()) {
			throw new NotFoundException(__('Email não foi encontrado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Email->delete()) {
			$this->Session->setFlash(__('Email removido com sucesso'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Email não pode ser removido'));
		return $this->redirect(array('action' => 'index'));
	}
}
