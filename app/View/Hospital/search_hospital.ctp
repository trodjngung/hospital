<div class="page-head">
          <h2>Tìm kiếm bệnh nhân</h2>
          <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            
            <li class="active">Tìm kiếm bệnh nhân</li>
          </ol>
        </div>
        <!-- Content -->
        
       <div class="main-content">
  <div class="row">
    <!--Responsive table-->
    <div class="col-sm-12">
      <div class="widget widget-fullwidth widget-small">
        <div class="widget-head">
          <form action="/hospital/add" class="form-horizontal" id="PatientAddForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>            <div class="row">
              <div class="col-sm-6">
                <div class="widget-head">
                  <h3>Tìm kiếm theo Thông tin bệnh nhân:</h3>
                </div>
                 <div class="form-group">
                  <label for="inputLastName" class="col-sm-3 control-label">Mã bệnh nhân: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][Ma]" placeholder="Mã bệnh nhân " class="form-control" type="text" id="PatientLastName">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputLastName" class="col-sm-3 control-label">Tên bệnh nhân: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][last_name]" placeholder="Tên bệnh nhân " class="form-control" type="text" id="PatientLastName">
                  </div>
                </div>
             
      
              </div>
              <div class="col-sm-6">
                <div class="widget-head">
                  <!-- <h3>Thông tin bệnh án:</h3> -->
                </div>
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
                    <select name="data[Patient][doctor]" class="form-control" type="select" id="PatientGender">
                      <option value="1" selected="">Bác sỹ chỉ định 1 </option>
                      <option value="2">Bác sỹ chỉ định 2</option>
                    </select>
                  </div>
                </div>
                
                <!-- End Bác Sỹ chỉ định -->
                 <!-- Kỹ thuật viên chỉ định -->
                <div class="form-group">
                  <label for="inputCheckup" class="col-sm-3 control-label">Kỹ thuật viên chỉ định: </label>
                  <div class="col-sm-9">
                    <select name="data[Patient][technician]" class="form-control" type="select" id="PatientGender">
                      <option value="1" selected="">Kỹ thuật viên chỉ định 1 </option>
                      <option value="2">Kỹ thuật viên chỉ định 2</option>
                    </select>
                  </div>
                </div>
                
                <!-- End Kỹ thuật viên chỉ định -->
               </div>
               
               </div>
             <div class="row">
              <div class="col-sm-6">
                <div class="widget-head">
                  <h3>Tìm theo Thời gian: </h3>
                </div>
                 <div class="form-group">
                  <label for="inputLastName" class="col-sm-3 control-label">Từ ngày: </label>
                  <div class="col-sm-9">
                    <input name="data[Patient][Ma]" placeholder="Từ ngày" class="form-control" type="date" id="PatientLastName">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputLastName" class="col-sm-3 control-label">Tới ngày: </label>


                  <div class="col-sm-9">
                    <input name="data[Patient][Ma]" placeholder="Tới ngày" class="form-control" type="text" id="PatientLastName" value ="<?php echo date("d/m/Y"); ?>">
                  </div>
                </div>
                </div>
                </div>
            <div class="row">
              <div class="col-sm-6 alignRight mgt20 mgbt20">
                  <button type="submit" class="btn btn-primary">Tìm kiếm</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
        
        <!-- End Content -->