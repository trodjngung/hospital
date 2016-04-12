<?php
App::uses('ExceptionRenderer', 'Error');
class AppExceptionRenderer extends ExceptionRenderer {
	/*public function notFound($error) {
		$this->controller->redirect(array('controller' => 'errors', 'action' => 'error404'));
	}
*/
	function missingAction($parameters) {
		$this->controller->redirect('/');
	}

	function missingController($parameters) {
		$this->controller->redirect('/');
	}
}