<?php
/**
  * This file is provided layout of page manage Hospital.
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Everything Copy are infringe copyright and must to have take full responsibility before law.
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để cung cấp giao diện chung của trang quản lý bệnh viện. 
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
		echo $this->element ( 'meta_hospital' );
		echo $this->element ( 'css_hospital' );
		echo $this->Html->script ( '/js/hospital/jquery/jquery.min.js' ) . PHP_EOL;
		?>
	</head>
	<body>
	<div class="am-wrapper">
	<?php echo $this->element('header_hospital')?>
	 
	<!--  ==== End Topic Path ==== -->
	  <div class="am-wrapper">
      		<div class="am-content">
                  <?php echo $this->fetch('content')?>
                </div>
          </div>         
	<?php echo $this->element('header_info_hospital')?>
	<?php echo $this->element('footer_hospital')?>
	</div>
        <?php echo $this->element ( 'js_hospital' ); ?>
        
    
	 <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();

      });
    </script>

      
       <script type="text/javascript">
      $(document).ready(function(){
	
        App.emailCompose();
      });
      
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
      	App.livePreview();
      });
      
    </script>
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-68396117-1', 'auto');
      ga('send', 'pageview');
      
      
    </script>
    <?php // echo $this->element ('theme_hospital'); ?>
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>	
	</body>
	<?php echo $this->element ( 'author_hospital' ); ?>
</html>