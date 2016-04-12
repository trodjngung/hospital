<?php
App::uses('AppController', 'Controller');
class AppControllerTest extends ControllerTestCase {
	public function testSwitchLangGetView() {
		$result = $this->testAction('/eng/contact', array(
				'return' => 'view' 
		));
		debug($result);
	}
	public function testSwitchLangGetVars() {
		$result = $this->testAction('/eng/top', array(
				'return' => 'vars' 
		));
		debug($result); 
	}
}