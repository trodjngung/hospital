<?php
/**
  * This file is manage all user, login, logout systems.
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Everything Copy are infringe copyright and must to have take full responsibility before law.
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để quản lí tất cả các người dùng, đăng nhập và thoát.
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Mọi sao chép đều là vi phạm quyền sở hữu trí tuệ và phải chịu trách nhiệm trước pháp luật.
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/
?>
<?php
// app/Controller/UsersController.php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public $uses = array('User', 'SelectOption');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'hospital';  

        $this->Auth->allow('login', 'register');
    }

    public function login() {
        $this->layout = 'admin';  
        if ($this->Auth->loggedIn()) {
            return $this->redirect( $this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->setFlash(
                'Tên đăng nhập hoặc password sai, vui lòng thử lại.',
                'default',
                array('class' => 'error')
            );
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
	
    public function index() {
        // $this->isAdmin();
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
    public function register() {
        $this->layout = 'admin';
        if ($this->Auth->loggedIn()) {
            return $this->redirect( $this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                return $this->redirect(array('action' =>'login'));
            }
            $this->Session->setFlash(
                'Không thể tạo tài khoản. Vui lòng thử lại sau.',
                'default',
                array('class' => 'error')
            );
        }
        $userRole = $this->SelectOption->getOptionByColumnName('user_role');
        $this->set('user_roles', $userRole);
    }
    public function view($id = null) {
    	$this->User->id = $id;
    	if (!$this->User->exists()) {
    		$this->Session->setFlash(
                'Tài khoản không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('action' => 'index'));
    	}
    	$this->set('user', $this->User->read(null, $id));
    }
    public function edit($id = null) {
        // $this->isAdmin();    
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash(
                'Tài khoản không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('action' => 'index'));
        }
        $this->User->set($this->request->data);
        if ($this->User->validates()) {
            if ($this->request->is('staff') || $this->request->is('put')) {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(
                        'Cập nhật tài khoản thành công.',
                        'default',
                        array('class' => 'succes')
                    );
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(
                    'Không thể cập nhật tài khoản. Vui lòng thử lại sau.',
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
        $userRole = $this->SelectOption->getOptionByColumnName('user_role');
        $this->set('user_roles', $userRole);
        $this->set('user', $this->User->read(null, $id));
    }
    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->isAdmin();
        if ($this->Auth->user('id') == $id) {
            $this->redirect(array('controller' => 'hospital', 'action' => 'index'));
        }
        
        if (!$this->request->isGet()) {
            throw new MethodNotAllowedException();
        }

        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash(
                'Tài khoản không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('action' => 'index'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(
                'Xóa tài khoản thành công.',
                'default',
                array('class' => 'succes')
            );
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(
                'Không thể xóa tài khoản. Vui lòng thử lại sau.',
                'default',
                array('class' => 'error')
            );
        return $this->redirect(array('action' => 'index'));
    }

    public function isAdmin()
    {
        $user_id = $this->Auth->user('id');
        $user_data =$this->User->read(null, $user_id,'User');

        if ($user_data["role"] != 'admin') {
            $this->redirect(array('controller' => 'hospital', 'action' => 'index'));
        }
    }
}
?>