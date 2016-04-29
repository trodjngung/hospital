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
  <h2>Cập nhật bệnh nhân</h2>
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
    <li>
      <?php 
        echo $this->Html->link (
          ' Danh sách form/mẫu',
          array (
            'controller' => 'templates',
            'action' => 'view',
            $template['Template']['id']
          )
        );
      ?>
    </li>
    <li class="active">Cập nhật form/mẫu: <b><?php echo $template['Template']['template_name']; ?></b></li>
  </ol>
</div>
<!-- End Page Head-->
<!-- Page content -->
<div class="main-content">
  <div class="row">
    <!--Responsive table-->
    <div class="col-sm-12">
      <div class="widget widget-fullwidth widget-small">
        <div class="widget-head">
          <div class="row pdr20">
            <?php echo $this->Form->create('Template', array('type' => 'PUT', 'class' => 'form-horizontal')); ?>
              <div class="form-group">
                <label for="inputCategoryName" class="col-sm-2 control-label">Tên mẫu: </label>
                <div class="col-sm-10">
                  <input name="data[Template][template_name]" placeholder="Tên danh mục " class="form-control" type="text" id="categoryName" required="required" value="<?php echo $template['Template']['template_name'] ; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputDescription" class="col-sm-2 control-label">Nội dung mẫu: </label>
                <div class="col-sm-10">
                  <?php 
                    echo $this->Form->textarea (
                      'template_body',
                      array (
                        'class' => 'ckeditor',
                        'value' => $template['Template']['template_body']
                      )
                    );
                  ?>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">&nbsp;</div>
                <div class="col-sm-10 alignCenter mgt20 mgbt20">
                  <?php 
                    echo $this->Html->link (
                      'Hủy bỏ',
                      array (
                        'controller' => 'templates',
                        'action' => 'view',
                        $template['Template']['id']
                      ),
                      array (
                        'class' => 'btn btn-primary mgr10'
                      )
                    );
                  ?>
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
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