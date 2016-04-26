<?php
/**
* This file is manage application Hospital.
* Developed by PHP language program, use Framework Cakephp.
* Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
* Everything Copy are infringe copyright and must to have take full responsibility before law.
* Short name: OREGON CO.,LTD
* Website: http://vietoregon-tech.com/?lang=eng
* Email: vietoregon.tech.com@gmail.com
* Thanks and best regard !
* —————————————————————————————————————
* Đây là file dùng để quản lí ứng dụng bệnh viện.
* Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
* Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
* Mọi sao chép đều là vi phạm quyền sở hữu trí tuệ và phải chịu trách nhiệm trước pháp luật.
* Tên ngắn giao dịch: OREGON CO.,LTD
* Website: http://vietoregon-tech.com/?lang=vn
* Địa chỉ Email: vietoregon.tech.com@gmail.com
* Cám ơn quý đối tác !
**/

// app/Controller/HospitalController.php
App::uses('AppController', 'Controller');

class HospitalController extends AppController{
    public $uses = array('Patient');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->layout = 'hospital';
	}

	public function index(){
		$this->set ( 'title_for_layout', __ ( 'Bệnh viện' ) );
	}

	public function add(){
		$this->set ( 'title_for_layout', __ ( 'Thêm mới bệnh nhân' ) );
		if ($this->request->is('post')) {
		$this->request->data["Patient"]["trangthai"] = "chưa khám";
                $this->request->data["Patient"]["danhmuc"]=implode(",", $this->request->data["Patient"]["danhmuc"]);

            $this->Patient->create();
            if ($this->Patient->save($this->request->data)) {
            
                $this->Session->setFlash(
                    'Hồ sơ bệnh nhân đã được lưu.',
                    'default',
                    array('class' => 'succes')
                );
                return $this->redirect(array('action' =>'receive'));
            }
            $this->Session->setFlash(
                'Hồ sơ bệnh nhân lưu thất bại. Vui lòng thử lại sau.',
                'default',
                array('class' => 'error')
            );
        }
	}
public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Patient->delete($id)) {
        $this->Flash->success(
            __('The post with id: %s has been deleted.', h($id))
        );
    } else {
        $this->Flash->error(
            __('The post with id: %s could not be deleted.', h($id))
        );
    }

    return $this->redirect(array('action' => 'receive'));
}
public function view_patient($id = null) {
if (!$id) {
            return false;
        }
        $this->set ( 'title_for_layout', __ ( 'Xem bệnh nhân' ) );
        $Patient = $this->Patient->findById($id);
       
        $this->set('patient', $Patient);
}

	public function edit($id = null) {
        $this->set ( 'title_for_layout', __ ( 'Chỉnh sửa bệnh nhân' ) );
        $this->Patient->id = $id;
        if (!$this->Patient->exists()) {
            throw new NotFoundException(__('Bệnh nhân không tồn tại.'));
        }
        $this->Patient->set($this->request->data);
        if ($this->Patient->validates()) {
            if ($this->request->is('staff') || $this->request->is('put')) {
$this->request->data["Patient"]["danhmuc"]=implode(",", $this->request->data["Patient"]["danhmuc"]);
                if ($this->Patient->save($this->request->data)) {
                    $this->Session->setFlash(
                        'Cập nhật hồ sơ bệnh án thành công.',
                        'default',
                        array('class' => 'succes')
                    );
                    return $this->redirect(array('action' => 'receive'));
                }
                $this->Session->setFlash(
                    'Cập nhật hồ sơ bệnh án không thành công. Vui lòng thử lại sau.',
                    'default',
                    array('class' => 'error')
                );
            }
        } else {
            $errors = $this->Patient->validationErrors;
            $this->set('errors', $errors);
        }
        $this->set('patient', $this->Patient->read(null, $id));
    }


	public function overview(){
		$this->set ( 'title_for_layout', __ ( 'Tổng quan' ) );
	}

	public function receive(){
		$this->set ( 'title_for_layout', __ ( 'Tiếp nhận bệnh nhân' ) );
		$this->Patient->recursive = 0;
        $this->set('patients', $this->paginate());
	}

	public function conclusion(){
		$this->set ( 'title_for_layout', __ ( 'Kết quả' ) );
	}

	public function list_hospital(){
		$this->set ( 'title_for_layout', __ ( 'Danh sách bệnh nhân' ) );
$this->Patient->recursive = 0;
        $this->set('patients', $this->paginate());
	}

	public function search_hospital(){
		$this->set ( 'title_for_layout', __ ( 'Tìm kiếm bệnh nhân ' ) );
	}

	public function manage_hospital(){
		$this->set ( 'title_for_layout', __ ( 'Quản lý' ) );
	}

	public function form_hospital(){
		$this->set ( 'title_for_layout', __ ( 'Mẫu' ) );
	}

	public function hethong(){
		$this->set ( 'title_for_layout', __ ( 'Hệ thống' ) );
	}

	public function makham(){
		$this->set ( 'title_for_layout', __ ( 'Mã Khám' ) );
	}

	public function giaodienquantri(){
		$this->set ( 'title_for_layout', __ ( 'Giao diện' ) );
	}
       
}
?>