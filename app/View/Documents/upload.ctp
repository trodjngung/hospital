<div class="breadcrumbs container">
	<ol class="pull-right breadcrumb">
		<li>
			<?php
				echo $this->Html->link ( 'Document manage', array (
					'controller' => 'documents',
					'action' => 'manage'
				) );
			?>
		</li>
		<li class="active">upload file</li>
	</ol>
</div>
<div class="container content mgbt20">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#" data-toggle="tab">Upload file</a></li>
		</ul>
	</div>
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
<div class="container">
	<div class="col-md-2 col-sm-2">&nbsp;</div>
	<div class="col-md-8 col-sm-8">
		<?php 
		echo $this->Form->create('Document', array(
			'enctype' => 'multipart/form-data'
		));
		
		echo $this->Form->input ( 'filename', array('type'=>'text','label'=>false,'placeholder'=>'File name', 'class'=>'form-control mgt20') );
		?>
		<div class="mgt20">
			<span>Choose class:</span>
			<div class="mgt20 mgbt20 mgl20 mgr20">
			<?php foreach ($class_names as $class): ?>
				<div class="class-teacher-checkbox mgbt10">
				<input name="data[Document][class_name][]" value="<?php echo $class['SelectOption']['select_code']?>" id="ModelName1" type="checkbox">
				<label for="" class="selected mgl10"><?php echo $class['SelectOption']['select_code']?></label></div>
			<?php endforeach; ?>
			</div>
		</div>

		<div class="mgt20 pdt20 clearBoth">
			<span>Choose teacher:</span>
			<div class="mgt20 mgbt20 mgl20 mgr20">
			<?php foreach ($teacher_names as $teacher_name): ?>
				<div class="class-teacher-checkbox mgbt10">
				<input name="data[Document][teacher_name][]" value="<?php echo $teacher_name['SelectOption']['select_code']?>" id="ModelName1" type="checkbox">
				<label for="" class="selected mgl10"><?php echo $teacher_name['SelectOption']['select_code']?></label></div>
			<?php endforeach; ?>
			</div>
		</div>

		<textarea name="data[Document][note]" form="DocumentUploadForm" class="pdl10 mgt20 clearBoth" style="width: 100%; height: 70px;" placeholder="Write note ..."></textarea>

		<?php echo $this->Form->file(
			'file',
			array(
				'class' => 'mgt20 clearBoth'
			)
		); ?>
		
		<?php echo $this->Form->input(
			'user_id',
			array(
				'type' => 'hidden',
				'value' => $auth['id']
			)
		); ?>

		<div class="alignCenter mgt20 pdt20 clearBoth">
		<?php echo $this->Form->button(
			'Upload',
			 array(
			 	'type' => 'submit',
			 	'class' => 'btn-u'
			)
		);?>
		</div>
	</div>
	<div class="col-md-2 col-sm-2">&nbsp;</div>
</div>