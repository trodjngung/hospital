<?php echo $this->Html->script('ckeditor/ckeditor');?>
<!-- Page head -->
<div class="page-head">
  <h2>Thêm bệnh nhân</h2>
  <ol class="breadcrumb">
    <li>
      <?php
        echo $this->Html->link ( ' Mẫu chuẩn', array (
          'controller' => 'templates',
          'action' => 'index'
        ) );
      ?>
    </li>
    <li class="active">Thêm mẫu mới</li>
  </ol>
</div>
<!-- End Page Head-->
<div class="flash alignCenter">
  <?php echo $this->Session->flash(); ?>
</div>
<!-- Page content -->
<div class="main-content">
  <div class="row">
    <!--Responsive table-->
    <div class="col-sm-12">
      <div class="widget widget-fullwidth widget-small">
        <div class="widget-head">
          <div class="row pdr20">
            <?php echo $this->Form->create('Template', array('class' => 'form-horizontal')); ?>
              <div class="form-group">
                <label for="inputCategoryName" class="col-sm-2 control-label">Tên mẫu: </label>
                <div class="col-sm-10">
                  <input name="data[Template][template_name]" placeholder="Tên danh mục " class="form-control" type="text" id="categoryName" required="required">
                </div>
              </div>
              <div class="form-group">
                <label for="inputDescription" class="col-sm-2 control-label">Nội dung mẫu: </label>
                <div class="col-sm-10">
                  <?php echo $this->Form->textarea('template_body',array('class'=>'ckeditor'));?>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">&nbsp;</div>
                <div class="col-sm-10 alignCenter mgt20 mgbt20">
                  <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page content-->