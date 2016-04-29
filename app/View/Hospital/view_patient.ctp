<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('hospital/hospital');?>
<style>
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
	<h2>Bảng mô tả: Bệnh nhân</h2>
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
				<div class="col-sm-3 col-md-3 shadow-wrapper md-margin-bottom-40">
					<div class="shadow-effect-2 alignCenter">
						<?php 
						if($patient['Patient']['gioitinh']=='nu') {
							$src='/img/hospital/benhnhannu.png';
						} else {
							$src='/img/hospital/benhnhannam.png';
						}
						?>
						<img src="<?php echo $base_url.$src; ?>" width="100%"
							alt="profile picture" class="mgt20">
						<div class="mgt20">
							<center>Bệnh nhân: <b><?php echo $patient['Patient']['hoten'];?></b></center>
						</div>
					</div>
				</div>
				<div class="col-sm-9 col-md-9">
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
		<div class="col-sm-12 alignCenter">
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
												<select class="form-control template" data-target="editor1000" id="select_template" onchange="selectTemplate();">
													<option value="">Hãy chọn mẫu</option>
													<?php
														foreach($templates as $template):
															echo "<option value='" . $template['Template']['id'] . "'>" . $template['Template']['template_name'] . "</option>";
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
										</div> <!-- End Image -->
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
									<div class="col-sm-12 col-md-12">
										<div class="modal-footer alignCenter">
											<button type="submit" class="btn btn-primary">Lưu</button>
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
</div>