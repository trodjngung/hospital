<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->css('photobooth/src/styles.css'); ?>
<?php echo $this->Html->css('photobooth/fancybox/jquery.fancybox-1.3.4.css'); ?>
<?php echo $this->Html->script('hospital/hospital');?>
<?php echo $this->Html->script('hospital/jquery.multifile');?>
<?php echo $this->Html->css('hospital/hospital');?>

<style>
#camera {
    left: 70%;
    }
.main-content {
    padding-left: 0px;
    padding-right: 0px;
    padding-top: 0px;
}
.modal-footer {
    padding: 15px;
    text-align: center;
    border-top: 1px solid #e5e5e5;
}
.am-aside .main-content {
    margin-left: 5px;
}
.note-editor {
    position: relative;
    overflow: hidden;
    border: 1px solid #a9a9a9;
    height: 500px;
}
.md-modal .md-content, .md-modal .modal-content, .modal .md-content, .modal .modal-content {
    box-shadow: 0 4px 6px rgba(0,0,0,.3);
    border-radius: 3px;
    overflow: hidden;
    background-color: #fff;
    color: #555;
    width: 1200px;
    left: -50%;
}
</style>
<div class="flash alignCenter pdbt20  " style="margin-top: -20px;">
	<?php echo $this->Session->flash(); ?>
</div>
<div class="page-head">
	
	<ol class="breadcrumb">
		<li>
		<?php 
	        echo $this->Html->link (
	          ' Danh sách bệnh nhân',
	          array (
	            'controller' => 'hospital',
	            'action' => 'receive'
	          )
	        );
       	?>
		</li>
		<li class="active">Bệnh nhân: <strong><?php echo $patient['Patient']['hoten']; ?></strong></li>
	</ol>
</div>
<div class="main-content">
	<div class="row">
		<!--Responsive table-->
		<div class="col-sm-12">
			<div class="widget widget-fullwidth widget-small">
				<div class="col-sm-6 col-md-6 shadow-wrapper md-margin-bottom-40">
					<div class = "row">
						<div class="col-sm-3 col-md-3">
						</div>
						<div class="col-sm-3 col-md-3">
							<div class="shadow-effect-2 alignCenter">
								<?php 
								if($patient['Patient']['gioitinh']=='nu') {
									$src='/img/hospital/benhnhannu.png';
								} else {
									$src='/img/hospital/benhnhannam.png';
								}
								?>
								<img src="<?php echo $base_url.$src; ?>" width="50%"
									alt="profile picture" class="mgt20">
								<div class="mgt20">
									<center>Bệnh nhân: <b><?php echo $patient['Patient']['hoten'];?></b></center>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-md-3">
						</div>
					</div>
					<div class="row">
						<!-- show images camera -->
						<div class="photos" id="photos">
							<?php
								if (isset($patientImages) && !empty($patientImages)) {
									foreach ($patientImages as $key => $value) {
										echo "<div id='image".$value['PatientImage']['id']."' class='show-image'>";
										echo $this->Html->image($value['PatientImage']['image_url']);
										echo '<input class="delete" type="button" value="Delete" onclick="deleteImage('.$value['PatientImage']['id'].');"/>';
										echo "</div>";
									}
								}
							?>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<table class="table table-striped table-fw-widget table-hover">
						<tbody>
							<tr>
								<td align="right" width="20%">Họ và tên:</td>
								<td width="80%"><b><?php echo $patient['Patient']['hoten'];?></b></td>
							</tr>
							<tr>
								<td align="right">Ngày sinh:</td>
								<td><?php echo $patient['Patient']['ngaysinh'];?></td>
							</tr>
							<tr>
								<td align="right">Số điện thoại:</td>
								<td><?php echo $patient['Patient']['phone'];?></td>
							</tr>
							<tr>
								<td align="right">Giới tính:</td>
								<td><?php echo $patient['Patient']['gioitinh'];?></td>
							</tr>
							<tr>
								<td align="right">Lý do khám:</td>
								<td><?php echo $patient['Patient']['lydo'];?></td>
							</tr>
							<tr>
								<td align="right">Địa chỉ:</td>
								<td><?php echo $patient['Patient']['diachi'];?></td>
							</tr>
							<tr>
								<td align="right">Bác sỹ:</td>
								<td><?php echo $patient['Patient']['bacsy'];?></td>
							</tr>
							<tr>
								<td align="right">Kỹ thuật viên:</td>
								<td><?php echo $patient['Patient']['kythuat'];?></td>
							</tr>
							<tr>
								<td align="right">Những hạng mục khám:</td>
								<td><?php echo $patient['Patient']['danhmuc'];?></td>
							</tr>
							<tr>
								<td align="right">Kết luận:</td>
								<td><?php echo $patient['Patient']['ketluan'];?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row mgt20">
		<div class="col-sm-6 alignCenter">
				<?php 
	                echo $this->Html->link (
	                	'Chỉnh sửa',
	                  	array (
	                    	'controller' => 'hospital',
	                        'action' => 'edit',
	                        $patient['Patient']['id']
	                  	),
	                  	array (
	                    	'class' => 'btn btn-primary mgr10'
	                  	)
	                );
	            ?>
				<button type="submit" class="btn btn-primary" id="myBtn" data-toggle="modal" data-target="#myModal">In ra kết luận</button>
			</div>				
			
		<div class="col-sm-6 alignCenter">
	          <!-- Camera -->
	        <div id="camera">
				<span class="tooltip"></span>
				<span class="camTop"></span>
			    
			    <div id="screen"></div>
			    <div id="buttons">
			    	<div class="buttonPane">
			        	<a id="shootButton" href="" class="blueButton">Shoot!</a>
			        </div>
			        <div class="buttonPane" style="display: none">
			        	<a id="cancelButton" href="" class="blueButton">Cancel</a> <a id="uploadButton" href="" class="greenButton">Upload!</a>
			        </div>
			    </div>
			    
			    <span class="settings"></span>
			</div>
			
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
			<?php echo $this->Html->script('hospital/camera/fancybox/jquery.easing-1.3.pack.js');?>
			<?php echo $this->Html->script('hospital/camera/fancybox/jquery.fancybox-1.3.4.pack.js');?>
			<?php echo $this->Html->script('hospital/camera/webcam/webcam.js');?>
			<?php echo $this->Html->script('hospital/camera/js/script.js');?>
    <!-- End Camera -->
   		</div>
		
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel" style="display: none;">
		<div class="modal-dialog modal-full" role="document">
			<div class="modal-content">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<form action="<?php echo $base_url.'updateKetluan/'.$patient['Patient']['id'];?>" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal" id="PatientViewPatientForm" method="post">
							<div style="display:none;">
								<input type="hidden" name="_method" value="PUT">
							</div>
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
								<h4 class="modal-title" id="myModalLabel">Siêu âm bụng</h4>
							</div>
							<!-- Body -->
							<div class="modal-body">
								<div class="row">
									<div class="col-sm-12 col-md-12 ">
										<div class="col-sm-8 col-md-8 ">
											<div class="form-group">
												<label>Chọn mấu</label>
												<select name="data[templateId]" class="form-control template" data-target="editor1000" id="select_template" onchange="selectTemplate();">
													<option value="" <?php if ($patient['Patient']['template_id'] == NULL) {echo 'selected';} ?>>Hãy chọn mẫu</option>
													<?php
														foreach($templates as $template):
															if ($patient['Patient']['template_id'] == $template['Template']['id'] ) {
																echo "<option selected value='" . $template['Template']['id'] . "'>" . $template['Template']['template_name'] . "</option>";
															} else {
																echo "<option value='" . $template['Template']['id'] . "'>" . $template['Template']['template_name'] . "</option>";
															}	
														endforeach;
													?>
												</select>
											</div>
										</div>
										<!-- Image -->
										<div class="col-sm-4 col-md-4 shadow-wrapper md-margin-bottom-40" style="position: absolute;right: 0px;top: -70px;">
											<div class="shadow-effect-2 alignCenter">
												<img src="<?php echo $base_url.$src; ?>" width="40%" alt="profile picture">
											</div>
											<div class="alignCenter">
												<span>Bệnh nhân :<b> <?php echo $patient['Patient']['hoten']; ?> </b></span>
											</div>
										</div>
										<!-- End Image -->
									</div>
								</div>
								<div class="row">
					              <!-- Kết luận-->
					                <div class="col-sm-12">
					                	<label for="inputCheckup" class="control-label pdbt10">Mô tả<span class="required" aria-required="true">*</span></label>
					                  	<?php 
						                    echo $this->Form->textarea(
						                      	'ketluan',
						                      	array(
						                        	'value' => $patient['Patient']['ketluan'],
						                        	'class'=>'ckeditor'
						                      	)
						                    );
						                  ?>
					                </div>
					              <!-- End Kết Luận -->
					            </div>
								<div class="row">
								        
									<div class="col-sm-12 col-md-12 alignCenter">
										<div class="modal-footer alignCenter">
											<input type="submit" name="save" value="Lưu" class="btn btn-primary"></input>
											<input type="submit" name="save_print" value="Lưu và In" class="btn btn-primary"></input>
											<button type="button" class="btn btn-default"
												data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!-- End Body -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal  -->
	<!-- Input hidden -->
	<input type="hidden" value="<?php echo $appRoot; ?>" id="appRoot"></input>
	<input type="hidden" value="<?php echo $patient['Patient']['id']; ?>" id="patientId"></input>
	<?php
		if ($this->Session->check('checkPrint') && $this->Session->read('checkPrint') == 1) {
			$this->Session->delete('checkPrint');
			echo '<input type="hidden" value="1" id="checkPrint"></input>';
		}
	?>
</div>