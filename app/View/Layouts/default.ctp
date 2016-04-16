<?php
/**
  * This file is provided layout of page manage Home page.
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Everything Copy are infringe copyright and must to have take full responsibility before law.
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để cung cấp giao diện chung của trang chủ. 
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Mọi sao chép đều là vi phạm quyền sở hữu trí tuệ và phải chịu trách nhiệm trước pháp luật.
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/
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