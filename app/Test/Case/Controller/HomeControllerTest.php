<?php
class HomeControllerTest extends ControllerTestCase {
	public function testTop() {
		$result = $this->testAction ( 'top' );
		debug ( $result );
	}
	public function testAbout_us() {
		$result = $this->testAction ( 'about_us' );
		debug ( $result );
	}
	public function testSitemap() {
		$result = $this->testAction ( 'sitemap' );
		debug ( $result );
	}
	public function testStaff() {
		$result = $this->testAction ( 'staff' );
		debug ( $result );
	}
	public function testPolicy() {
		$result = $this->testAction ( 'policy' );
		debug ( $result );
	}
	public function testPhoto_archives() {
		$result = $this->testAction ( 'photo_archives' );
		debug ( $result );
	}
	public function testAccess() {
		$result = $this->testAction ( 'access' );
		debug ( $result );
	}
	public function testRecruit() {
		$result = $this->testAction ( 'recruit' );
		debug ( $result );
	}
	public function testContact() {
		$result = $this->testAction ( 'contact' );
		debug ( $result );
	}
	public function testAjax_contact() {
		$data = array (
						'company' => 'Tribal',
						'division' => 'crime',
						'position' => 'engineer',
						'name' => 'Tom',
						'email' => 'chi.nguyen.vnn@gmail.com',
						'phoneNumber' => '1234567',
						'note' => 'good morning' 
		);
		$result = $this->testAction ('eng/ajax_contact', array (
				'data' => $data,
				'method' => 'post',
				'return' => 'vars' 
		) );
		debug ( $data );	
		debug ($result);
	}
	public function testAjax_apply() {
		$data = array (
				'Contact' => array (
						'company' => 'RCD',
						'division' => 'hdshs',
						'position' => 'gjsdgs',
						'lastName' => 'djsdgns',
						'firstName' => 'gdjghds',
						'email' => 'xxx@xxx.com',
						'phoneNumber' => '1234567',
						'note' => 'dsgvhsds' 
				) 
		);
		$result = $this->testAction ( 'ajax_apply', array (
				'data' => $data,
				'method' => 'post' 
		) );
		debug ( $result );
	}
} 