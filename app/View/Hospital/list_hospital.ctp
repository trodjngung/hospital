<!-- Page head -->
<div class="row alignCenter mgbt10">
  <div class="">
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
                  <h3>Lựa chọn theo trạng thái </h3>
                   <div class="row am-datatable-header">
                   
                                
                      <div class="col-sm-4">
                        <div class="dataTables_length" id="table1_length">
                           <label><select name="table1_length" aria-controls="table1" class="form-control input-sm">
                                <option value="Chưa Khám">Chưa Khám</option>
                                <option value="Đã khám, đang chờ kết luận">Đã khám, đang chờ kết luận</option>
                                <option value="Đã có kết luận">Đã có kết luận</option>  
                                </select>                           
                          </div>
                     </div>
</div>
                <!-- Label-->
               
               <div class="table-responsive">
          <b>
               </b><table class="table table-bordered table-fw-widget table-hover">
            <colgroup><col width="5%">
            <col width="8%">
            <col width="5%">
            <col width="6%">
            <col width="8%">
            <col width="10%">
            <col width="12%">
            <col width="12%">
            <col width="12%">
            <col width="5%">
            <col width="5%">
            <col width="5%">
            <col width="5%">

            </colgroup><thead>
              <tr>
              <th class="alignCenter">Mã</th>
                <th class="alignCenter">Tên Bệnh Nhân</th>
                <th class="alignCenter">Giới tính</th>
                <th class="alignCenter">Ngày sinh</th>
                <th class="alignCenter">Số điện thoại</th>
                <th class="alignCenter">Địa chỉ</th>
                <th class="alignCenter">Bác sỹ chỉ định</th>
                <th class="alignCenter">KTV chỉ định</th>
                <th class="alignCenter">Trạng thái</th>
                <th class="alignCenter">Thời gian</th>
                <th class="alignCenter">Sửa </th>
                <th class="alignCenter">Xoá </th>
                
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
                    <td >
                                        
<?php echo $this->Html->link( $patient['Patient']['trangthai'],
    array(
        'controller' => 'hospital',
        'action' => 'view_patient',
        $patient['Patient']['id']
    )
);
?>
                                      
                    
                    
        </td>
        <td><?php echo $this->Html->link( $patient['Patient']['created'],
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
                      ?>                    </td>
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
                          'class' => 'btn btn-info btn-sm',
                          'escape' => FALSE
                        )
                      );
                    ?>                </td>
                 </tr>
                              
                          </tbody>
<?php endforeach; ?>
          </table>
        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
 <!-- End Page content-->   
 <div class="row am-datatable-footer"><div class="col-sm-5"><div class="dataTables_info" id="table1_info" role="status" aria-live="polite">Hiển thị 4 bệnh nhân</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="table1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="table1_previous"><a href="#" aria-controls="table1" data-dt-idx="0" tabindex="0">Trước</a></li><li class="paginate_button active"><a href="#" aria-controls="table1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="table1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="table1_next"><a href="#" aria-controls="table1" data-dt-idx="7" tabindex="0">Sau</a></li></ul></div></div></div>  
        