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
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Tìm theo chuyên mục</h3>
                </div>
                <div class="panel-body">
                  <form action="#" class="form-horizontal group-border-dashed" novalidate="">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Mã bệnh nhân</label>
                      <div class="col-sm-6">
                        <input type="text" required="" placeholder="Nhập mã bệnh nhân" class="form-control" data-parsley-id="28">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Họ và Tên</label>
                      <div class="col-sm-6">
                        <input type="text" required="" data-parsley-minlength="6" placeholder="Nhập họ tên ..." class="form-control" data-parsley-id="30">
                      </div>
                    </div>
                   
                   
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Bác sĩ chỉ định</label>
                      <div class="col-sm-3">
                        <input type="text" required="" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="Tên Bác Sỹ" class="form-control" data-parsley-id="42">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-3 control-label">Kỹ thuật viên chỉ định</label>
                     <div class="col-sm-3">
                        <input type="text" required="" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="Tên Kỹ thuật viên" class="form-control" data-parsley-id="42">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label"></label>
                      <div class="col-sm-3">
                        <input id="pass2" type="password" required="" placeholder="Password" class="form-control" data-parsley-id="44">
                      </div>
                      <div class="col-sm-3">
                        <input type="password" required="" data-parsley-equalto="#pass2" placeholder="Re-Type Password" class="form-control" data-parsley-id="46">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Lựa chọn Bệnh án</label>
                      <div class="col-sm-6">
                        <div class="am-checkbox">
                          <input id="ck1" name="ck1" type="checkbox" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" data-parsley-id="49">
                          <label for="ck1">Bệnh án 1</label>
                        </div>
                        <div class="am-checkbox">
                          <input id="ck2" name="ck2" type="checkbox" data-parsley-multiple="groups" value="bar2" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1">
                          <label for="ck2">Bệnh án 2</label>
                        </div>
                        <div class="am-checkbox">
                          <input id="ck3" name="ck3" type="checkbox" data-parsley-multiple="groups" value="bar3" data-parsley-mincheck="2" required="" data-parsley-errors-container="#error-container1">
                          <label for="ck3">Bệnh án 3</label>
                        </div>
                        <div id="error-container1"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Lựa chọn cách điều trị</label>
                      <div class="col-sm-6">
                        <div class="am-checkbox">
                          <input type="checkbox" value="bar" id="e1" data-parsley-multiple="group1" data-parsley-errors-container="#error-container2" data-parsley-id="56">
                          <label for="e1">Cách 1</label>
                        </div>
                        <div class="am-checkbox">
                          <input type="checkbox" value="bar" id="e2" data-parsley-multiple="group1" data-parsley-errors-container="#error-container2">
                          <label for="e2">Cách 2</label>
                        </div>
                        <div class="am-checkbox">
                          <input type="checkbox" value="bar" id="e3" data-parsley-multiple="group1" data-parsley-maxcheck="1" data-parsley-errors-container="#error-container2">
                          <label for="e3">Cách 3</label>
                        </div>
                        <div id="error-container2"></div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Lời ghi chú</label>
                      <div class="col-sm-6">
                        <textarea required="" class="form-control" data-parsley-id="72"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-space btn-primary">Tìm kiếm</button>
                        <button class="btn btn-space btn-default">Huỷ</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- End Content -->