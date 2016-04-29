<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('hospital/jquery.multifile');?>
<?php echo $this->Html->script('hospital/hospital');?>
<?php echo $this->Html->css('hospital/hospital');?>
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
  <div class="flash alignCenter pdbt20" style="margin-top: -20px;">
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
  <div class="widget widget-fullwidth widget-small">
    <div class="widget-head">
      <?php echo $this->Form->create('Patient', array('type' => 'PUT', 'enctype' => 'multipart/form-data', 'accept-charset' => 'utf-8', 'class' => 'form-horizontal')); ?>

      <!-- <form action="/hospital/edit/<?php echo $patient['Patient']['id'];?>" class="form-horizontal" id="PatientEditForm" method="post" accept-charset="utf-8" enctype='multipart/form-data'> -->
        <div class="row">
          <!--Responsive table-->
          <div class="col-sm-12">
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
              </div>
              <div class="row">
                <!-- Kết luận-->
                  <div class="col-sm-12">
                  <label for="inputCheckup" class="control-label pdbt10">Kết Luận: </label>
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
              <div class="row mgt20 pdt20 mgbt20 pdbt20">
                <div class="col-sm-12">
                  <label for="inputImg"  class="control-label">Ảnh liên quan <span class="text-danger">(* Chỉ nên chọn tối đa 5 ảnh)</span>: </label>
                </div>
                <div class="col-sm-12">
                  <!-- <input type="file" name="data[PatientImage][image][]" class="patientImgs" class="mgt20" accept="image/*" style="display: block;" > -->
                  <div class="MultiFile-list" id="MultiFile1_wrap_list">
                    <input type="file" name="data[PatientImage][image][]" class="multi with-preview mgt20" multiple accept="image/*" />
                    <?php
                      foreach($patientImgs as $patientImg):
                        echo '<div class="MultiImg-label" id="oldImg' . $patientImg['PatientImage']['id'] . '" data-id="' . $patientImg['PatientImage']['id'] . '">';
                        echo '<a class="MultiFile-remove" href="javascript:void(0);" onclick="removeImg(this);">Xóa</a>';
                        echo '<span class="MultiFile-label">';
                        echo '<span class="MultiFile-title">' . $patientImg['PatientImage']['image_url'] . '</span>';
                        echo '<img class="MultiFile-preview" style="max-width: 250px;max-height:200px;" src="' . $base_url . 'img/hospital/' . $patientImg['PatientImage']['image_url'] . '" title="">';
                        echo '</span></span></div>';
                      endforeach;
                    ?>
                </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row alignCenter">
            <button type="submit" class="btn btn-primary mgr20">Cập nhật</button>
            <?php 
              echo $this->Html->link (
                'Hủy bỏ',
                array (
                  'controller' => 'hospital',
                  'action' => 'view_patient',
                  $patient['Patient']['id']
                ),
                array (
                  'class' => 'btn btn-primary mgr10'
                )
              );
            ?>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Page content-->