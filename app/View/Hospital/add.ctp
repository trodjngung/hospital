<?php echo $this->Html->script('hospital/hospital');?>
<?php echo $this->Html->script('hospital/jquery.multifile');?>
<?php echo $this->Html->css('hospital/hospital');?>
<div class="page-head">
  <h2>Thêm bệnh nhân</h2>
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
            <label for="inputImg"  class="control-label">Ảnh liên quan <span class="text-danger">(* Chỉ nên chọn tối đa 5 ảnh)</span>: </label>
          </div>
          <div class="col-sm-12 mgl10">
            <!-- <input type="file" name="data[PatientImage][image][]" class="patientImgs" class="mgt20" accept="image/*" style="display: block;" > -->
            <input type="file" name="data[PatientImage][image][]" class="multi with-preview mgt20" multiple accept="image/*" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="row alignCenter mgt20 pdt20 pdbt20">
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