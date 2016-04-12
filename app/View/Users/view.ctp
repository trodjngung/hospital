<div class="breadcrumbs container">
	<ol class="pull-right breadcrumb">
		<li>
			<?php
				echo $this->Html->link ( 'User', array (
					'controller' => 'users',
					'action' => 'index'
				) );
			?>
		</li>
		<li class="active">view</li>
	</ol>
</div>
<div class="container content mgbt20">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#" data-toggle="tab">View User</a></li>
		</ul>
	</div>
</div>
<div class="mgbt20" style="height:30px;">&nbsp;</div>
<div class="container">
	<div class="row about-me">
		<div class="col-sm-4 col-md-4 shadow-wrapper md-margin-bottom-40">
			<div class="shadow-effect-2">
				<img src='<?php echo $base_url; ?>img/staff/cnn.jpg' width="80%" alt="profile picture">
			</div>
		</div>
		<div class="col-sm-8 col-md-8">
			<table class="table table-striped">
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
			<div class="alignCenter">
				<?php
					echo $this->Html->link ( 'Edit profile', array (
							'controller' => 'users',
							'action' => 'edit',
							$user ['User'] ['id']
						),
						array (
							'class' => 'btn-u mgr20'
						)
					);
				?>
			</div>
		</div>
	</div>
</div>