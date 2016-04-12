<?php
/**
  * This file is managed all document from databases
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để quản lí tất cả tài liệu từ dữ liệu 
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/

// app/Model/User.php
App::uses('AppModel', 'Model');

class Document extends AppModel {
    var $name = 'Document';

    public $validate = array(
    	'filename' => array(
    		'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please enter file name.',
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'required' => 'create',
                'message' => 'File name was exists'
            ),
        ),
		'file' => array(
			'extension' => array(
				'rule' => array('extension', array('pdf', 'docx', 'doc', 'xls', 'ppt', 'pptx', 'txt')),
				'message' => 'Sorry, file are not allow to upload'
			),
		),
	);

    public function isUploadedFile($params) {
	    $val = array_shift($params);
	    if ((isset($val['error']) && $val['error'] == 0) ||
	        (!empty( $val['tmp_name']) && $val['tmp_name'] != 'none')
	    ) {
	        return is_uploaded_file($val['tmp_name']);
	    }
	    return false;
	}
}