<!-- Page head -->
<div class="row">
  <div class="alignCenter">
    <?php if(isset($errors)) {
      echo '<ul>';
      foreach ($errors as $error):
          echo '<li class="error">'.$error[0].'</li>';
      endforeach;
      echo '</ul>';
    }?>
  </div>
  <div class="flash">
    <?php echo $this->Session->flash(); ?>
  </div>
</div>
<div class="page-head">
  <h2>Cập nhật bệnh nhân</h2>
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
    <li class="active">Cập nhật bệnh nhân: <b><?php echo $patient['Patient']['hoten'] ; ?></b></li>
  </ol>
</div>
<!-- End Page Head-->
<!-- Page content -->
<div class="main-content">
  <div class="row">
    <!--Responsive table-->
    <div class="col-sm-12">
      <div class="widget widget-fullwidth widget-small">
        <div class="widget-head">
          <form action="/hospital/edit/<?php echo $patient['Patient']['id'];?>" class="form-horizontal" id="PatientEditForm" method="post" accept-charset="utf-8">
            <div style="display:none;">
              <input type="hidden" name="_method" value="PUT">
            </div> 
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-head">
                  <h3>Thông tin bệnh nhân:</h3>
                </div>
                <!-- Trạng thái-->
                <div class="form-group">
                  <label for="inputGender" class="col-sm-3 control-label">Trạng thái: </label>
                  <div class="col-sm-9">
                    <select name="data[Patient][gioitinh]" class="form-control" type="select" id="PatientGender">
                      <option value="chưa khám" <?php if($patient['Patient']['gioitinh'] == 'chưa khám') echo 'selected'; ?>>Chưa khám </option>
                      <option value="Đã khám, đang chờ kết luận" <?php if($patient['Patient']['gioitinh'] == 'Đã khám, đang chờ kết luận') echo 'selected'; ?>>Đã khám, đang chờ kết luận</option>
                      <option value="đã có kết luận" <?php if($patient['Patient']['gioitinh'] == 'đã có kết luận') echo 'selected'; ?>>Đã có kết luận</option>
                    </select>
                  </div>
                </div>
                <!-- End Trạng thái -->
                <div class="form-group">
                  <label for="inputFirstName" class="col-sm-3 control-label">Họ Và Tên: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][hoten]" placeholder="Họ tên đệm " class="form-control" type="text" id="PatientFirstName" value="<?php echo $patient['Patient']['hoten']; ?>" >
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputGender" class="col-sm-3 control-label">Giới tính: </label>
                  <div class="col-sm-9">
                    <select name="data[Patient][gioitinh]" class="form-control" type="select" id="PatientGender">
                      <option value="nam" <?php if($patient['Patient']['gioitinh'] == 'nam') echo 'selected'; ?>>Nam </option>
                      <option value="nu" <?php if($patient['Patient']['gioitinh'] == 'nu') echo 'selected'; ?>>Nữ</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputBrithday" class="col-sm-3 control-label">Ngày sinh: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][ngaysinh]" placeholder="Ngày/tháng/năm" class="form-control" type="date" id="PatientBrithday" value="<?php echo $patient['Patient']['ngaysinh']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress" class="col-sm-3 control-label">Số điện thoại: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][phone]" placeholder="Quê quán " class="form-control" type="text" id="PatientPhone" value="<?php echo $patient['Patient']['phone']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress" class="col-sm-3 control-label">Địa chỉ: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][diachi]" placeholder="Quê quán " class="form-control" type="text" id="PatientAddress" value="<?php echo $patient['Patient']['diachi']; ?>" >
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-head">
                  <h3></h3>
                </div>
                <!-- Bác sỹ chỉ định -->
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Bác sỹ chỉ định: </label>
                  <div class="col-sm-9">
                    <select name="data[Patient][bacsy]" class="form-control" type="select" id="PatientGender" >
                    <option value="chưa lựa chọn" <?php if($patient['Patient']['bacsy'] == 'chưa lựa chọn') echo 'selected'; ?>>-- Lựa chọn --</option>
                      <option value="Nguyễn Văn A" <?php if($patient['Patient']['bacsy'] == 'Nguyễn Văn A') echo 'selected'; ?>>Nguyễn Văn A </option>
                      <option value="Trương Thị Z" <?php if($patient['Patient']['bacsy'] == 'Trương Thị Z') echo 'selected'; ?>>Trương Thị Z</option>
                    </select>
                  </div>
                </div>
                
                <!-- End Bác Sỹ chỉ định -->
                <!-- Kỹ thuật viên chỉ định -->
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Kỹ thuật viên chỉ định: </label>
                  <div class="col-sm-9">
                    <select name="data[Patient][kythuat]" class="form-control" type="select" id="PatientGender">
                    <option value="chưa lựa chọn" <?php if($patient['Patient']['kythuat'] == 'chưa lựa chọn') echo 'selected'; ?>>-- Lựa chọn --</option>
                      <option value="Nguyễn Văn A" <?php if($patient['Patient']['kythuat'] == 'Nguyễn Văn A') echo 'selected'; ?>>Nguyễn Văn A </option>
                      <option value="Trương Thị Z" <?php if($patient['Patient']['kythuat'] == 'Trương Thị Z') echo 'selected'; ?>>Trương Thị Z</option>
                    </select>
                  </div>
                </div>
                
                <!-- End Kỹ thuật viên chỉ định -->
                 <!-- Danh mục khám -->
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Danh mục khám: </label>
                  <div class="col-sm-9">
                 <?php $danhmuc = explode(',', $patient['Patient']['danhmuc']);?>
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Soi trĩ"
                      <?php foreach ($danhmuc as $key){ if ($key=='Soi trĩ'){echo "checked";} }?>
                      > [157]Soi trĩ<br>
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Siêu âm bụng"
                      <?php foreach ($danhmuc as $key){ if ($key=='Siêu âm bụng'){echo "checked";} }?>
                      > [1000] Siêu âm bụng<br>
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Siêu âm tim"
                      <?php foreach ($danhmuc as $key){ if ($key=='Siêu âm tim'){echo "checked";} }?>
                      > [1001] Siêu âm tim<br>
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Siêu âm thai"
                      <?php foreach ($danhmuc as $key){ if ($key=='Siêu âm thai'){echo "checked";} }?>
                      > [1004] Siêu âm thai<br>
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Siêu âm chân"
                      <?php foreach ($danhmuc as $key){ if ($key=='Siêu âm chân'){echo "checked";} }?>
                      > [1008]Siêu âm chân<br>
                      <input type="checkbox" name="data[Patient][danhmuc][]" value="Quang Ngực Thẳng"
                      <?php foreach ($danhmuc as $key){ if ($key=='Quang Ngực Thẳng'){echo "checked";} }?>
                      > [1050]Quang Ngực Thẳng<br>
                    
                  </div>
                </div>
                
                <!-- End danh mục khám-->
                 <!-- Lý do khám -->
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Lý do khám: </label>
                  <div class="col-sm-9">
                    <textarea name="data[Patient][lydo]" class="form-control" rows="8" id="PatientLydo" ><?php echo $patient['Patient']['lydo']; ?></textarea>
                  </div>
                </div>
                <!-- End lý do khám -->
                </div>
                <!-- Kết luận-->
                <div class="row">
              <div class="col-sm-12 alignCenter mgt20 mgbt20">
              <h3>Kết Luận: </h3>
              <textarea name="data[Patient][ketluan]" class="form-control" rows="16" id="PatientKetluan" ><?php echo $patient['Patient']['ketluan']; ?></textarea>
              </div>
              </div>
                <!-- End Kết Luận -->
            <div class="row">
              <div class="col-sm-12 alignCenter mgt20 mgbt20">
                <div class="col-sm-4 alignLeft mgt20 mgbt20">
                </div>
                   <div class="col-sm-4 alignLeft mgt20 mgbt20">
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
                  
                  <a href="/hospital/receive" class="btn btn-primary" role="button">Huỷ Bỏ</a>
                  </div>
                 <div class="col-sm-4 alignLeft mgt20 mgbt20">
              </div
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Page content-->