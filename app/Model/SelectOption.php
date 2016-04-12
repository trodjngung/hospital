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

// app/Model/User.php
App::uses('AppModel', 'Model');

class SelectOption extends AppModel {
    var $name = 'SelectOption';

    function getOptionByColumnName($column_name = null) {
        $options['fields'] = array(
            'SelectOption.select_code',
        );
        $options['conditions']['SelectOption.column_name ='] = $column_name;
        $options['conditions']['SelectOption.del_flag ='] = 'N';
        $options['order'] = array(
            'SelectOption.display_order'
        );
        return $this->find('all', $options);
    }
}