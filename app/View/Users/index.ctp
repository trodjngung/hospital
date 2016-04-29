<div class="flash alignCenter pdbt20  " style="margin-top: -20px;">
	<?php echo $this->Session->flash(); ?>
</div>
<!-- Page head -->
<div class="page-head">
	<h2>Danh sách người dùng</h2>
	<ol class="breadcrumb">
		<li>
			<?php
				echo $this->Html->link ( 'Trang chủ', array (
					'controller' => 'hospital',
					'action' => 'index'
				) );
			?>
		</li>
		<li class="active">Danh sách người dùng</li>
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
					<div class="row am-datatable-header">
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
						<!-- End Search -->                 
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-fw-widget table-hover">
						<col width="10%"></col>
						<col width="30%"></col>
						<col width="15%"></col>
						<col width="25%"></col>
						<col width="10%"></col>
						<col width="10%"></col>
						<thead>
							<tr>
								<th>ID</th>
								<th>Tên</th>
								<th>Quyền</th>
								<th>Ngày tạo</th>
								<th colspan="2" class="number">&nbsp;</th>
							</tr>
						</thead>
						<tbody class="no-border-x">
							<?php foreach ($users as $user): ?>
							<tr>
								<td><?php echo $user['User']['id']; ?></td>
								<td><?php
										echo $this->Html->link ( $user ['User'] ['username'], array (
											'controller' => 'users',
											'action' => 'view',
											$user ['User'] ['id']
										) );
									?>
								</td>
								<td> <?php echo $user ['User'] ['role']; ?></td>
								<td> <?php echo $user ['User'] ['created']; ?></td>
								<td>
									<?php
									if( $auth['role'] == 'admin' 
										|| $auth['id'] == $user ['User'] ['id']) {
										echo $this->Html->link(
											'<span class="glyphicon glyphicon-pencil"></span> Sửa ',
											array (
												'controller' => 'users',
												'action' => 'edit',
												$user ['User'] ['id']
						                    ),
						                    array('escape' => FALSE)
						                ); 
						            } else echo '&nbsp;'; ?>
								</td>
								<td>
									<?php
									if( $auth['role'] == 'admin' 
										&& $auth['id'] != $user ['User'] ['id']) {
										echo $this->Html->link(
											'<span class="icon s7-delete-user"></span> Xóa ',
											array (
												'controller' => 'users',
												'action' => 'delete',
												$user ['User'] ['id']
						                    ),
						                    array (
						                    	'escape' => FALSE,
												'confirm' => 'Bạn có chắc chắn xóa muốn xóa người dùng này không?'
											)
						                ); 
						            } else echo '&nbsp;'; ?>
								</td>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>