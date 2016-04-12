<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Emails.text
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<?php echo $content;?>
<?php
	echo __ ( 'MAIL_CONTACT_TEXT_1' ) . PHP_EOL;
	echo __ ( 'MAIL_CONTACT_TEXT_2' ) . " : " . $name . PHP_EOL;
	echo __ ( 'MAIL_CONTACT_TEXT_3' ) . " : " . $email. PHP_EOL;
	echo __ ( 'MAIL_CONTACT_TEXT_4' ) . " : " . $phoneNumber. PHP_EOL;
	echo __ ( 'MAIL_CONTACT_TEXT_5' ) . " : " . $company. PHP_EOL;
	echo __ ( 'MAIL_CONTACT_TEXT_6' ) . " : " . $division. PHP_EOL;
	echo __ ( 'MAIL_CONTACT_TEXT_7' ) . " : " . $position. PHP_EOL;
	echo __ ( 'MAIL_CONTACT_TEXT_8' ) . " : " . $contactType. PHP_EOL;
	echo __ ( 'MAIL_CONTACT_TEXT_9' ) . " : " . $note. PHP_EOL;

?>