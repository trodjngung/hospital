<?php
/**
  * This file is …….
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để ……. 
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/

// app/Controller/TemplatesController.php
App::uses('AppController', 'Controller');

class TemplatesController extends AppController {

    public $uses = array('Template');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'hospital';  

        $this->Auth->allow();
    }

    public function index() {
        $template = $this->Template->getAllTemplates();
        $this->set('templates', $template);
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->Template->create();
            if ($this->Template->save($this->request->data)) {
                $this->Session->setFlash(
                    'Lưu bản mẫu thành công.',
                    'default',
                    array('class' => 'succes')
                );
                return $this->redirect(array('action' =>'index'));
            }
            $this->Session->setFlash(
                'Không thể lưu bản mẫu, vui lòng thử lại.',
                'default',
                array('class' => 'error')
            );
        }
    }
    public function view($id = null) {
        $template = $this->Template->getTemplateById($id);
        if (count($template) == 0) {
            $this->Session->setFlash(
                'Bản mẫu này không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('action' => 'index'));
        }
    	$this->set('template', $template);
    }
    public function edit($id = null) {
        $template = $this->Template->getTemplateById($id);
        if (count($template) == 0) {
            $this->Session->setFlash(
                'Bản mẫu này không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('action' => 'index'));
        }
        $this->Template->set($this->request->data);
        if ($this->Template->validates()) {
            if ($this->request->is('staff') || $this->request->is('put')) {
                if ($this->Template->save($this->request->data)) {
                    $this->Session->setFlash(
                        'Lưu bản mẫu thành công.',
                        'default',
                        array('class' => 'succes')
                    );
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(
                    'Không thể lưu bản mẫu, vui lòng thử lại.',
                    'default',
                    array('class' => 'error')
                );
            }
        } else {
            $errors = $this->Template->validationErrors;
            $this->set('errors', $errors);
        }

        $this->set('template', $template);
    }
    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');
        if (!$this->request->isGet()) {
            throw new MethodNotAllowedException();
        }

        $template = $this->Template->getTemplateById($id);
        if (count($template) == 0) {
            $this->Session->setFlash(
                'Bản mẫu này không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('action' => 'index'));
        }
        $template['Template']['del_flag'] = 'Y';
        $template['Template']['modified'] = date("Y-m-d H:i:s",time());
        if ($this->Template->save($template)) {
            $this->Session->setFlash(
                'Xóa bản mẫu thành công.',
                'default',
                array('class' => 'succes')
            );
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(
                'Xóa bản mẫu thất bại, vui lòng thử lại sau.',
                'default',
                array('class' => 'error')
            );
        return $this->redirect(array('action' => 'index'));
    }

    public function isAdmin()
    {
        $user_id = $this->Auth->user()['id'];
        $user_data =$this->Template->read(null, $user_id)['User'];

        if ($user_data["role"] != 'admin') {
            $this->redirect(array('controller' => 'templates', 'action' => 'manage'));
        }
    }
}