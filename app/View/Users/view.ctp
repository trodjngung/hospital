<!-- Page head -->
<div class="page-head">
	<h2>Người dùng: <?php echo ($user['User']['username']);  ?></h2>
	<ol class="breadcrumb">
		<li>
			<?php
				echo $this->Html->link ( 'Danh sách người dùng', array (
					'controller' => 'users',
					'action' => 'index'
				) );
			?>
		</li>
		<li class="active"><?php echo ($user['User']['username']);  ?></li>
	</ol>
</div>
<!-- End Page Head-->
<!-- Page content -->
<div class="main-content">
	<div class="row">
		<!--Responsive table-->
		<div class="col-sm-12">
			<div class="widget widget-fullwidth widget-small">
				<div class="col-sm-4 col-md-4 shadow-wrapper md-margin-bottom-40">
					<div class="shadow-effect-2">
						<img src='<?php echo $base_url; ?>img/staff/cnn.jpg' width="80%" alt="profile picture">
					</div>
				</div>
				<div class="col-sm-8 col-md-8">
					<div class="table-responsive">
						<table class="table table-striped table-fw-widget table-hover">
							<tbody>
								<tr>
									<td align="right" width="20%">User Id:</td>
									<td width="80%"><?php echo ($user['User']['id']);  ?></td>
								</tr>
								<tr>
									<td align="right">Username:</td>
									<td><?php echo ($user['User']['username']);  ?></td>
								</tr>
								<tr>
									<td align="right">Role:</td>
									<td><?php echo ($user['User']['role']);  ?></td>
								</tr>
								<tr>
									<td align="right">Created:</td>
									<td><?php echo ($user['User']['created']);  ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>