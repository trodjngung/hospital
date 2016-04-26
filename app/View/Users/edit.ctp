<!-- Page head -->
<div class="page-head">
	<h2>Chỉnh sửa người dùng: <?php echo ($user['User']['username']);  ?></h2>
	<ol class="breadcrumb">
		<li>
			<?php
				echo $this->Html->link ( 'Danh sách người dùng', array (
					'controller' => 'users',
					'action' => 'index'
				) );
			?>
		</li>
		<li>
			<?php
				echo $this->Html->link ( $user['User']['username'], array (
					'controller' => 'users',
					'action' => 'view',
					$user['User']['id']
				) );
			?>
		</li>
		<li class="active">Chỉnh sửa thông tin</li>
	</ol>
</div>
<!-- End Page Head-->
<!-- Page content -->
<div class="main-content">
	<div class="row">
		<div class="alignCenter">
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
	<div class="row">
		<!--Responsive table-->
		<div class="col-sm-12">
			<div class="widget widget-fullwidth widget-small">
				<div class="col-sm-4 col-md-4 shadow-wrapper">
					<div class="shadow-effect-2">
						<img src='http://phongkham709.com/wp-content/uploads/2015/07/doctor_icon.png' width="80%" alt="profile picture">
					</div>
				</div>
				<div class="col-sm-8 col-md-8">
					<?php 
						echo $this->Form->create('User');
						
						echo $this->Form->input ( 'username', array('type'=>'text','label'=>false,'placeholder'=>'Username', 'class'=>'form-control required', 'readonly' => 'readonly') );

						echo $this->Form->input ( 'password',array('label'=>false,'placeholder'=>'New Password','class'=>'form-control mgt20 required') );

						echo $this->Form->input ( 'password_confirm',array('label'=>false,'placeholder'=>'Confirm New Password','class'=>'form-control mgt20 required', 'type' => 'password') );

						echo $this->Form->input ( 'role', array (
							'label' => false,
							'options' => array (
								'admin' => 'Admin',
								'author' => 'Author'
							),
							'class' => 'mgt20',
							'style' => "padding: 7px;"
						));

						echo $this->Form->input('id', array('type' => 'hidden'));
					?>
					<div class="alignCenter mgt20">
						<button type="submit" class="btn btn-primary">
							<?php echo __('Update')?>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>