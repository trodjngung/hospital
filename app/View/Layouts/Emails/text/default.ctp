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
 * @package       app.View.Layouts.Email.text
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<?php echo $this->fetch('content');?>
<?php 
	echo __('MAIL_COMMON_TEXT_1'). PHP_EOL;
	echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━". PHP_EOL;
	echo __('MAIL_COMMON_TEXT_2'). PHP_EOL;
	echo __('MAIL_COMMON_TEXT_3'). PHP_EOL;
	echo __('MAIL_COMMON_TEXT_4'). PHP_EOL;
	echo __('MAIL_COMMON_TEXT_5'). PHP_EOL;	
?>
