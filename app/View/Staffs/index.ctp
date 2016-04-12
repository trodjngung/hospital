<style>
.col-md-12 {
  width: 150%;
}
.container {
 margin-left:5px;
}
</style>
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">TABLE STAFF</h1>
		
	</div>
	<!--/container-->
</div>
<div class="container">
	<div class="col-md-12">
		<div class="tab-v1">
			<ul class="nav nav-tabs">
				<li class="active"><?php
				echo $this->Html->link ( 'Add New Staff', array (
						'controller' => 'staffs',
						'action' => 'add' 
				) );
				?></li>


			</ul>
		</div>
		<div class="panel panel-grey margin-bottom-40">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-user"></i> Login by user:
					<span class="color-red"> <?php echo $auth['username']?></span>

				</h3>
			</div>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Address</th>
						<th>image</th>
						<th>Facebook</th>
						<th>Twitter</th>
						<th>Birthday</th>
						<th>Graduate</th>
						<th>HTML</th>
						<th>Java</th>
						<th>PHP</th>
						<th>NodeJs</th>
						<th>Linux</th>
						<th>Jap</th>
						<th>Eng</th>
						<th>Viet</th>
						<th>Message</th>
					</tr>
				</thead>
				<tbody>
			<?php foreach ($staffs as $staff): ?>
				<tr>
						<td><?php echo $staff['Staff']['id']; ?></td>
						<td> <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['name'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?></td>

						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['address'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['image'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>

						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['facebook'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['twitter'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['birthday'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['graduate'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['htmlcss'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>

						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['javascript'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['php'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['nodejs'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['linux'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['japanese'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['english'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['vietnamese'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $staff ['Staff'] ['message'], array (
						'controller' => 'staffs',
						'action' => 'view',
						$staff ['Staff'] ['id'] 
				) );
				?>
					</td>

						<td><a class="btn btn-danger btn-xs"> <?php
				echo $this->Html->link ( 'Edit', array (
						'action' => 'edit',
						$staff ['Staff'] ['id'] 
				) );
				?></a> <a class="btn btn-warning btn-xs">
					 <?php
				echo $this->Form->postLink ( 'Delete', array (
						'action' => 'delete',
						$staff ['Staff'] ['id'] 
				), array (
						'confirm' => 'Are you sure?' 
				) );
				?>
					</a></td>
					</tr>
				</tbody>
			<?php endforeach; ?>
		</table>
		</div>


		<div class="col-md-12">
			<div class="tab-v1">
				<ul class="nav nav-tabs">



					<li class="active"><?php
					echo $this->Html->link ( 'Logout ', array (
							'controller' => 'users',
							'action' => 'logout' 
					) );
					?></li>
					<li class="active"><?php
					echo $this->Html->link ( 'View Information Your User ', array (
							'controller' => 'users',
							'action' => 'view',
							$auth ['id'] 
					) );
					?></li>


				</ul>
			</div>
		</div>
	</div>
</div>




