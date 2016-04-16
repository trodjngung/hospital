<?php
/**
  * This file is managed all other Controller and setup language.
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để quản lí tất cả controller khác và cài đặt ngôn ngữ . 
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/

App::uses ( 'Controller', 'Controller' );

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 */
class AppController extends Controller {
	public $components = array(
        'Session',
        'Cookie',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'hospital',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish',
                    'fields' => array(
	                  'username' => 'username', //Default is 'username' in the userModel
	                  'password' => 'password'  //Default is 'password' in the userModel
	                )
                )
            )
        )
    );
	private $__standardLanguage = array('vn','eng','jpn');
    
	private function __switch_lang() {
		if(isset ( $this->request->query ['lang'] )){
			if (in_array($this->request->query ['lang'], $this->__standardLanguage)) {
				if (! $this->Session->check ( 'Config.language' )) {
					// Set language with query ?lang=xxx
					$this->Session->write ( 'Config.language', $this->request->query ['lang'] );
					$this->Cookie->write ( 'lang', $this->request->query ['lang'], false, '20 days' );
				}elseif ($this->request->query ['lang'] != $this->Session->read ( 'Config.language' )){
					// Change language using query ?lang=xxx
					$this->Session->write ( 'Config.language', $this->request->query ['lang'] );
					$this->Cookie->write ( 'lang', $this->request->query ['lang'], false, '20 days' );
				}
			}else{
				// Set default language (English)
				$this->Session->write ( 'Config.language', 'eng' );
				$this->Cookie->write ( 'lang', 'eng', false, '20 days' );
			}
		}else{
			if (!$this->Session->check ( 'Config.language' ) && !$this->Cookie->read ( 'lang' )) {
				// Set default language (English)
				$this->Session->write ( 'Config.language', 'eng' );
				$this->Cookie->write ( 'lang', 'eng', false, '20 days' );
			}elseif ($this->Cookie->read ( 'lang' ) && ! $this->Session->check ( 'Config.language' )) {
				// Set language with Cookie
				$this->Session->write ( 'Config.language', $this->Cookie->read ( 'lang' ) );
			}
		}
	}
	
	public function beforeFilter() {
		$this->__switch_lang ();
        $this->layout = 'default';
    }

	function beforeRender() {
        $this->set('auth', $this->Auth->user());
		$this->set('base_url', 'http://'.$_SERVER['SERVER_NAME'].Router::url('/'));
	}
}
