<?php echo $this->Html->script('ckeditor/ckeditor');?>
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
<!-- Page head -->
<div class="page-head">
  <h2>Form/mẫu: <b><?php echo $template['Template']['template_name'] ; ?></h2>
  <ol class="breadcrumb">
    <li>
      <?php 
        echo $this->Html->link (
          ' Danh sách form/mẫu',
          array (
            'controller' => 'templates',
            'action' => 'index'
          )
        );
      ?>
    </li>
    <li class="active">Form/mẫu: <b><?php echo $template['Template']['template_name'] ; ?></b></li>
  </ol>
</div>
<!-- End Page Head-->
<div class="container">
	<div class="row about-me">
		<div class="col-sm-12 col-md-12">
			<div class="mgbt20 alignRight">
				
			</div>
			<table class="table table-striped table-fw-widget table-hover">
				<tbody>
					<tr>
						<td align="right" width="20%">Id form/mẫu:</td>
						<td width="80%"><?php echo ($template['Template']['id']);  ?></td>
					</tr>
					<tr>
						<td align="right">Tên form/mẫu:</td>
						<td><?php echo ($template['Template']['template_name']);  ?></td>
					</tr>
					<tr>
						<td align="right">Nội dung:</td>
						<td><?php echo ($template['Template']['template_body']);  ?></td>
					</tr>
					<tr>
						<td align="right">Ngày tạo:</td>
						<td><?php echo ($template['Template']['created']);  ?></td>
					</tr>
				</tbody>
			</table>
			<div class="row">
				<div class="col-sm-12 alignCenter">
					<?php
						echo $this->Html->link (
							'Chỉnh sửa',
							array (
								'controller' => 'templates',
								'action' => 'edit',
								$template['Template']['id']
							),
							array (
								'class' => 'btn btn-primary'
							)
						);
					?>
				</div>
			</div>
		</div>
	</div>
</div>