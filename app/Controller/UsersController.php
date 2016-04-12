<?php
/**
  * This file is manage all user, login, logout systems.
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để quản lí tất cả các người dùng, đăng nhập và thoát.
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/

// app/Controller/UsersController.php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public $uses = array('User');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';  

        $this->Auth->allow('login', 'register', 'edit');
    }

    public function login() {
        if ($this->Auth->loggedIn()) {
            return $this->redirect( $this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->setFlash(
                'Invalid username or password, try again.',
                'default',
                array('class' => 'error')
            );
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
	
    public function index() {
        $this->isAdmin();
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
    public function register() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(
                    'The user has been saved.',
                    'default',
                    array('class' => 'succes')
                );
                return $this->redirect(array('action' =>'login'));
            }
            $this->Session->setFlash(
                'The user could not be saved. Please, try again.',
                'default',
                array('class' => 'error')
            );
        }
    }
    public function view($id = null) {
    	$this->User->id = $id;
    	if (!$this->User->exists()) {
    		throw new NotFoundException(__('Invalid user'));
    	}
    	$this->set('user', $this->User->read(null, $id));
    }
    public function edit($id = null) {
        // $this->isAdmin();    
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->User->set($this->request->data);
        if ($this->User->validates()) {
            if ($this->request->is('staff') || $this->request->is('put')) {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(
                        'The user has been saved.',
                        'default',
                        array('class' => 'succes')
                    );
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(
                    'The user could not be saved. Please, try again.',
                    'default',
                    array('class' => 'error')
                );
            } else {
                $this->request->data = $this->User->read(null, $id);
                unset($this->request->data['User']['password']);
            }
        } else {
            $errors = $this->User->validationErrors;
            $this->set('errors', $errors);
        }
        $this->set('user', $this->User->read(null, $id));
    }
    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->isAdmin();
        if ($this->Auth->user()['id'] == $id) {
            $this->redirect(array('controller' => 'documents', 'action' => 'manage'));
        }
        
        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(
                'User deleted.',
                'default',
                array('class' => 'succes')
            );
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(
                'User was not deleted.',
                'default',
                array('class' => 'error')
            );
        return $this->redirect(array('action' => 'index'));
    }
    public function isAdmin()
    {
        $user_id = $this->Auth->user()['id'];
        $user_data =$this->User->read(null, $user_id)['User'];

        if ($user_data["role"] != 'admin') {
            $this->redirect(array('controller' => 'documents', 'action' => 'manage'));
        }
    }
}