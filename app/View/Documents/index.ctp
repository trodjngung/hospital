<div class="container mgt20">
	<h1 class="pull-left">Documents</h1>
</div>
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-grey mgt20 mgbt20">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="alignCenter">ID</th>
						<th class="alignCenter">File name</th>
						<th class="alignCenter">Class</th>
						<th class="alignCenter">Teacher</th>
						<th class="alignCenter">Note</th>
						<th class="alignCenter">Created</th>
						<th class="alignCenter">Modified</th>
						<th class="alignCenter">Download</th>
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
							<span class="glyphicon glyphicon-download" aria-hidden="true"></span>
							<?php
								echo $this->Html->link (
									'Download',
									array (
										'action' => 'download',
										$document ['Document'] ['id']
									)
								);
							?>
						</td>
					</tr>
				</tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>