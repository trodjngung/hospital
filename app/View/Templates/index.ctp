<div class="flash alignCenter pdbt20  " style="margin-top: -20px;">
	<?php echo $this->Session->flash(); ?>
</div>
<!-- Page head -->
<div class="page-head">
  <h2>Form/Mẫu ban hành</h2>
  <ol class="breadcrumb">
    <li>
      <?php 
        echo $this->Html->link (
          ' <span class="s7-home"></span> Trang chủ',
          array (
            'controller' => 'hospital',
            'action' => 'index'
          ),
          array('escape' => FALSE)
        );
      ?>
    </li>
    <li class="active">Form/Mẫu ban hành</li>
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
              ' Thêm form/mẫu <span class="s7-add-user"></span>',
              array (
                'controller' => 'templates',
                'action' => 'add'
              ),
              array('escape' => FALSE)
            );
            ?>
          </div>
          <div class="row">
            <div class="col-sm-6">
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
            <div class="col-sm-6 alignRight">
              <!-- Search -->
              <div class="dataTables_length" id="table1_length">
                <label>
                  <input type="search" class="form-control input-md"placeholder=" Tìm kiếm .... " aria-controls="table1">
                </label>
              </div>
            </div>
          </div>
          <!-- End Label-->
        </div>
        <!-- Label-->
        
        <div class="table-responsive">
          <table class="table table-fw-widget table-hover">
            <col width="10%"></col>
            <col width="20%"></col>
            <col width="40%"></col>
            <col width="10%"></col>
            <col width="10%"></col>
            <col width="10%"></col>
            <thead>
              <tr>
              	<b>
              	<th class="alignCenter textStrong">ID form/mẫu</th>
                <th class="alignCenter textStrong">Tên form/mẫu</th>
                <th class="alignCenter textStrong">Nội dung form/</th>
                <th class="alignCenter textStrong">Ngày tạo</th>
                <th class="alignCenter textStrong">Sửa </th>
                <th class="alignCenter textStrong">Xoá </th>
                </b>
              </tr>
            </thead>
            <tbody class="no-border-x">
              <?php foreach ($templates as $template): ?>
                <tr>
                 <td align="center"><?php echo $template['Template']['id']; ?></td>
                  <td class="user-avatar">
                  	<center>
		              		<?php
					          		echo $this->Html->link( 
					          			$template['Template']['template_name'],
											    array(
											        'controller' => 'templates',
											        'action' => 'view',
											        $template['Template']['id']
											    )
												);
											?>
	              		</center>
	                </td>
                  <td><?php echo $template['Template']['template_body']; ?></td>
                  <td><?php echo $template['Template']['created']; ?></td>
                  <td align="center">
                    <?php
                      echo $this->Html->link(
                        '<span class="glyphicon glyphicon-pencil"> Sửa ',
                        array (
                          'controller' => 'templates',
                          'action' => 'edit',
                          $template ['Template'] ['id']
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
                          'controller' => 'templates',
                          'action' => 'delete',
                          $template ['Template'] ['id']
                        ),
                        array(
													'confirm' => 'Bạn có chắc chắn muốn xóa danh mục: ' . $template ['Template'] ['template_name'] . '?',
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
    <div class="dataTables_info" id="table1_info" role="status" aria-live="polite">Hiển thị 4 form/mẫu</div>
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