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
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    var $name = 'User';
    public $validate = array(
        'username' => array(
            'unique' => array(
                'rule' => 'isUnique',
                'required' => 'create',
                'message' => 'Your username was exists'
            ),
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please enter a username.',
            ),
            'between' => array(
                'rule' => array('lengthBetween', 5, 15),
                'message' => 'Your username must be between 5 to 15 characters'
            )
        ),
        'password' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please enter a password.',
            ),
            'length' => array(
                'rule'      => array('between', 6, 40),
                'message'   => 'Your password must be between 6 and 40 characters.',
            )
        ),
        'password_confirm' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please enter password confirm.',
            ),
            'length' => array(
                'rule'      => array('between', 6, 40),
                'message'   => 'Your password confirm must be between 6 and 40 characters.',
            ),
            'compare'    => array(
                'rule'      => array('validate_passwords'),
                'message'   => 'The passwords you entered do not match.',
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }

    public function validate_passwords() {
        return $this->data[$this->alias]['password'] === $this->data[$this->alias]['password_confirm'];
    }
}