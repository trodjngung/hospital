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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo 'VOTC | '.$title_for_layout;?></title>
		<?php
		echo $this->Html->meta ( 'icon', '/favicon.ico' ); // icon
		echo $this->element ( 'meta' );
		echo $this->element ( 'css' );
		?>
		<?php 
		
		echo $this->element ( 'js' );
		?>
</head>
<body>
		<?php echo $this->element('header')?>
		<!--  ==== Start Topic Path ==== -->
		<!-- 
	<div class="topic-path">
		<div class="container">
			<h1 class="pull-left"><?php //echo $topic_path ?></h1>
		</div>
	</div>
	 -->
         <div style="margin-top: 2cm;"> </div>
	<!--  ==== End Topic Path ==== -->
		<?php echo $this->fetch('content')?>
	<!--  ==== Start Scroll Top ==== -->
	<div class="scroll-up" style="display: none;">
		<i class="fa fa-chevron-up fa-3"></i>
	</div>
	<!--  ==== End Scroll Top ==== -->
		<?php echo $this->element('footer')?>
	</body>
<?php echo $this->element ( 'author' ); ?>
</html>