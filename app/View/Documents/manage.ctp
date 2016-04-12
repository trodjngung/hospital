<div class="container mgt20">
	<h1 class="pull-left">Documents</h1>
</div>
<div class="flash alignCenter">
	<?php echo $this->Session->flash(); ?>
</div>
<div class="container">
	<div class="col-md-12">
		<div class="tab-v1">
			<ul class="nav nav-tabs">
				<li class="active" style="float: right;"><?php echo $this->Html->link('Upload document', array ('controller' => 'documents', 'action' => 'upload'), array('style'=>'cursor: auto!important;')); ?></li>
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
						<th class="alignCenter">ID</th>
						<th class="alignCenter">File name</th>
						<th class="alignCenter">Class</th>
						<th class="alignCenter">Teacher</th>
						<th class="alignCenter">Note</th>
						<th class="alignCenter">Created</th>
						<th class="alignCenter">Modified</th>
						<th colspan="3" class="alignCenter">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($documents as $document): ?>
					<tr>
						<td><?php echo $document['Document']['id']; ?></td>
						<td> <?php echo $document ['Document'] ['filename']; ?></td>
						<td> <?php echo $document ['Document'] ['class_name']; ?></td>
						<td> <?php echo $document ['Document'] ['teacher_name']; ?></td>
						<td> <?php echo $document ['Document'] ['note']; ?></td>
						<td> <?php echo $document ['Document'] ['created']; ?></td>
						<td> <?php echo $document ['Document'] ['modified']; ?></td>
						<td align="center">
							<?php
								echo '<span class="glyphicon glyphicon-download" aria-hidden="true"></span>';
								echo $this->Html->link (
									'Download',
									array (
										'action' => 'download',
										$document ['Document'] ['id']
									)
								);
							?>
						</td>
						<td align="center">
							<?php
								if($auth['role'] == 'admin' || $auth['id'] == $document['Document']['user_id']) {
									echo '<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>';
									echo $this->Form->postLink (
										'Refresh',
										array (
											'action' => 'refresh',
											$document ['Document'] ['id']
										),
										array (
											'confirm' => 'Are you sure refresh this file?'
										)
									);
								}
							?>
						</td>
						<td align="center">
							<?php
								if($auth['role'] == 'admin' || $auth['id'] == $document['Document']['user_id']) {
									echo '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>';
									echo $this->Form->postLink (
										'Delete',
										array (
											'action' => 'delete',
											$document ['Document'] ['id']
										),
										array (
											'confirm' => 'Are you sure delete this file?'
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