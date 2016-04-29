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

// app/Model/Template.php
App::uses('AppModel', 'Model');

class Template extends AppModel {
    var $name = 'Template';
    public $validate = array(
    );

    function getAllTemplates() {
      $options['fields'] = array(
            'Template.*',
        );
        $options['conditions']['Template.del_flag ='] = 'N';
        $options['order'] = array(
            'Template.created'
        );
        return $this->find('all', $options);
    }

    function getTemplateById($id = null) {
        $options['fields'] = array(
            'Template.*',
        );
        $options['conditions']['Template.id ='] = $id;
        $options['conditions']['Template.del_flag ='] = 'N';
        return $this->find('first', $options);
    }
}