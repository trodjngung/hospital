<div class="flash alignCenter pdbt20  " style="margin-top: -20px;">
	<?php echo $this->Session->flash(); ?>
</div>
<div class="container content mgbt20">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#home-1" data-toggle="tab">Register</a></li>
			<li class="" style="margin-left: 5px;border:1px solid #ccc;">
				<?php
					echo $this->Html->link ( 'Login', array (
						'controller' => 'user',
						'action' => 'login'
					) );
				?>
			</li>
		</ul>
	</div>
</div>
<div class="mgbt10">&nbsp;</div>
<div class="container">
	<div class="col-md-3 col-sm-3">&nbsp;</div>
	<div class="col-md-6 col-sm-6 form-register">
		<h2 class="pdbt10">Input user information</h2>
		<?php 
			echo $this->Form->create('User');
			
			echo $this->Form->input ( 'username', array('type'=>'text','label'=>false,'placeholder'=>'Username', 'class'=>'form-control mgt20 required') );

			echo $this->Form->input ( 'password',array('label'=>false,'placeholder'=>'New Password','class'=>'form-control mgt20 required') );

			echo $this->Form->input ( 'password_confirm',array('label'=>false,'placeholder'=>'Confirm New Password','class'=>'form-control mgt20 required', 'type' => 'password') );

			echo '<select name="data[User][role]" class="mgt20" style="padding: 7px;" id="UserRole" required="required">';
			echo '<option value=""> --- </option>';
			foreach($user_roles as $user_role):
				echo '<option value="' . $user_role["SelectOption"]["select_code"] . '">' . $user_role["SelectOption"]["display_name"] . '</option>';
			endforeach;
			echo '</select>';
		?>
		<div class="alignCenter mgt20">
			<button type="submit" class="btn-u"><?php echo __('Create')?></button>
		</div>
	</div>
	<div class="col-md-3 col-sm-3">&nbsp;</div>
</div>



