<?php
/**
  * This file is manage all document that is upload by admin, author.
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để quản lí tất cả các tài liệu được tải lên bởi nguời quản trị, biên tập viên. 
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/

// app/Controller/DocumentsController.php
App::uses('AppController', 'Controller');
class DocumentsController extends AppController{

    public $uses = array('User', 'Document', 'SelectOption');

	public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';  

        $this->Auth->allow('index', 'download');
    }

	// Index
	public function index() {
        $this->layout = 'default';
        $this->set('documents', $this->Document->find('all'));
	}

  public function manage() {
        $this->set('documents', $this->Document->find('all'));
  }
	
	//Upload file
	public function upload(){
    	if ($this->request->is('post') || $this->request->is('put')) {
			$this->Document->set($this->request->data);
	        if ($this->Document->validates()) {
				$file = $this->request->data['Document'];
				$request_data = array();
				$request_data['Document']['filename'] = $file['filename'];

                $class_name = '';
                if (isset($file['class_name'])) {
                    $class_name = implode(', ', $file['class_name']);
                }

                $teacher_name = '';
                if (isset($file['teacher_name'])) {
                    $teacher_name = implode(', ', $file['teacher_name']);
                }

				$request_data['Document']['class_name'] = $class_name;
				$request_data['Document']['teacher_name'] = $teacher_name;
				$request_data['Document']['filepath'] = $file['file']['name'];
				$request_data['Document']['note'] = $file['note'];
                $request_data['Document']['user_id'] = $file['user_id'];
				$request_data['Document']['extension'] = $file['file']['type'];

				move_uploaded_file($file['file']['tmp_name'], WWW_ROOT.'files'.DS . $file['file']['name']);
				if ($this->Document->save($request_data)) {
					$this->Session->setFlash(
                        'Upload file succes!',
                        'default',
                        array('class' => 'succes')
                    );
					return $this->redirect(array('controller' => 'documents','action' => 'manage'));
				}
	        } else {
	            $errors = $this->Document->validationErrors;
	            $this->set('errors', $errors);
	        } 
        }
        $this->set('class_names', $this->SelectOption->getOptionByColumnName('class'));
        $this->set('teacher_names', $this->SelectOption->getOptionByColumnName('teacher'));
	}

    public function download($id) {
        // Retrieve the file ready for download
        $data = $this->Document->findById($id);
        if (empty($data)) {
            throw new NotFoundException();
        }
        // Run any pre-download logic here.
        // Send file as response
        $this->response->file(
            WWW_ROOT.'files'.DS .$data['Document']['filepath'],
            array(
                'download' => true,
                'name' => $data['Document']['filepath']
            )
        );
        return $this->response;
    }
	
	public function refresh($id = null) {
        $document_data = $this->Document->findById($id);
        if (!$this->isAdmin() && $this->Auth->user()['id'] != $document_data['Document']['user_id']) {
            return $this->redirect(array('action' => 'manage'));
        }
        
        $this->Document->id = $id;
        $this->request->allowMethod('post');

        if (!$this->Document->exists()) {
            throw new NotFoundException(__('Invalid document'));
        }
        $request_data = array();
        $request_data['Document']['modified'] = date("Y-m-d H:i:s",time());

        if ($this->Document->save($request_data)) {
            $this->Session->setFlash(
                'The document has been refresh.',
                'default',
                array('class' => 'succes')
            );
        } else {
            $this->Session->setFlash(
                'The document could not be refresh. Please, try again.',
                'default',
                array('class' => 'error')
            );
        }
        return $this->redirect(array('action' => 'manage'));
    }

	public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');
		$document_data = $this->Document->findById($id);
        if (!$this->isAdmin() && $this->Auth->user()['id'] != $document_data['Document']['user_id']) {
	        return $this->redirect(array('action' => 'manage'));
        }
        $this->request->allowMethod('post');

        $this->Document->id = $id;
        if (!$this->Document->exists()) {
            throw new NotFoundException(__('Invalid document'));
        }
        if ($this->Document->delete()) {
            $this->Session->setFlash(
                'Document deleted.',
                'default',
                array('class' => 'succes')
            );
        } else {
            $this->Session->setFlash(
                    'Document was not deleted.',
                    'default',
                    array('class' => 'error')
                );
        }
        return $this->redirect(array('action' => 'manage'));
    }

	public function isAdmin()
    {
        $user_id = $this->Auth->user()['id'];
        $user_data = $this->User->read(null, $user_id)['User'];
        if ($user_data["role"] != 'admin') {
            return false;
        }
        return true;
    }
}

?>