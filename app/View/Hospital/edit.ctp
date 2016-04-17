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
    <li class="active">Cập nhật bệnh nhân: <b><?php echo $patient['Patient']['first_name'] . ' ' . $patient['Patient']['last_name']; ?></b></li>
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
                <div class="form-group">
                  <label for="inputFirstName" class="col-sm-3 control-label">Họ tên đệm: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][first_name]" placeholder="Họ tên đệm " class="form-control" type="text" id="PatientFirstName" value="<?php echo $patient['Patient']['first_name']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputLastName" class="col-sm-3 control-label">Tên bệnh nhân: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][last_name]" placeholder="Tên bệnh nhân " class="form-control" type="text" id="PatientLastName" value="<?php echo $patient['Patient']['last_name']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputGender" class="col-sm-3 control-label">Giới tính: </label>
                  <div class="col-sm-9">
                    <select name="data[Patient][gender]" class="form-control" type="select" id="PatientGender">
                      <option value="made" <?php if($patient['Patient']['gender'] == 'made') echo 'selected'; ?>>Nam </option>
                      <option value="femade" <?php if($patient['Patient']['gender'] == 'femade') echo 'selected'; ?>>Nữ</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputBrithday" class="col-sm-3 control-label">Ngày sinh: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][brithday]" placeholder="Ngày/tháng/năm" class="form-control" type="date" id="PatientBrithday" value="<?php echo $patient['Patient']['brithday']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress" class="col-sm-3 control-label">Ngày sinh: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][address]" placeholder="Quê quán " class="form-control" type="text" id="PatientAddress" value="<?php echo $patient['Patient']['address']; ?>" >
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-head">
                  <h3>Thông tin bệnh án:</h3>
                </div>
                <div class="form-group">
                  <label for="inputBrithday" class="col-sm-3 control-label">Mã bệnh nhân: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][patient_code]" placeholder="Mã bệnh nhân " class="form-control" type="text" id="PatientCode" value="<?php echo $patient['Patient']['patient_code']; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Lần khám: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][checkup]" placeholder="Lần khám " class="form-control" type="text" id="PatientCheckup" value="<?php echo $patient['Patient']['checkup']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Bệnh án: </label>
                  <div class="col-sm-9">
                    <textarea name="data[Patient][medical_report]" class="form-control" rows="8" id="PatientMedicalReport" ><?php echo $patient['Patient']['medical_report']; ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 alignCenter mgt20 mgbt20">
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page content-->