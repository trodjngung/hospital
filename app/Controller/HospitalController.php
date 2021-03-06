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
App::uses('Folder', 'Utility');

class HospitalController extends AppController{
    public $uses = array('Patient', 'Template','PatientImage');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->layout = 'hospital';
        
        // $this->Auth->allow('receive');
	}

	public function index(){
		$this->set ( 'title_for_layout', __ ( 'Bệnh viện' ) );
	}

	public function add(){
        $this->set ( 'title_for_layout', __ ( 'Thêm mới bệnh nhân' ) );
        if ($this->request->is('post')) {
            $dsPatient = $this->Patient->getDataSource();
            $dsPatientImage = $this->PatientImage->getDataSource();
            
            $dsPatient->begin($this);
            $dsPatientImage->begin($this);

            $this->Patient->create();
            $this->PatientImage->create();

            $patient_id_max = $this->Patient->getListMax();
            $patient_id = $patient_id_max[0][0]["id"]+1;
            
            $saveFlag = $this->savePatient($this->request->data, $patient_id, 'add');

            if ($saveFlag) {
                $dsPatient->commit($this);
                $dsPatientImage->commit($this);
                $this->Session->setFlash(
                    'Hồ sơ bệnh nhân đã được lưu.',
                    'default',
                    array('class' => 'succes')
                );
                return $this->redirect(array('action' =>'view_patient', $patient_id));
            }
            $dsPatient->rollback($this);
            $dsPatientImage->rollback($this);
            $this->Session->setFlash(
                'Hồ sơ bệnh nhân lưu thất bại. Vui lòng thử lại sau.',
                'default',
                array('class' => 'error')
            );
        }
	}

    public function delete($id) {
        if (!$this->request->isGet()) {
            throw new MethodNotAllowedException();
        }

        $this->Patient->id = $id;
        if (!$this->Patient->exists()) {
            throw new NotFoundException(__('Bệnh nhân không tồn tại.'));
        }
        if ($this->Patient->delete($id)) {
            $this->Session->setFlash(
                'Xóa bệnh nhân thành công.',
                'default',
                array('class' => 'succes')
            );
        } else {
            $this->Session->setFlash(
                'Xóa bệnh nhân thất bại, vui lòng thử lại.',
                'default',
                array('class' => 'error')
            );
        }
        return $this->redirect(array('action' => 'receive'));
    }

    public function view_patient($id = null) {
        $this->set ( 'title_for_layout', __ ( 'Xem bệnh nhân' ) );
        $this->Patient->id = $id;
        if (!$this->Patient->exists()) {
            $this->Session->setFlash(
                'Bệnh nhân không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('action' => 'list_hospital'));
        }
        $patient = $this->Patient->findById($id);
        $this->set('patient', $patient);
        $template = $this->Template->getAllTemplates();
        $this->set('templates', $template);
    }

	public function edit($id = null) {
        $this->set ( 'title_for_layout', __ ( 'Chỉnh sửa bệnh nhân' ) );
        $this->Patient->id = $id;
        if (!$this->Patient->exists()) {
            $this->Session->setFlash(
                'Bệnh nhân không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('action' => 'list_hospital'));
        }
        // $this->Patient->set($this->request->data);
        if ($this->Patient->validates()) {
            if ($this->request->is('staff') || $this->request->is('put')) {

                $dsPatient = $this->Patient->getDataSource();
                $dsPatientImage = $this->PatientImage->getDataSource();

                $dsPatient->begin($this);
                $dsPatientImage->begin($this);

                $saveFlag = $this->savePatient($this->request->data, $id, 'edit');

                if ($saveFlag) {
                    $dsPatient->commit($this);
                    $dsPatientImage->commit($this);
                    $this->Session->setFlash(
                        'Hồ sơ bệnh nhân đã được lưu.',
                        'default',
                        array('class' => 'succes')
                    );
                    return $this->redirect(array('action' =>'view_patient', $id));
                }
                $dsPatient->rollback($this);
                $dsPatientImage->rollback($this);
                $this->Session->setFlash(
                    'Hồ sơ bệnh nhân lưu thất bại. Vui lòng thử lại sau.',
                    'default',
                    array('class' => 'error')
                );
            }
        } else {
            $errors = $this->Patient->validationErrors;
            $this->set('errors', $errors);
        }
        $patientImgs = $this->PatientImage->getByPatientId($id);
        $this->set('patient', $this->Patient->findById($id));
        $this->set('patientImgs', $patientImgs);
    }


	public function overview(){
		$this->set ( 'title_for_layout', __ ( 'Tổng quan' ) );
	}

public function info(){
		$this->set ( 'title_for_layout', __ ( 'Thông tin' ) );
	}

	public function receive(){
		$this->set ( 'title_for_layout', __ ( 'Tiếp nhận bệnh nhân' ) );
		$this->Patient->recursive = 0;
        $this->set('patients', $this->paginate());
	}

	public function conclusion(){
		$this->set ( 'title_for_layout', __ ( 'Kết quả' ) );
$this->Patient->recursive = 0;
        $this->set('patients', $this->paginate());
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
    
    public function getTemplateById($template_id = null) {
        $template = $this->Template->getTemplateById($template_id);
        $myjson = $this->my_json_encode($template);
        echo $myjson;
        exit;
    }

    function updateKetluan($id) {
        $this->Patient->id = $id;
        if (!$this->Patient->exists()) {
            $this->Session->setFlash(
                'Bệnh nhân không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('action' => 'list_hospital'));
        }

        if ($this->request->is('staff') || $this->request->is('put')) {
            $requestData['Patient']['id'] = $id;
            $requestData['Patient']['ketluan'] = $this->request->data['ketluan'];
            if ($this->Patient->save($requestData['Patient'])) {
                $this->Session->setFlash(
                    'Hồ sơ bệnh nhân đã được lưu.',
                    'default',
                    array('class' => 'succes')
                );
            }
        } else {
            $this->Session->setFlash(
                'Hồ sơ bệnh nhân lưu thất bại. Vui lòng thử lại.',
                'default',
                array('class' => 'error')
            );
        }
        return $this->redirect(array('action' =>'view_patient', $id));
    }

    public function savePatient($data, $patient_id, $function)
    {
        $requestData['Patient'] = $data['Patient'];
        $requestData['Patient']['id'] = $patient_id;
        if ($function == 'add') {
            $requestData['Patient']['trangthai'] = "Chưa khám";
        } else {
            $requestData['Patient']['trangthai'] = "Đã khám";
        }

        if (isset($this->request->data['Patient']['danhmuc'])) {
            $requestData['Patient']['danhmuc'] = implode(", ", $this->request->data['Patient']['danhmuc']);
        }

        $saveFlag = $this->Patient->save($requestData['Patient']);

        if ($saveFlag) {
            $requestData['PatientImage'] = $data['PatientImage'];
            $patientImageData = array();
            $folderName = date("mY",time());
            if (!file_exists(PRODUCT_IMG_FOLDER.DS.$folderName)) {
                $dir = new Folder(PRODUCT_IMG_FOLDER.DS.$folderName, true, 0777);
            }

            $tmpImage = array();
            if ($function == 'edit' && isset($requestData['PatientImage']["img_remove_id"])) {
                foreach ($requestData['PatientImage']["img_remove_id"] as $key => $value) {
                    $this->PatientImage->id = $value;
                    if (!$this->PatientImage->exists()) {
                        continue;
                    }
                    $oldPatientImg = $this->PatientImage->findById($value);
                    $saveFlag = $this->PatientImage->delete();
                    if (!$saveFlag) {
                        break;
                    } else {
                        $this->removeImg(PRODUCT_IMG_FOLDER.DS.$oldPatientImg['PatientImage']['image_url']);
                    }
                }
            }
            if ($saveFlag && $requestData['PatientImage']['image'][0]['tmp_name'] != '') {
                foreach ($requestData['PatientImage']['image'] as $key => $value) {
                    $patientImageData[$key]['PatientImage']['patient_id'] = $patient_id;
                    $patientImageData[$key]['PatientImage']['image_url'] = $folderName . DS . $value['name'];
                    $tmpImage[$key]['name'] = $value['name'];
                    $tmpImage[$key]['tmp_name'] = $value['tmp_name'];
                }
                $saveFlag = $this->PatientImage->saveMany($patientImageData);   

                if ($saveFlag) {
                    foreach ($tmpImage as $key => $value) {
                        move_uploaded_file(
                            $value['tmp_name'], 
                            PRODUCT_IMG_FOLDER.DS.$folderName . DS . $value['name']
                        );
                    }
                }
            }
        }
        return $saveFlag;
    }

    function my_json_encode($phparr)
    {
        return json_encode($phparr);
    }

    function removeImg($file_path = null) {
        unlink($file_path);
    }
}
?>