<html>
<head>
	<style type="text/css">
	.uppercaseText {
		text-transform: uppercase;
		text-align: center;
	}
	.head {
		font-size: 35px;
		margin: 0px 5px;
		font-weight: bold;
	}
	.template {
		font-size: 22px;
		margin: 5px 3px;
	}
	h4 {
		margin: 1px 1px;
	}
	img {
	    float: left;
	    height: 120px;
	    margin: 1px 1px 0 2px;
	    overflow: hidden;
	    width: 155px;
	    vertical-align: middle;
	}
	</style>
</head>
<body>
	<p class="uppercaseText head">PHÒNG KHÁM ĐA KHOA</p>
	<h4>Địa chỉ :</h4>
	<h4>Điện thoại :</h4>
	<p class="uppercaseText template"><?php echo 'phiếu khám '.$template['Template']['template_name']; ?></p>
	<h4>Họ tên bệnh nhân: <?php echo $patient['Patient']['hoten']; ?></h4>
	<h4>Tuổi: <?php echo $patient['Patient']['age']; ?></h4>
	<h4>Địa chỉ: <?php echo $patient['Patient']['diachi']; ?></h4>
	<h4>Lý do khám: <?php echo $patient['Patient']['lydo']; ?></h4>
	<div class="photos">
		<?php
			if (isset($patientImages) && !empty($patientImages)) {
				echo "<h1 class='uppercaseText'>Hình ảnh</h1>";
				foreach ($patientImages as $key => $value) {
					echo $this->Html->image($value['PatientImage']['image_url']);
				}
			}
		?>
	</div>
	
	<h2>Kết Luận</h2>
	<?php echo $patient['Patient']['ketluan']; ?>

</body>
</html>
