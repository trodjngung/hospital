<div class="flash alignCenter pdbt20  " style="margin-top: -20px;">
  <?php echo $this->Session->flash(); ?>
</div>
<!-- Page head -->
<div class="page-head">
  <h2>Tiếp nhận bệnh nhân</h2>
  <ol class="breadcrumb">
    <li>
      <a href="#">Trang chủ</a>
    </li>
    <li class="active">Tiếp nhận bệnh nhân</li>
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
          <div class="title mgbt10">
            <?php 
            echo $this->Html->link (
              ' Thêm bệnh nhân <span class="s7-add-user"></span>',
              array (
                'controller' => 'hospital',
                'action' => 'add'
              ),
              array('escape' => FALSE)
            );
            ?>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="dataTables_length" id="table1_length">
                <select name="table1_length" aria-controls="table1" class="form-control input-md">
                  <option value="10" selected>10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
                <label class="mgt5">Xem tất cả</label>
              </div>
            </div>
            <div class="col-sm-4">
              <div id="table1_filter" class="dataTables_filter"></div>
              <!-- Search -->
              <div class="dataTables_length" id="table1_length">
                <label>
                  <input type="search" class="form-control input-md"placeholder=" Tìm kiếm .... " aria-controls="table1">
                </label>
              </div>
            </div>
            <!-- Print -->
           
            <div class="col-sm-4 text-right">
              <div class="dt-buttons btn-group">
               <!--
                <a class="btn btn-default buttons-copy buttons-flash" tabindex="0" aria-controls="table3">
                  <span>Copy</span>
                  <div style="position: absolute; left: 0px; top: 0px; width: 57px; height: 36px; z-index: 99;">
                    <embed id="ZeroClipboard_TableToolsMovie_1" src="#" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="57" height="36" name="ZeroClipboard_TableToolsMovie_1" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=57&amp;height=36" wmode="transparent">
                  </div>
                </a>
                <a class="btn btn-default buttons-excel buttons-flash" tabindex="0" aria-controls="table3">
                  <span>Excel</span>
                  <div style="position: absolute; left: 0px; top: 0px; width: 56px; height: 36px; z-index: 99;">
                    <embed id="ZeroClipboard_TableToolsMovie_2" src="#" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="56" height="36" name="ZeroClipboard_TableToolsMovie_2" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=56&amp;height=36" wmode="transparent">
                  </div>
                </a>
                <a class="btn btn-default buttons-pdf buttons-flash" tabindex="0" aria-controls="table3">
                  <span>PDF</span>
                  <div style="position: absolute; left: 0px; top: 0px; width: 50px; height: 36px; z-index: 99;">
                    <embed id="ZeroClipboard_TableToolsMovie_3" src="#" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="50" height="36" name="ZeroClipboard_TableToolsMovie_3" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=3&amp;width=50&amp;height=36" wmode="transparent">
                  </div>
                </a>
                -->
                <a class="btn btn-default buttons-print" tabindex="0" aria-controls="table3">
                  <span>Print</span>
                </a>
              </div>
            </div>
            <!-- End Print -->
          </div>
          <!-- End Label-->
        </div>
        <!-- Label-->
        
        <div class="table-responsive">
          <table class="table table-bordered table-fw-widget table-hover">
            <col width="5%"></col>
            <col width="8%"></col>
            <col width="5%"></col>
            <col width="6%"></col>
            <col width="8%"></col>
            <col width="10%"></col>
            <col width="8%"></col>
            <col width="8%"></col>
            <col width="10%"></col>
            <col width="18%"></col>
            <col width="5%"></col>
            <col width="5%"></col>

            <thead>
              <tr>
              <b>
               <th class="alignCenter">Mã bệnh nhân</th>
                <th class="alignCenter">Tên Bệnh Nhân</th>
                <th class="alignCenter">Giới tính</th>
                <th class="alignCenter">Ngày sinh</th>
                <th class="alignCenter">Số điện thoại</th>
                <th class="alignCenter">Địa chỉ</th>
                <th class="alignCenter">Bác sỹ chỉ định</th>
                <th class="alignCenter">KTV chỉ định</th>
                <th class="alignCenter">Danh mục khám</th>
                <th class="alignCenter">Lý do khám</th>
                <th class="alignCenter">Sửa </th>
                <th class="alignCenter">Xoá </th>
                </b>
              </tr>
            </thead>
            <tbody class="no-border-x">
              <?php foreach ($patients as $patient): ?>
                <tr>
                 <td align="center"><?php echo $patient['Patient']['id']; ?></td>
                  <td class="user-avatar"><center><?php echo $this->Html->link( $patient['Patient']['hoten'],
    array(
        'controller' => 'hospital',
        'action' => 'view_patient',
        $patient['Patient']['id']
    )
);
?>
                </center> </td>
                 
                  <td align="center">
                    <?php
                      if($patient['Patient']['gioitinh'] == 'nam') {
                        $patient['Patient']['gioitinh'] = 'Nam';
                      } else {
                       $patient['Patient']['gioitinh'] = 'Nữ';
                      }
                    ?>
                    <?php echo $this->Html->link( $patient['Patient']['gioitinh'],
    array(
        'controller' => 'hospital',
        'action' => 'view_patient',
        $patient['Patient']['id']
    )
);
?>
                  </td>
                  <td align="center">
                  <?php echo $this->Html->link( $patient['Patient']['ngaysinh'],
    array(
        'controller' => 'hospital',
        'action' => 'view_patient',
        $patient['Patient']['id']
    )
);
?>
                  </td>
                  <td><?php echo $this->Html->link( $patient['Patient']['phone'],
    array(
        'controller' => 'hospital',
        'action' => 'view_patient',
        $patient['Patient']['id']
    )
);
?></td>
                  <td align="center"><?php echo $this->Html->link( $patient['Patient']['diachi'],
    array(
        'controller' => 'hospital',
        'action' => 'view_patient',
        $patient['Patient']['id']
    )
);
?></td>
                  <td><?php echo $this->Html->link( $patient['Patient']['bacsy'],
    array(
        'controller' => 'hospital',
        'action' => 'view_patient',
        $patient['Patient']['id']
    )
);
?></td>
                   <td><?php echo $this->Html->link( $patient['Patient']['kythuat'],
    array(
        'controller' => 'hospital',
        'action' => 'view_patient',
        $patient['Patient']['id']
    )
);
?></td>
                    <td style = "color:red">
                    <?php $danhmuc = explode(',', $patient['Patient']['danhmuc']);?>
                    
<?php foreach ($danhmuc as $key){echo $key.'<br>'; }?>
                    
                    
                    
        </td>
        <td><?php echo $this->Html->link( $patient['Patient']['lydo'],
    array(
        'controller' => 'hospital',
        'action' => 'view_patient',
        $patient['Patient']['id']
    )
);
?></td>
                  <td align="center">
                    <?php
                      echo $this->Html->link(
                        '<span class="glyphicon glyphicon-pencil"> Sửa ',
                        array (
                          'controller' => 'hospital',
                          'action' => 'edit',
                          $patient ['Patient'] ['id']
                        ),
                        array(
                          'class' => 'btn btn-info btn-sm',
                          'style' => 'margin-right: 3px;',
                          'escape' => FALSE
                        )
                      );
                      ?>
                      </td>
                      <td>
                      <?php
                      echo $this->Html->link(
                        '<span class="s7-delete-user"> Xóa ',
                        array (
                          'controller' => 'hospital',
                          'action' => 'delete',
                          $patient ['Patient'] ['id']
                        ),
                        array(
                          'confirm' => 'Bạn có chắc chắn muốn xóa bệnh nhân ' . $patient ['Patient'] ['hoten'] . '?',
                          'class' => 'btn btn-info btn-sm',
                          'escape' => FALSE
                        )
                      );
                    ?>
                  </td>
                 </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page content-->
<div class="row am-datatable-footer">
  <div class="col-sm-5">
    <div class="dataTables_info" id="table1_info" role="status" aria-live="polite">Hiển thị 4 bệnh nhân</div>
  </div>
  <div class="col-sm-7">
    <div class="dataTables_paginate paging_simple_numbers" id="table1_paginate">
      <ul class="pagination">
        <li class="paginate_button previous disabled" id="table1_previous">
          <a href="#" aria-controls="table1" data-dt-idx="0" tabindex="0">Trước</a>
        </li>
        <li class="paginate_button active">
          <a href="#" aria-controls="table1" data-dt-idx="1" tabindex="0">1</a>
        </li>
        <li class="paginate_button ">
          <a href="#" aria-controls="table1" data-dt-idx="2" tabindex="0">2</a>
        </li>
        <li class="paginate_button ">
          <a href="#" aria-controls="table1" data-dt-idx="3" tabindex="0">3</a>
        </li>
        <li class="paginate_button ">
          <a href="#" aria-controls="table1" data-dt-idx="4" tabindex="0">4</a>
        </li>
        <li class="paginate_button ">
          <a href="#" aria-controls="table1" data-dt-idx="5" tabindex="0">5</a>
        </li>
        <li class="paginate_button ">
          <a href="#" aria-controls="table1" data-dt-idx="6" tabindex="0">6</a>
        </li>
        <li class="paginate_button next" id="table1_next">
          <a href="#" aria-controls="table1" data-dt-idx="7" tabindex="0">Sau</a>
        </li>
      </ul>
    </div>
  </div>
</div>