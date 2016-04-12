<div class="container mgt20">
	<h1 class="pull-left">Table User</h1>
</div>
<div class="flash alignCenter">
	<?php echo $this->Session->flash(); ?>
</div>
<div class="container">
	<?php //debug($users)?>
	<div class="col-md-12">
		<div class="tab-v1">
			<ul class="nav nav-tabs">
				<li class="active" style="float: right;"><?php echo $this->Html->link('Add New User', array ('controller' => 'users', 'action' => 'register'), array('style'=>'cursor: auto!important;')); ?></li>
			</ul>
		</div>
		<div class="panel panel-grey margin-bottom-40">
			<div class="panel-heading">
				<h3 class="panel-title">
				<i class="fa fa-user"></i> You are using user : <span
				class="color-red"><strong><?php echo $auth['username'];?></strong></span>
				</h3>
			</div>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Role</th>
						<th>Created</th>
						<th colspan="2" class="alignCenter">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user): ?>
					<tr>
						<td><?php echo $user['User']['id']; ?></td>
						<td> <?php
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
							<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
							<?php
								echo $this->Html->link (
									'Edit',
									array (
										'action' => 'edit',
										$user ['User'] ['id']
									)
								);
							?>
						</td>
						<td align="center">
							<?php
								if($auth['id'] != $user ['User'] ['id']) {
									echo '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> ';
									echo $this->Form->postLink (
										'Delete',
										array (
											'action' => 'delete',
											$user ['User'] ['id']
										),
										array (
											'confirm' => 'Are you sure?'
										)
									);
								}
							?>
						</td>
					</tr>
				</tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>