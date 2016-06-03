<style>
.main-content {
    padding-left: 0px;
    padding-right: 0px;
    padding-top: 0px;
}
</style>
<link rel="stylesheet" type="text/css" href="/css/photobooth/src/styles.css" />
<link rel="stylesheet" type="text/css" href="/css/photobooth/fancybox/jquery.fancybox-1.3.4.css" />
<?php echo $this->Html->script('hospital/hospital');?>
<?php echo $this->Html->script('hospital/jquery.multifile');?>
<?php echo $this->Html->css('hospital/hospital');?>
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
    <li class="active">Thêm bệnh nhân</li>
  </ol>
</div>
<!-- End Page Head-->
<!-- Page content -->
<div class="main-content">
  <div class="widget widget-fullwidth widget-small">
    <div class="widget-head">
      <?php echo $this->Form->create('Patient', array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal')); ?>
        <div class="row">
          <!--Responsive table-->
          <div class="col-sm-12">
              <div class="col-sm-6">
                <div class="widget-head">
                  <h3>Thông tin bệnh nhân:</h3>
                </div>
                <div class="form-group">
                  <label for="inputLastName" class="col-sm-3 control-label">Tên bệnh nhân: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][hoten]" placeholder="Tên bệnh nhân " class="form-control" type="text" id="PatientLastName" required="required" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputGender" class="col-sm-3 control-label">Giới tính: </label>
                  <div class="col-sm-9">
                    <select name="data[Patient][gioitinh]" class="form-control" type="select" id="PatientGender" required="required" >
                      <option value="nam" selected>Nam </option>
                      <option value="nu">Nữ</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputBrithday" class="col-sm-3 control-label">Ngày sinh: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][ngaysinh]" placeholder="Ngày/tháng/năm" class="form-control" type="date" id="PatientBrithday" required="required" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress" class="col-sm-3 control-label">Số điện thoại: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][phone]" placeholder="Số điện Thoại " class="form-control" type="text" id="PatientAddress" required="required" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress" class="col-sm-3 control-label">Địa chỉ: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][diachi]" placeholder="Địa chỉ " class="form-control" type="text" id="PatientAddress" required="required" >
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <!-- <div class="widget-head">
                  <h3>Thông tin bệnh án:</h3>
                </div> -->
                <!--
                <div class="form-group">
                  <label for="inputBrithday" class="col-sm-3 control-label">Mã bệnh nhân: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][patient_code]" placeholder="Mã bệnh nhân " class="form-control" type="text" id="PatientCode">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Lần khám: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][checkup]" placeholder="Lần khám " class="form-control" type="text" id="PatientCheckup">
                  </div>
                </div>
                -->
                <!-- Bác sỹ chỉ định -->
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Bác sỹ chỉ định: </label>
                  <div class="col-sm-9">
                    <select name="data[Patient][bacsy]" class="form-control" type="select" id="PatientGender" required="required" >
                    <option value="chưa lựa chọn">-- Lựa chọn --</option>
                      <option value="Nguyễn Văn A">Nguyễn Văn A </option>
                      <option value="Trương Thị Z">Trương Thị Z</option>
                    </select>
                  </div>
                </div>
                
                <!-- End Bác Sỹ chỉ định -->
                 <!-- Kỹ thuật viên chỉ định -->
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Kỹ thuật viên chỉ định: </label>
                  <div class="col-sm-9">
                    <select name="data[Patient][kythuat]" class="form-control" type="select" id="PatientGender" required="required" >
                    <option value="chưa lựa chọn">-- Lựa chọn --</option>
                      <option value="Nguyễn Văn A">Nguyễn Văn A </option>
                      <option value="Trương Thị Z">Trương Thị Z</option>
                    </select>
                  </div>
                </div>
                
                <!-- End Kỹ thuật viên chỉ định -->
                 <!-- Danh mục khám -->
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Danh mục khám: </label>
                  <div class="col-sm-9">
               
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Soi trĩ" > [157]Soi trĩ<br>
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Siêu âm bụng"> [1000] Siêu âm bụng<br>
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Siêu âm tim"> [1001] Siêu âm tim<br>
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Siêu âm thai"> [1004] Siêu âm thai<br>
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Siêu âm chân"> [1008]Siêu âm chân<br>
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Quang Ngực Thẳng"> [1050]Quang Ngực Thẳng<br>
                  </div>
                </div>
                <!-- End danh mục khám-->
                <!-- Lý do khám -->
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Lý do khám: </label>
                  <div class="col-sm-9">
                    <textarea name="data[Patient][lydo]" class="form-control" rows="8" id="PatientMedicalReport" required="required" ></textarea>
                  </div>
                </div>
                <!-- End lý do khám -->
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12 mgl10">
          <!-- Camera -->
          <div id="camera">
	<span class="tooltip"></span>
	<span class="camTop"></span>
    
    <div id="screen"></div>
    <div id="buttons">
    	<div class="buttonPane">
        	<a id="shootButton" href="" class="blueButton">Shoot!</a>
        </div>
        <div class="buttonPane">
        	<a id="cancelButton" href="" class="blueButton">Cancel</a> <a id="uploadButton" href="" class="greenButton">Upload!</a>
        </div>
    </div>
    
    <span class="settings"></span>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

    <script src="assets/fancybox/jquery.easing-1.3.pack.js"></script>
<script src="assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="assets/webcam/webcam.js"></script>
<script src="assets/js/script.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 <div id="fancybox-tmp"></div>
 <div id="fancybox-loading"><div></div></div>
 <div id="fancybox-overlay"></div>
 <div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div>
    <!-- End Camera -->
    
    
    
</div>
            <label for="inputImg"  class="control-label">Ảnh liên quan <span class="text-danger">(* Chỉ nên chọn tối đa 5 ảnh)</span>: </label>
          </div>
          <div class="col-sm-12 mgl10">
            <!-- <input type="file" name="data[PatientImage][image][]" class="patientImgs" class="mgt20" accept="image/*" style="display: block;" > -->
            <input type="file" name="data[PatientImage][image][]" class="multi with-preview mgt20" multiple accept="image/*" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="row alignLeft mgt20 pdt20 pdbt20">
                <button type="submit" class="btn btn-primary mgr20">Thêm mới</button>
                <a href="/hospital/receive" class="btn btn-primary" role="button">Huỷ Bỏ</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Page content-->