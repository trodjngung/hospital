<!-- Page head -->
<div class="page-head">
          <h2>Danh sách bệnh nhân</h2>
          <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li class="active">Danh sách bệnh nhân</li>
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
                  <div class="title">Thêm Bệnh Nhân</div>
                   <div class="row am-datatable-header">
                   
                                
                      <div class="col-sm-4">
                        <div class="dataTables_length" id="table1_length">
                           <label><select name="table1_length" aria-controls="table1" class="form-control input-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                </select> Xem tất cả</label></div></div><div class="col-sm-4"><div id="table1_filter" class="dataTables_filter">
                          </div>
        <!-- Search -->
                                <div class="col-sm-4">
                         	<div class="dataTables_length" id="table1_length">
                                <label><input type="search" class="form-control input-sm" placeholder=" Tìm kiếm .... " aria-controls="table1"></label>
                                </div>
                                </div>
                                <!-- End Search -->                  </div>
                            
                                <!-- Print -->
                                
                                <div class="col-sm-4 text-right">
                                	<div class="dt-buttons btn-group">
                                		<a class="btn btn-default buttons-copy buttons-flash" tabindex="0" aria-controls="table3">
                                			<span>Copy</span>
                                				<div style="position: absolute; left: 0px; top: 0px; width: 57px; height: 36px; z-index: 99;">
                                					<embed id="ZeroClipboard_TableToolsMovie_1" src="#" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="57" height="36" name="ZeroClipboard_TableToolsMovie_1" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=57&amp;height=36" wmode="transparent"></div></a><a class="btn btn-default buttons-excel buttons-flash" tabindex="0" aria-controls="table3"><span>Excel</span><div style="position: absolute; left: 0px; top: 0px; width: 56px; height: 36px; z-index: 99;">
                                					<embed id="ZeroClipboard_TableToolsMovie_2" src="#" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="56" height="36" name="ZeroClipboard_TableToolsMovie_2" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=56&amp;height=36" wmode="transparent"></div></a><a class="btn btn-default buttons-pdf buttons-flash" tabindex="0" aria-controls="table3"><span>PDF</span><div style="position: absolute; left: 0px; top: 0px; width: 50px; height: 36px; z-index: 99;">
                                					<embed id="ZeroClipboard_TableToolsMovie_3" src="#" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="50" height="36" name="ZeroClipboard_TableToolsMovie_3" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=3&amp;width=50&amp;height=36" wmode="transparent"></div></a><a class="btn btn-default buttons-print" tabindex="0" aria-controls="table3"><span>Print</span></a></div></div>
                                 <!-- End Print -->
                   </div>
                 <!-- End Label-->
                </div>
                <!-- Label-->
               
                <div class="table-responsive">
                  <table class="table table-striped table-fw-widget table-hover">
                    <thead>
                      <tr>
                        <th width="15%">Tên Bệnh Nhân</th>
                        <th width="10%">Mã số</th>
                        <th width="5%">Giới tính</th>
                        <th width="5%">Tuổi</th>
                        <th width="20%" class="number">Địa chỉ</th>
                        <th width="5%" class="number">Lần khám</th>
                        <th width="30%" class="number">Kết quả</th>
                        <th width="10%" class="number">Hành động</th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td class="user-avatar"> <img src="/img/hospital/avatar4.jpg">Nguyễn Văn A</td>
                        <td>101</td>
                        <td>Nam</td>
                        <td>35</td>
                        <td class="number">Xuân Thuỷ, Cầu Giấy, Hà Nội</td>
                        <td class="number">2</td>
                        <td class="number">Đau đầu, đau tay, đau chân, đau tứ chi, đêm nằm đau buốt, lúc nào cũng đau..</td>
                        <td>
                                            <a href="#" class="btn btn-info btn-sm">
          					<span class="glyphicon glyphicon-pencil"></span> Sửa 
       					    </a>
                                              <a href="#" class="btn btn-info btn-sm">
          					<span class="s7-trash"></span> Xoá 
      						  </a>
                                        </td>
                      </tr>
                     <tr>
                        <td class="user-avatar"> <img src="/img/hospital/avatar5.jpg">Nguyễn Thị B</td>
                        <td>102</td>
                        <td>Nữ</td>
                        <td>29</td>
                        <td class="number">Đống Đa, Hà Nội</td>
                        <td class="number">10</td>
                        <td class="number">Đau đầu, đau tay, đau chân, đau tứ chi, đêm nằm đau buốt, lúc nào cũng đau..</td>
                        <td>
                                            <a href="#" class="btn btn-info btn-sm">
          					<span class="glyphicon glyphicon-pencil"></span> Sửa 
       					    </a>
                                              <a href="#" class="btn btn-info btn-sm">
          					<span class="icon s7-close"></span> Xoá 
      						  </a>
                                        </td>
                      </tr>
                        <tr>
                        <td class="user-avatar"> <img src="/img/hospital/avatar6.jpg">Nguyễn Hữu D</td>
                        <td>107</td>
                        <td>Nam</td>
                        <td>62</td>
                        <td class="number">Thanh Xuân, Hà Nội</td>
                        <td class="number">49</td>
                        <td class="number">Đau đầu, đau tay, đau chân, đau tứ chi, đêm nằm đau buốt, lúc nào cũng đau..</td>
                        <td>
                                            <a href="#" class="btn btn-info btn-sm">
          					<span class="glyphicon glyphicon-pencil"></span> Sửa 
       					    </a>
                                              <a href="#" class="btn btn-info btn-sm">
          					<span class="icon s7-close"></span> Xoá 
      						  </a>
                                        </td>
                      </tr>
                     <tr>
                        <td class="user-avatar"> <img src="/img/hospital/avatar7.jpg">Nguyễn Thị Lựu</td>
                        <td>109</td>
                        <td>Nữ</td>
                        <td>7</td>
                        <td class="number">Tây Hồ, Hà Nội</td>
                        <td class="number">1</td>
                        <td class="number">Đau đầu, đau tay, đau chân, đau tứ chi, đêm nằm đau buốt, lúc nào cũng đau..</td>
                        <td>
                                            <a href="#" class="btn btn-info btn-sm">
          					<span class="glyphicon glyphicon-pencil"></span> Sửa 
       					    </a>
                                              <a href="#" class="btn btn-info btn-sm">
          					<span class="icon s7-close"></span> Xoá 
      						  </a>
                                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
 <!-- End Page content-->   
 <div class="row am-datatable-footer"><div class="col-sm-5"><div class="dataTables_info" id="table1_info" role="status" aria-live="polite">Hiển thị 4 bệnh nhân</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="table1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="table1_previous"><a href="#" aria-controls="table1" data-dt-idx="0" tabindex="0">Trước</a></li><li class="paginate_button active"><a href="#" aria-controls="table1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="table1_next"><a href="#" aria-controls="table1" data-dt-idx="7" tabindex="0">Sau</a></li></ul></div></div></div>  
        