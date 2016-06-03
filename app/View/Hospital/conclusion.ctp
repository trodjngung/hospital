<div class="page-head">
          <h2>Kết Luận</h2>
          <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li class="active">Kết Luận</li>
          </ol>
        </div>
        
        <!-- Content Page -->
        <div class="main-content">

<!-- Bệnh nhân đã có kết luận --><div class="row">
    <!--Responsive table-->
    <div class="col-sm-12">
      <div class="widget widget-fullwidth widget-small">
        <div class="widget-head">
          <div class="title mgbt10">
            <a href="#"> Bệnh nhân đã có kết luận <span class="s7-add-user"></span></a>          </div>
          <div class="row">
            
            <div class="col-sm-12">
              <div id="table1_filter" class="dataTables_filter"></div>
              <!-- Search -->
              <div class="dataTables_length" id="table1_length">
                
              </div>
            </div>
            <!-- Print -->
           
            
            <!-- End Print -->
          </div>
          <!-- End Label-->
        </div>
        <!-- Label-->
        
        <div class="table-responsive">
          <b>
               </b><table class="table table-bordered table-fw-widget table-hover">
            <colgroup> <col width="5%"></col>
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
           

            </colgroup><thead>
              <tr>
              <th class="alignCenter">Mã bệnh nhân</th>
                <th class="alignCenter">Tên Bệnh Nhân</th>
                <th class="alignCenter">Giới tính</th>
                <th class="alignCenter">Ngày sinh</th>
                <th class="alignCenter">Số điện thoại</th>
                <th class="alignCenter">Địa chỉ</th>
                <th class="alignCenter">Bác sỹ chỉ định</th>
                <th class="alignCenter">KTV chỉ định</th>
                <th class="alignCenter">Danh mục khám</th>
                <th class="alignCenter">Kết Luận</th>
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
                    <td style = "color:red">
                    <?php $danhmuc = explode(',', $patient['Patient']['danhmuc']);?>
                    
<?php foreach ($danhmuc as $key){echo $key.'<br>'; }?>
                    
                    
                    
        </td>
        <td><?php 
        
        echo   $patient['Patient']['ketluan'];
  
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
<!-- End Bệnh nhân đã có kết luận-->
         
        </div>
        <!--end content Page -->