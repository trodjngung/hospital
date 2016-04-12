<style>
.col-md-12 {
  width: 105%;
}

</style>
<div class="container">
	<div class="col-md-12">
		<div class="tab-v1">
			<ul class="nav nav-tabs">
				<li class="active"><?php
				echo $this->Html->link ( 'Add Posts', array (
						'controller' => 'posts',
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
			<div class="container">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Thể loại</th>
						<th>Tiêu đề</th>
						<th>Link ảnh</th>									
					</tr>
				</thead>
				<tbody>
			 <?php foreach ($data as $post):?> 
				<tr>
						<td><?php echo $post['Post']['id']; ?></td>
						<td> <?php			
				echo $this->Html->link ( $post ['Post'] ['theloai'], array (
						'controller' => 'posts',
						'action' => 'view',
						$post ['Post'] ['id'] 
				) );
				?></td>
						<td> <?php
				
				echo $this->Html->link ( $post ['Post'] ['title'], array (
						'controller' => 'posts',
						'action' => 'view',
						$post ['Post'] ['id'] 
				) );
				?></td>
				<td> <?php
				
				echo $this->Html->link ( $post ['Post'] ['image'], array (
						'controller' => 'posts',
						'action' => 'view',
						$post ['Post'] ['id'] 
				) );
				?></td>
					<td><a class="btn btn-danger btn-xs"> <?php
				echo $this->Html->link ( 'Edit', array (
						'action' => 'edit',
						$post ['Post'] ['id'] 
				) );
				?></a> <a class="btn btn-warning btn-xs">
					 <?php
				echo $this->Form->postLink ( 'Delete', array (
						'action' => 'delete',
						$post ['Post'] ['id'] 
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
		</div>

		<div class="col-md-12">
       <hr>
		</div>
		<!-- Pagination -->
				<div class="text-center">
                    <ul class="pagination">
                        <li><?php echo $this->Paginator->first(__('<< First', true), array('class' => 'number-first'));?></li>
                        <li><?php echo $this->Paginator->prev('« Trang trước', null, null, array('class' => 'disabled')); ?></li>
                        <li> <?php echo $this->Paginator->numbers(); ?></li>
                        <li><?php echo $this->Paginator->next('Trang sau »', null, null, array('class' => 'disabled')); ?> </li>
                        <li><?php echo $this->Paginator->last(__('>> Last', true), array('class' => 'number-end'));?></li>
                    </ul>                                                            
                </div>
				<!-- END Pagination -->
	</div>
</div>




