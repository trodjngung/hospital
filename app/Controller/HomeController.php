<?php
/**
  * This file is to managed all action show to view
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để quản lí tất cả các hàm hiển thị tới người dùng
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/
  
App::uses ( 'AppController', 'Controller' );
App::uses ( 'CakeEmail', 'Network/Email' );
class HomeController extends AppController {
	public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
       // $this->Auth->allow();
    }
	public function top() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_1' ) );
		$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_1' ) );
		$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_1' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_1' ) );
	}
	public function news() {
		// $this->set ( 'title_for_layout', __ ( 'TITLE_11' ) );
		// $this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_11' ) );
		// $this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_11' ) );
		// $this->set ( 'topic_path', __ ( 'TOPIC_PATH_11' ) );
	}
	public function event() {
		// $this->set ( 'title_for_layout', __ ( 'TITLE_11' ) );
		// $this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_11' ) );
		// $this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_11' ) );
		// $this->set ( 'topic_path', __ ( 'TOPIC_PATH_11' ) );
	}
public function mission() {
		// $this->set ( 'title_for_layout', __ ( 'TITLE_11' ) );
		// $this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_11' ) );
		// $this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_11' ) );
		// $this->set ( 'topic_path', __ ( 'TOPIC_PATH_11' ) );
	}
	public function financials() {
		//$this->set ( 'title_for_layout', __ ( 'TITLE_14' ) );
		//$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_14' ) );
		//$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_14' ) );
		//$this->set ( 'topic_path', __ ( 'TOPIC_PATH_14' ) );
	}
public function contact_us() {
		//$this->set ( 'title_for_layout', __ ( 'TITLE_14' ) );
		//$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_14' ) );
		//$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_14' ) );
		//$this->set ( 'topic_path', __ ( 'TOPIC_PATH_14' ) );
	}
	public function readweb() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_16' ) );
		$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_16' ) );
		$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_16' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_16' ) );
	}
	public function wolfram() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_17' ) );
		$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_17' ) );
		$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_17' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_17' ) );
	}
	
	public function recruit() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_2' ) );
		$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_2' ) );
		$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_2' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_2' ) );
	}
	public function product() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_3' ) );
		$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_3' ) );
		$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_3' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_3' ) );
	}
	public function staff() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_4' ) );
		$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_4' ) );
		$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_4' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_4' ) );
	}
	public function about_us() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_5' ) );
		$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_5' ) );
		$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_5' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_5' ) );
	}
	public function contact() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_6' ) );
		$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_6' ) );
		$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_6' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_6' ) );
	}
	public function access() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_7' ) );
		$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_7' ) );
		$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_7' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_7' ) );
	}
	public function error() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_8' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_8' ) );
	}
	public function thanks_for_contact() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_9' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_9' ) );
	}
	public function thanks_for_recruit() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_10' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_10' ) );
		
		if (isset ( $_REQUEST ['submit'] )) {
			$this->set ( 'submit', true );
			$data = $_REQUEST;
			
			$email = new CakeEmail ();
			$email->config ( 'default' );
			$email->emailFormat ( 'text' );
			$email->template ( 'recruit', 'default' );
			$email->subject ( __ ( 'MAIL_RECRUIT_SUBJECT' ) );
			$email->viewVars ( $data );
			if ($_FILES ['cv'] ['name'] != "")
				$email->attachments ( array (
						$_FILES ['cv'] ['name'] => array (
								'file' => $_FILES ['cv'] ['tmp_name'] 
						) 
				) );
			
			if (Configure::read ( 'debug' ) == 0)
				$system_email = 'vietoregon.tech.com@gmail.com';
			else
				$system_email = 'vietoregon.tech.com@gmail.com';
				
				// Sent to system
			$email->to ( $system_email )->send ();
			
			// Sent to visitor
			if ($data ['email'] != "")
				$email->to ( $data ['email'] )->send ();
		}
	}
	public function ajax_contact() {
		$this->layout = false;
		$this->autoRender = false;
		
		$mail_subject = __ ( 'MAIL_CONTACT_SUBJECT' );
		$user_email_address = $this->request->data ['email'];
		$mail_content = $this->request->data;
		// send to TMH TechLab
		// switch email
		if (Configure::read ( 'debug' ) == 0) {
			$system_email = "vietoregon.tech.com@gmail.com";
		} else {
			$system_email = "vietoregon.tech.com@gmail.com";
		}
		// send mail
		if ($this->request->is ( 'post' )) {
			$email = new CakeEmail ();
			$email->config ( 'default' )->to ( array (
					$user_email_address,
					$system_email 
			) )->template ( 'contact', 'default' )->emailFormat ( 'text' )->subject ( $mail_subject )->viewVars ( $mail_content );
			if ($email->send ()) {
				$data = array (
						'status' => true,
						'name' => $mail_content ['name'],
						'email' => $mail_content ['email'],
						'phoneNumber' => $mail_content ['phoneNumber'],
						'company' => $mail_content ['company'],
						'division' => $mail_content ['division'],
						'position' => $mail_content ['position'],
						'contactType' => $mail_content ['contactType'],
						'note' => $mail_content ['note'] 
				);
				echo json_encode ( $data, array (
						'status' => true 
				) );
			} else {
				echo json_encode ( array (
						'status' => false 
				) );
			}
		}
	}
	public function ajax_apply() {
		$this->layout = false;
		$this->autoRender = false;
		
		$view = "";
		$layout = "";
		$mail_subject = __ ( 'MAIL_SUBJECT_2' );
		
		$email = new CakeEmail ();
		$email->config ( 'default' )->to ( "vietoregon.tech.com@gmail.com" )->template ( $view, $layout )->emailFormat ( 'text' )->subject ( $mail_subject )->viewVars ( $mail_content )->send ();
		return json_encode ( array (
				'foo' => 'bar' 
		) );
	}
}










