<div class="breadcrumbs container">
	<ol class="pull-right breadcrumb">
		<li>
			<?php
				echo $this->Html->link ( 'View user', array (
					'controller' => 'users',
					'action' => 'view',
					$user["User"]["id"]
				) );
			?>
		</li>
		<li class="active">edit</li>
	</ol>
</div>
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
<div class="container content mgbt20">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#" data-toggle="tab">Edit User</a></li>
		</ul>
	</div>
</div>
<div class="container">
	<div class="row about-me">
		<div class="col-sm-4 col-md-4 shadow-wrapper">
			<div class="shadow-effect-2">
				<img src='<?php echo $base_url; ?>img/staff/cnn.jpg' width="80%" alt="profile picture">
			</div>
		</div>
		<div class="col-sm-8 col-md-8">
			<h2 class="pdbt10">Change user information</h2>
			<?php 
				echo $this->Form->create('User');
				
				echo $this->Form->input ( 'username', array('type'=>'text','label'=>false,'placeholder'=>'Username', 'class'=>'form-control mgt20 required') );

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
				<button type="submit" class="btn-u"><?php echo __('Update')?></button>
			</div>
		</div>
	</div>
</div>



